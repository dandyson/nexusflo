<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Pricing Plans"
    subtitle="Clean and responsive pricing plans that will improve your conversions."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Generic</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Pricing Plans</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Modern Design -->
    <h2 class="content-heading">Modern Design <small>Grid Based</small></h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <!-- Developer Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-shadow
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">Developer</h3>
            </div>
            <div class="block-content bg-body-light">
              <div class="py-2">
                <p class="h1 fw-bold mb-2">$9</p>
                <p class="h6 text-muted">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>2</strong> Projects</p>
                <p><strong>10GB</strong> Storage</p>
                <p><strong>15</strong> Clients</p>
                <p><strong>Email</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn btn-secondary px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END Developer Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Startup Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-shadow
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">Startup</h3>
            </div>
            <div class="block-content bg-body-light">
              <div class="py-2">
                <p class="h1 fw-bold mb-2">$29</p>
                <p class="h6 text-muted">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>10</strong> Projects</p>
                <p><strong>30GB</strong> Storage</p>
                <p><strong>100</strong> Clients</p>
                <p><strong>FULL</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn btn-secondary px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END Startup Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Business Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-shadow
          themed
          fx-shadow
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">
                <i class="fa fa-thumbs-up me-1"></i> Business
              </h3>
            </div>
            <div class="block-content bg-body-light">
              <div class="py-2">
                <p class="h1 fw-bold mb-2">$49</p>
                <p class="h6 text-muted">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>50</strong> Projects</p>
                <p><strong>100GB</strong> Storage</p>
                <p><strong>1000</strong> Clients</p>
                <p><strong>FULL</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn btn-primary px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END Business Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- VIP Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-shadow
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">VIP</h3>
            </div>
            <div class="block-content bg-body-light">
              <div class="py-2">
                <p class="h1 fw-bold mb-2">$99</p>
                <p class="h6 text-muted">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>Unlimited</strong> Projects</p>
                <p><strong>Unlimited</strong> Storage</p>
                <p><strong>Unlimited</strong> Clients</p>
                <p><strong>FULL</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn btn-secondary px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END VIP Plan -->
      </div>
    </div>
    <h2 class="content-heading">
      Variations <small>Hover animations, colors and style</small>
    </h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <!-- Developer Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-shadow
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">Developer</h3>
            </div>
            <div class="block-content bg-warning-light">
              <div class="py-2">
                <p class="h1 fw-bold text-warning mb-2">$9</p>
                <p class="h6 text-warning opacity-75">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>2</strong> Projects</p>
                <p><strong>10GB</strong> Storage</p>
                <p><strong>15</strong> Clients</p>
                <p><strong>Email</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn rounded-0 btn-warning px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END Developer Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Startup Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-rotate
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">Startup</h3>
            </div>
            <div class="block-content bg-primary-lighter">
              <div class="py-2">
                <p class="h1 fw-bold text-primary mb-2">$29</p>
                <p class="h6 text-primary opacity-75">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>10</strong> Projects</p>
                <p><strong>30GB</strong> Storage</p>
                <p><strong>100</strong> Clients</p>
                <p><strong>FULL</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn rounded-0 btn-primary px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END Startup Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Business Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-shadow
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">Business</h3>
            </div>
            <div class="block-content bg-danger-light">
              <div class="py-2">
                <p class="h1 fw-bold text-danger mb-2">$49</p>
                <p class="h6 text-danger opacity-75">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>50</strong> Projects</p>
                <p><strong>100GB</strong> Storage</p>
                <p><strong>1000</strong> Clients</p>
                <p><strong>FULL</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn rounded-0 btn-danger px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END Business Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- VIP Plan -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          class="text-center"
          link-pop
        >
          <template #content>
            <div class="block-header">
              <h3 class="block-title">VIP</h3>
            </div>
            <div class="block-content bg-success-light">
              <div class="py-2">
                <p class="h1 fw-bold text-success mb-2">$99</p>
                <p class="h6 text-success opacity-75">per month</p>
              </div>
            </div>
            <div class="block-content">
              <div class="fs-sm py-2">
                <p><strong>Unlimited</strong> Projects</p>
                <p><strong>Unlimited</strong> Storage</p>
                <p><strong>Unlimited</strong> Clients</p>
                <p><strong>FULL</strong> Support</p>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
              <span class="btn rounded-0 btn-success px-4">Sign Up</span>
            </div>
          </template>
        </BaseBlock>
        <!-- END VIP Plan -->
      </div>
    </div>
    <!-- END Modern Design -->

    <!-- Classic Design -->
    <h2 class="content-heading">Classic Design <small>Table Based</small></h2>
    <BaseBlock>
      <template #content>
        <div class="table-responsive">
          <table
            class="table table-borderless table-hover table-vcenter text-center mb-0"
          >
            <thead class="table-dark text-uppercase fs-sm">
              <tr>
                <th class="py-3" style="width: 180px"></th>
                <th class="py-3">Freelancer</th>
                <th class="py-3">Startup</th>
                <th class="py-3 bg-primary">
                  <i class="fa fa-thumbs-up me-1"></i> Business
                </th>
                <th class="py-3">VIP</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-body-light">
                <td></td>
                <td class="py-4">
                  <div class="h1 fw-bold mb-2">$9</div>
                  <div class="h6 text-muted mb-0">per month</div>
                </td>
                <td class="py-4">
                  <div class="h1 fw-bold mb-2">$29</div>
                  <div class="h6 text-muted mb-0">per month</div>
                </td>
                <td class="py-4">
                  <div class="h1 fw-bold text-primary mb-2">$49</div>
                  <div class="h6 text-primary-light mb-0">per month</div>
                </td>
                <td class="py-4">
                  <div class="h1 fw-bold mb-2">$99</div>
                  <div class="h6 text-muted mb-0">per month</div>
                </td>
              </tr>
              <tr>
                <td class="fw-semibold text-start">Projects</td>
                <td>2</td>
                <td>10</td>
                <td>50</td>
                <td>Unlimited</td>
              </tr>
              <tr>
                <td class="fw-semibold text-start">Storage</td>
                <td>10GB</td>
                <td>30GB</td>
                <td>100GB</td>
                <td>Unlimited</td>
              </tr>
              <tr>
                <td class="fw-semibold text-start">Clients</td>
                <td>15</td>
                <td>100</td>
                <td>1000</td>
                <td>Unlimited</td>
              </tr>
              <tr>
                <td class="fw-semibold text-start">Support</td>
                <td>Email</td>
                <td>FULL</td>
                <td>FULL</td>
                <td>FULL</td>
              </tr>
              <tr>
                <td class="fw-semibold text-start">Customizations</td>
                <td>
                  <i class="fa fa-times fa-fw text-danger"></i>
                </td>
                <td>
                  <i class="fa fa-times fa-fw text-danger"></i>
                </td>
                <td>
                  <i class="fa fa-times fa-fw text-danger"></i>
                </td>
                <td>
                  <i class="fa fa-check fa-fw text-success"></i>
                </td>
              </tr>
              <tr class="bg-body-light">
                <td></td>
                <td>
                  <button
                    type="button"
                    class="btn rounded-pill btn-secondary px-4"
                  >
                    Sign Up
                  </button>
                </td>
                <td>
                  <button
                    type="button"
                    class="btn rounded-pill btn-secondary px-4"
                  >
                    Sign Up
                  </button>
                </td>
                <td>
                  <button
                    type="button"
                    class="btn rounded-pill btn-primary px-4"
                  >
                    Sign Up
                  </button>
                </td>
                <td>
                  <button
                    type="button"
                    class="btn rounded-pill btn-secondary px-4"
                  >
                    Sign Up
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </template>
    </BaseBlock>
    <!-- END Classic Design -->
  </div>
  <!-- END Page Content -->
</template>
