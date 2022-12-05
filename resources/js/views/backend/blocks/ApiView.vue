<script setup>
import { ref } from "vue";

// Used to reference test blocks
const testBlock = ref(null);

const testBlockRefresh = ref(null);
const testBlockAll = ref(null);

const testBlockLoading1 = ref(null);
const testBlockLoading2 = ref(null);
const testBlockLoading3 = ref(null);
const testBlockLoading4 = ref(null);
const testBlockLoading5 = ref(null);
const testBlockLoading6 = ref(null);
const testBlockLoading7 = ref(null);
const testBlockLoading8 = ref(null);

// Demo loading functionality for testBlockRefresh
function loadDataForTestBlockRefresh() {
  // Set the block to loading state
  testBlockRefresh.value.statusLoading();

  // .. here you could load your data

  // Set a timeout for demo purposes
  setTimeout(() => {
    // Set the block back to normal state
    testBlockRefresh.value.statusNormal();
  }, 2000);
}

// Demo loading functionality for testBlockAll
function loadDataForTestBlockAll() {
  // Set the block to loading state
  testBlockAll.value.statusLoading();

  // .. here you could load your data

  // Set a timeout for demo purposes
  setTimeout(() => {
    // Set the block back to normal state
    testBlockAll.value.statusNormal();
  }, 2000);
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Blocks API"
    subtitle="Powerful way to manipulate any block you want."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Blocks</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">API</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock title="Usage with JavaScript">
      <p class="text-muted">
        Using block API is easy. You will just have to use the ref property of
        your block to call the related method. For example, to set the status of
        a block with ref set to <strong>testBlock</strong> to loading, you will
        have to call:
        <code>testBlock.statusLoading()</code>
      </p>
      <div class="row items-push">
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-vcenter mb-0">
              <thead>
                <tr>
                  <th style="width: 25%">Live Test</th>
                  <th style="min-width: 160px">Method</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.contentToggle()"
                    >
                      Toggle Content
                    </button>
                  </td>
                  <td>
                    <code>testBlock.contentToggle()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.contentHide()"
                    >
                      Hide Content
                    </button>
                  </td>
                  <td>
                    <code>testBlock.contentHide()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.contentShow()"
                    >
                      Show Content
                    </button>
                  </td>
                  <td>
                    <code>testBlock.contentShow()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.statusToggle()"
                    >
                      Toggle State
                    </button>
                  </td>
                  <td>
                    <code>testBlock.statusToggle()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.statusLoading()"
                    >
                      State Loading
                    </button>
                  </td>
                  <td>
                    <code>testBlock.statusLoading()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.statusNormal()"
                    >
                      State Normal
                    </button>
                  </td>
                  <td>
                    <code>testBlock.statusNormal()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.fullscreenToggle()"
                    >
                      Toggle Fullscreen
                    </button>
                  </td>
                  <td>
                    <code>testBlock.fullscreenToggle()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.fullscreenOn()"
                    >
                      Fullscreen On
                    </button>
                  </td>
                  <td>
                    <code>testBlock.fullscreenOn()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.fullscreenOff()"
                    >
                      Fullscreen Off
                    </button>
                  </td>
                  <td>
                    <code>testBlock.fullscreenOff()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.pinnedToggle()"
                    >
                      Toggle Pinned
                    </button>
                  </td>
                  <td>
                    <code>testBlock.pinnedToggle()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.pinnedOn()"
                    >
                      Pinned On
                    </button>
                  </td>
                  <td>
                    <code>testBlock.pinnedOn()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.pinnedOff()"
                    >
                      Pinned Off
                    </button>
                  </td>
                  <td>
                    <code>testBlock.pinnedOff()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.close()"
                    >
                      Close
                    </button>
                  </td>
                  <td>
                    <code>testBlock.close()</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button
                      type="button"
                      class="btn btn-sm btn-alt-secondary w-100"
                      @click="testBlock.open()"
                    >
                      Open
                    </button>
                  </td>
                  <td>
                    <code>testBlock.open()</code>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <BaseBlock
            ref="testBlock"
            title="Test Block"
            bordered
            btn-option-fullscreen
            btn-option-content
          >
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
    </BaseBlock>
    <!-- END Blocks API -->

    <!-- Interactive Options -->
    <h2 class="content-heading">Interactive Options</h2>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock title="Toggle" btn-option-content>
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
        <BaseBlock title="Close" btn-option-close>
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
        <BaseBlock title="Maximize" btn-option-fullscreen>
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
        <BaseBlock ref="testBlockRefresh" title="Refresh">
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="loadDataForTestBlockRefresh()"
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
        <BaseBlock title="Pinned" btn-option-pinned>
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
          title="Content"
          subtitle="Hidden by default"
          btn-option-content
          mode-content-hide
        >
          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
        </BaseBlock>
      </div>
      <div class="col-12">
        <BaseBlock
          ref="testBlockAll"
          title="All options"
          btn-option-fullscreen
          btn-option-pinned
          btn-option-content
          btn-option-close
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="loadDataForTestBlockAll()"
            >
              <i class="si si-refresh"></i>
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
    <!-- END Interactive Options -->

    <!-- Loading Indicators -->
    <h2 class="content-heading">Loading Indicators</h2>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock ref="testBlockLoading1" title="Gog">
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading1.statusLoading('demo', 2000)"
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
          ref="testBlockLoading2"
          title="Location"
          class="block-mode-loading-location"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading2.statusLoading('demo', 2000)"
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
          ref="testBlockLoading3"
          title="Energy"
          class="block-mode-loading-energy"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading3.statusLoading('demo', 2000)"
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
          ref="testBlockLoading4"
          title="Refresh"
          class="block-mode-loading-refresh"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading4.statusLoading('demo', 2000)"
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
          ref="testBlockLoading5"
          title="Sun"
          class="block-mode-loading-sun"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading5.statusLoading('demo', 2000)"
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
          ref="testBlockLoading6"
          title="Repeat"
          class="block-mode-loading-repeat"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading6.statusLoading('demo', 2000)"
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
          ref="testBlockLoading7"
          title="OneUI"
          class="block-mode-loading-oneui"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading7.statusLoading('demo', 2000)"
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
          ref="testBlockLoading8"
          title="Hourglass"
          class="block-mode-loading-hourglass"
        >
          <template #options>
            <button
              type="button"
              class="btn-block-option"
              @click="testBlockLoading8.statusLoading('demo', 2000)"
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
    <!-- END Loading Indicators -->
  </div>
  <!-- END Page Content -->
</template>
