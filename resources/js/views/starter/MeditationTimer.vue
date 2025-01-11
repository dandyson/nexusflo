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
                                    <div
                                        id="time"
                                        class="d-flex justify-content-center align-items-center mb-4"
                                        :class="meditationTimer.background"
                                        :style="meditationTimer.shadow"
                                        role="timer"
                                        aria-live="polite"
                                        tabindex="0"
                                        :aria-label="`${meditationTimer.minutes} minutes and ${meditationTimer.seconds} seconds remaining`"
                                        aria-hidden="true"
                                    >
                                        <div aria-hidden="true">
                                            {{ meditationTimer.minutes }}:{{ meditationTimer.seconds }}
                                        </div>

                                        <span class="visually-hidden" role="timer" aria-live="off">
                                            {{ meditationTimer.minutes }} minutes and {{ meditationTimer.seconds }} seconds remaining
                                        </span>
                                    </div>

                                    <!-- Minutes increment/decrement -->
                                    <div
                                        id="buttons"
                                        class="d-flex justify-content-center my-2"
                                        role="group"
                                        aria-label="Timer duration controls"
                                    >
                                        <button
                                            class="btn btn-warning br-50 mx-2"
                                            @click="decrease"
                                            @keydown.enter="decrease"
                                            aria-label="Decrease minutes"
                                        >
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </button>
                                        <button
                                            class="btn btn-warning br-50 mx-2"
                                            @click="increase"
                                            @keydown.enter="increase"
                                            aria-label="Increase minutes"
                                        >
                                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-center my-3">
                                        <button class="btn btn-warning btn-block pomodoro-button" id="stop"
                                            @click="timerButtonSound(); start()"
                                            @keydown.enter="timerButtonSound(); start()"
                                            :aria-label="meditationTimer.started ? 'Pause meditation timer' : 'Start meditation timer'">
                                            <i class="typcn" :class="meditationTimer.started ? 'typcn-media-pause' : 'typcn-media-play'" aria-hidden="true"></i>
                                            {{ meditationTimer.startText }}
                                        </button>
                                    </div>
                                </div>

                                <div id="buttons" class="d-flex justify-content-evenly my-5">
                                    <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-warning text-center">
                                        <button class="btn btn-block pomodoro-button pomo-category w-100" id="work"
                                            @click="reset()"
                                            @keydown.enter="reset()"
                                            aria-label="Reset timer to 25 minutes">
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
import { ref, reactive, watch, onMounted, onUnmounted } from 'vue';
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

const timerStatus = ref('Meditation timer ready');

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

    if (val.started !== meditationTimer.started) {
        announceTimerStatus(val.started);
    }
}, { deep: true });

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
    timerStatus.value = meditationTimer.started
        ? `Meditation session started - ${meditationTimer.minutes} minutes`
        : 'Meditation session paused';

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
    timerStatus.value = 'Meditation session complete';
    doneSound();
    document.getElementById('stop').focus();
};

const announceTimerComplete = () => {
    const announcement = document.createElement('div');
    announcement.setAttribute('role', 'alert');
    announcement.setAttribute('aria-live', 'assertive');
    announcement.textContent = 'Meditation session complete';
    document.body.appendChild(announcement);
    setTimeout(() => announcement.remove(), 1000);
};

const increase = () => {
    meditationTimer.minutes++;
    timerStatus.value = `Duration set to ${meditationTimer.minutes} minutes`;
}

const decrease = () => {
    if (meditationTimer.minutes > 0) {
        meditationTimer.minutes--;
        timerStatus.value = `Duration set to ${meditationTimer.minutes} minutes`;
    }
}

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

const announceTimerStatus = (isStarted) => {
    let liveRegion = document.getElementById('timer-announcer');
    if (!liveRegion) {
        liveRegion = document.createElement('div');
        liveRegion.id = 'timer-announcer';
        liveRegion.setAttribute('role', 'status');
        liveRegion.setAttribute('aria-live', 'polite');
        liveRegion.style.position = 'absolute';
        liveRegion.style.width = '1px';
        liveRegion.style.height = '1px';
        liveRegion.style.padding = '0';
        liveRegion.style.margin = '-1px';
        liveRegion.style.overflow = 'hidden';
        liveRegion.style.clip = 'rect(0, 0, 0, 0)';
        liveRegion.style.whiteSpace = 'nowrap';
        liveRegion.style.border = '0';
        document.body.appendChild(liveRegion);
    }

    liveRegion.textContent = isStarted ? 'Meditation timer started' : 'Meditation timer paused';
}

const announceTimeRemaining = () => {
    const minutes = parseInt(meditationTimer.minutes);
    const seconds = parseInt(meditationTimer.seconds);

    let announcement = '';
    if (minutes === 0 && seconds === 0) {
        announcement = 'Timer complete';
    } else {
        announcement = `${minutes} minute${minutes !== 1 ? 's' : ''} and ${seconds} second${seconds !== 1 ? 's' : ''} remaining`;
    }

    const liveRegion = document.getElementById('timer-announcer');
    if (liveRegion) {
        liveRegion.textContent = announcement;
    }
};
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

button:focus,
[tabindex]:focus {
    outline: 3px solid #ffc107;
    outline-offset: 2px;
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

.timer-display {
    font-variant-numeric: tabular-nums;
    font-feature-settings: "tnum";
}
</style>
