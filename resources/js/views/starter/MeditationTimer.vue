<template>
<div class="row d-flex justify-content-center">
    <div class="col-8">
        <div>
            <div>
                <a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
                <div class="main-content-body main-content-body-contacts card custom-card">
                    <div class="bg-success" :class="[timer.fillerDisplay]" :style="`width: ${timer.fillerWidth}%`"></div>
                    <div id="pomodoro-app">
                        <div id="container">
                            <div id="timer">
                                <div id="time" class="d-flex justify-content-center align-items-center mb-4" :class="timer.background" :style="timer.shadow">
                                    <span id="minutes">{{ timer.minutes }}</span>:
                                    <span id="seconds">{{ timer.seconds }}</span>
                                </div>

                                <!-- Minutes increment/decrement -->
                                <div id="buttons" class="d-flex justify-content-center my-2">
                                    <button class="btn btn-warning br-50 mx-2" @click="decrease"><i class="bx bxs-left-arrow"></i></button>
                                    <button class="btn btn-warning br-50 mx-2" @click="increase"><i class="bx bxs-right-arrow"></i></button>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <div class="">
                                        <button class="btn btn-warning btn-block pomodoro-button" id="stop" @click="timerButtonSound(); start()">
                                            <i class="typcn typcn-media-play"></i>{{ timer.startText }}<i class="typcn typcn-media-pause"></i>
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

<script>
export default {
    data() {
        return {
            timer: {
                // Timer variables
                started: false,
                countdown: '',
                startText: 'Start',
                minutes: 25,
                seconds: '00',
                // Filler
                fillerWidth: 0,
                fillerIncrement: 0,
                fillerDisplay: 'Hello',
                fillerWidth: 'Width',
                // Styling
                background: 'bg-warning',
                shadow: 'box-shadow: 0 0 0 12px #f9f900',
                singleDigit: false,
            },
        }
    },

    watch: {
        timer: {
            deep: true,
            handler(val) {
                // PAUSE TIMER
                if (val.started === false) {
                    // Pause/Stop the timer
                    clearInterval(this.timer.countdown);
                    // Change the start button text
                    val.startText = 'Start'
                } else if (val.started === true) {
                    val.startText = 'Pause';
                }

                if (val.seconds < 10 && val.seconds >= 0) {
                    val.seconds = "0" + parseInt(val.seconds, 10);
                }

                if (val.seconds < 0) {
                    val.seconds = 59;
                    val.minutes--;
                }

                if (val.minutes < 10 && val.minutes >= 0) {
                    val.minutes = "0" + parseInt(val.minutes, 10);
                }
            }
        }
    },

    computed: {
        secondsDigit() {
            if (this.timer.seconds < 10 && this.timer.seconds >= 0) {
                return this.timer.seconds = "0" + parseInt(this.timer.seconds, 10);
            }

            if (this.timer.seconds < 0) {
                this.timer.seconds = 59;
                this.timer.minutes--;
            }

            return this.timer.seconds;
        },

        minutesDigit() {
            if (this.timer.minutes < 10 && this.timer.minutes >= 0) {
                return this.timer.minutes = "0" + parseInt(this.timer.minutes, 10);
            }

            return this.timer.minutes;
        }
    },

    methods: {
        timerButtonSound() {
            var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/SBELL1.WAV");
            audio.play();
        },

        doneSound() {
            var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/SBELL1.WAV");
            audio.play();
        },

        resetVariables(mins, secs, started) {
            this.timer.minutes = mins;
            this.timer.seconds = secs;
            this.timer.started = started;
            this.timer.fillerIncrement = 100 / (this.timer.minutes * 60);
            this.timer.fillerWidth = 0;
        },

        start() {
            this.timer.started = !this.timer.started;

            if (this.timer.started === true) {
                this.loop();
            } else if (this.timer.started === false) {
                clearInterval(this.timer.countdown);
            }
        },

        reset() {
            this.timer.started = false;
            this.resetVariables(25, 0, false);     
        },

        loop() {
            this.timer.countdown = setInterval(() => {
                this.timer.seconds--;
                
                console.log(this.timer.seconds);
                console.log(this.timer.minutes);

                // When complete, set all to 0 and clear interval
                if (this.timer.seconds < 0 && this.timer.minutes == '00') {
                    clearInterval(this.timer.countdown);
                    this.timerComplete();
                }
            }, 1000);
        },

        pauseTimer() {
            this.timer.started = !this.timer.started;
        },

        timerComplete() {
            this.timer.started = false;
            this.fillerWidth = 0;
            this.timer.minutes = '00';
            this.timer.seconds = '00';
            this.doneSound();
        },

        increase() {
            this.timer.minutes++;
        },

        decrease() {
            if (this.timer.minutes > 0) {
                this.timer.minutes--;
            }
        }

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
