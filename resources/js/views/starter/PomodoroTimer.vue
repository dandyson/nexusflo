<template>
    <div class="content">
        <SectionIntro title="Pomodoro Timer"
            description="Use this timer to maximise your activity and keep your goals on track."
            :tutorial="tutorialData"></SectionIntro>
    </div>
    <div class="content row d-flex justify-content-center">
        <div class="col-8">
            <a class="main-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
            <div class="main-content-body main-content-body-contacts card custom-card mb-4">
                <div class="bg-success" :class="[pomodoroTimer.fillerDisplay]"
                    :style="`width: ${pomodoroTimer.fillerWidth}%`"></div>
                <div id="pomodoro-app">
                    <div id="container">
                        <div id="timer">
                            <div id="time" class="d-flex justify-content-center align-items-center mb-4"
                                :class="pomodoroTimer.background" :style="pomodoroTimer.shadow"
                                aria-hidden="true"
                            >
                                <span id="minutes">{{ pomodoroTimer.minutes }}</span>:
                                <span id="seconds">{{ pomodoroTimer.seconds }}</span>
                            </div>

                            <div id="timer-status" class="visually-hidden" role="status" aria-live="polite" aria-atomic="true">
                                {{ timerStatus }}
                            </div>

                            <div class="d-flex justify-content-center my-3">
                                <div class="">
                                    <button class="btn btn-danger btn-block pomodoro-button" id="stop"
                                        @click="timerButtonSound(); start()"
                                        @keydown.enter="timerButtonSound(); start()"
                                        :aria-label="pomodoroTimer.started ? 'Pause pomodoro timer' : 'Start pomodoro timer'">
                                        <i class="typcn" :class="pomodoroTimer.started ? 'typcn-media-pause' : 'typcn-media-play'" aria-hidden="true"></i>
                                        {{ pomodoroTimer.startText }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="buttons"
                            class="d-flex flex-column flex-lg-row align-items-center justify-content-evenly my-5 mx-4"
                            role="group"
                            aria-label="Timer mode selection">
                            <div class="bg-danger text-center w-100">
                                <button class="btn btn-block pomodoro-button pomo-category" id="work"
                                    @click="timerButtonSound(); work()"
                                    @keydown.enter="timerButtonSound(); work()"
                                    aria-label="Switch to work mode - 25 minutes">
                                    Work
                                </button>
                            </div>
                            <div class="bg-info text-center w-100">
                                <button class="btn btn-block pomodoro-button pomo-category" id="shortBreak"
                                    @click="timerButtonSound(); shortBreak()"
                                    @keydown.enter="timerButtonSound(); shortBreak()"
                                    aria-label="Switch to short break mode - 5 minutes">
                                    Short Break
                                </button>
                            </div>
                            <div class="bg-info text-center w-100">
                                <button class="btn btn-block pomodoro-button pomo-category" id="longBreak"
                                    @click="timerButtonSound(); longBreak()"
                                    @keydown.enter="timerButtonSound(); longBreak()"
                                    aria-label="Switch to long break mode - 15 minutes">
                                    Long Break
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, reactive, watch, onMounted, onUnmounted } from 'vue';
import SectionIntro from '../components/SectionIntro.vue';
import * as imagePaths from '../../assets/photos/tutorialImagePaths.js';

const tutorialData = ref([
    {
        id: 0,
        image: imagePaths.pomodoroStep1,
        description: "Choose a task to work on, and the click the 'start' button when ready to begin the timer",
    },
    {
        id: 1,
        image: imagePaths.pomodoroStep2,
        description: "Work on only that task for the next 25 minutes",
    },
    {
        id: 2,
        image: imagePaths.pomodoroStep3,
        description: "When the timer is up, this will be one completed 'pomodoro' - click start again to activate the short break. Take a 5 minute break before hitting start again to start another 25 minutes",
    },
    {
        id: 3,
        image: imagePaths.pomodoroStep4,
        description: "Repeat this until the task is done. After four completed pomodoros, there will be a long break of 15 minutes. Re-assess your task, and then start the timer again as needed!",
    },
]);

const pomodoroTimer = reactive({
    // Timer variables
    state: 'work',
    started: false,
    countdown: '',
    startText: 'Start',
    pomodoroCount: 0,
    minutes: 25,
    seconds: '00',
    // Filler
    fillerWidth: 0,
    fillerIncrement: 0,
    fillerDisplay: 'Hello',
    fillerWidth: 'Width',
    // Styling
    background: 'bg-danger',
    shadow: 'box-shadow: 0 0 0 12px #e7829a',
    singleDigit: false,
    switchConfirmed: false,
});

// Add focus management
const focusableElements = ref(null);
const currentFocusIndex = ref(0);

onMounted(() => {
    focusableElements.value = document.querySelectorAll(
        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );

    document.addEventListener('keydown', handleKeyboardNavigation);
});

onUnmounted(() => {
    document.removeEventListener('keydown', handleKeyboardNavigation);
});

const handleKeyboardNavigation = (e) => {
    if (e.key === 'Tab') {
        e.preventDefault();
        if (e.shiftKey) {
            currentFocusIndex.value = currentFocusIndex.value === 0
                ? focusableElements.value.length - 1
                : currentFocusIndex.value - 1;
        } else {
            currentFocusIndex.value = currentFocusIndex.value === focusableElements.value.length - 1
                ? 0
                : currentFocusIndex.value + 1;
        }
        focusableElements.value[currentFocusIndex.value].focus();
    }
};

// Add timer status ref
const timerStatus = ref('Pomodoro timer ready - Work mode, 25 minutes');

const start = () => {
    pomodoroTimer.started = !pomodoroTimer.started;
    timerStatus.value = pomodoroTimer.started
        ? `${pomodoroTimer.state} session started`
        : `${pomodoroTimer.state} session paused`;

    if (pomodoroTimer.started) {
        loop();
    } else {
        clearInterval(pomodoroTimer.countdown);
    }
};

const work = () => {
    pomodoroTimer.state = 'work';
    timerStatus.value = 'Switched to work mode - 25 minutes';
    resetTimer(25);
};

const shortBreak = () => {
    pomodoroTimer.state = 'shortBreak';
    timerStatus.value = 'Switched to short break mode - 5 minutes';
    resetTimer(5);
};

const longBreak = () => {
    pomodoroTimer.state = 'longBreak';
    timerStatus.value = 'Switched to long break mode - 15 minutes';
    resetTimer(15);
};

const loop = () => {
    pomodoroTimer.countdown = setInterval(() => {
        pomodoroTimer.seconds--;

        // When complete, set all to 0 and clear interval
        if (pomodoroTimer.seconds < 0 && pomodoroTimer.minutes === '00') {
            clearInterval(pomodoroTimer.countdown);
            timerComplete();
        }
    }, 1000);
};

const resetTimer = (mins) => {
    if (pomodoroTimer.started) {
        pomodoroTimer.switchConfirmed = confirm('Are you sure you want to reset the timer?');
        if (pomodoroTimer.switchConfirmed) {
            pomodoroTimer.started = false;
            resetVariables(mins, 0, false);
        } else {
            return;
        }
    } else {
        pomodoroTimer.started = false;
        resetVariables(mins, 0, false);
    }
};


const timerButtonSound = () => {
    var audio = new Audio('http://orteil.dashnet.org/cookieclicker/snd/press.mp3');
    audio.play();
};

const doneSound = () => {
    var audio = new Audio('http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/CHIME2.WAV');
    audio.play();
};

const resetVariables = (mins, secs, started) => {
    pomodoroTimer.minutes = mins;
    pomodoroTimer.seconds = secs;
    pomodoroTimer.started = started;
    pomodoroTimer.fillerIncrement = 100 / (pomodoroTimer.minutes * 60);
    pomodoroTimer.fillerWidth = 0;
};

const pauseTimer = () => {
    pomodoroTimer.started = !pomodoroTimer.started;
};

const timerComplete = () => {
    pomodoroTimer.started = false;
    pomodoroTimer.fillerWidth = 0;
    pomodoroTimer.pomodoroCount++;
    doneSound();

    const nextMode = pomodoroTimer.state === 'work'
        ? (pomodoroTimer.pomodoroCount === 4 ? 'long break' : 'short break')
        : 'work';

    timerStatus.value = `${pomodoroTimer.state} session complete. Starting ${nextMode} session.`;

    if (pomodoroTimer.state === 'work') {
        if (pomodoroTimer.pomodoroCount === 4) {
            longBreak();
            pomodoroTimer.pomodoroCount = 0;
        } else {
            shortBreak();
        }
    } else if (pomodoroTimer.state === 'shortBreak' || pomodoroTimer.state === 'longBreak') {
        work();
    }

    document.getElementById('stop').focus();
};

watch(pomodoroTimer, (val) => {
    // PAUSE TIMER
    if (val.started === false) {
        // Pause/Stop the timer
        clearInterval(pomodoroTimer.countdown);
        // Change the start button text
        val.startText = 'Start';
    } else if (val.started) {
        val.startText = 'Pause';
    }

    // COLOURS FOR EACH STATE
    if (val.state === 'work') {
        val.background = 'bg-danger';
        val.shadow = 'box-shadow: 0 0 0 12px #e7829a';
    } else if (val.state === 'shortBreak' || val.state === 'longBreak') {
        val.background = 'bg-info';
        val.shadow = 'box-shadow: 0 0 0 12px #80bff7';
    }

    if (val.seconds < 10 && val.seconds >= 0) {
        val.seconds = '0' + parseInt(val.seconds, 10);
    }

    if (val.seconds < 0) {
        val.seconds = 59;
        val.minutes--;
    }

    if (val.minutes < 10 && val.minutes >= 0) {
        val.minutes = '0' + parseInt(val.minutes, 10);
    }

    // Remove all the announcement creation code
    // The timerStatus ref will handle all announcements now
}, { deep: true });
</script>

<style scoped>
#filler {
    height: 100%;
    border-radius: 7px 0 0 7px;
    position: absolute;
}

#timer {
    position: relative;
}

#stop,
.pomodoro-button {
    color: #fff;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    font-size: 17.5px;
    font-weight: bold;
    transition: color 0.5s ease-in-out 0s;
}

.pomodoro-button {
    height: 45px;
}

.button-box-shadow {
    box-shadow: rgb(235 235 235) 0px 6px 0px;
}

/* Add focus styles */
button:focus,
[tabindex]:focus {
    outline: 3px solid #dc3545;  /* Using danger color for work mode */
    outline-offset: 2px;
}

/* Add focus style for break modes */
.bg-info button:focus {
    outline-color: #0dcaf0;
}

.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}
</style>
