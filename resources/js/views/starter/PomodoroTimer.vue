<!-- TODO: This code is not very clean at all - needs cleaning up -->
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
                                :class="pomodoroTimer.background" :style="pomodoroTimer.shadow">
                                <span id="minutes">{{ pomodoroTimer.minutes }}</span>:
                                <span id="seconds">{{ pomodoroTimer.seconds }}</span>
                            </div>

                            <div class="d-flex justify-content-center my-3">
                                <div class="">
                                    <button class="btn btn-danger btn-block pomodoro-button" id="stop"
                                        @click="timerButtonSound(); start()">
                                        <i class="typcn typcn-media-play"></i>{{ pomodoroTimer.startText }}<i
                                            class="typcn typcn-media-pause"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="buttons"
                            class="d-flex flex-column flex-lg-row align-items-center justify-content-evenly my-5 mx-4">
                            <div class="bg-danger text-center w-100">
                                <button class="btn btn-block pomodoro-button pomo-category" id="work"
                                    @click="timerButtonSound(); work()">
                                    Work
                                </button>
                            </div>
                            <div class="bg-info text-center w-100">
                                <button class="btn btn-block pomodoro-button pomo-category" id="shortBreak"
                                    @click="timerButtonSound(); shortBreak()">
                                    Short Break
                                </button>
                            </div>
                            <div class="bg-info text-center w-100">
                                <button class="btn btn-block pomodoro-button pomo-category" id="longBreak"
                                    @click="timerButtonSound(); longBreak()">
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
import { ref, reactive, watch } from 'vue';
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


const start = () => {
    pomodoroTimer.started = !pomodoroTimer.started;

    if (pomodoroTimer.started) {
        loop();
    } else {
        clearInterval(pomodoroTimer.countdown);
    }
};

const work = () => {
    pomodoroTimer.state = 'work';
    resetTimer(25);
};

const shortBreak = () => {
    pomodoroTimer.state = 'shortBreak';
    resetTimer(5);
};

const longBreak = () => {
    pomodoroTimer.state = 'longBreak';
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
});
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
</style>
