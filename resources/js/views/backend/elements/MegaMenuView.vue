<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Mega Menu"
    subtitle="You can easily create mega menus in the header for larger screens."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Mega Menu</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Dummy content -->
    <BaseBlock>
      <p class="text-center py-8">...</p>
    </BaseBlock>
    <BaseBlock>
      <p class="text-center py-8">...</p>
    </BaseBlock>
    <BaseBlock>
      <p class="text-center py-8">...</p>
    </BaseBlock>
    <BaseBlock>
      <p class="text-center py-8">...</p>
    </BaseBlock>
    <!-- END Dummy content -->
  </div>
  <!-- END Page Content -->
</template>
