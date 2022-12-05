<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Themed Blocks"
    subtitle="Colorful blocks to match with your design."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Blocks</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Themed</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Square Themed Blocks -->
    <h2 class="content-heading">Themed Square</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Primary" :rounded="false" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Primary Light"
          header-class="bg-primary-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Title"
          header-class="bg-primary-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Title"
          header-class="bg-primary-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Success"
          header-class="bg-success"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Info" header-class="bg-info" :rounded="false" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Warning"
          header-class="bg-warning"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Danger"
          header-class="bg-danger"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Gray" header-class="bg-gray" :rounded="false" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Gray Dark"
          header-class="bg-muted"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Gray Darker"
          header-class="bg-gray-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Black"
          header-class="bg-black"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Default"
          header-class="bg-default"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Default Light"
          header-class="bg-default-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Default Dark"
          header-class="bg-default-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Default Darker"
          header-class="bg-default-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Amethyst"
          header-class="bg-amethyst"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Amethyst Light"
          header-class="bg-amethyst-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Amethyst Dark"
          header-class="bg-amethyst-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Amethyst Darker"
          header-class="bg-amethyst-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="City" header-class="bg-city" :rounded="false" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="City Light"
          header-class="bg-city-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="City Dark"
          header-class="bg-city-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="City Darker"
          header-class="bg-city-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Flat" header-class="bg-flat" :rounded="false" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Flat Light"
          header-class="bg-flat-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Flat Dark"
          header-class="bg-flat-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Flat Darker"
          header-class="bg-flat-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Modern"
          header-class="bg-modern"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Modern Light"
          header-class="bg-modern-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Modern Dark"
          header-class="bg-modern-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Modern Darker"
          header-class="bg-modern-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Smooth"
          header-class="bg-smooth"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Smooth Light"
          header-class="bg-smooth-light"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Smooth Dark"
          header-class="bg-smooth-dark"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Smooth Darker"
          header-class="bg-smooth-darker"
          :rounded="false"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Square Themed Blocks -->

    <!-- Rounded Themed Blocks -->
    <h2 class="content-heading">Themed Rounded</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Primary" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Primary Light" header-class="bg-primary-light" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" header-class="bg-primary-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" header-class="bg-primary-darker" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Success" header-class="bg-success" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Info" header-class="bg-info" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Warning" header-class="bg-warning" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Danger" header-class="bg-danger" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Gray" header-class="bg-gray" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Gray Dark" header-class="bg-muted" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Gray Darker" header-class="bg-gray-darker" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Black" header-class="bg-black" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Default" header-class="bg-default" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Default Light" header-class="bg-default-light" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Default Dark" header-class="bg-default-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Default Darker"
          header-class="bg-default-darker"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Amethyst" header-class="bg-amethyst" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Amethyst Light"
          header-class="bg-amethyst-light"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Amethyst Dark" header-class="bg-amethyst-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Amethyst Darker"
          header-class="bg-amethyst-darker"
          themed
        >
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="City" header-class="bg-city" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="City Light" header-class="bg-city-light" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="City Dark" header-class="bg-city-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="City Darker" header-class="bg-city-darker" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Flat" header-class="bg-flat" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Flat Light" header-class="bg-flat-light" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Flat Dark" header-class="bg-flat-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Flat Darker" header-class="bg-flat-darker" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Modern" header-class="bg-modern" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Modern Light" header-class="bg-modern-light" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Modern Dark" header-class="bg-modern-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Modern Darker" header-class="bg-modern-darker" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Smooth" header-class="bg-smooth" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Smooth Light" header-class="bg-smooth-light" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Smooth Dark" header-class="bg-smooth-dark" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Smooth Darker" header-class="bg-smooth-darker" themed>
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Rounded Themed Blocks -->
  </div>
  <!-- END Page Content -->
</template>
