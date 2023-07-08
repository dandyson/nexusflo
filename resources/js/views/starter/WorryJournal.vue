<template>
    <div class="content row">
        <input type="hidden" name="thinking_traps" :value="JSON.stringify(worryJournalEntry.thinking_traps)">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create a new journal entry</h4>
                    <p>Fill out the below form to record your worries, spot any thinking traps and to try to re-balance your
                        thought by challenging your beliefs about the situation.</p>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</template>

<script>
import axios from "axios";
import { FormWizard, TabContent } from 'vue-step-wizard';
import 'vue-step-wizard/dist/vue-step-wizard.css';
import Swal from 'sweetalert2';

export default {
    name: 'WorryJournal',
    components: {
        FormWizard,
        TabContent,
    },
    data() {
        return {
            worryJournalEntry: {
                main_worry: '',
                balanced_thought: '',
                thinking_traps: [],
            },

            thinkingTrapData: [],
            clicked: false,
        }
    },

    mounted() {
        // Get thinking traps data
        axios.get('/api/worry-journal/thinking-traps')
            .then((res) => {
                this.thinkingTrapData = res.data.thinkingTraps;
            })
            .catch(error => console.error(error));
    },

    methods: {
        trapSelected(trap) {
            // TODO: Class binding does not seem to work with trap.selected, as I think its not original data, so doing it the JQuery way
            trap.selected = !trap.selected;
            let className = `trap-card-${trap.id}`;
            document.getElementById(className).classList.toggle('trapSelected');
            // Add trap to the selectedTrap array
            this.worryJournalEntry.thinking_traps.push(trap);
        },

        submit() {
            axios.post('#', this.worryJournalEntry)
                .then((res) => {
                    if (res.data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Worry Entry saved successfully!',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.href = '#';
                            }
                        })
                    }
                })
        }
    }
}
</script>

<style scoped>
.card-select {
    transition: all .1s ease-in-out;
}

.card-select:hover {
    cursor: pointer;
    transform: scale(1.05);
}

.trapSelected {
    border: 5px solid green;
    border-radius: 10px;
}

.trapSelected .card-title,
.trapSelected .card-text {
    color: white;
}

.trapSelected .card-body {
    background: #34C38F;
}

/* Vue Step Wizard style overrides */
.vue-step-wizard {
    width: 100%;
}
</style>
