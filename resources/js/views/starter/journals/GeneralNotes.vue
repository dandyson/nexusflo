<script setup>
import { ref, onMounted } from 'vue';
import TiptapStyled from '../../components/TiptapStyled.vue';
import TiptapTitle from '../../components/TiptapTitle.vue';
import axios from "axios";
import Swal from "sweetalert2";

const selectedNotebook = ref(null);
const selectedNote = ref(null);
const notebooks = ref([]);

const fetchNotebooks = async (load) => {
	try {
    const notebookResponse = await axios.get('/api/notebooks');
    notebooks.value = notebookResponse.data;
		// On first load, set selected notebook to be first one if there are any
		if (load && notebooks.value) {
			selectedNotebook.value = notebooks.value[0];
		}
  } catch (error) {
    console.error('Error fetching data:', error);
  }
}

const selectNotebook = (notebook) => {
  selectedNotebook.value = notebook;
  selectedNote.value = null;
};

const selectNote = (note) => {
  selectedNote.value = note;
};

const addNotebook = () => {
  
};

const addNote = (notebook) => {
	axios.get('sanctum/csrf-cookie')
    .then((res) => {
			axios.post('/api/notes', { 
				id: notebook.id
			})
				.then((res) => {
					const newNote = res.data;
					notebook.notes.push(newNote);
					selectedNote.value = newNote;
				});
		});
};

const saveNote = (note) => {
	axios.get('sanctum/csrf-cookie')
    .then((res) => {
			axios.put(`/api/notes/${note.id}`, { 
				note: note,
			})
				.then((res) => {
					
				});
		});
};

const deleteNote = (note) => {
	axios.get('sanctum/csrf-cookie')
		.then(() => {
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger me-2'
				},
				buttonsStyling: false
			});

			swalWithBootstrapButtons.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!',
				cancelButtonText: 'No, cancel!',
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					axios.delete(`/api/notes/${note.id}`)
						.then(() => {
							// Success message
							swalWithBootstrapButtons.fire(
								'Deleted!',
								'Your note has been deleted.',
								'success'
							);
							// Remove deleted note from the frontend
							const notebookIndex = notebooks.value.findIndex(nb => nb.id === selectedNotebook.value.id);
							if (notebookIndex > -1) {
								const noteIndex = notebooks.value[notebookIndex].notes.findIndex(n => n.id === note.id);
								if (noteIndex > -1) {
									notebooks.value[notebookIndex].notes.splice(noteIndex, 1);
									if (selectedNote.value && selectedNote.value.id === note.id) {
										selectedNote.value = null;
									}
								}
							}
						})
						.catch((err) => console.log(err));
				}
			});
		});
};


onMounted(async () => {
  fetchNotebooks(true);
});
</script>

<template>
    <div class="container mt-4">
    	<button type="button" class="btn btn-success my-2" @click="addNotebook">+ Add Notebook</button>
      <div class="row">
        <div class="col-md-4">
          <div class="list-group">
            <button
              v-for="notebook in notebooks"
              :key="notebook.id"
              type="button"
              class="list-group-item list-group-item-action"
              @click="selectNotebook(notebook)"
              :class="{ active: selectedNotebook === notebook }"
            >
              {{ notebook.title }}
            </button>
          </div>
        </div>
        
        <div class="col-md-8">
          <button v-if="selectedNotebook" type="button" class="btn btn-success my-3" @click="addNote(selectedNotebook)">+ Add Note</button>
          <div class="d-flex">
            <div v-for="note in selectedNotebook?.notes || []" :key="note.id" class="border">
              <button
                type="button"
                class="btn btn-link"
                @click="selectNote(note)"
                :class="{ active: selectedNote === note }"
              >
								{{ note.title.replace(/<\/?h1>/g, '') }}
              </button>
            </div>
          </div>
          <div v-if="selectedNote" class="mt-3">
						<div>
							<TiptapTitle v-model="selectedNote.title" />
						</div>
            <TiptapStyled v-model="selectedNote.content" />
						<button v-if="selectedNotebook" type="button" class="btn btn-success mb-3 me-2" @click="saveNote(selectedNote)">Save Note</button>
						<button v-if="selectedNotebook" type="button" class="btn btn-danger mb-3" @click="deleteNote(selectedNote)">Delete Note</button>
          </div>
          <div v-else class="mt-3">
            <p class="text-muted">Select a note to display its content.</p>
          </div>
        </div>
      </div>
    </div>
  </template>