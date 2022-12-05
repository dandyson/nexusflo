<script setup>
import { ref } from "vue";

// Used to reference example blocks
const exampleBlock1 = ref(null);
const exampleBlock2 = ref(null);

// Demo loading functionality for exampleBlock1
function loadDataForBlock1() {
  // Set the block to loading state
  exampleBlock1.value.statusLoading();

  // .. here you could load your data

  // Set a timeout for demo purposes
  setTimeout(() => {
    // Set the block back to normal state
    exampleBlock1.value.statusNormal();
  }, 2000);
}

// Demo loading functionality for exampleBlock2
function loadDataForBlock2() {
  // Set the block to loading state
  exampleBlock2.value.statusLoading();

  // .. here you could load your data

  // Set a timeout for demo purposes
  setTimeout(() => {
    // Set the block back to normal state
    exampleBlock2.value.statusNormal();
  }, 2000);
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Block Options"
    subtitle="Adding controls to your blocks."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Blocks</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Options</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <h2 class="content-heading">
      Interactive Options
      <small>
        <RouterLink :to="{ name: 'backend-blocks-api' }" class="fw-medium"
          >Check out Blocks API</RouterLink
        >
      </small>
    </h2>

    <!-- Interactive Options -->
    <div class="row">
      <div class="col-md-6">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          ref="exampleBlock1"
          btn-option-fullscreen
          btn-option-pinned
          btn-option-content
          btn-option-close
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="loadDataForBlock1"
            >
              <i class="si si-refresh"></i>
            </button>
          </template>

          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock
          rounded
          title="Title"
          subtitle="Subtitle"
          ref="exampleBlock2"
          header-rtl
          btn-option-fullscreen
          btn-option-pinned
          btn-option-content
          btn-option-close
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="loadDataForBlock2"
            >
              <i class="si si-refresh"></i>
            </button>
          </template>

          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Interactive Options -->

    <h2 class="content-heading">Alternative Options Examples</h2>

    <!-- Custom Buttons in Options -->
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="far fa-fw fa-bell"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="far fa-fw fa-arrow-alt-circle-left"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="far fa-fw fa-arrow-alt-circle-right"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="far fa-fw fa-trash-alt"></i>
            </button>
            <div class="dropdown">
              <button
                type="button"
                class="btn-block-option dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Settings
              </button>
              <div class="dropdown-menu dropdown-menu-end fs-sm">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-bell me-1"></i> News
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-envelope me-1"></i> Messages
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                </a>
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="dropdown">
              <div class="dropdown">
                <button
                  type="button"
                  class="btn-block-option dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Settings
                </button>
                <div class="dropdown-menu fs-sm">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
              <button type="button" class="btn-block-option">
                <i class="far fa-fw fa-trash-alt"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="far fa-fw fa-arrow-alt-circle-left"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="far fa-fw fa-arrow-alt-circle-right"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="far fa-fw fa-bell"></i>
              </button>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Custom Buttons in Options -->

    <!-- Bootstrap Buttons in Options -->
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <button type="button" class="btn btn-sm btn-primary">Edit</button>
            <button type="button" class="btn btn-sm btn-danger">Delete</button>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <button type="button" class="btn btn-sm btn-danger">Delete</button>
            <button type="button" class="btn btn-sm btn-primary">Edit</button>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <button type="button" class="btn btn-sm btn-alt-primary">
              Edit
            </button>
            <button type="button" class="btn btn-sm btn-alt-danger">
              Delete
            </button>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <button type="button" class="btn btn-sm btn-alt-danger">
              Delete
            </button>
            <button type="button" class="btn btn-sm btn-alt-primary">
              Edit
            </button>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <button type="button" class="btn btn-sm btn-secondary">
              Cancel
            </button>
            <button type="button" class="btn btn-sm btn-primary">Ok</button>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <button type="button" class="btn btn-sm btn-primary">Ok</button>
            <button type="button" class="btn btn-sm btn-secondary">
              Cancel
            </button>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Bootstrap Buttons in Options -->

    <!-- Text in Options -->
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="block-options-item">Text 1</div>
            <div class="block-options-item">Text 2</div>
            <div class="block-options-item">Text 3</div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="block-options-item">Text 1</div>
            <div class="block-options-item">Text 2</div>
            <div class="block-options-item">Text 3</div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="block-options-item text-danger">Special!</div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="block-options-item text-success">Looking Good!</div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Text in Options -->

    <!-- Alerts in Options -->
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="alert alert-warning py-2 mb-0">
              <i class="fa fa-exclamation-triangle me-1"></i> This is an alert!
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="block-options-item">
              <div class="alert alert-warning py-2 mb-0">
                This is an alert!
                <i class="fa fa-exclamation-triangle ms-1"></i>
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="block-options-item">
              <div class="alert alert-info py-2 mb-0">
                <i class="fa fa-info-circle me-1"></i> Info
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options
            ><div class="block-options-item">
              <div class="alert alert-info py-2 mb-0">
                Info! <i class="fa fa-info-circle ms-1"></i>
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="block-options-item">
              <div class="alert alert-success py-2 mb-0">
                <i class="fa fa-check-circle me-1"></i> Success
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="block-options-item">
              <div class="alert alert-success py-2 mb-0">
                Success! <i class="fa fa-check-circle ms-1"></i>
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="block-options-item">
              <div class="alert alert-danger py-2 mb-0">
                <i class="fa fa-times-circle me-1"></i> Failure
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="block-options-item">
              <div class="alert alert-danger py-2 mb-0">
                Failure! <i class="fa fa-times-circle ms-1"></i>
              </div>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Alerts in Options -->

    <!-- Badges in Options -->
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #options>
            <div class="block-options-item">
              <span class="badge bg-primary">15</span>
            </div>
            <div class="block-options-item">
              <span class="badge bg-success">Yes!</span>
            </div>
            <div class="block-options-item">
              <span class="badge bg-warning">
                <i class="fa fa-exclamation-triangle"></i>
              </span>
            </div>
            <div class="block-options-item">
              <span class="badge bg-danger rounded-pill">Pill Badge</span>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6">
        <BaseBlock title="Title" subtitle="Subtitle" header-rtl>
          <template #options>
            <div class="block-options-item">
              <span class="badge bg-danger rounded-pill">Pill Badge</span>
            </div>
            <div class="block-options-item">
              <span class="badge bg-warning">
                <i class="fa fa-exclamation-triangle"></i>
              </span>
            </div>
            <div class="block-options-item">
              <span class="badge bg-success">Yes!</span>
            </div>
            <div class="block-options-item">
              <span class="badge bg-primary">15</span>
            </div>
          </template>

          <p>
            Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
            etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
            hac ac ad massa, fusce ante convallis ante urna molestie vulputate
            bibendum tempus ante justo arcu erat accumsan adipiscing risus,
            libero condimentum venenatis sit nisl nisi ultricies sed, fames
            aliquet consectetur consequat nostra molestie neque nullam
            scelerisque neque commodo turpis quisque etiam egestas vulputate
            massa, curabitur tellus massa venenatis congue dolor enim integer
            luctus, nisi suscipit gravida fames quis vulputate nisi viverra
            luctus id leo dictum lorem, inceptos nibh orci.
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Badges in Options -->
  </div>
  <!-- END Page Content -->
</template>
