<!-- TODO: This code is not very clean at all - needs cleaning up -->
<template>
    <div class="content">
        <SectionIntro title="Meditation Timer" description="Use this timer to track your meditation sessions."
            :tutorial="tutorialData"></SectionIntro>
    </div>
    <div class="content row d-flex justify-content-center">
        <div class="col-12 col-lg-8">
            <div>
                <div>
                    <a class="main-header-arrow">
                        <i class="icon ion-md-arrow-back"></i>
                    </a>
                    <div class="main-content-body main-content-body-contacts card custom-card mb-4">
                        <div class="bg-success" :class="[meditationTimer.fillerDisplay]"
                            :style="`width: ${meditationTimer.fillerWidth}%`"></div>
                        <div id="pomodoro-app">
                            <div id="container">
                                <div id="timer">
                                    <div id="time" class="d-flex justify-content-center align-items-center mb-4"
                                        :class="meditationTimer.background" :style="meditationTimer.shadow">
                                        <span id="minutes">{{ meditationTimer.minutes }}</span>:
                                        <span id="seconds">{{ meditationTimer.seconds }}</span>
                                    </div>

                                    <!-- Minutes increment/decrement -->
                                    <div id="buttons" class="d-flex justify-content-center my-2">
                                        <button class="btn btn-warning br-50 mx-2" @click="decrease">
                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                        <button class="btn btn-warning br-50 mx-2" @click="increase">
                                            <i class="fa fa-chevron-up"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-center my-3">
                                        <div class="">
                                            <button class="btn btn-warning btn-block pomodoro-button" id="stop"
                                                @click="timerButtonSound(); start()">
                                                <i class="typcn typcn-media-play"></i>{{ meditationTimer.startText }}
                                                <i class="typcn typcn-media-pause"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div id="buttons" class="d-flex justify-content-evenly my-5">
                                    <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-warning text-center">
                                        <button class="btn btn-block pomodoro-button pomo-category w-100" id="work"
                                            @click="reset()">
                                            Reset
                                        </button>
                                    </div>
                                </div>
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
        image: imagePaths.meditationStep1,
        description: "Use the up and down arrows to change the time on the timer",
    },
    {
        id: 1,
        image: imagePaths.meditationStep2,
        description: "When you are ready, click 'Start' to begin your session",
    },
    {
        id: 2,
        image: imagePaths.meditationStep3,
        description: "You can reset the timer at any timer by clicking the 'reset' button",
    },
]);

const meditationTimer = reactive({
    started: false,
    countdown: '',
    startText: 'Start',
    minutes: 25,
    seconds: '00',
    fillerWidth: 0,
    fillerIncrement: 0,
    fillerDisplay: 'Hello',
    background: 'bg-warning',
    shadow: 'box-shadow: 0 0 0 12px #f9f900',
    singleDigit: false,
});

watch(meditationTimer, (val) => {
    if (!val.started) {
        clearInterval(val.countdown);
        val.startText = 'Start';
    } else {
        val.startText = 'Pause';
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

const timerButtonSound = () => {
    var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/SBELL1.WAV");
    audio.play();
}

const doneSound = () => {
    var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/SBELL1.WAV");
    audio.play();
}

const resetVariables = (mins, secs, started) => {
    meditationTimer.minutes = mins;
    meditationTimer.seconds = secs;
    meditationTimer.started = started;
    meditationTimer.fillerIncrement = 100 / (meditationTimer.minutes * 60);
    meditationTimer.fillerWidth = 0;
}

const start = () => {
    meditationTimer.started = !meditationTimer.started;

    if (meditationTimer.started) {
        loop();
    } else {
        clearInterval(meditationTimer.countdown);
    }
}

const reset = () => {
    meditationTimer.started = false;
    resetVariables(25, 0, false);
}

const loop = () => {
    meditationTimer.countdown = setInterval(() => {
        meditationTimer.seconds--;

        if (meditationTimer.seconds < 0 && meditationTimer.minutes == '00') {
            clearInterval(meditationTimer.countdown);
            timerComplete();
        }
    }, 1000);
}

const timerComplete = () => {
    meditationTimer.started = false;
    meditationTimer.fillerWidth = 0;
    meditationTimer.minutes = '00';
    meditationTimer.seconds = '00';
    doneSound();
}

const increase = () => {
    meditationTimer.minutes++;
}

const decrease = () => {
    if (meditationTimer.minutes > 0) {
        meditationTimer.minutes--;
    }
}
</script>

<style scoped>
#filler {
    height: 100%;
    border-radius: 7px 0 0 7px;
    position: absolute;
}

#time {
    font-size: 4rem;
    width: 13rem;
    height: 13rem;
    border-radius: 50%;
    margin: 2rem auto;
    color: #fff;
    transition: color 1s ease;
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
