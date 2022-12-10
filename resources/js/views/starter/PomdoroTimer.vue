<template>
<div class="row d-flex justify-content-center">
    <div class="col-8">
        <div>
            <div>
                <a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
                <div class="main-content-body main-content-body-contacts card custom-card">
                    <div class="bg-success" :class="[pomodoro.fillerDisplay]" :style="`width: ${pomodoro.fillerWidth}%`"></div>
                    <div id="pomodoro-app">
                        <div id="container">
                            <div id="timer">
                                <div id="time" class="d-flex justify-content-center align-items-center mb-4" :class="pomodoro.background" :style="pomodoro.shadow">
                                    <!-- <span :class="{ 'd-none': !pomodoro.singleDigit }">0</span> -->
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

                            <div id="buttons" class="d-flex justify-content-evenly my-5">
                                <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-danger text-center">
                                    <button class="btn btn-block pomodoro-button pomo-category w-100" id="work" @click="timerButtonSound(); work()">
                                        Work
                                    </button>
                                </div>
                                <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-info text-center">
                                    <button class="btn btn-block pomodoro-button pomo-category w-100" id="shortBreak" @click="timerButtonSound(); shortBreak()">
                                        Short Break
                                    </button>
                                </div>
                                <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-info text-center">
                                    <button class="btn btn-block pomodoro-button pomo-category w-100" id="longBreak" @click="timerButtonSound(); longBreak()">
                                        Long Break
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
            pomodoro: {
                // Timer variables
                state: 'work',
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
                background: 'bg-danger',
                shadow: 'box-shadow: 0 0 0 12px #e7829a',
                singleDigit: false,
            },
        }
    },

    watch: {
        pomodoro: {
            deep: true,
            handler(val) {
                // PAUSE TIMER
                if (val.started === false) {
                    // Pause/Stop the timer
                    clearInterval(this.pomodoro.countdown);
                    // Change the start button text
                    val.startText = 'Start'
                } else if (val.started === true) {
                    val.startText = 'Pause';
                }

                // COLOURS FOR EACH STATE
                if (val.state === 'work') {
                    val.background = "bg-danger";
                    val.shadow = "box-shadow: 0 0 0 12px #e7829a";
                } else if (val.state === 'shortBreak' || val.state === 'longBreak') {
                    val.background = "bg-info";
                    val.shadow = "box-shadow: 0 0 0 12px #80bff7";
                }

                // PREPEND ZERO IF MINUTES OR SECONDS BECOME A SINGLE DIGIT
                // if (val.minutes < 10) {
                //     val.singleDigit = true;
                // } else {
                //     val.singleDigit = false;
                // }

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
            if (this.pomodoro.seconds < 10 && this.pomodoro.seconds >= 0) {
                return this.pomodoro.seconds = "0" + parseInt(this.pomodoro.seconds, 10);
            }

            if (this.pomodoro.seconds < 0) {
                this.pomodoro.seconds = 59;
                this.pomodoro.minutes--;
            }

            return this.pomodoro.seconds;
        },

        minutesDigit() {
            if (this.pomodoro.minutes < 10 && this.pomodoro.minutes >= 0) {
                return this.pomodoro.minutes = "0" + parseInt(this.pomodoro.minutes, 10);
            }

            return this.pomodoro.minutes;
        }
    },

    methods: {
        timerButtonSound() {
            var audio = new Audio("http://orteil.dashnet.org/cookieclicker/snd/press.mp3");
            audio.play();
        },

        doneSound() {
            var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/CHIME2.WAV");
            audio.play();
        },

        resetVariables(mins, secs, started) {
            this.pomodoro.minutes = mins;
            this.pomodoro.seconds = secs;
            this.pomodoro.started = started;
            this.pomodoro.fillerIncrement = 100 / (this.pomodoro.minutes * 60);
            this.pomodoro.fillerWidth = 0;
        },

        start() {
            this.pomodoro.started = !this.pomodoro.started;

            if (this.pomodoro.started === true) {
                this.loop();
            } else if (this.pomodoro.started === false) {
                clearInterval(this.pomodoro.countdown);
            }
        },

        work() {
            this.pomodoro.state = 'work';

            if (this.pomodoro.started) {
                let check = this.confirmSwitch();
                if (check === true) {
                    this.pomodoro.started = false;
                    this.resetVariables(25, 0, false)
                } else if (check === false) {
                    return;
                }
            } else {
                this.pomodoro.started = false;
                this.resetVariables(25, 0, false);
            }
        },

        shortBreak() {
            this.pomodoro.state = 'shortBreak';

            if (this.pomodoro.started) {
                let check = this.confirmSwitch();
                if (check === true) {
                    this.pomodoro.started = false;
                    this.resetVariables(5, 0, false);
                } else if (check === false) {
                    return;
                }
            } else {
                this.pomodoro.started = false;
                this.resetVariables(5, 0, false);
            }
        },

        longBreak() {
            this.pomodoro.state = 'longBreak';

            if (this.pomodoro.started) {
                let check = this.confirmSwitch();
                if (check === true) {
                    this.pomodoro.started = false;
                    this.resetVariables(15, 0, false);
                } else if (check === false) {
                    return;
                }
            } else {
                this.pomodoro.started = false;
                this.resetVariables(15, 0, false);
            }

        },

        loop() {
            this.pomodoro.countdown = setInterval(() => {
                this.pomodoro.seconds--;

                // When complete, set all to 0 and clear interval
                if (this.pomodoro.seconds < 0 && this.pomodoro.minutes === 0) {
                    clearInterval(this.pomodoro.countdown);
                    this.timerComplete();
                }
            }, 1000);
        },

        pauseTimer() {
            this.pomodoro.started = !this.pomodoro.started;
        },

        timerComplete() {
            this.pomodoro.started = false;
            this.fillerWidth = 0;
            this.doneSound();
            if (this.pomodoro.state === 'work') {
                this.shortBreak();
            } else if (this.pomodoro.state === 'shortBreak' || this.pomodoro.state === 'longBreak') {
                this.work();
            }
        },

        confirmSwitch() {
            let check = confirm("Are you sure you want to reset the timer?");

            if (check === true) {
                return true;
            } else if (check === false) {
                return false;
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
