<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Print Page
function printPage() {
  // Get current sidebar visibility
  let sidebarVisibility = store.settings.sidebarVisibleDesktop;

  // Close the sidebar
  store.sidebar({ mode: "close" });

  // Print the page
  window.print();

  // Restore previous sidebar visibility
  if (sidebarVisibility) {
    store.sidebar({ mode: "open" });
  }
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Invoice"
    subtitle="Clean and professional design."
    class="d-print-none"
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Generic</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Invoice</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <!-- Invoice -->
    <BaseBlock title="#INV0625">
      <template #options>
        <button type="button" class="btn-block-option" @click="printPage()">
          <i class="si si-printer me-1"></i> Print Invoice
        </button>
      </template>

      <div class="p-sm-4 p-xl-7">
        <!-- Invoice Info -->
        <div class="row mb-4">
          <!-- Company Info -->
          <div class="col-6 fs-sm">
            <p class="h3">Company</p>
            <address>
              Street Address<br />
              State, City<br />
              Region, Postal Code<br />
              ltd@example.com
            </address>
          </div>
          <!-- END Company Info -->

          <!-- Client Info -->
          <div class="col-6 text-end fs-sm">
            <p class="h3">Client</p>
            <address>
              Street Address<br />
              State, City<br />
              Region, Postal Code<br />
              ctr@example.com
            </address>
          </div>
          <!-- END Client Info -->
        </div>
        <!-- END Invoice Info -->

        <!-- Table -->
        <div class="table-responsive push">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 60px"></th>
                <th>Product</th>
                <th class="text-center" style="width: 90px">Qnt</th>
                <th class="text-end" style="width: 120px">Unit</th>
                <th class="text-end" style="width: 120px">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td>
                  <p class="fw-semibold mb-1">App Design & Development</p>
                  <div class="text-muted">
                    Design/Development of iOS and Android application
                  </div>
                </td>
                <td class="text-center">
                  <span class="badge rounded-pill bg-primary">1</span>
                </td>
                <td class="text-end">$25.000,00</td>
                <td class="text-end">$25.000,00</td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td>
                  <p class="fw-semibold mb-1">Icon Pack Design</p>
                  <div class="text-muted">
                    50 uniquely crafted icons for promotion
                  </div>
                </td>
                <td class="text-center">
                  <span class="badge rounded-pill bg-primary">1</span>
                </td>
                <td class="text-end">$900,00</td>
                <td class="text-end">$900,00</td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td>
                  <p class="fw-semibold mb-1">Website Design</p>
                  <div class="text-muted">
                    Promotional website for the mobile application
                  </div>
                </td>
                <td class="text-center">
                  <span class="badge rounded-pill bg-primary">1</span>
                </td>
                <td class="text-end">$1.600,00</td>
                <td class="text-end">$1.600,00</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-semibold text-end">Subtotal</td>
                <td class="text-end">$27.500,00</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-semibold text-end">Vat Rate</td>
                <td class="text-end">20%</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-semibold text-end">Vat Due</td>
                <td class="text-end">$5.500,00</td>
              </tr>
              <tr>
                <td
                  colspan="4"
                  class="fw-bold text-uppercase text-end bg-body-light"
                >
                  Total Due
                </td>
                <td class="fw-bold text-end bg-body-light">$33.000,00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- END Table -->

        <!-- Footer -->
        <p class="fs-sm text-muted text-center">
          Thank you very much for doing business with us. We look forward to
          working with you again!
        </p>
        <!-- END Footer -->
      </div>
    </BaseBlock>
    <!-- END Invoice -->
  </div>
  <!-- END Page Content -->
</template>
