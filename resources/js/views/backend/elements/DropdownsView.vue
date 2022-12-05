<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Dropdowns"
    subtitle="Toggle contextual overlays for displaying lists of links and more."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Dropdowns</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Normal -->
    <BaseBlock title="Normal">
      <!-- Default Style -->
      <p class="fs-sm text-muted">
        You can easily attach a dropdown to a default button and add various
        actions
      </p>
      <div class="row items-push mb-4">
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-primary dropdown-toggle"
              id="dropdown-default-primary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-primary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-secondary dropdown-toggle"
              id="dropdown-default-secondary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-secondary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-success dropdown-toggle"
              id="dropdown-default-success"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-success"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-info dropdown-toggle"
              id="dropdown-default-info"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-info"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-warning dropdown-toggle"
              id="dropdown-default-warning"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-warning"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-danger dropdown-toggle"
              id="dropdown-default-danger"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-danger"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-dark dropdown-toggle"
              id="dropdown-default-dark"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-dark"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-secondary dropdown-toggle"
              id="dropdown-default-light"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-light"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- END Default Style -->

      <!-- Outline Style -->
      <p class="fs-sm text-muted">
        You can also add dropdowns to outline styled buttons
      </p>
      <div class="row items-push mb-4">
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-primary dropdown-toggle"
              id="dropdown-default-outline-primary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-primary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-secondary dropdown-toggle"
              id="dropdown-default-outline-secondary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-secondary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-success dropdown-toggle"
              id="dropdown-default-outline-success"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-success"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-info dropdown-toggle"
              id="dropdown-default-outline-info"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-info"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-warning dropdown-toggle"
              id="dropdown-default-outline-warning"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-warning"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-danger dropdown-toggle"
              id="dropdown-default-outline-danger"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-danger"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-dark dropdown-toggle"
              id="dropdown-default-outline-dark"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-dark"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-outline-light dropdown-toggle"
              id="dropdown-default-outline-light"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-outline-light"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- END Outline Style -->

      <!-- Alternate Style -->
      <p class="fs-sm text-muted">
        You can also add dropdowns to alternate styled buttons
      </p>
      <div class="row items-push mb-4">
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-primary dropdown-toggle"
              id="dropdown-default-alt-primary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-alt-primary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-secondary dropdown-toggle"
              id="dropdown-default-alt-secondary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-alt-secondary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-success dropdown-toggle"
              id="dropdown-default-alt-success"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-alt-success"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-info dropdown-toggle"
              id="dropdown-default-alt-info"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-alt-info"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-warning dropdown-toggle"
              id="dropdown-default-alt-warning"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-alt-warning"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-alt-danger dropdown-toggle"
              id="dropdown-default-alt-danger"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Dropdown
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-default-alt-danger"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- END Alternate Style -->
    </BaseBlock>
    <!-- END Normal -->

    <div class="row items-push">
      <div class="col-md-6">
        <!-- Split Button Dropdowns -->
        <BaseBlock title="Split Button Dropdowns" class="h-100 mb-0">
          <p class="fs-sm text-muted">
            Grouping your dropdowns with separate buttons is really easy
          </p>
          <div class="row items-push mb-4">
            <div class="col-xl-4">
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Action</button>
                <button
                  type="button"
                  class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                  id="dropdown-split-primary"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div
                  class="dropdown-menu fs-sm"
                  aria-labelledby="dropdown-split-primary"
                >
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Another action</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Something else here</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Separated link</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="btn-group">
                <button type="button" class="btn btn-alt-danger">Action</button>
                <button
                  type="button"
                  class="btn btn-alt-danger dropdown-toggle dropdown-toggle-split"
                  id="dropdown-split-alt-danger"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div
                  class="dropdown-menu fs-sm"
                  aria-labelledby="dropdown-split-alt-danger"
                >
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Another action</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Something else here</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Separated link</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="btn-group">
                <button type="button" class="btn btn-warning">Action</button>
                <button
                  type="button"
                  class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                  id="dropdown-split-warning"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div
                  class="dropdown-menu fs-sm"
                  aria-labelledby="dropdown-split-warning"
                >
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Another action</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Something else here</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Separated link</a
                  >
                </div>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Split Button Dropdowns -->
      </div>
      <div class="col-md-6">
        <!-- Alignment -->
        <BaseBlock title="Alignment" class="h-100 mb-0">
          <p class="fs-sm text-muted">
            You can align your dropmenus to the right of buttons
          </p>
          <div class="row items-push mb-4">
            <div class="col-sm-6 text-center">
              <div class="dropdown-center">
                <button
                  type="button"
                  class="btn btn-primary dropdown-toggle"
                  id="dropdown-align-primary"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Center
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end fs-sm"
                  aria-labelledby="dropdown-align-primary"
                >
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Another action</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Something else here</a
                  >
                </div>
              </div>
            </div>
            <div class="col-sm-6 text-end">
              <div class="dropdown">
                <button
                  type="button"
                  class="btn btn-alt-primary dropdown-toggle"
                  id="dropdown-align-alt-primary"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  From Right
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end fs-sm"
                  aria-labelledby="dropdown-align-alt-primary"
                >
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Another action</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    >Something else here</a
                  >
                </div>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Alignment -->
      </div>
    </div>

    <!-- Rich Content -->
    <BaseBlock title="Rich Content">
      <p class="fs-sm text-muted">
        You can use any HTML content you want in your dropdowns such as forms
      </p>
      <div class="dropdown push">
        <button
          type="button"
          class="btn btn-primary dropdown-toggle"
          id="dropdown-content-rich-primary"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Form in dropdown
        </button>
        <div
          class="dropdown-menu fs-sm"
          aria-labelledby="dropdown-content-rich-primary"
        >
          <form class="p-2" @submit.prevent>
            <div class="mb-4">
              <label class="form-label" for="dropdown-content-form-email"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="dropdown-content-form-email"
                name="dropdown-content-form-email"
                placeholder="email@example.com"
              />
            </div>
            <div class="mb-4">
              <label class="form-label" for="dropdown-content-form-password"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                id="dropdown-content-form-password"
                name="dropdown-content-form-password"
                placeholder="Password"
              />
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-muted fs-sm" href="javascript:void(0)"
            >Sign up</a
          >
          <a class="dropdown-item text-muted fs-sm" href="javascript:void(0)"
            >Forgot password?</a
          >
        </div>
      </div>
    </BaseBlock>
    <!-- END Rich Content -->

    <!-- Position -->
    <BaseBlock title="Position">
      <p class="fs-sm text-muted">
        You can position your dropdown relative to your button
      </p>
      <div class="row items-push mb-4">
        <div class="col-md-4">
          <!-- Dropup -->
          <h3 class="h4">Dropup</h3>
          <div class="dropdown dropup push">
            <button
              type="button"
              class="btn btn-secondary dropdown-toggle"
              id="dropdown-dropup-secondary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Up
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropup-secondary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <div class="dropdown dropup push">
            <button
              type="button"
              class="btn btn-outline-secondary dropdown-toggle"
              id="dropdown-dropup-outline-secondary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Up
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropup-outline-secondary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <div class="dropdown dropup">
            <button
              type="button"
              class="btn btn-alt-secondary dropdown-toggle"
              id="dropdown-dropup-alt-secondary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Up
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropup-alt-secondary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <!-- END Dropup -->
        </div>
        <div class="col-md-4">
          <!-- Dropright -->
          <h3 class="h4">Dropright</h3>
          <div class="dropdown dropend push">
            <button
              type="button"
              class="btn btn-primary dropdown-toggle"
              id="dropdown-dropright-primary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Right
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropright-primary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <div class="dropdown dropend push">
            <button
              type="button"
              class="btn btn-outline-primary dropdown-toggle"
              id="dropdown-dropright-outline-primary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Right
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropright-outline-primary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <div class="dropdown dropend">
            <button
              type="button"
              class="btn btn-alt-primary dropdown-toggle"
              id="dropdown-dropright-alt-primary"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Right
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropright-alt-primary"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <!-- END Dropright -->
        </div>
        <div class="col-md-4 text-end">
          <!-- Dropleft -->
          <h3 class="h4">Dropleft</h3>
          <div class="dropdown dropstart push">
            <button
              type="button"
              class="btn btn-dark dropdown-toggle"
              id="dropdown-dropleft-dark"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Left
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropleft-dark"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <div class="dropdown dropstart push">
            <button
              type="button"
              class="btn btn-outline-dark dropdown-toggle"
              id="dropdown-dropleft-outline-dark"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Left
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropleft-outline-dark"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <div class="dropdown dropstart">
            <button
              type="button"
              class="btn btn-secondary dropdown-toggle"
              id="dropdown-dropleft-alt-dark"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Left
            </button>
            <div
              class="dropdown-menu fs-sm"
              aria-labelledby="dropdown-dropleft-alt-dark"
            >
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)"
                >Another action</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                >Something else here</a
              >
            </div>
          </div>
          <!-- END Dropleft -->
        </div>
      </div>
    </BaseBlock>
    <!-- END Position -->
  </div>
  <!-- END Page Content -->
</template>
