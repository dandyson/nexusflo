<script setup>
import { reactive } from "vue";

// vue-chart-3, for more info and examples you can check out https://vue-chart-3.netlify.app/ and http://www.chartjs.org/docs/ -->
import { LineChart } from "vue-chart-3";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

// Set Global Chart.js configuration
Chart.defaults.color = "#818d96";
Chart.defaults.scale.display = false;
Chart.defaults.scale.beginAtZero = true;
Chart.defaults.elements.point.radius = 0;
Chart.defaults.elements.point.hoverRadius = 0;
Chart.defaults.plugins.tooltip.radius = 3;
Chart.defaults.plugins.legend.labels.boxWidth = 12;

// Chart Earnings data
const earningsData = reactive({
  labels: [
    "JAN",
    "FEB",
    "MAR",
    "APR",
    "MAY",
    "JUN",
    "JUL",
    "AUG",
    "SEP",
    "OCT",
    "NOV",
    "DEC",
  ],
  datasets: [
    {
      label: "This Year",
      fill: true,
      backgroundColor: "rgba(132, 94, 247, .3)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(132, 94, 247, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(132, 94, 247, 1)",
      data: [
        2150, 1350, 1560, 980, 1260, 1720, 1115, 1690, 1870, 2420, 2100, 2730,
      ],
    },
    {
      label: "Last Year",
      fill: true,
      backgroundColor: "rgba(33, 37, 41, .15)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(33, 37, 41, .3)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(33, 37, 41, .3)",
      data: [
        2200, 1700, 1100, 1900, 1680, 2560, 1340, 1450, 2000, 2500, 1550, 1880,
      ],
    },
  ],
});

// Chart Earnings options
const earningsOptions = reactive({
  maintainAspectRatio: false,
  tension: 0.4,
  scales: {
    y: {
      suggestedMin: 0,
      suggestedMax: 3000,
    },
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    tooltip: {
      callbacks: {
        label: function (context) {
          return " $" + context.parsed.y;
        },
      },
    },
  },
});

// Chart Sales data
const salesData = reactive({
  labels: [
    "JAN",
    "FEB",
    "MAR",
    "APR",
    "MAY",
    "JUN",
    "JUL",
    "AUG",
    "SEP",
    "OCT",
    "NOV",
    "DEC",
  ],
  datasets: [
    {
      label: "This Year",
      fill: true,
      backgroundColor: "rgba(34, 184, 207, .3)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(34, 184, 207, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(34, 184, 207, 1)",
      data: [175, 120, 169, 82, 135, 169, 132, 130, 192, 230, 215, 260],
    },
    {
      label: "Last Year",
      fill: true,
      backgroundColor: "rgba(33, 37, 41, .15)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(33, 37, 41, .3)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(33, 37, 41, .3)",
      data: [220, 170, 110, 215, 168, 227, 154, 135, 210, 240, 145, 178],
    },
  ],
});

// Chart Sales options
const salesOptions = reactive({
  maintainAspectRatio: false,
  tension: 0.4,
  scales: {
    y: {
      suggestedMin: 0,
      suggestedMax: 260,
    },
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    tooltip: {
      callbacks: {
        label: function (context) {
          return context.parsed.y + " Sales";
        },
      },
    },
  },
});
</script>

<template>
  <!-- Page Content -->
  <div class="content">
    <!-- Stats -->
    <div class="row">
      <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <BaseBlock tag="a" link-pop content-full href="javascript:void(0)">
          <div class="fs-sm fw-semibold text-uppercase text-muted">
            Visitors
          </div>
          <div class="fs-2 fw-normal text-dark">120,580</div>
        </BaseBlock>
      </div>
      <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <BaseBlock tag="a" link-pop content-full href="javascript:void(0)">
          <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
          <div class="fs-2 fw-normal text-dark">150</div>
        </BaseBlock>
      </div>
      <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <BaseBlock tag="a" link-pop content-full href="javascript:void(0)">
          <div class="fs-sm fw-semibold text-uppercase text-muted">
            Earnings
          </div>
          <div class="fs-2 fw-normal text-dark">$3,200</div>
        </BaseBlock>
      </div>
      <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <BaseBlock tag="a" link-pop content-full href="javascript:void(0)">
          <div class="fs-sm fw-semibold text-uppercase text-muted">
            Avg Sale
          </div>
          <div class="fs-2 fw-normal text-dark">$21</div>
        </BaseBlock>
      </div>
    </div>
    <!-- END Stats -->

    <!-- Dashboard Charts -->
    <div class="row">
      <div class="col-lg-6">
        <BaseBlock title="Earnings in $">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <template #content>
            <div class="block-content p-0 text-center">
              <div class="pt-3">
                <LineChart
                  :chart-data="earningsData"
                  :options="earningsOptions"
                  style="height: 350px"
                />
              </div>
            </div>
            <div class="block-content">
              <div class="row items-push text-center py-3">
                <div class="col-6 col-xl-3">
                  <i class="fa fa-wallet fa-2x text-muted"></i>
                  <div class="text-muted mt-3">$148,000</div>
                </div>
                <div class="col-6 col-xl-3">
                  <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                  <div class="text-muted mt-3">+9% Earnings</div>
                </div>
                <div class="col-6 col-xl-3">
                  <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                  <div class="text-muted mt-3">+20% Tickets</div>
                </div>
                <div class="col-6 col-xl-3">
                  <i class="fa fa-users fa-2x text-muted"></i>
                  <div class="text-muted mt-3">+46% Clients</div>
                </div>
              </div>
            </div>
          </template>
        </BaseBlock>
      </div>
      <div class="col-lg-6">
        <BaseBlock title="Sales">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <template #content>
            <div class="block-content p-0 text-center">
              <div class="pt-3">
                <LineChart
                  :chart-data="salesData"
                  :options="salesOptions"
                  style="height: 350px"
                />
              </div>
            </div>
            <div class="block-content">
              <div class="row items-push text-center py-3">
                <div class="col-6 col-xl-3">
                  <i class="fab fa-wordpress fa-2x text-muted"></i>
                  <div class="text-muted mt-3">+20% Themes</div>
                </div>
                <div class="col-6 col-xl-3">
                  <i class="fa fa-font fa-2x text-muted"></i>
                  <div class="text-muted mt-3">+25% Fonts</div>
                </div>
                <div class="col-6 col-xl-3">
                  <i class="fa fa-archive fa-2x text-muted"></i>
                  <div class="text-muted mt-3">-10% Icons</div>
                </div>
                <div class="col-6 col-xl-3">
                  <i class="fa fa-paint-brush fa-2x text-muted"></i>
                  <div class="text-muted mt-3">+8% Graphics</div>
                </div>
              </div>
            </div>
          </template>
        </BaseBlock>
      </div>
    </div>
    <!-- END Dashboard Charts -->

    <!-- Customers and Latest Orders -->
    <div class="row items-push">
      <!-- Latest Customers -->
      <div class="col-lg-6">
        <BaseBlock title="Latest Customers" class="h-100 mb-0" content-full>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <table
            class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0"
          >
            <thead>
              <tr class="text-uppercase">
                <th class="fw-bold" style="width: 80px">ID</th>
                <th
                  class="d-none d-sm-table-cell fw-bold text-center"
                  style="width: 100px"
                >
                  Photo
                </th>
                <th class="fw-bold">Name</th>
                <th
                  class="d-none d-sm-table-cell fw-bold text-center"
                  style="width: 80px"
                >
                  Orders
                </th>
                <th class="fw-bold text-center" style="width: 60px"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar13.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Jose Wagner</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)">5</a>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar8.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Amanda Powell</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)"
                    >14</a
                  >
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar9.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Jack Greene</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)"
                    >15</a
                  >
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar7.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Carol Ray</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)"
                    >36</a
                  >
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar16.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Jack Estrada</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)">3</a>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar2.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Amanda Powell</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)">1</a>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#01368</span>
                </td>
                <td class="d-none d-sm-table-cell text-center">
                  <img
                    class="img-avatar img-avatar32"
                    src="/assets/media/avatars/avatar9.jpg"
                    alt=""
                  />
                </td>
                <td class="fw-semibold">Jesse Fisher</td>
                <td class="d-none d-sm-table-cell text-center">
                  <a class="link-fx fw-semibold" href="javascript:void(0)"
                    >12</a
                  >
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </BaseBlock>
      </div>
      <!-- END Latest Customers -->

      <!-- Latest Orders -->
      <div class="col-lg-6">
        <BaseBlock title="Latest Orders" class="h-100 mb-0" content-full>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <table
            class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0"
          >
            <thead>
              <tr class="text-uppercase">
                <th class="fw-bold">ID</th>
                <th class="d-none d-sm-table-cell fw-bold">Date</th>
                <th class="fw-bold">State</th>
                <th
                  class="d-none d-sm-table-cell fw-bold text-end"
                  style="width: 120px"
                >
                  Price
                </th>
                <th class="fw-bold text-center" style="width: 60px"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span class="fw-semibold">#07835</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-warning">Pending..</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$999,99</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07834</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-warning">Pending..</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$2.299,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07833</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$1200,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07832</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-danger">Cancelled</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$399,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07831</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$349,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07830</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$999,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07829</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$39,99</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07828</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$499,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">#07827</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">$325,00</td>
                <td class="text-center">
                  <a href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </BaseBlock>
      </div>
      <!-- END Latest Orders -->
    </div>
    <!-- END Customers and Latest Orders -->
  </div>
  <!-- END Page Content -->
</template>
