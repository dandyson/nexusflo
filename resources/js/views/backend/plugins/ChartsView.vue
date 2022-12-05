<script setup>
import { reactive } from "vue";

// vue-chart-3, for more info and examples you can check out https://vue-chart-3.netlify.app/ and http://www.chartjs.org/docs/ -->
import {
  LineChart,
  BarChart,
  RadarChart,
  PolarAreaChart,
  PieChart,
  DoughnutChart,
} from "vue-chart-3";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

// Set Global Chart.js configuration
Chart.defaults.color = "#818d96";
Chart.defaults.font.weight = "600";
Chart.defaults.scale.grid.color = "rgba(0, 0, 0, .05)";
Chart.defaults.scale.grid.zeroLineColor = "rgba(0, 0, 0, .1)";
Chart.defaults.scale.beginAtZero = true;
Chart.defaults.elements.line.borderWidth = 2;
Chart.defaults.elements.point.radius = 4;
Chart.defaults.elements.point.hoverRadius = 6;
Chart.defaults.plugins.tooltip.radius = 3;
Chart.defaults.plugins.legend.labels.boxWidth = 15;

// Chart data
const chartLinesBarsRadarData = reactive({
  labels: ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"],
  datasets: [
    {
      label: "Last Week",
      fill: true,
      backgroundColor: "rgba(171, 227, 125, .5)",
      borderColor: "rgba(171, 227, 125, 1)",
      pointBackgroundColor: "rgba(171, 227, 125, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(171, 227, 125, 1)",
      data: [15, 16, 20, 25, 23, 25, 32],
    },
    {
      label: "This Week",
      fill: true,
      backgroundColor: "rgba(0, 0, 0, .1)",
      borderColor: "rgba(0, 0, 0, .3)",
      pointBackgroundColor: "rgba(0, 0, 0, .3)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(0, 0, 0, .3)",
      data: [30, 32, 40, 45, 43, 38, 55],
    },
  ],
});

const chartPolarPieDonutData = reactive({
  labels: ["Earnings", "Sales", "Tickets"],
  datasets: [
    {
      data: [48, 26, 26],
      backgroundColor: [
        "rgba(171, 227, 125, 1)",
        "rgba(250, 219, 125, 1)",
        "rgba(117, 176, 235, 1)",
      ],
      hoverBackgroundColor: [
        "rgba(171, 227, 125, .75)",
        "rgba(250, 219, 125, .75)",
        "rgba(117, 176, 235, .75)",
      ],
    },
  ],
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Charts"
    subtitle="Showcase your important data in a meaningful and empowering way."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Charts</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <h2 class="content-heading">Chart.js</h2>
    <div class="row">
      <div class="col-xl-6">
        <!-- Lines Chart -->
        <BaseBlock title="Lines" content-full content-class="text-center">
          <div class="py-3">
            <LineChart
              :chart-data="chartLinesBarsRadarData"
              :options="{ tension: 0.4 }"
            />
          </div>
        </BaseBlock>
        <!-- END Lines Chart -->
      </div>
      <div class="col-xl-6">
        <!-- Bars Chart -->
        <BaseBlock title="Bars" content-full content-class="text-center">
          <div class="py-3">
            <BarChart :chart-data="chartLinesBarsRadarData" />
          </div>
        </BaseBlock>
        <!-- END Bars Chart -->
      </div>
      <div class="col-xl-6">
        <!-- Radar Chart -->
        <BaseBlock title="Radar" content-full content-class="text-center">
          <div class="py-3 px-xxl-7">
            <RadarChart :chart-data="chartLinesBarsRadarData" />
          </div>
        </BaseBlock>
        <!-- END Radar Chart -->
      </div>
      <div class="col-xl-6">
        <!-- Polar Area Chart -->
        <BaseBlock title="Polar Area" content-full content-class="text-center">
          <div class="py-3 px-xxl-7">
            <PolarAreaChart :chart-data="chartPolarPieDonutData" />
          </div>
        </BaseBlock>
        <!-- END Polar Area Chart -->
      </div>
      <div class="col-xl-6">
        <!-- Pie Chart -->
        <BaseBlock title="Pie" content-full content-class="text-center">
          <div class="py-3 px-xxl-7">
            <PieChart :chart-data="chartPolarPieDonutData" />
          </div>
        </BaseBlock>
        <!-- END Pie Chart -->
      </div>
      <div class="col-xl-6">
        <!-- Donut Chart -->
        <BaseBlock title="Donut" content-full content-class="text-center">
          <div class="py-3 px-xxl-7">
            <DoughnutChart :chart-data="chartPolarPieDonutData" />
          </div>
        </BaseBlock>
        <!-- END Donut Chart -->
      </div>
    </div>
    <!-- END Chart.js Charts -->
  </div>
  <!-- END Page Content -->
</template>
