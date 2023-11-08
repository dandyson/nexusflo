<template>
	<div class="container mt-4">
		<button type="button" class="btn btn-success my-2" @click="addNotebook">+ Add Notebook</button>
		<div class="d-flex flex-column flex-md-row justify-content-between">
			<div class="col-12 col-md-2 mb-4 mb-md-0">
				<div class="list-group">
					<button v-for="notebook in notebooks" :key="notebook.id" type="button"
						class="list-group-item list-group-item-action" @click="selectNotebook(notebook)"
						:class="{ active: selectedNotebook === notebook }">
						{{ notebook.title.replace(/<\/ ? h2 > /g, '') }}
					</button>
				</div>
			</div>

			<div class="col-12 col-md-9">
				<div v-if="selectedNotebook">
					<div class="block-bordered block">
						<div class="input-group">
							<input v-model="selectedNotebook.title" class="form-control" @blur="saveNotebook(selectedNotebook)" />
							<button type="button" class="btn btn-sm btn-success" @click="saveNotebook(selectedNotebook)">
								<i class="far fa-2x fa-circle-check"></i>
							</button>
							<button type="button" class="btn btn-sm btn-danger" @click="deleteNotebook(selectedNotebook)">
								<i class="far fa-2x fa-circle-xmark"></i>
							</button>
						</div>
					</div>
					<div class="block-bordered block">
						<div class="block-content">
							<button v-if="selectedNotebook" type="button" class="btn btn-success my-3"
								@click="addNote(selectedNotebook)">+ Add Note</button>
							<div class="d-flex flex-column flex-md-row">
								<div v-for="note in selectedNotebook?.notes || []" :key="note.id" class="border">
									<button type="button" class="btn btn-link" @click="selectNote(note)"
										:class="{ active: selectedNote === note }">
										{{ note.title.replace(/<\/ ? h2 > /g, '') }}
									</button>
								</div>
							</div>
							<div v-if="selectedNote" class="mt-3">
								<div class="mb-2">
									<input type="text" v-model="selectedNote.title" class="form-control note-title" @blur="checkEmpty">
								</div>
								<button v-if="selectedNotebook" type="button" class="btn btn-success mb-3 me-2"
									@click="saveNote(selectedNote)">Save Note</button>
								<button v-if="selectedNotebook" type="button" class="btn btn-danger mb-3"
									@click="deleteNote(selectedNote)">Delete Note</button>
								<TiptapStyled v-model="selectedNote.content" />
							</div>
							<div v-else class="mt-3">
								<p class="text-muted">Select a note to display its content.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue';
import TiptapStyled from '../../components/TiptapStyled.vue';
import axios from "axios";
import Swal from "sweetalert2";
import { toastMessage } from '../../../components/toast.js';

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
	console.log(selectedNote.value.title);
};

const addNotebook = () => {
	selectedNotebook.value = null;
	selectedNote.value = null;
	axios.get("sanctum/csrf-cookie").then((res) => {
		axios
			.post("/api/notebooks")
			.then((res) => {
				const newNotebook = res.data;
				// Add a property of 'notes' to the new notebook
				newNotebook.notes = [];
				notebooks.value.push(newNotebook);
				selectedNotebook.value = newNotebook;
			}).catch((error) => {
				toastMessage('error', 'There has been an error, please try again.');
			});
	});
};

const addNote = (notebook) => {
	selectedNote.value = null;
	axios.get('sanctum/csrf-cookie')
		.then((res) => {
			axios.post('/api/notes', {
				id: notebook.id
			})
				.then((res) => {
					const newNote = res.data;
					notebook.notes.push(newNote);
					selectedNote.value = newNote;
				}).catch((error) => {
					toastMessage('error', 'There has been an error, please try again.');
				});
		});
};

const saveNotebook = (notebook) => {
	axios.get('sanctum/csrf-cookie')
		.then((res) => {
			axios.put(`/api/notebooks/${notebook.id}`, {
				title: notebook.title,
			})
				.then((res) => {
					toastMessage('success', 'Saved Notebook Title Successfully');
				}).catch((error) => {
					toastMessage('error', 'There has been an error, please try again.');
				});
		});
};

const deleteNotebook = (notebook) => {
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
				text: "Deleting this notebook will also delete all its Notes.",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, delete this!',
				cancelButtonText: 'No, cancel!',
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					axios.delete(`/api/notebooks/${notebook.id}`)
						.then(() => {
							// Success message
							swalWithBootstrapButtons.fire(
								'Deleted!',
								'Your notebook and all relevant notes have been deleted.',
								'success'
							);

							//   Set selected note to null
							selectedNote.value = null;

							// Remove deleted notebook from the frontend
							const notebookIndex = notebooks.value.findIndex(nb => nb.id === notebook.id);
							if (notebookIndex > -1) {
								notebooks.value.splice(notebookIndex, 1);

								// Check if there are remaining notebooks
								if (notebooks.value.length > 0) {
									// Set selectedNotebook to the previous notebook
									const prevNotebookIndex = notebookIndex > 0 ? notebookIndex - 1 : 0;
									selectedNotebook.value = notebooks.value[prevNotebookIndex];
								} else {
									// No remaining notebooks, set selectedNotebook to null
									selectedNotebook.value = null;
								}
							}
						})
						.catch((error) => {
							toastMessage('error', 'There has been an error, please try again.');
						});
				}
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
					toastMessage('success', 'Saved Note Successfully');
				}).catch((error) => {
					toastMessage('error', 'There has been an error, please try again.');
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
						.catch((error) => {
							toastMessage('error', 'There has been an error, please try again.');
						});
				}
			});
		});
};

const checkEmpty = () => {
	if (selectedNote.value.title === "") {
		selectedNote.value.title = "New Note";
	}
}

onMounted(async () => {
	fetchNotebooks(true);
});
</script>

<style>
.note-title {
	width: 100%;
	height: 2rem;
	font-size: 1.4rem;
	padding: 1.1rem 0.5rem;
	margin: 1rem 0;
}
</style>