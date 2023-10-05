<template>
    <div class="content row d-flex justify-content-center">
      <div class="col-12 col-lg-8">
        <div>
          <div>
            <a class="main-header-arrow" href="" id="ChatBodyHide">
              <i class="icon ion-md-arrow-back"></i>
            </a>
            <div class="main-content-body main-content-body-contacts card custom-card">
              <div class="bg-success" :class="[timer.fillerDisplay]" :style="`width: ${timer.fillerWidth}%`"></div>
              <div id="pomodoro-app">
                <div id="container">
                  <div id="timer">
                    <div
                      id="time"
                      class="d-flex justify-content-center align-items-center mb-4"
                      :class="timer.background"
                      :style="timer.shadow"
                    >
                      <span id="minutes">{{ timer.minutes }}</span>:
                      <span id="seconds">{{ timer.seconds }}</span>
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
                        <button
                          class="btn btn-warning btn-block pomodoro-button"
                          id="stop"
                          @click="timerButtonSound(); start()"
                        >
                          <i class="typcn typcn-media-play"></i>{{ timer.startText }}
                          <i class="typcn typcn-media-pause"></i>
                        </button>
                      </div>
                    </div>
                  </div>
  
                  <div id="buttons" class="d-flex justify-content-evenly my-5">
                    <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-warning text-center">
                      <button class="btn btn-block pomodoro-button pomo-category w-100" id="work" @click="reset()">
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
  import { reactive, watch } from 'vue';
  
  const timer = reactive({
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
  
  watch(timer, (val) => {
    if (val.started === false) {
      clearInterval(val.countdown);
      val.startText = 'Start';
    } else if (val.started === true) {
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
  
  function secondsDigit() {
    if (timer.seconds < 10 && timer.seconds >= 0) {
      return (timer.seconds = '0' + parseInt(timer.seconds, 10));
    }
  
    if (timer.seconds < 0) {
      timer.seconds = 59;
      timer.minutes--;
    }
  
    return timer.seconds;
  }
  
  function minutesDigit() {
    if (timer.minutes < 10 && timer.minutes >= 0) {
      return (timer.minutes = '0' + parseInt(timer.minutes, 10));
    }
  
    return timer.minutes;
  }
  
  function timerButtonSound() {
    var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/SBELL1.WAV");
    audio.play();
  }
  
  function doneSound() {
    var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/SBELL1.WAV");
    audio.play();
  }
  
  function resetVariables(mins, secs, started) {
    timer.minutes = mins;
    timer.seconds = secs;
    timer.started = started;
    timer.fillerIncrement = 100 / (timer.minutes * 60);
    timer.fillerWidth = 0;
  }
  
  function start() {
    timer.started = !timer.started;
  
    if (timer.started === true) {
      loop();
    } else if (timer.started === false) {
      clearInterval(timer.countdown);
    }
  }
  
  function reset() {
    timer.started = false;
    resetVariables(25, 0, false);     
  }
  
  function loop() {
    timer.countdown = setInterval(() => {
      timer.seconds--;
  
      if (timer.seconds < 0 && timer.minutes == '00') {
        clearInterval(timer.countdown);
        timerComplete();
      }
    }, 1000);
  }
  
  function pauseTimer() {
    timer.started = !timer.started;
  }
  
  function timerComplete() {
    timer.started = false;
    timer.fillerWidth = 0;
    timer.minutes = '00';
    timer.seconds = '00';
    doneSound();
  }
  
  function increase() {
    timer.minutes++;
  }
  
  function decrease() {
    if (timer.minutes > 0) {
      timer.minutes--;
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
