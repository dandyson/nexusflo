<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Blocks with Forms"
    subtitle="Easily integrated in your blocks."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Blocks</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Forms</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Form Submission in Options -->
    <div class="row">
      <div class="col-md-6">
        <form @submit.prevent>
          <BaseBlock title="Block Form">
            <template #options>
              <button type="submit" class="btn btn-sm btn-primary">
                Submit
              </button>
              <button type="reset" class="btn btn-sm btn-alt-primary">
                Reset
              </button>
            </template>

            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form1-username"
                    >Username</label
                  >
                  <input
                    type="text"
                    class="form-control form-control-alt"
                    id="block-form1-username"
                    name="block-form1-username"
                    placeholder="Enter your username.."
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form1-password"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control form-control-alt"
                    id="block-form1-password"
                    name="block-form1-password"
                    placeholder="Enter your password.."
                  />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="block-form1-remember-me"
                      name="block-form1-remember-me"
                    />
                    <label
                      class="form-check-label"
                      for="block-form1-remember-me"
                      >Remember Me?</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </BaseBlock>
        </form>
      </div>
      <div class="col-md-6">
        <form @submit.prevent>
          <BaseBlock title="Block Form" header-rtl>
            <template #options>
              <button type="reset" class="btn btn-sm btn-alt-primary">
                Reset
              </button>
              <button type="submit" class="btn btn-sm btn-primary">
                Submit
              </button>
            </template>

            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form2-username"
                    >Username</label
                  >
                  <input
                    type="text"
                    class="form-control form-control-alt"
                    id="block-form2-username"
                    name="block-form2-username"
                    placeholder="Enter your username.."
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form2-password"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control form-control-alt"
                    id="block-form2-password"
                    name="block-form2-password"
                    placeholder="Enter your password.."
                  />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="block-form2-remember-me"
                      name="block-form2-remember-me"
                    />
                    <label
                      class="form-check-label"
                      for="block-form2-remember-me"
                      >Remember Me?</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </BaseBlock>
        </form>
      </div>
      <div class="col-md-6">
        <form @submit.prevent>
          <BaseBlock title="Block Form">
            <template #options>
              <button type="submit" class="btn btn-sm btn-alt-primary">
                Submit
              </button>
              <button type="reset" class="btn btn-sm btn-alt-danger">
                Reset
              </button>
            </template>

            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form3-username"
                    >Username</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="block-form3-username"
                    name="block-form3-username"
                    placeholder="Enter your username.."
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form3-password"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="block-form3-password"
                    name="block-form3-password"
                    placeholder="Enter your password.."
                  />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="block-form3-remember-me"
                      name="block-form3-remember-me"
                    />
                    <label
                      class="form-check-label"
                      for="block-form3-remember-me"
                      >Remember Me?</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </BaseBlock>
        </form>
      </div>
      <div class="col-md-6">
        <form @submit.prevent>
          <BaseBlock title="Block Form" header-rtl>
            <template #options>
              <button type="reset" class="btn btn-sm btn-alt-danger">
                Reset
              </button>
              <button type="submit" class="btn btn-sm btn-alt-primary">
                Submit
              </button>
            </template>

            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form4-username"
                    >Username</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="block-form4-username"
                    name="block-form4-username"
                    placeholder="Enter your username.."
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form4-password"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="block-form4-password"
                    name="block-form4-password"
                    placeholder="Enter your password.."
                  />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="block-form4-remember-me"
                      name="block-form4-remember-me"
                    />
                    <label
                      class="form-check-label"
                      for="block-form4-remember-me"
                      >Remember Me?</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </BaseBlock>
        </form>
      </div>
      <div class="col-md-6">
        <form @submit.prevent>
          <BaseBlock title="Block Form">
            <template #options>
              <button type="submit" class="btn-block-option">Submit</button>
            </template>

            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form5-username"
                    >Username</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="block-form5-username"
                    name="block-form5-username"
                    placeholder="Enter your username.."
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form5-password"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="block-form5-password"
                    name="block-form5-password"
                    placeholder="Enter your password.."
                  />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="block-form5-remember-me"
                      name="block-form5-remember-me"
                    />
                    <label
                      class="form-check-label"
                      for="block-form5-remember-me"
                      >Remember Me?</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </BaseBlock>
        </form>
      </div>
      <div class="col-md-6">
        <form @submit.prevent>
          <BaseBlock title="Block Form" header-rtl>
            <template #options>
              <button type="submit" class="btn-block-option">Submit</button>
            </template>

            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form6-username"
                    >Username</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="block-form6-username"
                    name="block-form6-username"
                    placeholder="Enter your username.."
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form6-password"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="block-form6-password"
                    name="block-form6-password"
                    placeholder="Enter your password.."
                  />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="block-form6-remember-me"
                      name="block-form6-remember-me"
                    />
                    <label
                      class="form-check-label"
                      for="block-form6-remember-me"
                      >Remember Me?</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </BaseBlock>
        </form>
      </div>
    </div>
    <!-- END Form Submission in Options -->
  </div>
  <!-- END Page Content -->
</template>
