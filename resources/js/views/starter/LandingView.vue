
<template>
  <div>
    <!-- Hero -->
    <div class="hero bg-body-extra-light">
      <div class="content content-full text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-6">
            <img class="img-fluid" src="/assets/media/logos/logo.svg" alt="Logo" width="100" />
            <h1 class="fw=bold mt-3 mb-2">
              Center
              <span class="fw-light">Your Life</span>
            </h1>
            <p class="fs-lg fw-medium text-muted mb-4">
              Manage your mind with an app that allows you to manage not just your busy day, but your inner peace as well.
            </p>
            <RouterLink :to="{ name: 'auth-signup3' }" class="btn btn-primary px-4 py-3" v-click-ripple>
              Sign Up Today
              <i class="fa fa-fw fa-arrow-right ms-1 opacity-50"></i>
            </RouterLink>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Power of Vite -->
    <div id="one-vue-power-of-vite" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5">
          <div class="row mb-5">
            <div class="col-md-6">
              <h2 class="h1 fw-bold mb-2">
                With the power of
                <span class="fw-normal">Mindfulness</span>
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                This app has been designed with Mindfulness in mind, containing a list of essential
                tools for managing your day-to-day stress levels.

              </p>
            </div>
            <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
              <p class="h1 fw-bold text-body-bg-dark mb-0">Get Inspired.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="d-flex align-items-center col-md-6 offset-lg-1 order-md-1">
            <div class="w-100 mb-5 mb-md-0 px-lg-6 position-relative">
              <div class="row">
                <div class="col-6 col-md-12">
                  <BaseBlock transparent class="bg-body-light">
                    <div class="py-4 py-md-6 text-center">
                      <svg width="8rem" height="8rem" viewBox="0 0 410 404" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M399.641 59.5246L215.643 388.545C211.844 395.338 202.084 395.378 198.228 388.618L10.5817 59.5563C6.38087 52.1896 12.6802 43.2665 21.0281 44.7586L205.223 77.6824C206.398 77.8924 207.601 77.8904 208.776 77.6763L389.119 44.8058C397.439 43.2894 403.768 52.1434 399.641 59.5246Z"
                          fill="url(#paint0_linear)" />
                        <path
                          d="M292.965 1.5744L156.801 28.2552C154.563 28.6937 152.906 30.5903 152.771 32.8664L144.395 174.33C144.198 177.662 147.258 180.248 150.51 179.498L188.42 170.749C191.967 169.931 195.172 173.055 194.443 176.622L183.18 231.775C182.422 235.487 185.907 238.661 189.532 237.56L212.947 230.446C216.577 229.344 220.065 232.527 219.297 236.242L201.398 322.875C200.278 328.294 207.486 331.249 210.492 326.603L212.5 323.5L323.454 102.072C325.312 98.3645 322.108 94.137 318.036 94.9228L279.014 102.454C275.347 103.161 272.227 99.746 273.262 96.1583L298.731 7.86689C299.767 4.27314 296.636 0.855181 292.965 1.5744Z"
                          fill="url(#paint1_linear)" />
                        <defs>
                          <linearGradient id="paint0_linear" x1="6.00017" y1="32.9999" x2="235" y2="344"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#41D1FF" />
                            <stop offset="1" stop-color="#BD34FE" />
                          </linearGradient>
                          <linearGradient id="paint1_linear" x1="194.651" y1="8.81818" x2="236.076" y2="292.989"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFEA83" />
                            <stop offset="0.0833333" stop-color="#FFDD35" />
                            <stop offset="1" stop-color="#FFA800" />
                          </linearGradient>
                        </defs>
                      </svg>
                    </div>
                  </BaseBlock>
                </div>
                <div class="col-6 col-md-12">
                  <BaseBlock transparent class="bg-body-light">
                    <div class="py-4 py-md-6 text-center">
                      <svg height="8rem" width="8rem" viewBox="0 0 319 477" xmlns="http://www.w3.org/2000/svg">
                        <linearGradient id="a">
                          <stop offset="0" stop-color="#52ce63" />
                          <stop offset="1" stop-color="#51a256" />
                        </linearGradient>
                        <linearGradient id="b" x1="55.342%" x2="42.817%" xlink:href="#a" y1="0%" y2="42.863%" />
                        <linearGradient id="c" x1="55.349%" x2="42.808%" xlink:href="#a" y1="0%" y2="42.863%" />
                        <linearGradient id="d" x1="50%" x2="50%" y1="0%" y2="58.811%">
                          <stop offset="0" stop-color="#8ae99c" />
                          <stop offset="1" stop-color="#52ce63" />
                        </linearGradient>
                        <linearGradient id="e" x1="51.378%" x2="44.585%" y1="17.473%" y2="100%">
                          <stop offset="0" stop-color="#ffe56c" />
                          <stop offset="1" stop-color="#ffc63a" />
                        </linearGradient>
                        <g fill="none" fill-rule="evenodd" transform="translate(-34 -24)">
                          <path
                            d="M103.95 258.274c44.362-4.36 60.015-40.391 65.354-94.7s-30.933-103.45-46.02-101.967c-15.089 1.483-63.04 58.905-68.378 113.213-5.338 54.308 4.683 87.815 49.045 83.454z"
                            fill="url(#b)" transform="rotate(-38 137.962 147.099)" />
                          <path
                            d="M275.877 258.274c44.361 4.36 53.167-29.265 47.828-83.573-5.338-54.309-52.073-111.611-67.161-113.094-15.088-1.483-52.575 47.54-47.236 101.848s22.207 90.458 66.569 94.819z"
                            fill="url(#c)" transform="rotate(52 240.026 189.003)" />
                          <path
                            d="M188.37 216.876c39.942 0 50.953-38.252 50.953-97.898C239.323 59.33 201.955.876 188.37.876s-52.047 58.455-52.047 118.102c0 59.646 12.105 97.898 52.047 97.898z"
                            fill="url(#d)" transform="rotate(7 8.977 277.799)" />
                          <path
                            d="M184.473 501C267.593 501 335 476.855 335 367.355S267.592 168 184.473 168C101.355 168 34 257.855 34 367.355S101.355 501 184.473 501z"
                            fill="url(#e)" />
                          <ellipse cx="260.5" cy="335" fill="#eaadcc" rx="21.5" ry="10" />
                          <ellipse cx="102.5" cy="329" fill="#eaadcc" rx="21.5" ry="10" transform="rotate(7 102.5 329)" />
                          <g>
                            <path
                              d="M198.248 331.459c-6.471 5.259-13.945 7.404-22.422 6.435-8.478-.969-14.761-4.487-18.85-10.556"
                              stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="6" />
                            <path
                              d="M114.983 279.418a21.435 21.435 0 0 1 15.414 5.762 21.431 21.431 0 0 1 6.824 14.974 21.433 21.433 0 0 1-5.763 15.414 21.434 21.434 0 0 1-14.975 6.824 21.43 21.43 0 0 1-15.413-5.763 21.434 21.434 0 0 1-6.823-14.975 21.432 21.432 0 0 1 5.762-15.413 21.431 21.431 0 0 1 14.974-6.823z"
                              fill="#000" />
                            <path d="M116.112 297.39a7.001 7.001 0 0 0-13.992.488 7 7 0 0 0 13.992-.489z" fill="#fff" />
                            <path
                              d="M245.253 284.875a21.433 21.433 0 0 1 15.414 5.762 21.432 21.432 0 0 1 6.824 14.974 21.433 21.433 0 0 1-5.763 15.414 21.432 21.432 0 0 1-14.974 6.824 21.433 21.433 0 0 1-15.413-5.763 21.433 21.433 0 0 1-6.824-14.975 21.432 21.432 0 0 1 5.763-15.412 21.433 21.433 0 0 1 14.973-6.824z"
                              fill="#000" />
                            <g fill="#fff">
                              <path
                                d="M134.223 300.259c.356 10.212-7.633 18.778-17.845 19.134-10.21.357-18.776-7.63-19.133-17.843-.356-10.211 7.631-18.777 17.842-19.134 10.212-.357 18.78 7.631 19.136 17.843zm5.996-.21c-.472-13.523-11.818-24.102-25.341-23.63-13.523.473-24.101 11.817-23.63 25.34.473 13.524 11.817 24.103 25.34 23.63 13.524-.471 24.103-11.816 23.631-25.34zM264.492 305.715c.357 10.213-7.63 18.779-17.843 19.135-10.21.357-18.777-7.63-19.134-17.843-.357-10.211 7.632-18.777 17.843-19.134 10.212-.357 18.778 7.631 19.134 17.842zm5.997-.209c-.472-13.523-11.817-24.102-25.34-23.63-13.523.473-24.103 11.817-23.63 25.34.472 13.524 11.817 24.103 25.34 23.63 13.524-.471 24.102-11.816 23.63-25.34z"
                                fill-rule="nonzero" stroke="#fff" stroke-width="3" />
                              <path d="M246.381 302.846a7 7 0 1 0-13.992.49 7 7 0 0 0 13.992-.49z" />
                            </g>
                          </g>
                          <g stroke-linecap="round" stroke-width="11">
                            <g stroke="#ecb732">
                              <path d="m70.5 377.5 74 77M134.5 386.5l-47 50" />
                            </g>
                            <g stroke="#ecb732">
                              <path d="m297.5 377.5-74 77M233.5 386.5l47 50" />
                            </g>
                            <g stroke="#ffc73b">
                              <path d="m214.5 207.5-49 49M204.5 256.5l-49-49" />
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </BaseBlock>
                </div>
              </div>
            </div>
          </div>
          <div class="d-md-flex align-items-md-center col-md-6 col-lg-5 order-md-0">
            <div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-hourglass-half"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Pomodoro Timer</h4>
                  <p class="text-muted">
                    Invented in the 1980's, this technique perfects time management
                    that will power up your workflow.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-om"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Meditation Timer </h4>
                  <p class="text-muted">
                    Take things moment by moment with the meditation timer, allowing you
                    to focus and be in the present.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-face-grin-beam"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Positive News Feed</h4>
                  <p class="text-muted">
                    Collected from positive-only news sites, receive a stream of
                    wonderful news straight to your screen, all in one place.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-book-bookmark"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Worry Journal</h4>
                  <p class="text-muted">
                    Set your worries straight with a journal to help you recognise anxiety patterns
                    and thinking traps, allowing you to reframe your mind and hack away at worry
                    one entry at a time.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Power of Vite -->

    <!-- Call To Action -->
    <div id="one-vue-call-to-action" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5 py-md-8 text-center">
          <h2 class="fw-bold mb-2">
            Register <strong> today </strong> to begin enhancing your life.
          </h2>
          <p class="fs-lg fw-medium text-muted mb-4">
            Our quick and easy registration will have you up and running in minutes.
          </p>
          <RouterLink :to="{ name: 'auth-signup3' }" v-click-ripple>
            <a class="btn btn-success py-2 px-3 m-1" href="https://1.envato.market/5Noyb" v-click-ripple>
              <i class="fa fa-fw fa-user-plus opacity-50"></i>
              <span class="ms-2">Create an Account</span>
            </a>
          </RouterLink>
        </div>
      </div>
    </div>
    <!-- END Call To Action -->
  </div>
</template>

<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();
</script>
