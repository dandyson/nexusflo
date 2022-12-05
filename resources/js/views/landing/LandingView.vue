<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();
</script>

<template>
  <div>
    <!-- Hero -->
    <div id="one-vue-hero" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="row g-0 justify-content-center text-center">
          <div class="col-md-10 pt-7 pb-9">
            <div
              class="d-inline-flex align-items-center space-x-1 fs-sm badge bg-danger-light text-danger mb-2 p-2"
            >
              <i class="fab fa-fw fa-laravel"></i>
              <span>Laravel 9 (with Vite) version is here!</span>
            </div>
            <h1 class="fs-2 fw-bold mb-3">
              Build web apps that your users will love using
            </h1>
            <p class="fs-5 fw-medium text-muted mb-5 mx-xl-8">
              One super flexible UI framework for amazing developers and web
              agencies. Now based on
              <span class="text-body-color fw-semibold">Vue.js 3</span>, with
              <span class="text-body-color fw-semibold">OneUI 5 design</span>
              and <span class="text-body-color fw-semibold">Bootstrap 5</span>
              in core. Comes packed with brand new libraries and tooling,
              including
              <span class="text-body-color fw-semibold">Vite</span>,
              <span class="text-body-color fw-semibold">Pinia</span> and
              <span class="text-body-color fw-semibold">Composition API</span>.
            </p>
            <RouterLink
              :to="{ name: 'backend-dashboard' }"
              class="btn btn-primary py-2 px-3 m-1"
              v-click-ripple
            >
              <i class="fa fa-fw fa-desktop opacity-50 me-1"></i> Live preview
            </RouterLink>
            <a
              class="btn btn-alt-primary py-2 px-3 m-1"
              href="https://1.envato.market/AVD6j"
              v-click-ripple
            >
              <i class="fa fa-fw fa-link opacity-50"></i>
              <span class="ms-2">OneUI Package</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Hero After -->
    <div id="one-vue-hero-after" class="bg-body-light">
      <div class="content content-full">
        <div class="px-lg-8 text-center">
          <BaseBlock
            fx-shadow
            class="overflow-hidden"
            content-class="p-2"
            style="margin-top: -200px"
          >
            <img
              class="img-fluid"
              src="/assets/media/various/hero-promo.png"
              alt="Hero Promo Light Dashboard"
            />
          </BaseBlock>
        </div>
        <div class="row py-5">
          <div class="col-6 col-md-3">
            <div class="item item-rounded my-4 text-flat bg-flat-lighter">
              <i class="fab fa-fw fa-2x fa-vuejs"></i>
            </div>
            <h4 class="mb-2">Vue.js 3</h4>
            <p class="text-muted">
              The latest version of the progressive JavaScript framework is now
              in core.
            </p>
          </div>
          <div class="col-6 col-md-3">
            <div class="item item-rounded my-4 text-danger bg-danger-light">
              <i class="fab fa-fw fa-2x fa-laravel"></i>
            </div>
            <h4 class="mb-2">Laravel 9</h4>
            <p class="text-muted">
              A brand new Laravel 9 with Vite integration version is now
              included.
            </p>
          </div>
          <div class="col-6 col-md-3">
            <div class="item item-rounded my-4 text-default bg-default-lighter">
              <i class="fa fa-fw fa-2x fa-circle-notch"></i>
            </div>
            <h4 class="mb-2">OneUI 5</h4>
            <p class="text-muted">
              Based on the design of our best seller dashboard template.
            </p>
          </div>
          <div class="col-6 col-md-3">
            <div
              class="item item-rounded my-4 text-amethyst bg-amethyst-lighter"
            >
              <i class="fab fa-fw fa-2x fa-bootstrap"></i>
            </div>
            <h4 class="mb-2">Bootstrap 5</h4>
            <p class="text-muted">
              The latest and greatest framework version under the hood.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero After -->

    <!-- Versions -->
    <div id="one-vue-versions" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5">
          <div class="row mb-5">
            <div class="col-md-6">
              <h2 class="h1 fw-bold mb-2">
                Comes in 2 powerful
                <span class="fw-normal">Versions</span>
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                Either you are building a pure API powered Vue.js app or a
                Laravel Vue.js based one, we've got you covered.
              </p>
            </div>
            <div
              class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end"
            >
              <p class="h1 fw-bold text-body-bg-dark mb-0">Fully Loaded.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <BaseBlock transparent class="bg-flat-lighter">
              <div class="py-4 py-md-7 text-center">
                <i class="fab fa-fw fa-5x fa-vuejs text-flat"></i>
              </div>
            </BaseBlock>
          </div>
          <div class="col-6">
            <BaseBlock transparent class="bg-danger-light">
              <div class="py-4 py-md-7 text-center">
                <i class="fab fa-fw fa-5x fa-laravel text-city"></i>
              </div>
            </BaseBlock>
          </div>
        </div>
      </div>
    </div>
    <!-- END Versions -->

    <!-- Power of Vite -->
    <div id="one-vue-power-of-vite" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5">
          <div class="row mb-5">
            <div class="col-md-6">
              <h2 class="h1 fw-bold mb-2">
                With the power of
                <span class="fw-normal">Vite</span>
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                We used the best toolkits and libraries, built by passionate
                people, to recreate OneUI from scratch and craft a Vue based
                version.
              </p>
            </div>
            <div
              class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end"
            >
              <p class="h1 fw-bold text-body-bg-dark mb-0">Get Inspired.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="d-flex align-items-center col-md-6 offset-lg-1 order-md-1"
          >
            <div class="w-100 mb-5 mb-md-0 px-lg-6 position-relative">
              <div class="row">
                <div class="col-6 col-md-12">
                  <BaseBlock transparent class="bg-body-light">
                    <div class="py-4 py-md-6 text-center">
                      <svg
                        width="8rem"
                        height="8rem"
                        viewBox="0 0 410 404"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M399.641 59.5246L215.643 388.545C211.844 395.338 202.084 395.378 198.228 388.618L10.5817 59.5563C6.38087 52.1896 12.6802 43.2665 21.0281 44.7586L205.223 77.6824C206.398 77.8924 207.601 77.8904 208.776 77.6763L389.119 44.8058C397.439 43.2894 403.768 52.1434 399.641 59.5246Z"
                          fill="url(#paint0_linear)"
                        />
                        <path
                          d="M292.965 1.5744L156.801 28.2552C154.563 28.6937 152.906 30.5903 152.771 32.8664L144.395 174.33C144.198 177.662 147.258 180.248 150.51 179.498L188.42 170.749C191.967 169.931 195.172 173.055 194.443 176.622L183.18 231.775C182.422 235.487 185.907 238.661 189.532 237.56L212.947 230.446C216.577 229.344 220.065 232.527 219.297 236.242L201.398 322.875C200.278 328.294 207.486 331.249 210.492 326.603L212.5 323.5L323.454 102.072C325.312 98.3645 322.108 94.137 318.036 94.9228L279.014 102.454C275.347 103.161 272.227 99.746 273.262 96.1583L298.731 7.86689C299.767 4.27314 296.636 0.855181 292.965 1.5744Z"
                          fill="url(#paint1_linear)"
                        />
                        <defs>
                          <linearGradient
                            id="paint0_linear"
                            x1="6.00017"
                            y1="32.9999"
                            x2="235"
                            y2="344"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="#41D1FF" />
                            <stop offset="1" stop-color="#BD34FE" />
                          </linearGradient>
                          <linearGradient
                            id="paint1_linear"
                            x1="194.651"
                            y1="8.81818"
                            x2="236.076"
                            y2="292.989"
                            gradientUnits="userSpaceOnUse"
                          >
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
                      <svg
                        height="8rem"
                        width="8rem"
                        viewBox="0 0 319 477"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <linearGradient id="a">
                          <stop offset="0" stop-color="#52ce63" />
                          <stop offset="1" stop-color="#51a256" />
                        </linearGradient>
                        <linearGradient
                          id="b"
                          x1="55.342%"
                          x2="42.817%"
                          xlink:href="#a"
                          y1="0%"
                          y2="42.863%"
                        />
                        <linearGradient
                          id="c"
                          x1="55.349%"
                          x2="42.808%"
                          xlink:href="#a"
                          y1="0%"
                          y2="42.863%"
                        />
                        <linearGradient
                          id="d"
                          x1="50%"
                          x2="50%"
                          y1="0%"
                          y2="58.811%"
                        >
                          <stop offset="0" stop-color="#8ae99c" />
                          <stop offset="1" stop-color="#52ce63" />
                        </linearGradient>
                        <linearGradient
                          id="e"
                          x1="51.378%"
                          x2="44.585%"
                          y1="17.473%"
                          y2="100%"
                        >
                          <stop offset="0" stop-color="#ffe56c" />
                          <stop offset="1" stop-color="#ffc63a" />
                        </linearGradient>
                        <g
                          fill="none"
                          fill-rule="evenodd"
                          transform="translate(-34 -24)"
                        >
                          <path
                            d="M103.95 258.274c44.362-4.36 60.015-40.391 65.354-94.7s-30.933-103.45-46.02-101.967c-15.089 1.483-63.04 58.905-68.378 113.213-5.338 54.308 4.683 87.815 49.045 83.454z"
                            fill="url(#b)"
                            transform="rotate(-38 137.962 147.099)"
                          />
                          <path
                            d="M275.877 258.274c44.361 4.36 53.167-29.265 47.828-83.573-5.338-54.309-52.073-111.611-67.161-113.094-15.088-1.483-52.575 47.54-47.236 101.848s22.207 90.458 66.569 94.819z"
                            fill="url(#c)"
                            transform="rotate(52 240.026 189.003)"
                          />
                          <path
                            d="M188.37 216.876c39.942 0 50.953-38.252 50.953-97.898C239.323 59.33 201.955.876 188.37.876s-52.047 58.455-52.047 118.102c0 59.646 12.105 97.898 52.047 97.898z"
                            fill="url(#d)"
                            transform="rotate(7 8.977 277.799)"
                          />
                          <path
                            d="M184.473 501C267.593 501 335 476.855 335 367.355S267.592 168 184.473 168C101.355 168 34 257.855 34 367.355S101.355 501 184.473 501z"
                            fill="url(#e)"
                          />
                          <ellipse
                            cx="260.5"
                            cy="335"
                            fill="#eaadcc"
                            rx="21.5"
                            ry="10"
                          />
                          <ellipse
                            cx="102.5"
                            cy="329"
                            fill="#eaadcc"
                            rx="21.5"
                            ry="10"
                            transform="rotate(7 102.5 329)"
                          />
                          <g>
                            <path
                              d="M198.248 331.459c-6.471 5.259-13.945 7.404-22.422 6.435-8.478-.969-14.761-4.487-18.85-10.556"
                              stroke="#000"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="6"
                            />
                            <path
                              d="M114.983 279.418a21.435 21.435 0 0 1 15.414 5.762 21.431 21.431 0 0 1 6.824 14.974 21.433 21.433 0 0 1-5.763 15.414 21.434 21.434 0 0 1-14.975 6.824 21.43 21.43 0 0 1-15.413-5.763 21.434 21.434 0 0 1-6.823-14.975 21.432 21.432 0 0 1 5.762-15.413 21.431 21.431 0 0 1 14.974-6.823z"
                              fill="#000"
                            />
                            <path
                              d="M116.112 297.39a7.001 7.001 0 0 0-13.992.488 7 7 0 0 0 13.992-.489z"
                              fill="#fff"
                            />
                            <path
                              d="M245.253 284.875a21.433 21.433 0 0 1 15.414 5.762 21.432 21.432 0 0 1 6.824 14.974 21.433 21.433 0 0 1-5.763 15.414 21.432 21.432 0 0 1-14.974 6.824 21.433 21.433 0 0 1-15.413-5.763 21.433 21.433 0 0 1-6.824-14.975 21.432 21.432 0 0 1 5.763-15.412 21.433 21.433 0 0 1 14.973-6.824z"
                              fill="#000"
                            />
                            <g fill="#fff">
                              <path
                                d="M134.223 300.259c.356 10.212-7.633 18.778-17.845 19.134-10.21.357-18.776-7.63-19.133-17.843-.356-10.211 7.631-18.777 17.842-19.134 10.212-.357 18.78 7.631 19.136 17.843zm5.996-.21c-.472-13.523-11.818-24.102-25.341-23.63-13.523.473-24.101 11.817-23.63 25.34.473 13.524 11.817 24.103 25.34 23.63 13.524-.471 24.103-11.816 23.631-25.34zM264.492 305.715c.357 10.213-7.63 18.779-17.843 19.135-10.21.357-18.777-7.63-19.134-17.843-.357-10.211 7.632-18.777 17.843-19.134 10.212-.357 18.778 7.631 19.134 17.842zm5.997-.209c-.472-13.523-11.817-24.102-25.34-23.63-13.523.473-24.103 11.817-23.63 25.34.472 13.524 11.817 24.103 25.34 23.63 13.524-.471 24.102-11.816 23.63-25.34z"
                                fill-rule="nonzero"
                                stroke="#fff"
                                stroke-width="3"
                              />
                              <path
                                d="M246.381 302.846a7 7 0 1 0-13.992.49 7 7 0 0 0 13.992-.49z"
                              />
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
          <div
            class="d-md-flex align-items-md-center col-md-6 col-lg-5 order-md-0"
          >
            <div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-rocket"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Vite</h4>
                  <p class="text-muted">
                    Next generation frontend tooling. A build tool that aims to
                    provide a faster and leaner development experience for
                    modern web projects.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fab fa-2x fa-vuejs"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Vue.js 3</h4>
                  <p class="text-muted">
                    The latest version of the popular open source JavaScript
                    framework. An approachable, performant and versatile one for
                    building web user interfaces.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-database"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Pinia</h4>
                  <p class="text-muted">
                    The latest store library for Vue.js 3 based projects which
                    allows you to share a state across components/pages.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Power of Vite -->

    <!-- Trusted By -->
    <div id="one-vue-trusted-by" class="bg-body-light">
      <div class="content py-6">
        <div class="py-5 text-center">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <p>
                <i class="fa fa-5x fa-award text-warning"></i>
              </p>
              <h2 class="h1 fw-bold mb-2">
                Trusted by over 4,900 developers and teams
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                <a href="https://1.envato.market/AVD6j">OneUI</a> is one of the
                Best Seller and Best Rated admin templates on Themeforest. Its
                success made possible the development of Vue Edition.
              </p>
            </div>
          </div>
        </div>
        <div class="row items-push text-center py-4">
          <div class="col-sm-4">
            <div class="h1 fw-bold mb-1">4,900+</div>
            <div class="fw-semibold text-muted">Purchases</div>
          </div>
          <div class="col-sm-4">
            <div class="h1 fw-bold mb-1">280+</div>
            <div class="fw-semibold text-muted">5 Star Ratings</div>
          </div>
          <div class="col-sm-4">
            <div class="h1 fw-bold mb-1">31+</div>
            <div class="fw-semibold text-muted">Free Updates</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Trusted By -->

    <!-- Features -->
    <div id="one-vue-features" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5">
          <div class="row mb-5">
            <div class="col-md-6">
              <h2 class="h1 fw-bold mb-2">
                Sophisticated
                <span class="fw-normal">Features</span>
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                Comes packed with great features and development tools, based on
                OneUI 5 design.
              </p>
            </div>
            <div
              class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end"
            >
              <p class="h1 fw-bold text-body-bg-dark mb-0">
                Carefully Crafted.
              </p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Bootstrap 5 -->
              <div class="item item-rounded bg-amethyst-lighter my-4">
                <i class="fa fa-2x fa-fire text-amethyst"></i>
              </div>
              <h4 class="mb-2">Bootstrap 5</h4>
              <p class="text-muted">
                The latest Bootstrap version now powers OneUI Vue. Amazing new
                features and utilities are ready for you to use.
              </p>
              <!-- END Bootstrap 5 -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Sass -->
              <div class="item item-rounded bg-smooth-lighter my-4">
                <i class="fab fa-2x fa-sass text-smooth"></i>
              </div>
              <h4 class="mb-2">Sass</h4>
              <p class="text-muted">
                OneUI Vue was built with Sass, overriding and extending
                Bootstrap in an intelligent way to ensure a perfect and modular
                workflow.
              </p>
              <!-- END Sass -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- ES6 -->
              <div class="item item-rounded bg-flat-lighter my-4">
                <span class="fw-bold text-flat">ES6</span>
              </div>
              <h4 class="mb-2">ECMAScript 6</h4>
              <p class="text-muted">
                ES6, the new major JavaScript release, is used, which enables us
                writing cleaner and better code.
              </p>
              <!-- END ES6 -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Font Awesome 6 -->
              <div class="item item-rounded bg-warning-light my-4">
                <i class="fab fa-2x fa-font-awesome text-warning"></i>
              </div>
              <h4 class="mb-2">Font Awesome 6</h4>
              <p class="text-muted">
                OneUI Vue comes packed with one of the most popular icon sets,
                bringing you over 2000 freshly made icons for your projects.
              </p>
              <!-- END Font Awesome 6 -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Composition API -->
              <div class="item item-rounded bg-city-lighter my-4">
                <i class="fa fa-2x fa-code text-city"></i>
              </div>
              <h4 class="mb-2">Composition API</h4>
              <p class="text-muted">
                A set of APIs that allows us to author Vue components using
                imported functions instead of declaring options. We are also
                using the <code>&lt;script setup&gt;</code> syntactic sugar.
              </p>
              <!-- END Composition API -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Prettier -->
              <div class="item item-rounded bg-default-lighter my-4">
                <i class="fa fa-2x fa-file-lines text-default"></i>
              </div>
              <h4 class="mb-2">Prettier</h4>
              <p class="text-muted">
                All included files are formatted using the popular opinionated
                code formatter for the best readability and coding pleasure.
              </p>
              <!-- END Prettier -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Lightning Fast HMR -->
              <div class="item item-rounded bg-modern-lighter my-4">
                <i class="fa fa-2x fa-bolt-lightning text-modern"></i>
              </div>
              <h4 class="mb-2">Lightning Fast HMR</h4>
              <p class="text-muted">
                Hot Module Replacement (HMR) that stays fast regardless of app
                size, providing a faster development environment.
              </p>
              <!-- END Lightning Fast HMR -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Autoprefixer -->
              <div class="item item-rounded bg-smooth-lighter my-4">
                <i class="fab fa-2x fa-autoprefixer text-smooth"></i>
              </div>
              <h4 class="mb-2">Autoprefixer</h4>
              <p class="text-muted">
                Peace of mind when working with Sass. Use the latest CSS syntax
                and Autoprefixer will auto add any required prefixes for older
                browsers.
              </p>
              <!-- END Autoprefixer -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Components -->
              <div class="item item-rounded bg-success-light my-4">
                <i class="fa fa-2x fa-truck-loading text-success"></i>
              </div>
              <h4 class="mb-2">Components</h4>
              <p class="text-muted">
                Custom vital components are available to be used in your Vue.js
                templates, making it easier to structure your page content or
                add interactivity.
              </p>
              <!-- END Components -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Improved Design -->
              <div class="item item-rounded bg-info-light my-4">
                <i class="fa fa-2x fa-brush text-info"></i>
              </div>
              <h4 class="mb-2">Improved Design</h4>
              <p class="text-muted">
                Small touches and improvements were introduced throughout the
                template. From colors to layout and from custom elements to
                plugins.
              </p>
              <!-- END Improved Design -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- Dark Mode -->
              <div class="item item-rounded bg-body my-4">
                <i class="fa fa-2x fa-moon text-dark"></i>
              </div>
              <h4 class="mb-2">Dark Mode</h4>
              <p class="text-muted">
                It is finally here and looks amazing! It was made to work with
                all color themes and included pages. Choose between light, dark
                or system preference out of the box.
              </p>
              <!-- END Dark Mode -->
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
              <!-- APIs -->
              <div class="item item-rounded bg-warning-light my-4">
                <i class="fa fa-2x fa-star text-warning"></i>
              </div>
              <h4 class="mb-2">APIs</h4>
              <p class="text-muted">
                Easily manipulate blocks and layout features on the fly from any
                view of your application. Either with buttons or JS code.
              </p>
              <!-- END APIs -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Features -->

    <!-- Reviews -->
    <div id="one-vue-reviews" class="bg-body-light">
      <div class="content content-full">
        <div class="py-5">
          <div class="row mb-5">
            <div class="col-md-6">
              <h2 class="h1 fw-bold mb-2">
                Real Customer
                <span class="fw-normal">Reviews</span>
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                Check out what web developers and people in tech have written
                about the main OneUI framework.
              </p>
            </div>
            <div
              class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end"
            >
              <p class="h1 fw-bold text-body-bg-dark mb-0">Truly Loved.</p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                A combination of flexibility and ease of use. The design is
                beautiful, but I really value the ease in which I was able to
                integrate this into my development workflow and platform.
              </p>
              <p class="fs-sm fw-medium">
                For Other by
                <span class="fw-semibold">appeality</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                While reading the docs i can feel that you literally gave your
                heart to create this project. It is a high quality piece of
                work, thanks for sharing it!
              </p>
              <p class="fs-sm fw-medium">
                For Code Quality by
                <span class="fw-semibold">msagi</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                This is my first purchase on Themeforest and I am delighted.
                Everything from the design to the code is beautifully crafted
                and the customer support is great also. Congratulations
                pixelcave.
              </p>
              <p class="fs-sm fw-medium">
                For Customizability by
                <span class="fw-semibold">CaravelaThemes</span>
              </p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                One of the most well thought-through and comprehensive
                Themeforest templates available. Consistently excellent design
                and broad feature base. Highly Recommended!
              </p>
              <p class="fs-sm fw-medium">
                For Feature Availability by
                <span class="fw-semibold">stephenhird</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                One of the best paid for downloads I have ever made. Has so many
                features which have all been designed and put together
                absolutely brilliantly.
              </p>
              <p class="fs-sm fw-medium">
                For Design Quality by
                <span class="fw-semibold">weblid</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                This is hands down the best template I have ever come across. It
                has absolutely everything you need right there laid out and easy
                to find. I couldn't recommend this template enough!
              </p>
              <p class="fs-sm fw-medium">
                For Feature Availability by
                <span class="fw-semibold">dhowa021</span>
              </p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                After using this Admin template for 6 months...we are still
                delighted. This template has everything. It has obviously been
                designed with much care and detail. Very intuitive, Easy to use.
                And we're still finding functionality that we hadn't discovered
                before. Well done to the developer and thanks for putting your
                heart-and-soul into this template.
              </p>
              <p class="fs-sm fw-medium">
                For Other by
                <span class="fw-semibold">conorhannah</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                This is the best UI I have ever came across, this UI theme is
                absolutely perfect in Every Way :) Really happy with the
                purchase.
              </p>
              <p class="fs-sm fw-medium">
                For Other by
                <span class="fw-semibold">spmtumblr</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                I have spent two days researching admin themes. There are a
                couple of really good ones out there, but this one came out at
                the very top for me. Looks great, on both desktop and mobile,
                the feature set is amazing, the documentation looks very good. I
                haven't started implementing yet, but this deserves five stars
                already.
              </p>
              <p class="fs-sm fw-medium">
                For Design Quality by
                <span class="fw-semibold">dvartok</span>
              </p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                This is one of the best all-around packages I've purchased from
                ThemeForest. Not only is the Documentation is excellent and
                well-written, but the code itself is intelligently built and a
                pleasure to work with. Thanks for doing such great work.
              </p>
              <p class="fs-sm fw-medium">
                For Other by
                <span class="fw-semibold">rshaffaf</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                The best admin template ever, no doubt of it!!
              </p>
              <p class="fs-sm fw-medium">
                For Other by
                <span class="fw-semibold">kaladrian</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                Easily the best admin template you can find.
              </p>
              <p class="fs-sm fw-medium">
                For Code Quality by
                <span class="fw-semibold">nozebra_dk</span>
              </p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                Everything's perfect! Good design! Best performance I've ever
                use! And the best thing, fastest support I've seen! 5 star
                satisfaction!
              </p>
              <p class="fs-sm fw-medium">
                For Customer Support by
                <span class="fw-semibold">arkheacol04</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                This is an amazing, multi purpose, and very well designed and
                structured template. I rarely write a review but this template
                deserves the support. It is distinguished.
              </p>
              <p class="fs-sm fw-medium">
                For Design Quality by
                <span class="fw-semibold">maa83</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                Long story short: I really enjoy using the templates made by
                pixelcave. The code is very flexible and well structured, the
                documentation is very good - everything you need.
              </p>
              <p class="fs-sm fw-medium">
                For Code Quality by
                <span class="fw-semibold">Master_rg</span>
              </p>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                It's awesome, not only the design is marvelous, the code and
                documentation helps easy customization.
              </p>
              <p class="fs-sm fw-medium">
                For Design Quality by
                <span class="fw-semibold">alperaydyn2</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                Awesome !!! Thanks for a so great template !!
              </p>
              <p class="fs-sm fw-medium">
                For Feature Availability by
                <span class="fw-semibold">Markuitos</span>
              </p>
            </div>
            <div class="col-md-4">
              <div
                class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2"
              >
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
              </div>
              <p class="text-muted mb-2">
                Awesome code, works really well, well documented!
              </p>
              <p class="fs-sm fw-medium">
                For Flexibility by
                <span class="fw-semibold">corverdevelopment</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Reviews -->

    <!-- Call To Action -->
    <div id="one-vue-call-to-action" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5 py-md-8 text-center">
          <h2 class="fw-bold mb-2">
            Crafted with
            <i class="fa fa-fw fa-heart text-city"></i> by
            <a class="link-fx" href="https://1.envato.market/ydb">pixelcave</a>
          </h2>
          <p class="fs-lg fw-medium text-muted mb-4">
            Passionate web design and development with over 15,000 customers
            worldwide.
          </p>
          <a
            class="btn btn-success py-2 px-3 m-1"
            href="https://1.envato.market/5Noyb"
            v-click-ripple
          >
            <i class="fa fa-fw fa-shopping-cart opacity-50"></i>
            <span class="ms-2">Purchase</span>
          </a>
          <RouterLink
            :to="{ name: 'backend-dashboard' }"
            class="btn btn-primary py-2 px-3 m-1"
            v-click-ripple
          >
            <i class="fa fa-fw fa-desktop opacity-50 me-1"></i> Live preview
          </RouterLink>
        </div>
      </div>
    </div>
    <!-- END Call To Action -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
      <div class="content py-5">
        <div class="row fs-sm fw-medium">
          <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
            Crafted with
            <i class="fa fa-heart text-danger"></i> by
            <a class="fw-semibold" href="https://1.envato.market/ydb"
              >pixelcave</a
            >
          </div>
          <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
            <a class="fw-semibold" href="https://1.envato.market/5Noyb">{{
              store.app.name + " " + store.app.version
            }}</a>
            &copy; {{ store.app.copyright }}
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->
  </div>
</template>
