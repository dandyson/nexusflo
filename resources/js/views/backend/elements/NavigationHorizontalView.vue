<script setup>
import { ref } from "vue";
import BaseNavigation from "@/components/BaseNavigation.vue";

// Grab menu navigation arrays
import menu from "@/data/menu";

// Helper variables for mobile navigation visibility
const mobileVisibleNavHoverNormal = ref(false);
const mobileVisibleNavHoverNormalDark = ref(false);
const mobileVisibleNavHoverCentered = ref(false);
const mobileVisibleNavHoverCenteredDark = ref(false);
const mobileVisibleNavHoverJustified = ref(false);
const mobileVisibleNavHoverJustifiedDark = ref(false);

const mobileVisibleNavClickNormal = ref(false);
const mobileVisibleNavClickNormalDark = ref(false);
const mobileVisibleNavClickCentered = ref(false);
const mobileVisibleNavClickCenteredDark = ref(false);
const mobileVisibleNavClickJustified = ref(false);
const mobileVisibleNavClickJustifiedDark = ref(false);
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Horizontal Navigation"
    subtitle="Easily adjust main navigation style to work horizontally as well."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">
            Horizontal Navigation
          </li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <h2 class="content-heading">Hover based on large screens</h2>

    <!-- Horizontal Navigation - Hover Normal -->
    <div class="bg-white p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
          @click="mobileVisibleNavHoverNormal = !mobileVisibleNavHoverNormal"
        >
          Menu - Hover Normal
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavHoverNormal,
        }"
      >
        <BaseNavigation :nodes="menu.demo" horizontal horizontal-hover />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Hover Normal -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Left aligned, light themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Hover Normal Dark -->
    <div class="bg-sidebar-dark p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavHoverNormalDark = !mobileVisibleNavHoverNormalDark
          "
        >
          Menu - Hover Normal Dark
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavHoverNormalDark,
        }"
      >
        <BaseNavigation :nodes="menu.demo" dark horizontal horizontal-hover />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Hover Normal Dark -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Left aligned, dark themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Hover Centered -->
    <div class="bg-white p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavHoverCentered = !mobileVisibleNavHoverCentered
          "
        >
          Menu - Hover Centered
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavHoverCentered,
        }"
      >
        <BaseNavigation
          :nodes="menu.demo"
          horizontal
          horizontal-hover
          horizontal-center
        />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Hover Centered -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Center aligned, light themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Hover Centered Dark -->
    <div class="bg-sidebar-dark p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavHoverCenteredDark =
              !mobileVisibleNavHoverCenteredDark
          "
        >
          Menu - Hover Centered Dark
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavHoverCenteredDark,
        }"
      >
        <BaseNavigation
          :nodes="menu.demo"
          dark
          horizontal
          horizontal-hover
          horizontal-center
        ></BaseNavigation>
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Hover Centered Dark -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Center aligned, dark themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Hover Justified -->
    <div class="bg-white p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavHoverJustified = !mobileVisibleNavHoverJustified
          "
        >
          Menu - Hover Justified
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavHoverJustified,
        }"
      >
        <BaseNavigation
          :nodes="menu.demo"
          horizontal
          horizontal-hover
          horizontal-justify
        />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Hover Justified -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Justified, light themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Hover Justified Dark -->
    <div class="bg-sidebar-dark p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavHoverJustifiedDark =
              !mobileVisibleNavHoverJustifiedDark
          "
        >
          Menu - Hover Justified Dark
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavHoverJustifiedDark,
        }"
      >
        <BaseNavigation
          :nodes="menu.demo"
          dark
          horizontal
          horizontal-hover
          horizontal-justify
        />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Hover Justified Dark -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Justified, dark themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <h2 class="content-heading">Click based on large screens</h2>

    <!-- Horizontal Navigation - Click Normal -->
    <div class="bg-white p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
          @click="mobileVisibleNavClickNormal = !mobileVisibleNavClickNormal"
        >
          Menu - Click Normal
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavClickNormal,
        }"
      >
        <BaseNavigation :nodes="menu.demo" horizontal />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Click Normal -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Left aligned, light themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Click Normal Dark -->
    <div class="bg-sidebar-dark p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavClickNormalDark = !mobileVisibleNavClickNormalDark
          "
        >
          Menu - Click Normal Dark
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavClickNormalDark,
        }"
      >
        <BaseNavigation :nodes="menu.demo" dark horizontal />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Click Normal Dark -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Left aligned, dark themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Click Centered -->
    <div class="bg-white p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavClickCentered = !mobileVisibleNavClickCentered
          "
        >
          Menu - Click Centered
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavClickCentered,
        }"
      >
        <BaseNavigation :nodes="menu.demo" horizontal horizontal-center />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Click Centered -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Center aligned, light themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Click Centered Dark -->
    <div class="bg-sidebar-dark p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavClickCenteredDark =
              !mobileVisibleNavClickCenteredDark
          "
        >
          Menu - Click Centered Dark
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavClickCenteredDark,
        }"
      >
        <BaseNavigation :nodes="menu.demo" dark horizontal horizontal-center />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Click Centered Dark -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Center aligned, dark themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Click Justified -->
    <div class="bg-white p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavClickJustified = !mobileVisibleNavClickJustified
          "
        >
          Menu - Click Justified
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavClickJustified,
        }"
      >
        <BaseNavigation :nodes="menu.demo" horizontal horizontal-justify />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Click Justified -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Justified, light themed</p>
    </BaseBlock>
    <!-- END Dummy content -->

    <!-- Horizontal Navigation - Click Justified Dark -->
    <div class="bg-sidebar-dark p-3 push">
      <!-- Toggle Navigation -->
      <div class="d-lg-none">
        <button
          type="button"
          class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
          @click="
            mobileVisibleNavClickJustifiedDark =
              !mobileVisibleNavClickJustifiedDark
          "
        >
          Menu - Click Justified Dark
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- END Toggle Navigation -->

      <!-- Navigation -->
      <div
        class="d-lg-block mt-2 mt-lg-0"
        :class="{
          'd-none': !mobileVisibleNavClickJustifiedDark,
        }"
      >
        <BaseNavigation :nodes="menu.demo" dark horizontal horizontal-justify />
      </div>
      <!-- END Navigation -->
    </div>
    <!-- END Horizontal Navigation - Click Justified Dark -->

    <!-- Dummy content -->
    <BaseBlock class="d-none d-lg-block">
      <p class="text-center py-8">Justified, dark themed</p>
    </BaseBlock>
    <!-- END Dummy content -->
  </div>
  <!-- END Page Content -->
</template>
