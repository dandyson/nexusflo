<template>
  <div class="content row d-flex justify-content-center">
    <div class="col-8">
      <a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
      <div class="main-content-body main-content-body-contacts card custom-card">
        <div class="bg-success" :class="[pomodoro.fillerDisplay]" :style="`width: ${pomodoro.fillerWidth}%`"></div>
        <div id="pomodoro-app">
          <div id="container">
            <div id="timer">
              <div id="time" class="d-flex justify-content-center align-items-center mb-4" :class="pomodoro.background"
                :style="pomodoro.shadow">
                <span id="minutes">{{ pomodoro.minutes }}</span>:
                <span id="seconds">{{ pomodoro.seconds }}</span>
              </div>

              <div class="d-flex justify-content-center my-3">
                <div class="">
                  <button class="btn btn-danger btn-block pomodoro-button" id="stop" @click="timerButtonSound(); start()">
                    <i class="typcn typcn-media-play"></i>{{ pomodoro.startText }}<i class="typcn typcn-media-pause"></i>
                  </button>
                </div>
              </div>
            </div>

            <div id="buttons" class="d-flex flex-column flex-lg-row align-items-center justify-content-evenly my-5 mx-4">
              <div class="bg-danger text-center w-100">
                <button class="btn btn-block pomodoro-button pomo-category" id="work" @click="timerButtonSound(); work()">
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
import { reactive, watch } from 'vue';

const pomodoro = reactive({
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
});

const timerButtonSound = () => {
  var audio = new Audio('http://orteil.dashnet.org/cookieclicker/snd/press.mp3');
  audio.play();
};

const doneSound = () => {
  var audio = new Audio('http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/CHIME2.WAV');
  audio.play();
};

const resetVariables = (mins, secs, started) => {
  pomodoro.minutes = mins;
  pomodoro.seconds = secs;
  pomodoro.started = started;
  pomodoro.fillerIncrement = 100 / (pomodoro.minutes * 60);
  pomodoro.fillerWidth = 0;
};

const start = () => {
  pomodoro.started = !pomodoro.started;

  if (pomodoro.started === true) {
    loop();
  } else if (pomodoro.started === false) {
    clearInterval(pomodoro.countdown);
  }
};

const work = () => {
  pomodoro.state = 'work';

  if (pomodoro.started) {
    let check = confirmSwitch();
    if (check === true) {
      pomodoro.started = false;
      resetVariables(25, 0, false);
    } else if (check === false) {
      return;
    }
  } else {
    pomodoro.started = false;
    resetVariables(25, 0, false);
  }
};

const shortBreak = () => {
  pomodoro.state = 'shortBreak';

  if (pomodoro.started) {
    let check = confirmSwitch();
    if (check === true) {
      pomodoro.started = false;
      resetVariables(5, 0, false);
    } else if (check === false) {
      return;
    }
  } else {
    pomodoro.started = false;
    resetVariables(5, 0, false);
  }
};

const longBreak = () => {
  pomodoro.state = 'longBreak';

  if (pomodoro.started) {
    let check = confirmSwitch();
    if (check === true) {
      pomodoro.started = false;
      resetVariables(15, 0, false);
    } else if (check === false) {
      return;
    }
  } else {
    pomodoro.started = false;
    resetVariables(15, 0, false);
  }
};

const loop = () => {
  pomodoro.countdown = setInterval(() => {
    pomodoro.seconds--;

    // When complete, set all to 0 and clear interval
    if (pomodoro.seconds < 0 && pomodoro.minutes === '00') {
      clearInterval(pomodoro.countdown);
      timerComplete();
    }
  }, 1000);
};

const pauseTimer = () => {
  pomodoro.started = !pomodoro.started;
};

const timerComplete = () => {
  pomodoro.started = false;
  pomodoro.fillerWidth = 0;
  pomodoro.pomodoroCount++;
  doneSound();
  if (pomodoro.state === 'work') {
    if (pomodoro.pomodoroCount === 4) {
      longBreak();
      pomodoro.pomodoroCount = 0;
    } else {
      shortBreak();
    }
  } else if (pomodoro.state === 'shortBreak' || pomodoro.state === 'longBreak') {
    work();
  }
};

const confirmSwitch = () => {
  let check = confirm('Are you sure you want to reset the timer?');

  if (check === true) {
    return true;
  } else if (check === false) {
    return false;
  }
};

watch(pomodoro, (val) => {
  // PAUSE TIMER
  if (val.started === false) {
    // Pause/Stop the timer
    clearInterval(pomodoro.countdown);
    // Change the start button text
    val.startText = 'Start';
  } else if (val.started === true) {
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
  