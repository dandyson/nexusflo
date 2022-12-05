<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Buttons"
    subtitle="Custom buttons styles to fulfill any design approach."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Buttons</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Buttons Styles -->
    <h2 class="content-heading">Styles</h2>

    <!-- Default -->
    <BaseBlock title="Default">
      <p class="fs-sm text-muted">
        The default button style with various colors to choose from. Prefer
        using 2 or max 3 button color variations in your web project to make it
        easier and more accesible for your users.
      </p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary">Primary</button>
          <div class="mt-2">
            <code>btn-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success">Success</button>
          <div class="mt-2">
            <code>btn-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info">Info</button>
          <div class="mt-2">
            <code>btn-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning">Warning</button>
          <div class="mt-2">
            <code>btn-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger">Danger</button>
          <div class="mt-2">
            <code>btn-danger</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-dark">Dark</button>
          <div class="mt-2">
            <code>btn-dark</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-light">Light</button>
          <div class="mt-2">
            <code>btn-light</code>
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Default -->

    <!-- Outline -->
    <BaseBlock title="Outline">
      <p class="fs-sm text-muted">
        Outline styles are also available for all previous color variations
      </p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <div class="mt-2">
            <code>btn-outline-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-secondary">
            Secondary
          </button>
          <div class="mt-2">
            <code>btn-outline-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success">Success</button>
          <div class="mt-2">
            <code>btn-outline-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info">Info</button>
          <div class="mt-2">
            <code>btn-outline-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <div class="mt-2">
            <code>btn-outline-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <div class="mt-2">
            <code>btn-outline-danger</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-dark">Dark</button>
          <div class="mt-2">
            <code>btn-outline-dark</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-light">Light</button>
          <div class="mt-2">
            <code>btn-outline-light</code>
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Outline -->

    <!-- Alternate -->
    <BaseBlock title="Alternate">
      <p class="fs-sm text-muted">
        The alternate button style offers a more subtle design style.
      </p>
      <div class="row items-push-2x text-center text-sm-start">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary">Primary</button>
          <div class="mt-2">
            <code>btn-alt-primary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary">Secondary</button>
          <div class="mt-2">
            <code>btn-alt-secondary</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success">Success</button>
          <div class="mt-2">
            <code>btn-alt-success</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info">Info</button>
          <div class="mt-2">
            <code>btn-alt-info</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning">Warning</button>
          <div class="mt-2">
            <code>btn-alt-warning</code>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger">Danger</button>
          <div class="mt-2">
            <code>btn-alt-danger</code>
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Alternate -->
    <!-- END Buttons Styles -->

    <!-- Button Effects -->
    <h2 class="content-heading">Effects</h2>

    <!-- Ripple -->
    <BaseBlock title="Ripple">
      <p class="fs-sm text-muted">
        Inspired by Material design, adding a ripple animation on click is just
        a data attribute away
        <code>v-click-ripple</code>
      </p>

      <!-- Default -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary" v-click-ripple>
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary" v-click-ripple>
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success" v-click-ripple>
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info" v-click-ripple>
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning" v-click-ripple>
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger" v-click-ripple>
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-dark" v-click-ripple>
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary" v-click-ripple>
            Light
          </button>
        </div>
      </div>
      <!-- END Default -->

      <!-- Outline -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary" v-click-ripple>
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button
            type="button"
            class="btn btn-outline-secondary"
            v-click-ripple
          >
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success" v-click-ripple>
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info" v-click-ripple>
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning" v-click-ripple>
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger" v-click-ripple>
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-dark" v-click-ripple>
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-light" v-click-ripple>
            Light
          </button>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary" v-click-ripple>
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary" v-click-ripple>
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success" v-click-ripple>
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info" v-click-ripple>
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning" v-click-ripple>
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger" v-click-ripple>
            Danger
          </button>
        </div>
      </div>
      <!-- END Alternate -->
    </BaseBlock>
    <!-- END Ripple -->
    <!-- END Button Effects -->

    <!-- Button Variations -->
    <h2 class="content-heading">Variations</h2>

    <!-- Small Size -->
    <BaseBlock title="Small Size">
      <p class="fs-sm text-muted">
        You can use the class <code>btn-sm</code> to make your buttons smaller
      </p>

      <!-- Default -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-primary">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-success">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-warning">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-danger">Danger</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-dark">Dark</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-secondary">
            Light
          </button>
        </div>
      </div>
      <!-- Default -->

      <!-- Outline -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-info">
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-danger">
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-dark">
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-outline-light">
            Light
          </button>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-sm btn-alt-danger">
            Danger
          </button>
        </div>
      </div>
      <!-- END Alternate -->
    </BaseBlock>
    <!-- END Small Size -->

    <!-- Large Size -->
    <BaseBlock title="Large Size">
      <p class="fs-sm text-muted">
        You can use the class <code>btn-lg</code> to make your buttons larger
      </p>

      <!-- Default -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-primary">Primary</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-success">Success</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-warning">Warning</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-danger">Danger</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-dark">Dark</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-secondary">
            Light
          </button>
        </div>
      </div>
      <!-- END Default -->

      <!-- Outline -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-info">
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-danger">
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-dark">
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-outline-light">
            Light
          </button>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-lg btn-alt-danger">
            Danger
          </button>
        </div>
      </div>
      <!-- END Alternate -->
    </BaseBlock>
    <!-- END Large Size -->

    <!-- Square -->
    <BaseBlock title="Square">
      <p class="fs-sm text-muted">
        You can remove border radius from your buttons if you are looking for a
        sharp look by using the class <code>rounded-0</code>
      </p>

      <!-- Default -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-danger">Danger</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-dark">Dark</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-secondary">
            Light
          </button>
        </div>
      </div>
      <!-- END Default -->

      <!-- Outline -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-info">
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-danger">
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-dark">
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-outline-light">
            Light
          </button>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-0 btn-alt-danger">
            Danger
          </button>
        </div>
      </div>
      <!-- END Alternate -->
    </BaseBlock>
    <!-- END Square -->

    <!-- Rounded -->
    <BaseBlock title="Rounded">
      <p class="fs-sm text-muted">
        Fully rounded buttons are available for all available button styles
      </p>

      <!-- Default -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-info">Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-danger">
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-dark">Dark</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-secondary">
            Light
          </button>
        </div>
      </div>
      <!-- END Default -->

      <!-- Outline -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-info">
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-danger">
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-dark">
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-outline-light">
            Light
          </button>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-primary">
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-secondary">
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-success">
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-info">
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-warning">
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn rounded-pill btn-alt-danger">
            Danger
          </button>
        </div>
      </div>
      <!-- END Alternate -->
    </BaseBlock>
    <!-- END Rounded -->

    <!-- Disabled -->
    <BaseBlock title="Disabled">
      <p class="fs-sm text-muted">
        If an action is not available in a specific state of your website/app,
        you can easily disable your buttons
      </p>

      <!-- Default -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-primary" disabled>
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-secondary" disabled>
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-success" disabled>
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-info" disabled>Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-warning" disabled>
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-danger" disabled>Danger</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-dark" disabled>Dark</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary" disabled>
            Light
          </button>
        </div>
      </div>
      <!-- END Default -->

      <!-- Outline -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-primary" disabled>
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-secondary" disabled>
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-success" disabled>
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-info" disabled>
            Info
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-warning" disabled>
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-danger" disabled>
            Danger
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-dark" disabled>
            Dark
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-outline-light" disabled>
            Light
          </button>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <div class="row items-push text-center text-sm-start mb-4">
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-primary" disabled>
            Primary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-secondary" disabled>
            Secondary
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-success" disabled>
            Success
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-info" disabled>Info</button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-warning" disabled>
            Warning
          </button>
        </div>
        <div class="col-sm-6 col-xl-4">
          <button type="button" class="btn btn-alt-danger" disabled>
            Danger
          </button>
        </div>
      </div>
      <!-- END Alternate -->
    </BaseBlock>
    <!-- END Disabled -->

    <!-- Icons -->
    <BaseBlock title="Icons">
      <p class="fs-sm text-muted">
        You can use any of the
        <RouterLink :to="{ name: 'backend-elements-icons' }"
          >available icons</RouterLink
        >
        in your buttons to visualize its intended action
      </p>

      <!-- Default -->
      <div class="mb-4">
        <button type="button" class="btn btn-success me-1 mb-3">
          <i class="fa fa-fw fa-plus me-1"></i> Add User
        </button>
        <button type="button" class="btn btn-info me-1 mb-3">
          <i class="fa fa-fw fa-download me-1"></i> Download
        </button>
        <button type="button" class="btn btn-warning me-1 mb-3">
          <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Are you sure?
        </button>
        <button type="button" class="btn btn-primary me-1 mb-3">
          <i class="fa fa-fw fa-upload me-1"></i> Upload
        </button>
        <button type="button" class="btn btn-secondary me-1 mb-3">
          <i class="fab fa-fw fa-bluetooth-b me-1"></i> 3 Connections
        </button>
        <button type="button" class="btn btn-danger me-1 mb-3">
          <i class="fa fa-fw fa-times me-1"></i> Delete
        </button>
        <button type="button" class="btn btn-primary me-1 mb-3">
          <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
        </button>
        <button type="button" class="btn btn-secondary me-1 mb-3">
          <i class="fa fa-fw fa-play me-1"></i> Play
        </button>
        <button type="button" class="btn btn-dark me-1 mb-3">
          <i class="fa fa-fw fa-box me-1"></i> 10 Products
        </button>
      </div>
      <!-- END Default -->

      <!-- Alternate -->
      <div class="mb-4">
        <button type="button" class="btn btn-alt-success me-1 mb-3">
          <i class="fa fa-fw fa-plus me-1"></i> Add User
        </button>
        <button type="button" class="btn btn-alt-info me-1 mb-3">
          <i class="fa fa-fw fa-download me-1"></i> Download
        </button>
        <button type="button" class="btn btn-alt-warning me-1 mb-3">
          <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Are you sure?
        </button>
        <button type="button" class="btn btn-alt-primary me-1 mb-3">
          <i class="fa fa-fw fa-upload me-1"></i> Upload
        </button>
        <button type="button" class="btn btn-alt-secondary me-1 mb-3">
          <i class="fab fa-fw fa-bluetooth-b me-1"></i> 3 Connections
        </button>
        <button type="button" class="btn btn-alt-danger me-1 mb-3">
          <i class="fa fa-fw fa-times me-1"></i> Delete
        </button>
        <button type="button" class="btn btn-alt-primary me-1 mb-3">
          <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
        </button>
        <button type="button" class="btn btn-alt-secondary me-1 mb-3">
          <i class="fa fa-fw fa-play me-1"></i> Play
        </button>
        <button type="button" class="btn btn-secondary me-1 mb-3">
          <i class="fa fa-fw fa-box me-1"></i> 10 Products
        </button>
      </div>
      <!-- END Alternate -->

      <!-- Outline -->
      <div class="mb-4">
        <button type="button" class="btn btn-outline-success me-1 mb-3">
          <i class="fa fa-fw fa-plus me-1"></i> Add User
        </button>
        <button type="button" class="btn btn-outline-info me-1 mb-3">
          <i class="fa fa-fw fa-download me-1"></i> Download
        </button>
        <button type="button" class="btn btn-outline-warning me-1 mb-3">
          <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Are you sure?
        </button>
        <button type="button" class="btn btn-outline-primary me-1 mb-3">
          <i class="fa fa-fw fa-upload me-1"></i> Upload
        </button>
        <button type="button" class="btn btn-outline-secondary me-1 mb-3">
          <i class="fab fa-fw fa-bluetooth-b me-1"></i> 3 Connections
        </button>
        <button type="button" class="btn btn-outline-danger me-1 mb-3">
          <i class="fa fa-fw fa-times me-1"></i> Delete
        </button>
        <button type="button" class="btn btn-outline-primary me-1 mb-3">
          <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
        </button>
        <button type="button" class="btn btn-outline-secondary me-1 mb-3">
          <i class="fa fa-fw fa-play me-1"></i> Play
        </button>
        <button type="button" class="btn btn-outline-dark me-1 mb-3">
          <i class="fa fa-fw fa-box me-1"></i> 10 Products
        </button>
      </div>
      <!-- END Outline -->
    </BaseBlock>
    <!-- END Icons -->

    <!-- Be Creative -->
    <BaseBlock title="Be Creative">
      <p class="fs-sm text-muted">
        Mix any of the available classes to create the button style you want to
        use in your project
      </p>
      <button
        type="button"
        class="btn btn-lg rounded-0 btn-secondary me-1 mb-3"
      >
        <i class="fa fa-fw fa-wifi me-1"></i> Wifi Available
      </button>
      <button type="button" class="btn rounded-pill btn-alt-danger me-1 mb-3">
        <i class="fa fa-fw fa-times me-1"></i> Remove
      </button>
      <button type="button" class="btn btn-success me-1 mb-3">
        <i class="fa fa-fw fa-check"></i>
      </button>
      <button type="button" class="btn btn-sm btn-warning me-1 mb-3">
        <i class="fa fa-fw fa-exclamation-circle"></i>
      </button>
      <button type="button" class="btn btn-lg btn-outline-primary me-1 mb-3">
        <i class="fab fa-fw fa-instagram me-1"></i> Post your image
      </button>
      <button type="button" class="btn rounded-pill btn-success me-1 mb-3">
        <i class="fa fa-fw fa-pencil-alt"></i>
      </button>
      <button type="button" class="btn btn-lg btn-secondary me-1 mb-3">
        <i class="fab fa-fw fa-youtube me-1"></i> YouTube
      </button>
      <button
        type="button"
        class="btn btn-sm rounded-0 btn-outline-warning me-1 mb-3"
      >
        <i class="far fa-fw fa-envelope me-1"></i> Messages
      </button>
      <button type="button" class="btn btn-sm btn-dark me-1 mb-3">
        <i class="fab fa-fw fa-dribbble me-1"></i> Dribbble
      </button>
      <button type="button" class="btn btn-sm btn-primary me-1 mb-3">
        <i class="fa fa-fw fa-archive me-1"></i> Archive
      </button>
      <button type="button" class="btn btn-sm btn-secondary me-1 mb-3">
        <i class="fa fa-fw fa-wrench me-1"></i> Preferences
      </button>
      <button
        type="button"
        class="btn btn-lg rounded-0 btn-alt-secondary me-1 mb-3"
      >
        <i class="fa fa-fw fa-cog me-1"></i> Options
      </button>
      <button type="button" class="btn btn-lg btn-alt-warning me-1 mb-3">
        <i class="fab fa-fw fa-instagram me-1"></i> Instagram
      </button>
      <button type="button" class="btn btn-sm btn-alt-primary me-1 mb-3">
        <i class="fa fa-fw fa-rocket me-1"></i> Test
      </button>
      <button
        type="button"
        class="btn btn-sm rounded-pill btn-outline-dark me-1 mb-3"
      >
        <i class="fa fa-fw fa-image me-1"></i> Picture
      </button>
      <button type="button" class="btn btn-lg btn-warning me-1 mb-3">
        <i class="fa fa-fw fa-tint me-1"></i> Themes
      </button>
      <button type="button" class="btn btn-sm btn-primary me-1 mb-3">
        <i class="fa fa-fw fa-arrow-down me-1"></i> Down
      </button>
      <button
        type="button"
        class="btn btn-lg rounded-pill btn-alt-success px-4 me-1 mb-3"
      >
        <i class="si si-rocket me-1"></i> Launch Product
      </button>
      <button type="button" class="btn btn-sm rounded-0 btn-info me-1 mb-3">
        <i class="si si-chemistry me-1"></i> Lab
      </button>
    </BaseBlock>
    <!-- END Be Creative -->
    <!-- END Button Variations -->
  </div>
  <!-- END Page Content -->
</template>
