<script setup>
import { ref, computed } from "vue";

// Grab icon list data
import iconsList from "@/data/icons";

// Reactive variable
const search = ref("");

// Set icon lists
const iconsFaRegular = iconsList.regular;
const iconsFaSolid = iconsList.solid;
const iconsFaBrands = iconsList.brands;
const iconsSimpleLine = iconsList.simpleline;

// Filter through Font Awesome Regular Icons
const filteredIconsFaRegular = computed(() => {
  if (search.value) {
    return iconsFaRegular.filter((icon) => {
      return icon.includes(search.value);
    });
  } else {
    return iconsFaRegular;
  }
});

// Filter through Font Awesome Solid Icons
const filteredIconsFaSolid = computed(() => {
  if (search.value) {
    return iconsFaSolid.filter((icon) => {
      return icon.includes(search.value);
    });
  } else {
    return iconsFaSolid;
  }
});

// Filter through Font Awesome Brands Icons
const filteredIconsFaBrands = computed(() => {
  if (search.value) {
    return iconsFaBrands.filter((icon) => {
      return icon.includes(search.value);
    });
  } else {
    return iconsFaBrands;
  }
});

// Filter through Simple Line Icons
const filteredIconsSimpleLine = computed(() => {
  if (search.value) {
    return iconsSimpleLine.filter((icon) => {
      return icon.includes(search.value);
    });
  } else {
    return iconsSimpleLine;
  }
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="2000+ Icons"
    subtitle="A huge collection of multi-purpose, uniquely designed, font icons."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Icons</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Search Section -->
    <div class="input-group input-group-lg push">
      <input
        type="text"
        class="form-control fs-base"
        placeholder="Try house or user.."
        v-model="search"
      />
      <span class="input-group-text">
        <i class="fa fa-search"></i>
      </span>
    </div>
    <!-- END Search Section -->

    <!-- No Results -->
    <div
      v-if="
        filteredIconsFaRegular.length === 0 &&
        filteredIconsFaSolid.length === 0 &&
        filteredIconsFaBrands.length === 0 &&
        filteredIconsSimpleLine.length === 0
      "
      class="alert alert-warning space-x-2 fw-medium text-center"
    >
      <i class="fa fa-triangle-exclamation opacity-50"></i>
      <span>No icons found!</span>
    </div>
    <!-- END No Results -->

    <!-- Font Awesome Regular -->
    <BaseBlock
      v-if="filteredIconsFaRegular.length > 0"
      :title="`(${filteredIconsFaRegular.length}) Font Awesome Regular`"
      btn-option-content
    >
      <template #subtitle>
        <small class="text-lowercase"><code>far fa-*</code></small>
      </template>

      <div class="row items-push-2x text-center">
        <div
          v-for="(icon, index) in filteredIconsFaRegular"
          :key="`far-icon-${index}`"
          class="col col-sm-6 col-lg-4 col-xl-3"
        >
          <p><i :class="`far fa-2x fa-${icon}`"></i></p>
          <code>{{ icon }}</code>
        </div>
      </div>
    </BaseBlock>
    <!-- END Font Awesome Regular -->

    <!-- Font Awesome Solid -->
    <BaseBlock
      v-if="filteredIconsFaSolid.length > 0"
      :title="`(${filteredIconsFaSolid.length}) Font Awesome Solid`"
      btn-option-content
    >
      <template #subtitle>
        <small class="text-lowercase"><code>fa fa-*</code></small>
      </template>

      <div class="row items-push-2x text-center">
        <div
          v-for="(icon, index) in filteredIconsFaSolid"
          :key="`fa-icon-${index}`"
          class="col col-sm-6 col-lg-4 col-xl-3"
        >
          <p><i :class="`fa fa-2x fa-${icon}`"></i></p>
          <code>{{ icon }}</code>
        </div>
      </div>
    </BaseBlock>
    <!-- END Font Awesome Solid -->

    <!-- Font Awesome Brands -->
    <BaseBlock
      v-if="filteredIconsFaBrands.length > 0"
      :title="`(${filteredIconsFaBrands.length}) Font Awesome Brands`"
      btn-option-content
    >
      <template #subtitle>
        <small class="text-lowercase"><code>fab fa-*</code></small>
      </template>

      <div class="row items-push-2x text-center">
        <div
          v-for="(icon, index) in filteredIconsFaBrands"
          :key="`fab-icon-${index}`"
          class="col col-sm-6 col-lg-4 col-xl-3"
        >
          <p><i :class="`fab fa-2x fa-${icon}`"></i></p>
          <code>{{ icon }}</code>
        </div>
      </div>
    </BaseBlock>
    <!-- END Font Awesome Brands -->

    <!-- Simple Line Icons -->
    <BaseBlock
      v-if="filteredIconsSimpleLine.length > 0"
      :title="`(${filteredIconsSimpleLine.length}) Simple Line Icons`"
      btn-option-content
    >
      <template #subtitle>
        <small class="text-lowercase"><code>si si-*</code></small>
      </template>

      <div class="row items-push-2x text-center">
        <div
          v-for="(icon, index) in filteredIconsSimpleLine"
          :key="`si-icon-${index}`"
          class="col col-sm-6 col-lg-4 col-xl-3"
        >
          <p><i :class="`si si-${icon} fa-2x`"></i></p>
          <code>{{ icon }}</code>
        </div>
      </div>
    </BaseBlock>
    <!-- END Simple Line Icons -->
  </div>
  <!-- END Page Content -->
</template>
