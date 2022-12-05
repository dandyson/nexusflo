<script setup>
import { reactive, ref, onMounted, onBeforeUnmount } from "vue";

// Flatpickr, for more info and examples you can check out https://github.com/ankurk91/vue-flatpickr-component
import FlatPickr from "vue-flatpickr-component";

// Vue Color, for more info and examples you can check out https://github.com/ckpack/vue-color
import {
  Chrome,
  Photoshop,
  Sketch,
  Slider,
  Swatches,
  Material,
  Compact,
} from "@ckpack/vue-color";

// Vue Select, for more info and examples you can check out https://github.com/sagalbot/vue-select
import VueSelect from "vue-select";

// Vueform Slider, for more info and examples you can check out https://github.com/vueform/slider
import VueformSlider from "@vueform/slider";

// Dropzone, from more info and examples you can check out https://github.com/dropzone/dropzone
import Dropzone from "dropzone";

// Flatpickr variables
const flatPickrState = reactive({
  // Initial values
  dateDefault: null,
  dateCustom: null,
  dateFriendly: null,
  dateRange: null,
  timeStandalone: null,
  timeStandalone24: null,
  timeDateTime: null,
  timeDateTime24: null,
  inlineDefault: null,
  inlineTime: null,

  // Configuration, get more form https://chmln.github.io/flatpickr/options/
  configCustom: { dateFormat: "d-m-Y" },
  configFriendly: { dateFormat: "F j, Y" },
  configRange: { mode: "range", minDate: "today" },
  configTimeStandalone: {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
  },
  configTimeStandalone24: {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
  },
  configDateTime: { enableTime: true },
  configDateTime24: { enableTime: true, time_24hr: true },
  configInlineDefault: { inline: true },
  configInlineTime: { inline: true, enableTime: true },
});

// Vue Color variables
const vueColorState = reactive({
  colors: "#5c80d1",
});

// Custom Input Maxlength variables
const maxLength = reactive({
  max: 20,
  maxValue: "",
  max2: 30,
  maxValue2: "",
  max3: 40,
  maxValue3: "",
});

// Vue Select initial values
const vueSelectState = reactive({
  options: [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL",
    "Ruby",
    "Angular",
    "React",
    "Vue.js",
  ],
  optionsSelected: null,
  optionsMultiple: [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL",
    "Ruby",
    "Angular",
    "React",
    "Vue.js",
  ],
  optionsMultipleSelected: null,
});

// Vueform Slider
const vueformSliderState = reactive({
  valNormal: 50,
  valMinMax: 212,
  valMarks: 1000,
  valDouble: [200, 800],
  valNegative: [-150, 150],
  valStep: [-250, 250],
});

// Dropzone variables
const dropzone = ref(null);

// Init Dropzone when content is loaded
onMounted(() => {
  dropzone.value = new Dropzone("#dropzoneForm", {
    url: "https://httpbin.org/post",
  });

  dropzone.value.on("addedfile", (file) => {
    console.log(`File added: ${file.name}`);
  });
});

// Detroy dropzone instance before leaving the page
onBeforeUnmount(() => {
  dropzone.value.destroy();
});
</script>

<style lang="scss">
// Flatpickr + Custom overrides
@import "flatpickr/dist/flatpickr.css";
@import "@/assets/scss/vendor/flatpickr";

// Vue Color Custom overrides
@import "@/assets/scss/vendor/vue-color";

// Vue Select + Custom overrides
@import "vue-select/src/scss/vue-select";
@import "@/assets/scss/vendor/vue-select";

// Vue Form Slider + Custom overrides
@import "@vueform/slider/themes/default.css";
@import "@/assets/scss/vendor/vueform-slider";

// Dropzone + Custom overrides
@import "dropzone/dist/dropzone.css";
@import "@/assets/scss/vendor/dropzone";
</style>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Form Plugins"
    subtitle="Carefully integrated JS plugins that will enhance your forms with great features."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Forms</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Plugins</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Flatpickr Datetimepicker -->
    <BaseBlock title="Flatpickr Datetimepicker" content-full>
      <form @submit.prevent>
        <h2 class="content-heading border-bottom mb-4 pb-2">Datepickers</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              You can easily change the date format to match your preference
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row mb-4">
              <div class="col-xl-7">
                <label class="form-label" for="example-flatpickr-default"
                  >Default format</label
                >
                <FlatPickr
                  id="example-flatpickr-default"
                  class="form-control"
                  placeholder="Y-m-d"
                  v-model="flatPickrState.dateDefault"
                />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-7">
                <label class="form-label" for="example-flatpickr-custom"
                  >Custom format</label
                >
                <FlatPickr
                  id="example-flatpickr-custom"
                  class="form-control"
                  placeholder="d-m-Y"
                  v-model="flatPickrState.dateCustom"
                  :config="flatPickrState.configCustom"
                />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-7">
                <label class="form-label" for="example-flatpickr-friendly"
                  >Friendly format</label
                >
                <FlatPickr
                  id="example-flatpickr-friendly"
                  class="form-control"
                  placeholder="F j, Y"
                  v-model="flatPickrState.dateFriendly"
                  :config="flatPickrState.configFriendly"
                />
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading border-bottom mb-4 pb-2">
          Datepicker Range
        </h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              A date range mode is available, very useful for booking or
              calendar web apps
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row mb-4">
              <div class="col-xl-7">
                <FlatPickr
                  id="example-flatpickr-range"
                  class="form-control"
                  placeholder="Select Date Range"
                  v-model="flatPickrState.dateRange"
                  :config="flatPickrState.configRange"
                />
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading border-bottom mb-4 pb-2">Timepicker</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              You can also enable a standalone or integrated timepicker
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row mb-4">
              <div class="col-xl-7">
                <label
                  class="form-label"
                  for="example-flatpickr-time-standalone"
                  >Standalone</label
                >
                <FlatPickr
                  id="example-flatpickr-time-standalone"
                  class="form-control"
                  v-model="flatPickrState.timeStandalone"
                  :config="flatPickrState.configTimeStandalone"
                />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-7">
                <label
                  class="form-label"
                  for="example-flatpickr-time-standalone-24"
                  >Standalone (24-hour format)</label
                >
                <FlatPickr
                  id="example-flatpickr-time-standalone-24"
                  class="form-control"
                  v-model="flatPickrState.timeStandalone24"
                  :config="flatPickrState.configTimeStandalone24"
                />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-7">
                <label class="form-label" for="example-flatpickr-datetime"
                  >Calendar and time picker</label
                >
                <FlatPickr
                  id="example-flatpickr-datetime"
                  class="form-control"
                  v-model="flatPickrState.timeDateTime"
                  :config="flatPickrState.configDateTime"
                />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-7">
                <label class="form-label" for="example-flatpickr-datetime-24"
                  >Calendar and time picker (24-hour format)</label
                >
                <FlatPickr
                  id="example-flatpickr-datetime24"
                  class="form-control"
                  v-model="flatPickrState.timeDateTime24"
                  :config="flatPickrState.configDateTime24"
                />
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading border-bottom mb-4 pb-2">Inline Mode</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              The plugin also supports an inline mode
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row mb-4">
              <div class="col-xl-7">
                <FlatPickr
                  id="example-flatpickr-inline"
                  class="form-control"
                  placeholder="Inline Datepicker"
                  v-model="flatPickrState.inlineDefault"
                  :config="flatPickrState.configInlineDefault"
                />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-7">
                <FlatPickr
                  id="example-flatpickr-inline-time"
                  class="form-control"
                  placeholder="Inline Datetimepicker"
                  v-model="flatPickrState.inlineTime"
                  :config="flatPickrState.configInlineTime"
                />
              </div>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END Flatpickr Datetimepicker -->

    <!-- Vue Color -->
    <BaseBlock title="Vue Color" content-full>
      <form @submit.prevent>
        <!-- Colorpickers -->
        <h2 class="content-heading border-bottom mb-4 pb-2">Colorpickers</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Chrome variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <chrome v-model="vueColorState.colors"></chrome>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Photoshop variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <div class="overflow-auto">
                <Photoshop v-model="vueColorState.colors" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Sketch variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <Sketch v-model="vueColorState.colors" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Slider variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <Slider
                v-model="vueColorState.colors"
                style="width: 260px"
              ></Slider>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Swatches variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <Swatches v-model="vueColorState.colors" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Material variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <Material v-model="vueColorState.colors" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">Compact variation</p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <Compact v-model="vueColorState.colors" />
            </div>
          </div>
        </div>
        <!-- END Colorpickers -->
      </form>
    </BaseBlock>
    <!-- END Vue Color -->

    <!-- Custom Input Maxlength -->
    <BaseBlock title="Custom Input Maxlength" content-full>
      <form @submit.prevent>
        <!-- Examples -->
        <h2 class="content-heading border-bottom mb-4 pb-2">Examples</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              You can easily set a max character length with live feedback to
              your inputs
            </p>
          </div>
          <div class="col-lg-8 col-xl-4">
            <div class="mb-4">
              <label class="form-label" for="example-maxlength-group"
                >Input Group</label
              >
              <div class="input-group">
                <input
                  type="email"
                  class="form-control"
                  id="example-maxlength-group"
                  v-model="maxLength.maxValue"
                  :maxlength="maxLength.max"
                />
                <span
                  class="input-group-text"
                  v-text="maxLength.max - maxLength.maxValue.length"
                ></span>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-maxlength-feedback-visible"
                >Visible feedback</label
              >
              <input
                type="text"
                class="form-control"
                id="example-maxlength-feedback-visible"
                v-model="maxLength.maxValue2"
                :maxlength="maxLength.max2"
              />
              <p
                class="text-danger fs-sm bg-danger-light rounded p-2 mt-2 mb-0"
              >
                {{ maxLength.max2 - maxLength.maxValue2.length }}
                characters left
              </p>
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-maxlength-feedback-fadein"
                >Fade in feedback</label
              >
              <input
                type="text"
                class="form-control"
                id="example-maxlength-feedback-fadein"
                v-model="maxLength.maxValue3"
                :maxlength="maxLength.max3"
              />
              <p
                class="animated fadeInDown fs-sm text-muted mt-2 mb-0"
                v-if="
                  maxLength.max3 - maxLength.maxValue3.length < maxLength.max3
                "
              >
                {{ maxLength.max3 - maxLength.maxValue3.length }}
                characters left
              </p>
            </div>
          </div>
        </div>
        <!-- END Examples -->
      </form>
    </BaseBlock>
    <!-- END Custom Input Maxlength -->

    <!-- Vue Select -->
    <BaseBlock title="Vue Select" content-full>
      <form @submit.prevent>
        <!-- Normal Select Box -->
        <h2 class="content-heading border-bottom mb-4 pb-2">
          Normal Select Box
        </h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Default select input turns into a dynamic list
            </p>
          </div>
          <div class="col-lg-8 col-xl-4">
            <div class="mb-4">
              <VueSelect
                v-model="vueSelectState.optionsSelected"
                :options="vueSelectState.optionsMultiple"
                placeholder="Choose a value.."
              ></VueSelect>
            </div>
          </div>
        </div>
        <!-- END Normal Select Box -->

        <!-- Multiple Select Box -->
        <h2 class="content-heading border-bottom mb-4 pb-2">
          Multiple Select Box
        </h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Default multiple select input turns into a tags input
            </p>
          </div>
          <div class="col-lg-8 col-xl-4">
            <div class="mb-4">
              <VueSelect
                multiple
                v-model="vueSelectState.optionsMultipleSelected"
                :options="vueSelectState.optionsMultiple"
                placeholder="Choose multiple values.."
              ></VueSelect>
            </div>
          </div>
        </div>
        <!-- END Multiple Select Box -->
      </form>
    </BaseBlock>
    <!-- END Vue Select -->

    <!-- Vue Form Slider -->
    <BaseBlock title="Vueform Slider">
      <!-- Examples -->
      <div class="row push">
        <div class="col-lg-4">
          <p class="fs-sm text-muted">A highly customized slider component</p>
        </div>
        <div class="col-lg-8 col-xl-6">
          <div class="mb-4">
            <label class="form-label">Normal</label>
            <div class="py-4">
              <VueformSlider v-model="vueformSliderState.valNormal" />
              <div
                class="d-flex justify-content-between align-items-center fs-sm text-muted py-2"
              >
                <span>0</span>
                <span>100</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label">MinMax</label>
            <div class="py-4">
              <VueformSlider
                v-model="vueformSliderState.valMinMax"
                :min="0"
                :max="1000"
              />
              <div
                class="d-flex justify-content-between align-items-center fs-sm text-muted py-2"
              >
                <span>0</span>
                <span>1000</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label">Marks</label>
            <div class="py-4">
              <VueformSlider
                v-model="vueformSliderState.valMarks"
                :min="0"
                :max="1000"
              />
              <div
                class="d-flex justify-content-between align-items-center fs-sm text-muted py-2"
              >
                <span>0</span>
                <span>250</span>
                <span>500</span>
                <span>750</span>
                <span>1000</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label">Double</label>
            <div class="py-4">
              <VueformSlider
                v-model="vueformSliderState.valDouble"
                :min="0"
                :max="1000"
              />
              <div
                class="d-flex justify-content-between align-items-center fs-sm text-muted py-2"
              >
                <span>0</span>
                <span>250</span>
                <span>500</span>
                <span>750</span>
                <span>1000</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label">Negative</label>
            <div class="py-4">
              <VueformSlider
                v-model="vueformSliderState.valNegative"
                :min="-500"
                :max="500"
              />
              <div
                class="d-flex justify-content-between align-items-center fs-sm text-muted py-2"
              >
                <span>-500</span>
                <span>-250</span>
                <span>0</span>
                <span>250</span>
                <span>500</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label">Step (50)</label>
            <div class="py-4">
              <VueformSlider
                v-model="vueformSliderState.valStep"
                :min="-500"
                :max="500"
                :step="50"
              />
              <div
                class="d-flex justify-content-between align-items-center fs-sm text-muted py-2"
              >
                <span>-500</span>
                <span>-250</span>
                <span>0</span>
                <span>250</span>
                <span>500</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Examples -->
    </BaseBlock>
    <!-- END Vue Form Slider -->

    <!-- Dropzone -->
    <BaseBlock title="Dropzone" content-full>
      <!-- Example -->
      <h2 class="content-heading border-bottom mb-4 pb-2">
        Asynchronous File Uploads
      </h2>
      <div class="row push">
        <div class="col-lg-4">
          <p class="fs-sm text-muted">
            Drag and drop sections for your file uploads
          </p>
        </div>
        <div class="col-lg-8 col-xl-6">
          <form id="dropzoneForm" class="dropzone"></form>
        </div>
      </div>
      <!-- END Example -->
    </BaseBlock>
    <!-- END Dropzone -->
  </div>
  <!-- END Page Content -->
</template>
