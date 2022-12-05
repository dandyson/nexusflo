<script setup>
import { reactive, ref } from "vue";

// vue-chart-3, for more info and examples you can check out https://vue-chart-3.netlify.app/ and http://www.chartjs.org/docs/ -->
import { LineChart, BarChart } from "vue-chart-3";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

// Set Global Chart.js configuration
Chart.defaults.color = "#818d96";
Chart.defaults.scale.grid.lineWidth = 0;
Chart.defaults.scale.beginAtZero = true;
Chart.defaults.datasets.bar.maxBarThickness = 45;
Chart.defaults.elements.bar.borderRadius = 4;
Chart.defaults.elements.bar.borderSkipped = false;
Chart.defaults.elements.point.radius = 0;
Chart.defaults.elements.point.hoverRadius = 0;
Chart.defaults.plugins.tooltip.radius = 3;
Chart.defaults.plugins.legend.labels.boxWidth = 10;

// Helper variables
const orderSearch = ref(false);

// Chart Earnings data
const earningsData = reactive({
  labels: ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"],
  datasets: [
    {
      label: "This Week",
      fill: true,
      backgroundColor: "rgba(100, 116, 139, .7)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(100, 116, 139, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(100, 116, 139, 1)",
      data: [716, 628, 1056, 560, 956, 890, 790],
    },
    {
      label: "Last Week",
      fill: true,
      backgroundColor: "rgba(100, 116, 139, .15)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(100, 116, 139, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(100, 116, 139, 1)",
      data: [1160, 923, 1052, 1300, 880, 926, 963],
    },
  ],
});

// Chart Earnings options
const earningsOptions = reactive({
  scales: {
    x: {
      display: false,
      grid: {
        drawBorder: false,
      },
    },
    y: {
      display: false,
      grid: {
        drawBorder: false,
      },
    },
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    legend: {
      labels: {
        boxHeight: 10,
        font: {
          size: 14,
        },
      },
    },
    tooltip: {
      callbacks: {
        label: function (context) {
          return context.dataset.label + ": $" + context.parsed.y;
        },
      },
    },
  },
});

// Chart Total Orders data
const totalOrdersData = reactive({
  labels: [
    "MON",
    "TUE",
    "WED",
    "THU",
    "FRI",
    "SAT",
    "SUN",
    "MON",
    "TUE",
    "WED",
    "THU",
    "FRI",
    "SAT",
    "SUN",
  ],
  datasets: [
    {
      label: "Total Orders",
      fill: true,
      backgroundColor: "rgba(220, 38, 38, .15)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(220, 38, 38, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(220, 38, 38, 1)",
      data: [33, 29, 32, 37, 38, 30, 34, 28, 43, 45, 26, 45, 49, 39],
    },
  ],
});

// Chart Total Orders options
const totalOrdersOptions = reactive({
  maintainAspectRatio: false,
  tension: 0.4,
  scales: {
    x: {
      display: false,
    },
    y: {
      display: false,
    },
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    legend: {
      display: false,
    },
    tooltip: {
      callbacks: {
        label: function (context) {
          return " " + context.parsed.y + " Orders";
        },
      },
    },
  },
});

// Chart Total Earnings data
const totalEarningsData = reactive({
  labels: [
    "MON",
    "TUE",
    "WED",
    "THU",
    "FRI",
    "SAT",
    "SUN",
    "MON",
    "TUE",
    "WED",
    "THU",
    "FRI",
    "SAT",
    "SUN",
  ],
  datasets: [
    {
      label: "Total Earnings",
      fill: true,
      backgroundColor: "rgba(101, 163, 13, .15)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(101, 163, 13, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(101, 163, 13, 1)",
      data: [
        716, 1185, 750, 1365, 956, 890, 1200, 968, 1158, 1025, 920, 1190, 720,
        1352,
      ],
    },
  ],
});

// Chart Total Earnings options
const totalEarningsOptions = reactive({
  maintainAspectRatio: false,
  tension: 0.4,
  scales: {
    x: {
      display: false,
    },
    y: {
      display: false,
    },
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    legend: {
      display: false,
    },
    tooltip: {
      callbacks: {
        label: function (context) {
          return " $" + context.parsed.y;
        },
      },
    },
  },
});

// Chart New Customers data
const newCustomersData = reactive({
  labels: [
    "MON",
    "TUE",
    "WED",
    "THU",
    "FRI",
    "SAT",
    "SUN",
    "MON",
    "TUE",
    "WED",
    "THU",
    "FRI",
    "SAT",
    "SUN",
  ],
  datasets: [
    {
      label: "Total Orders",
      fill: true,
      backgroundColor: "rgba(101, 163, 13, .15)",
      borderColor: "transparent",
      pointBackgroundColor: "rgba(101, 163, 13, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(101, 163, 13, 1)",
      data: [25, 15, 36, 14, 29, 19, 36, 41, 28, 26, 29, 33, 23, 41],
    },
  ],
});

// Chart New Customers options
const newCustomersOptions = reactive({
  maintainAspectRatio: false,
  tension: 0.4,
  scales: {
    x: {
      display: false,
    },
    y: {
      display: false,
    },
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    legend: {
      display: false,
    },
    tooltip: {
      callbacks: {
        label: function (context) {
          return " " + context.parsed.y + " Customers";
        },
      },
    },
  },
});
</script>

<template>
  <!-- Hero -->
  <div class="content">
    <div
      class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start"
    >
      <div class="flex-grow-1 mb-1 mb-md-0">
        <h1 class="h3 fw-bold mb-2">Dashboard</h1>
        <h2 class="h6 fw-medium fw-medium text-muted mb-0">
          Welcome
          <RouterLink
            :to="{ name: 'backend-pages-generic-profile' }"
            class="fw-semibold"
            >John</RouterLink
          >, everything looks great.
        </h2>
      </div>
      <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
        <a
          href="javascript:void(0)"
          class="btn btn-sm btn-alt-secondary space-x-1"
        >
          <i class="fa fa-cogs opacity-50"></i>
          <span>Settings</span>
        </a>
        <div class="dropdown d-inline-block">
          <button
            type="button"
            class="btn btn-sm btn-alt-secondary space-x-1"
            id="dropdown-analytics-overview"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
            <span>All time</span>
            <i class="fa fa-fw fa-angle-down"></i>
          </button>
          <div
            class="dropdown-menu dropdown-menu-end fs-sm"
            aria-labelledby="dropdown-analytics-overview"
          >
            <a class="dropdown-item fw-medium" href="javascript:void(0)"
              >Last 30 days</a
            >
            <a class="dropdown-item fw-medium" href="javascript:void(0)"
              >Last month</a
            >
            <a class="dropdown-item fw-medium" href="javascript:void(0)"
              >Last 3 months</a
            >
            <div class="dropdown-divider"></div>
            <a class="dropdown-item fw-medium" href="javascript:void(0)"
              >This year</a
            >
            <a class="dropdown-item fw-medium" href="javascript:void(0)"
              >Last Year</a
            >
            <div class="dropdown-divider"></div>
            <a
              class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
              href="javascript:void(0)"
            >
              <span>All time</span>
              <i class="fa fa-check"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Overview -->
    <div class="row items-push">
      <div class="col-sm-6 col-xxl-3">
        <!-- Pending Orders -->
        <BaseBlock class="d-flex flex-column h-100 mb-0">
          <template #content>
            <div
              class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
            >
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">32</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">
                  Pending Orders
                </dd>
              </dl>
              <div class="item item-rounded-lg bg-body-light">
                <i class="far fa-gem fs-3 text-primary"></i>
              </div>
            </div>
            <div class="bg-body-light rounded-bottom">
              <a
                class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                <span>View all orders</span>
                <i
                  class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"
                ></i>
              </a>
            </div>
          </template>
        </BaseBlock>
        <!-- END Pending Orders -->
      </div>
      <div class="col-sm-6 col-xxl-3">
        <!-- New Customers -->
        <BaseBlock class="d-flex flex-column h-100 mb-0">
          <template #content>
            <div
              class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
            >
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">124</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">
                  New Customers
                </dd>
              </dl>
              <div class="item item-rounded-lg bg-body-light">
                <i class="far fa-user-circle fs-3 text-primary"></i>
              </div>
            </div>
            <div class="bg-body-light rounded-bottom">
              <a
                class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                <span>View all customers</span>
                <i
                  class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"
                ></i>
              </a>
            </div>
          </template>
        </BaseBlock>
        <!-- END New Customers -->
      </div>
      <div class="col-sm-6 col-xxl-3">
        <!-- Messages -->
        <BaseBlock class="d-flex flex-column h-100 mb-0">
          <template #content>
            <div
              class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
            >
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">45</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">
                  Messages
                </dd>
              </dl>
              <div class="item item-rounded-lg bg-body-light">
                <i class="far fa-paper-plane fs-3 text-primary"></i>
              </div>
            </div>
            <div class="bg-body-light rounded-bottom">
              <a
                class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                <span>View all messages</span>
                <i
                  class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"
                ></i>
              </a>
            </div>
          </template>
        </BaseBlock>
        <!-- END Messages -->
      </div>
      <div class="col-sm-6 col-xxl-3">
        <!-- Conversion Rate -->
        <BaseBlock class="d-flex flex-column h-100 mb-0">
          <template #content>
            <div
              class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
            >
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">4.5%</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">
                  Conversion Rate
                </dd>
              </dl>
              <div class="item item-rounded-lg bg-body-light">
                <i class="fa fa-chart-bar fs-3 text-primary"></i>
              </div>
            </div>
            <div class="bg-body-light rounded-bottom">
              <a
                class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                <span>View statistics</span>
                <i
                  class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"
                ></i>
              </a>
            </div>
          </template>
        </BaseBlock>
        <!-- END Conversion Rate-->
      </div>
    </div>
    <!-- END Overview -->

    <!-- Statistics -->
    <div class="row">
      <div class="col-xl-8 col-xxl-9 d-flex flex-column">
        <!-- Earnings Summary -->
        <BaseBlock
          title="Earnings Summary"
          class="flex-grow-1 d-flex flex-column"
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <template #content>
            <div
              class="block-content block-content-full flex-grow-1 d-flex align-items-center"
            >
              <BarChart
                :chart-data="earningsData"
                :options="earningsOptions"
                class="w-100"
              />
            </div>
            <div class="block-content bg-body-light">
              <div class="row items-push text-center w-100">
                <div class="col-sm-4">
                  <dl class="mb-0">
                    <dt
                      class="fs-3 fw-bold d-inline-flex align-items-center space-x-2"
                    >
                      <i class="fa fa-caret-up fs-base text-success"></i>
                      <span>2.5%</span>
                    </dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">
                      Customer Growth
                    </dd>
                  </dl>
                </div>
                <div class="col-sm-4">
                  <dl class="mb-0">
                    <dt
                      class="fs-3 fw-bold d-inline-flex align-items-center space-x-2"
                    >
                      <i class="fa fa-caret-up fs-base text-success"></i>
                      <span>3.8%</span>
                    </dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                  </dl>
                </div>
                <div class="col-sm-4">
                  <dl class="mb-0">
                    <dt
                      class="fs-3 fw-bold d-inline-flex align-items-center space-x-2"
                    >
                      <i class="fa fa-caret-down fs-base text-danger"></i>
                      <span>1.7%</span>
                    </dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">
                      New Products
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </template>
        </BaseBlock>
        <!-- END Earnings Summary -->
      </div>
      <div class="col-xl-4 col-xxl-3 d-flex flex-column">
        <!-- Last 2 Weeks -->
        <div class="row items-push flex-grow-1">
          <div class="col-md-6 col-xl-12">
            <BaseBlock class="d-flex flex-column h-100 mb-0">
              <template #content>
                <div
                  class="block-content flex-grow-1 d-flex justify-content-between"
                >
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">570</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">
                      Total Orders
                    </dd>
                  </dl>
                  <div>
                    <div
                      class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light"
                    >
                      <i class="fa fa-caret-down me-1"></i>
                      2.2%
                    </div>
                  </div>
                </div>
                <div class="block-content p-1 text-center overflow-hidden">
                  <LineChart
                    :chart-data="totalOrdersData"
                    :options="totalOrdersOptions"
                    style="height: 90px"
                  />
                </div>
              </template>
            </BaseBlock>
          </div>
          <div class="col-md-6 col-xl-12">
            <BaseBlock class="d-flex flex-column h-100 mb-0">
              <template #content>
                <div
                  class="block-content flex-grow-1 d-flex justify-content-between"
                >
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">$5,234.21</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">
                      Total Earnings
                    </dd>
                  </dl>
                  <div>
                    <div
                      class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light"
                    >
                      <i class="fa fa-caret-up me-1"></i>
                      4.2%
                    </div>
                  </div>
                </div>
                <div class="block-content p-1 text-center overflow-hidden">
                  <LineChart
                    :chart-data="totalEarningsData"
                    :options="totalEarningsOptions"
                    style="height: 90px"
                  />
                </div>
              </template>
            </BaseBlock>
          </div>
          <div class="col-xl-12">
            <BaseBlock class="d-flex flex-column h-100 mb-0">
              <template #content>
                <div
                  class="block-content flex-grow-1 d-flex justify-content-between"
                >
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">264</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">
                      New Customers
                    </dd>
                  </dl>
                  <div>
                    <div
                      class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light"
                    >
                      <i class="fa fa-caret-up me-1"></i>
                      9.3%
                    </div>
                  </div>
                </div>
                <div class="block-content p-1 text-center overflow-hidden">
                  <!-- New Customers Chart Container -->
                  <LineChart
                    :chart-data="newCustomersData"
                    :options="newCustomersOptions"
                    style="height: 90px"
                  />
                </div>
              </template>
            </BaseBlock>
          </div>
        </div>
        <!-- END Last 2 Weeks -->
      </div>
    </div>
    <!-- END Statistics -->

    <!-- Recent Orders -->
    <BaseBlock title="Recent Orders">
      <template #options>
        <div class="space-x-1">
          <button
            type="button"
            class="btn btn-sm btn-alt-secondary"
            @click="
              () => {
                orderSearch = !orderSearch;
              }
            "
          >
            <i class="fa fa-search"></i>
          </button>
          <div class="dropdown d-inline-block">
            <button
              type="button"
              class="btn btn-sm btn-alt-secondary"
              id="dropdown-recent-orders-filters"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fa fa-fw fa-flask"></i>
              Filters
              <i class="fa fa-angle-down ms-1"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm"
              aria-labelledby="dropdown-recent-orders-filters"
            >
              <a
                class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                Pending
                <span class="badge bg-primary rounded-pill">20</span>
              </a>
              <a
                class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                Active
                <span class="badge bg-primary rounded-pill">72</span>
              </a>
              <a
                class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                Completed
                <span class="badge bg-primary rounded-pill">890</span>
              </a>
              <a
                class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                All
                <span class="badge bg-primary rounded-pill">997</span>
              </a>
            </div>
          </div>
        </div>
      </template>

      <template #content>
        <div
          v-if="orderSearch"
          id="one-dashboard-search-orders"
          class="block-content border-bottom"
        >
          <!-- Search Form -->
          <form @submit.prevent>
            <div class="push">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control form-control-alt"
                  id="one-ecom-orders-search"
                  name="one-ecom-orders-search"
                  placeholder="Search all orders.."
                />
                <span class="input-group-text bg-body border-0">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </div>
          </form>
          <!-- END Search Form -->
        </div>
        <div class="block-content block-content-full">
          <!-- Recent Orders Table -->
          <div class="table-responsive">
            <table class="table table-hover table-vcenter">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th class="d-none d-xl-table-cell">Customer</th>
                  <th>Status</th>
                  <th class="d-none d-sm-table-cell text-center">Profit</th>
                  <th class="d-none d-sm-table-cell text-end">Created</th>
                  <th class="d-none d-sm-table-cell text-end">Value</th>
                </tr>
              </thead>
              <tbody class="fs-sm">
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00925
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Marie Duncan</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"
                      >Completed</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 8%"
                        aria-valuenow="8"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">8%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    7 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$786,81</strong>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00924
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Jack Estrada</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info"
                      >Active</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 6%"
                        aria-valuenow="6"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">6%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    26 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$1184,20</strong>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00923
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Megan Fuller</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"
                      >Completed</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">25%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    19 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$2379,44</strong>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00922
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Lisa Jenkins</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Application Manager
                    </p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning"
                      >Pending</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 18%"
                        aria-valuenow="18"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">18%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    13 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$458,52</strong>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00921
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Brian Stevens</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"
                      >Completed</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 10%"
                        aria-valuenow="10"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">10%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    4 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$476,82</strong>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00920
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Jesse Fisher</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning"
                      >Pending</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 23%"
                        aria-valuenow="23"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">23%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    23 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$1939,58</strong>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="fw-semibold" href="javascript:void(0)">
                      ORD.00919
                    </a>
                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <a class="fw-semibold" href="javascript:void(0)"
                      >Carol Ray</a
                    >
                    <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                  </td>
                  <td>
                    <span
                      class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info"
                      >Active</span
                    >
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <div class="progress mb-1" style="height: 5px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 14%"
                        aria-valuenow="14"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="fs-xs fw-semibold mb-0">14%</p>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold text-muted text-end"
                  >
                    15 min ago
                  </td>
                  <td class="d-none d-sm-table-cell text-end">
                    <strong>$2200,10</strong>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- END Recent Orders Table -->
        </div>
        <div class="block-content block-content-full bg-body-light">
          <!-- Pagination -->
          <nav aria-label="Photos Search Navigation">
            <ul class="pagination pagination-sm justify-content-end mb-0">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  Prev
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  Next
                </a>
              </li>
            </ul>
          </nav>
          <!-- END Pagination -->
        </div>
      </template>
    </BaseBlock>
    <!-- END Recent Orders -->
  </div>
  <!-- END Page Content -->
</template>
