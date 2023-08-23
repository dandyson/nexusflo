// src/services/api.js
import axios from 'axios';

async function fetchNotebooksFromAPI() {
  try {
    const response = await axios.get('/api/notebooks');
    return response.data;
  } catch (error) {
    console.error('Error fetching notebooks:', error);
    return [];
  }
}

async function fetchNotesFromAPI() {
  try {
    const response = await axios.get('/api/notes');
    return response.data;
  } catch (error) {
    console.error('Error fetching notes:', error);
    return [];
  }
}

export { fetchNotebooksFromAPI, fetchNotesFromAPI };
