<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Blank with Block"
    subtitle="That feeling of delight when you start your awesome new project!"
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Generic</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Blank with Block</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock title="Block Title">
      <template #options>
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </template>

      <p>Your content..</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
