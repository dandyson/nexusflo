<template>
<div class="row">
    <input type="hidden" name="thinking_traps" :value="JSON.stringify(worryJournalEntry.thinking_traps)">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Create a new journal entry</h4>
                <p>Fill out the below form to record your worries, spot any thinking traps and to try to re-balance your thought by challenging your beliefs about the situation.</p>
                <form-wizard @onComplete="submit">
                    <tab-content title="Your Worries" :selected="true">
                    <!-- Part 1 -->
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="worry">What's on your mind?</label><br>
                                            <small>Describe the situation and why you are worried about it - be as specific as you can.</small><br>
                                            <small>E.G I have a new task at work that I'm not sure that I can handle. I know for certain that I will fail, by colleagues will hate me and I will be fired.</small>
                                            <textarea name="main_worry" v-model="worryJournalEntry.main_worry" id="worry" class="form-control mt-3" rows="6" placeholder="Write something here"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </tab-content>
                    <tab-content title="Thought Traps"> 
                        <section>
                            <form>
                                <div class="row">
                                    <p class="mb-5"><strong>Select all that apply:</strong></p><br>
                                    <div class="d-flex flex-wrap justify-content-evenly">
                                        <div v-for="trap in thinkingTrapData" :key="trap.id" class="col-md-6 col-xl-3 mx-1 thinking-trap-container" @click="trapSelected(trap)">
                                            <div class="card card-select" :id="`trap-card-${trap.id}`">
                                                <img class="card-img-top img-fluid" :src="trap.image" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ trap.title }}</h4>
                                                    <p class="card-text">{{ trap.description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </tab-content>
                    <tab-content title="Reframe Your Thought">
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="worry-balance">Balance your thought</label>
                                            <textarea name="balanced_thought" v-model="worryJournalEntry.balanced_thought" id="worry-balance" class="form-control" rows="6" placeholder="Write something here"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </tab-content>  
                </form-wizard>
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
import {FormWizard, TabContent} from 'vue-step-wizard';
import 'vue-step-wizard/dist/vue-step-wizard.css';
import Swal from 'sweetalert2';

export default {
    name: 'WorryJournal',
    props: {
        existingThinkingTraps: Array,
        routes: Object,
    },
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
            
            thinkingTrapData: this.existingThinkingTraps,
            clicked: false,
        }
    },

    mounted() {
        this.thinkingTrapData.map(item => {
            item['selected'] = false;
        });
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
            axios.post(this.routes.addEntry, this.worryJournalEntry)
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
                                window.location.href = this.routes.worryJournalIndex;
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

.trapSelected .card-title, .trapSelected .card-text {
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
