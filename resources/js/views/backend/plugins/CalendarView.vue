<script setup>
import { ref, reactive, onMounted } from "vue";

// FullCalendar, for more info and examples you can check out https://fullcalendar.io/
import "@fullcalendar/core/vdom"; // solves problem with Vite
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin, { Draggable } from "@fullcalendar/interaction";
import listPlugin from "@fullcalendar/list";

// Helper variables
const fullCalendar = ref(null);
const inputAddEvent = ref(null);

// Calendar options, variables and events
const calendarOptions = reactive({
  events: [],
  plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin, listPlugin],
  firstDay: 1,
  editable: true,
  droppable: true,
  headerToolbar: {
    left: "title",
    right: "prev,next today dayGridMonth,timeGridWeek,timeGridDay,listWeek",
  },
  dateClick: handleDateClick,
  eventDrop: handleEventDrop,
  eventReceive: handleExternalDrop,
});

const calendarNewEvent = ref(null);
const calendarNewEvents = reactive([
  {
    title: "Codename X",
    color: "info",
  },
  {
    title: "Weekend Adventure",
    color: "success",
  },
  {
    title: "Project Mars",
    color: "info",
  },
  {
    title: "Meeting",
    color: "warning",
  },
  {
    title: "Walk the dog",
    color: "success",
  },
  {
    title: "Al schedule",
    color: "info",
  },
  {
    title: "Cinema",
    color: "success",
  },
  {
    title: "Project X",
    color: "danger",
  },
  {
    title: "Skype Meeting",
    color: "warning",
  },
]);

// Init Calendar
// Get current year, month and day
let date = new Date();

let y = date.getFullYear();
let m = date.getMonth();
let d = date.getDate();

// Populate calendar with predefined events
calendarOptions.events = [
  {
    title: "Gaming Day",
    start: new Date(y, m, 1),
    allDay: true,
  },
  {
    title: "Skype Meeting",
    start: new Date(y, m, 3),
  },
  {
    title: "Project X",
    start: new Date(y, m, 9),
    end: new Date(y, m, 12),
    allDay: true,
    color: "#e04f1a",
  },
  {
    title: "Work",
    start: new Date(y, m, 17),
    end: new Date(y, m, 19),
    allDay: true,
    color: "#82b54b",
  },
  {
    id: 999,
    title: "Hiking (repeated)",
    start: new Date(y, m, d - 1, 15, 0),
  },
  {
    id: 999,
    title: "Hiking (repeated)",
    start: new Date(y, m, d + 3, 15, 0),
  },
  {
    title: "Landing Template",
    start: new Date(y, m, d - 3),
    end: new Date(y, m, d - 3),
    allDay: true,
    color: "#ffb119",
  },
  {
    title: "Lunch",
    start: new Date(y, m, d + 7, 15, 0),
    color: "#82b54b",
  },
  {
    title: "Coding",
    start: new Date(y, m, d, 8, 0),
    end: new Date(y, m, d, 14, 0),
  },
  {
    title: "Trip",
    start: new Date(y, m, 25),
    end: new Date(y, m, 27),
    allDay: true,
    color: "#ffb119",
  },
  {
    title: "Reading",
    start: new Date(y, m, d + 8, 20, 0),
    end: new Date(y, m, d + 8, 22, 0),
  },
  {
    title: "Follow us on Twitter",
    start: new Date(y, m, 22),
    allDay: true,
    url: "http://twitter.com/pixelcave",
    color: "#3c90df",
  },
];

// Add new event data to the calendar on date click
function handleDateClick(arg) {
  if (confirm("Would you like to add an event to " + arg.dateStr + " ?")) {
    calendarOptions.events.push({
      title: "New Event",
      start: arg.date,
      allDay: arg.allDay,
    });
  }
}

// When dropping an existing event to another date
function handleEventDrop(eventDropInfo) {
  window.console.log(eventDropInfo);
}

// When dropping an external event and is added to the calendar
function handleExternalDrop(info) {
  window.console.log(info);
}

// Add event form submission
function addNewEvent() {
  if (calendarNewEvent.value) {
    // Add the event to the draggable list
    calendarNewEvents.unshift({
      title: calendarNewEvent.value,
      color: "info",
    });

    // Reset and focus the input
    calendarNewEvent.value = "";
    inputAddEvent.value.focus();
  }
}

// Init draggable calendar events on content load
onMounted(() => {
  new Draggable(document.getElementById("js-events"), {
    itemSelector: ".js-event",
    eventData(eventEl) {
      return {
        title: eventEl.textContent,
        backgroundColor: getComputedStyle(eventEl).color,
        borderColor: getComputedStyle(eventEl).color,
      };
    },
  });
});
</script>

<style lang="scss">
// FullCalendar custom overrides
@import "@/assets/scss/vendor/fullcalendar";
</style>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Calendar"
    subtitle="A solid foundation to build your calendar based web application. Powered by FullCalendar."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Calendar</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Calendar -->
    <BaseBlock>
      <div class="row items-push">
        <div class="col-md-8 col-lg-7 col-xl-9">
          <!-- Calendar Container -->
          <FullCalendar
            ref="fullCalendar"
            :options="calendarOptions"
          ></FullCalendar>
        </div>
        <div class="col-md-4 col-lg-5 col-xl-3">
          <!-- Add Event Form -->
          <form class="push" @submit.prevent="addNewEvent">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Add Event.."
                v-model="calendarNewEvent"
                ref="inputAddEvent"
              />
              <span class="input-group-text">
                <i class="fa fa-fw fa-plus-circle"></i>
              </span>
            </div>
          </form>
          <!-- END Add Event Form -->

          <!-- Event List -->
          <ul id="js-events" class="list list-events">
            <li
              v-for="(event, index) in calendarNewEvents"
              :key="`events-${index}`"
            >
              <div
                class="js-event p-2 fs-sm fw-medium rounded"
                :class="`bg-${event.color}-light text-${event.color}`"
              >
                {{ event.title }}
              </div>
            </li>
          </ul>
          <div class="text-center">
            <p class="fs-sm text-muted">
              <i class="fa fa-arrows-alt"></i> Drag and drop events on the
              calendar
            </p>
          </div>
          <!-- END Event List -->
        </div>
      </div>
    </BaseBlock>
    <!-- END Calendar -->
  </div>
  <!-- END Page Content -->
</template>
