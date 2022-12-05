<script setup>
import { reactive } from "vue";

// Reactive state
const state = reactive({
  attentionSeekers: { animated: false, animation: "" },
  bouncingEntrances: { animated: false, animation: "" },
  bouncingExits: { animated: false, animation: "" },
  fadingEntrances: { animated: false, animation: "" },
  fadingExits: { animated: false, animation: "" },
  flippers: { animated: false, animation: "" },
  lightspeed: { animated: false, animation: "" },
  rotatingEntrances: { animated: false, animation: "" },
  rotatingExits: { animated: false, animation: "" },
  slidingEntrances: { animated: false, animation: "" },
  slidingExits: { animated: false, animation: "" },
  zoomEntrances: { animated: false, animation: "" },
  zoomExits: { animated: false, animation: "" },
  specials: { animated: false, animation: "" },
});

// Set animation to a section
function setAnimation(section, animation) {
  // Remove animation classes
  section.animated = false;
  section.animation = "";

  // Add the new ones to trigger the animation
  section.animated = true;
  section.animation = animation;
}

// Set classes to the related section
function classContainer(section) {
  return {
    animated: section.animated,
    [section.animation]: section.animated,
  };
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Animations"
    subtitle="Rich animation library will bring your elements to life and engage your users."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Animations</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Attention Seekers -->
    <h2 class="content-heading">Attention Seekers</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.attentionSeekers.animated
              ? "animated " + state.attentionSeekers.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'bounce')"
              >
                bounce
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'flash')"
              >
                flash
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'pulse')"
              >
                pulse
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'rubberBand')"
              >
                rubberBand
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'shake')"
              >
                shake
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'swing')"
              >
                swing
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'tada')"
              >
                tada
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.attentionSeekers, 'wobble')"
              >
                wobble
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.attentionSeekers)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Attention Seekers -->

    <!-- Bouncing Entrances -->
    <h2 class="content-heading">Bouncing Entrances</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.bouncingEntrances.animated
              ? "animated " + state.bouncingEntrances.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingEntrances, 'bounceIn')"
              >
                bounceIn
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingEntrances, 'bounceInDown')"
              >
                bounceInDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingEntrances, 'bounceInLeft')"
              >
                bounceInLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingEntrances, 'bounceInRight')"
              >
                bounceInRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingEntrances, 'bounceInUp')"
              >
                bounceInUp
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.bouncingEntrances)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Bouncing Entrances -->

    <!-- Bouncing Exits -->
    <h2 class="content-heading">Bouncing Exits</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.bouncingExits.animated
              ? "animated " + state.bouncingExits.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingExits, 'bounceOut')"
              >
                bounceOut
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingExits, 'bounceOutDown')"
              >
                bounceOutDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingExits, 'bounceOutLeft')"
              >
                bounceOutLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingExits, 'bounceOutRight')"
              >
                bounceOutRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.bouncingExits, 'bounceOutUp')"
              >
                bounceOutUp
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.bouncingExits)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Bouncing Exits -->

    <!-- Fading Entrances -->
    <h2 class="content-heading">Fading Entrances</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.fadingEntrances.animated
              ? "animated " + state.fadingEntrances.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeIn')"
              >
                fadeIn
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInDown')"
              >
                fadeInDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInDownBig')"
              >
                fadeInDownBig
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInLeft')"
              >
                fadeInLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInLeftBig')"
              >
                fadeInLeftBig
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInRight')"
              >
                fadeInRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInRightBig')"
              >
                fadeInRightBig
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInUp')"
              >
                fadeInUp
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingEntrances, 'fadeInUpBig')"
              >
                fadeInUpBig
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.fadingEntrances)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Fading Entrances -->

    <!-- Fading Exits -->
    <h2 class="content-heading">Fading Exits</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.fadingExits.animated
              ? "animated " + state.fadingExits.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOut')"
              >
                fadeOut
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutDown')"
              >
                fadeOutDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutDownBig')"
              >
                fadeOutDownBig
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutLeft')"
              >
                fadeOutLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutLeftBig')"
              >
                fadeOutLeftBig
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutRight')"
              >
                fadeOutRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutRightBig')"
              >
                fadeOutRightBig
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutUp')"
              >
                fadeOutUp
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.fadingExits, 'fadeOutUpBig')"
              >
                fadeOutUpBig
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.fadingExits)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Fading Exits -->

    <!-- Flippers -->
    <h2 class="content-heading">Flippers</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.flippers.animated
              ? "animated " + state.flippers.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.flippers, 'flip')"
              >
                flip
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.flippers, 'flipInX')"
              >
                flipInX
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.flippers, 'flipInY')"
              >
                flipInY
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.flippers, 'flipOutX')"
              >
                flipOutX
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.flippers, 'flipOutY')"
              >
                flipOutY
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.flippers)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Flippers -->

    <!-- Lightspeed -->
    <h2 class="content-heading">Lightspeed</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.lightspeed.animated
              ? "animated " + state.lightspeed.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.lightspeed, 'lightSpeedIn')"
              >
                lightSpeedIn
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.lightspeed, 'lightSpeedOut')"
              >
                lightSpeedOut
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.lightspeed)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Lightspeed -->

    <!-- Rotating Entrances -->
    <h2 class="content-heading">Rotating Entrances</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.rotatingEntrances.animated
              ? "animated " + state.rotatingEntrances.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingEntrances, 'rotateIn')"
              >
                rotateIn
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="
                  setAnimation(state.rotatingEntrances, 'rotateInDownLeft')
                "
              >
                rotateInDownLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="
                  setAnimation(state.rotatingEntrances, 'rotateInDownRight')
                "
              >
                rotateInDownRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingEntrances, 'rotateInUpLeft')"
              >
                rotateInUpLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="
                  setAnimation(state.rotatingEntrances, 'rotateInUpRight')
                "
              >
                rotateInUpRight
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.rotatingEntrances)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Rotating Entrances -->

    <!-- Rotating Exits -->
    <h2 class="content-heading">Rotating Exits</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.rotatingExits.animated
              ? "animated " + state.rotatingExits.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingExits, 'rotateOut')"
              >
                rotateOut
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingExits, 'rotateOutDownLeft')"
              >
                rotateOutDownLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingExits, 'rotateOutDownRight')"
              >
                rotateOutDownRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingExits, 'rotateOutUpLeft')"
              >
                rotateOutUpLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.rotatingExits, 'rotateOutUpRight')"
              >
                rotateOutUpRight
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.rotatingExits)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Rotating Exits -->

    <!-- Sliding Entrances -->
    <h2 class="content-heading">Sliding Entrances</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.slidingEntrances.animated
              ? "animated " + state.slidingEntrances.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingEntrances, 'slideInUp')"
              >
                slideInUp
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingEntrances, 'slideInDown')"
              >
                slideInDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingEntrances, 'slideInLeft')"
              >
                slideInLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingEntrances, 'slideInRight')"
              >
                slideInRight
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.slidingEntrances)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Sliding Entrances -->

    <!-- Sliding Exits -->
    <h2 class="content-heading">Sliding Exits</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.slidingExits.animated
              ? "animated " + state.slidingExits.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingExits, 'slideOutUp')"
              >
                slideOutUp
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingExits, 'slideOutDown')"
              >
                slideOutDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingExits, 'slideOutLeft')"
              >
                slideOutLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.slidingExits, 'slideOutRight')"
              >
                slideOutRight
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.slidingExits)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Sliding Exits -->

    <!-- Zoom Entrances -->
    <h2 class="content-heading">Zoom Entrances</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.zoomEntrances.animated
              ? "animated " + state.zoomEntrances.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomEntrances, 'zoomIn')"
              >
                zoomIn
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomEntrances, 'zoomInDown')"
              >
                zoomInDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomEntrances, 'zoomInLeft')"
              >
                zoomInLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomEntrances, 'zoomInRight')"
              >
                zoomInRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomEntrances, 'zoomInUp')"
              >
                zoomInUp
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.zoomEntrances)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Zoom Entrances -->

    <!-- Zoom Exits -->
    <h2 class="content-heading">Zoom Exits</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.zoomExits.animated
              ? "animated " + state.zoomExits.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomExits, 'zoomOut')"
              >
                zoomOut
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomExits, 'zoomOutDown')"
              >
                zoomOutDown
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomExits, 'zoomOutLeft')"
              >
                zoomOutLeft
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomExits, 'zoomOutRight')"
              >
                zoomOutRight
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.zoomExits, 'zoomOutUp')"
              >
                zoomOutUp
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.zoomExits)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Zoom Exits -->

    <!-- Specials -->
    <h2 class="content-heading">Specials</h2>
    <BaseBlock content-class="overflow-hidden">
      <template #header>
        <h2 class="block-title">
          Active CSS classes:
          <code class="text-normal">{{
            state.specials.animated
              ? "animated " + state.specials.animation
              : ""
          }}</code>
        </h2>
      </template>

      <div class="row">
        <div class="col-lg-6">
          <div class="row items-push">
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.specials, 'hinge')"
              >
                hinge
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.specials, 'rollIn')"
              >
                rollIn
              </button>
            </div>
            <div class="col-md-6">
              <button
                type="button"
                class="btn w-100 btn-sm btn-alt-secondary"
                @click="setAnimation(state.specials, 'rollOut')"
              >
                rollOut
              </button>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 d-lg-flex align-items-lg-center justify-content-lg-center text-center pb-4"
        >
          <div :class="classContainer(state.specials)">
            <img
              class="img-fluid"
              src="/assets/media/various/little-monster.png"
              alt="Cartoon"
              width="200"
            />
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Specials -->
  </div>
  <!-- END Page Content -->
</template>
