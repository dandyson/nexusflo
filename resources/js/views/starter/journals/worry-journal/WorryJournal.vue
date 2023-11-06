<template>
    <div class="content">
        <SectionIntro 
          title="Worry Journal" 
          description="Fill out the below form to record your worries, 
          spot any thinking traps and to try to re-balance your thought 
          by challenging your beliefs about the situation." 
          :tutorial="tutorialData"
        ></SectionIntro>
        <div class="block-rounded block">
            <div class="block-header block-header-default">
                <router-link class="btn btn-success" to="worry-journal/create-entry">+ Create New Entry</router-link>
            </div>
            <div class="block-content">
                <!---->
                <table v-if="worryJournalEntries.length !== 0" class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">Date</th>
                            <th>Title</th>
                            <th
                                class="d-none d-sm-table-cell"
                                style="width: 15%"
                            >
                                Thinking Traps
                            </th>
                            <th class="text-center" style="width: 100px">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="worryJournalEntry in worryJournalEntries" :key="worryJournalEntry.id">
                          <td class="text-center" scope="row">{{ formatDate(worryJournalEntry.created_at) }}</td>
                            <td class="fw-semibold fs-sm">
                                <a href="javascript:void(0)">{{ worryJournalEntry.title }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <div class="d-flex flex-row overlapping-circles">
                                  <div v-for="trap in filteredThinkingTraps(JSON.parse(worryJournalEntry.thinking_traps))" :key="trap.id" class="position-relative">
                                    <div class="circular-frame">
                                        <img
                                            :src="trap.image"
                                            :alt="trap.title"
                                            class="img-thumbnail"
                                        />
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <!-- Pass the worryJournalEntry as a prop to the modal component -->
                                    <WorryJournalSummary :entry="worryJournalEntry" :selectedTraps="filteredThinkingTraps(JSON.parse(worryJournalEntry.thinking_traps))"></WorryJournalSummary>
                                    <router-link class="btn btn-sm btn-alt-secondary" :to="`worry-journal/edit/${worryJournalEntry.id}`">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </router-link>
                                    <button @click="deleteEntry(worryJournalEntry)" type="button" class="btn btn-sm btn-alt-secondary">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div v-else class="container mb-3 text-center">
                    <strong>No Worry Journal Entries</strong>
                </div>
            </div>
            <!---->
        </div>
    </div>
</template>
  

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import Swal from "sweetalert2";
import { toastMessage } from '../../../../components/toast.js';
import WorryJournalSummary from '../../../components/modals/WorryJournalSummary.vue';
import * as imagePaths from '../../../../assets/photos/tutorialImagePaths.js';
import SectionIntro from '../../../components/SectionIntro.vue';

// Tutorial Data
const tutorialData = ref([
    {
        id: 0,
        image: imagePaths.worryJournalStep1,
        description: 'Create a new Image by clicking the "Create New Entry" button',
    },
    {
        id: 1,
        image: imagePaths.worryJournalStep2,
        description: 'Fill out the "Step 1" section before continuing by clicking the "next" button',
    },
    {
        id: 2,
        image: imagePaths.worryJournalStep3,
        description: 'Choose "Thinking Traps" - common patterns of anxious thought that may apply to you. Select all that apply',
    },
    {
        id: 3,
        image: imagePaths.worryJournalStep4,
        description: 'Step 3 gives you the chance to balance your worry after reviewing it and the Thinking Traps involved',
    },
    {
        id: 4,
        image: imagePaths.worryJournalStep5,
        description: 'When you are done, hit the Submit button to save the entry',
    },
    {
        id: 5,
        image: imagePaths.worryJournalStep6,
        description: 'You will now see the entry stored!',
    },
    {
        id: 6,
        image: imagePaths.worryJournalStep7,
        description: 'From this table you can quick view, edit or delete entries',
    },
]);

const worryJournalEntries = ref([]);
const thinkingTraps = ref([]);

const formatDate = (dateString) => {
  const options = {
    year: 'numeric',
    month: '2-digit',
    day: '2-digit',
  };
  const date = new Date(dateString);
  const formattedDate = date.toLocaleString('en-UK', options);

  // Create the final formatted date string
  return `${formattedDate.replace(',', '')}`;
};

const deleteEntry = (worryJournalEntry) => {
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
        title: 'Delete Entry: Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete this!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(`/api/worry-journal/${worryJournalEntry.id}`)
            .then(() => {
              // Success message
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'Entry deleted.',
                'success'
              );

              // Remove deleted entry from the frontend
              const entryIndex = worryJournalEntries.value.findIndex(nb => nb.id === worryJournalEntry.id);
              worryJournalEntries.value.splice(entryIndex, 1);
            })
            .catch((error) => {
				toastMessage('error', 'There has been an error, please try again.');
			});
        }
      });
    });
};

const filteredThinkingTraps = (entry) => {
  return thinkingTraps.value.filter(trap => entry.includes(trap.id));
};

onMounted(async () => {
    // Worry Journal Entries
    try {
        const res = await axios.get('/api/worry-journal');
        worryJournalEntries.value = res.data;
    } catch (error) {
        console.error('Error fetching Worry Journal Entries:', error);
    }

    // Thinking Traps
    try {
        const res = await axios.get('/api/thinking-traps');
        thinkingTraps.value = res.data.thinkingTraps;
    } catch (error) {
        console.error('Error fetching thinkingTraps:', error);
    }
});
</script>

<style scoped>
.card {
    border: none; /* Remove the default card border */
    transition: 0.3s ease-in-out;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
}

.card:hover {
    cursor: pointer;
}

.border-selected {
    border: 5px solid green; /* Customize the border size and color as needed */
    border-radius: 10px;
    transition: 0.2s ease-in-out;
}

.overlay-container {
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 255, 0, 0.5); /* Green with 0.5 opacity */
  opacity: 0; /* Initially, hide the overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.3s ease-in-out;
}

.overlay-selected {
  opacity: 1; /* Show the overlay when the card is selected */
}

.overlay i {
  font-size: 24px; /* Adjust the size of the icon */
  color: white; /* Set the color of the icon */
}

.circular-frame {
  width: 50px; /* Adjust the width and height as needed */
  height: 50px;
  overflow: hidden;
  border-radius: 50%; /* Creates a circular shape */
  border: 2px solid #ccc; /* Add your desired border style */
}

.circular-frame img {
  width: 100%; /* Ensures the image covers the circular frame */
  height: 100%;
  border-radius: 50%;
  object-fit: cover; /* Keeps the image aspect ratio and covers the frame */
}
.overlapping-circles .position-relative:not(:first-child) {
    margin-left: -20px; /* Adjust the margin to control the amount of overlap */
}


</style>