<template>
    <div class="content">
        <SectionIntro title="General Notes"
            description="Use this as your go-to tool for capturing and organizing the daily aspects of your life. It will help you to stay organized and boost productivity as you manage your notes with ease."
            :tutorial="tutorialData"></SectionIntro>
    </div>
    <div class="content container pt-1">
        <button type="button" class="btn btn-success mb-5" @click="addNotebook">+ Add Notebook</button>
        <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <div class="list-group">
                    <button v-for="notebook in notebooks" :key="notebook.id" type="button"
						class="list-group-item list-group-item-action" @click="selectNotebook(notebook)"
						:class="{ active: selectedNotebook === notebook }">
						{{ notebook.title.replace(/<\/ ? h2 > /g, '') }}
                        <i class="far fa-trash-can delete-notebook-icon position-absolute top-0 bottom-0 right-1 align-self-center rounded-circle"
                            :class="{ 'text-white': selectedNotebook === notebook }"
                            @click="deleteNotebook(notebook)">
                        </i>
					</button>
                </div>
            </div>

            <div class="col-12 col-md-9">
                <div v-if="selectedNotebook">
                    <div class="block-bordered block">
                        <div class="input-group">
                            <input v-model="selectedNotebook.title" class="form-control"
                                @blur="saveNotebook(selectedNotebook)" />
                            <button type="button" class="btn btn-sm btn-success"
                                @click="saveNotebook(selectedNotebook, true)">
                                <i class="far fa-2x fa-circle-check"></i>
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
                                    <input type="text" v-model="selectedNote.title" class="form-control note-title"
                                        @blur="checkEmptyAndSaveNote(selectedNote)">
                                </div>
                                <button v-if="selectedNotebook" type="button" class="btn btn-success mb-3 me-2"
                                    @click="saveNote(selectedNote, true)">Save Note</button>
                                <button v-if="selectedNotebook" type="button" class="btn btn-danger mb-3"
                                    @click="deleteNote(selectedNote)">Delete Note</button>
                                <TiptapStyled v-model="selectedNote.content"  @blur="checkEmptyAndSaveNote(selectedNote)" />
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
import SectionIntro from '../../components/SectionIntro.vue';
import * as imagePaths from '../../../assets/photos/tutorialImagePaths.js';

const tutorialData = ref([
    {
        id: 0,
        image: imagePaths.generalNotesStep1,
        description: "Create a new notebook by clicking the 'Add Notebook' button",
    },
    {
        id: 1,
        image: imagePaths.generalNotesStep2,
        description: "You can change the title of your new notebook here. Click the tick button to save, or the X button to delete",
    },
    {
        id: 2,
        image: imagePaths.generalNotesStep3,
        description: "You will see all new notebooks in this left hand side. To create a new note, click the 'Add Note' button",
    },
    {
        id: 3,
        image: imagePaths.generalNotesStep4,
        description: "Welcome to your new note! You can enter a title and add your content. When you are done, click 'Save Note'. If you want to delete it, click 'Delete Note'",
    },
    {
        id: 4,
        image: imagePaths.generalNotesStep5,
        description: "You can add as many notebooks and notes as you like - don't forget to save your notes when you are done!",
    },
]);

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

const saveNotebook = (notebook, showConfirmation) => {
    axios.get('sanctum/csrf-cookie')
        .then((res) => {
            axios.put(`/api/notebooks/${notebook.id}`, {
                title: notebook.title,
            })
                .then((res) => {
					if (showConfirmation) toastMessage('success', 'Saved Notebook Title Successfully');
                }).catch((error) => {
                    toastMessage('error', 'There has been an error, please try again.');
                });
        });
};


const deleteNotebook = (notebook) => {
    selectedNotebook.value = notebook
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
                            selectedNote.value = null;

                            const notebookIndex = notebooks.value.findIndex(nb => nb.id === notebook.id);
                            if (notebookIndex > -1) {
                                notebooks.value.splice(notebookIndex, 1);

                                if (notebooks.value.length > 0) {
                                    const prevNotebookIndex = notebookIndex > 0 ? notebookIndex - 1 : 0;
                                    selectedNotebook.value = notebooks.value[prevNotebookIndex];
                                } else {
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

const saveNote = (note, showConfirmation) => {
    axios.get('sanctum/csrf-cookie')
        .then((res) => {
            axios.put(`/api/notes/${note.id}`, {
                note: note,
            })
                .then((res) => {
                    if (showConfirmation) toastMessage('success', 'Saved Note Successfully');
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
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your note has been deleted.',
                                'success'
                            );
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

const checkEmptyAndSaveNote = (note) => {
    if (note.title === "") {
        note.title = "New Note";
    }

    saveNote(note);
}

onMounted(async () => {
    fetchNotebooks(true);
});
</script>

<style scoped>
.note-title {
    width: 100%;
    height: 2rem;
    font-size: 1.4rem;
    padding: 1.1rem 0.5rem;
    margin: 1rem 0;
}

.delete-notebook-icon {
    color: #DC2626;
    right: 1rem;
    padding: 0.5rem 0.6rem; /* Adjust padding to control the circle size */
    font-size: 1.2rem; /* Adjust the font size as needed */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
}

/* Hover effect */
.delete-notebook-icon:hover {
    background-color: #DC2626;
    color: white;
}

</style>