<script setup>
import { ref, onMounted } from 'vue';
import Tiptap from '../../components/Tiptap.vue'

const props = defineProps({
  notebooks: Array,
  notes: Array,
});

// You can access notebooks and notes using props.notebooks and props.notes

onMounted(() => {
  console.log('User\'s notebooks:', props.notebooks);
  console.log('User\'s notes:', props.notes);
});

const notebooks = ref([
    {
        id: 1,
        title: 'Notebook 1',
        notes: [
            { id: 11, title: 'Note 1', content: 'Content of Note 1' },
            { id: 12, title: 'Note 2', content: 'Content of Note 2' },
        ],
    },
    {
        id: 2,
        title: 'Notebook 2',
        notes: [
            { id: 21, title: 'Note 1', content: 'Content of Note 1' },
            { id: 22, title: 'Note 2', content: 'Content of Note 2' },
        ],
    },
]);

const selectedNotebook = ref(null);
const selectedNote = ref(null);

const selectNotebook = (notebook) => {
    selectedNotebook.value = notebook;
    selectedNote.value = null;
};

const selectNote = (note) => {
    selectedNote.value = note;
};
</script>

<template>
    <div class="notes-page">
        <div class="sidebar">
            <div class="notebooks">
                <div v-for="notebook in notebooks" :key="notebook.id" @click="selectNotebook(notebook)"
                    :class="{ active: selectedNotebook === notebook }">
                    {{ notebook.title }}
                </div>
            </div>
        </div>
        <div class="content">
            <div class="notes-tabs">
                <div v-for="note in selectedNotebook?.notes || []" :key="note.id" @click="selectNote(note)"
                    :class="{ active: selectedNote === note }">
                    {{ note.title }}
                </div>
            </div>
            <div class="note-content">
                <div v-if="selectedNote">
                    <h2>{{ selectedNote.title }}</h2>
                    <tiptap v-model="selectedNote.content" />
                </div>
                <div v-else>
                    <p>Select a note to display its content.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.notes-page {
    display: flex;
    height: 100vh;
}

.sidebar {
    width: 25%;
    padding: 20px;
    border-right: 1px solid #ccc;
}

.notebooks {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.notebooks div {
    cursor: pointer;
    padding: 5px;
    background-color: #f1f1f1;
}

.active {
    background-color: #ddd;
}

.content {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.notes-tabs {
    display: flex;
    gap: 10px;
}

.notes-tabs div {
    cursor: pointer;
    padding: 5px;
    background-color: #f1f1f1;
}

.note-content {
    margin-top: 20px;
}
</style>
  