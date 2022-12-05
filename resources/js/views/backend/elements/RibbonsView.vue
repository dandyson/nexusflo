<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Ribbons"
    subtitle="Easily add cool ribbons to your blocks."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Ribbons</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Simple Ribbon -->
    <h2 class="content-heading">Simple Ribbon</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <!-- Default Position Primary -->
        <BaseBlock content-full ribbon="$28">
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-html5 text-gray"></i>
            </p>
            <h4 class="mb-0">Learn HTML5</h4>
          </div>
        </BaseBlock>
        <!-- END Default Position Primary -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Bottom Right Primary -->
        <BaseBlock content-full ribbon="$28" ribbon-bottom>
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-html5 text-gray"></i>
            </p>
            <h4 class="mb-0">Learn HTML5</h4>
          </div>
        </BaseBlock>
        <!-- END Bottom Right Primary -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Bottom Left Primary -->
        <BaseBlock content-full ribbon="$28" ribbon-bottom ribbon-left>
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-html5 text-gray"></i>
            </p>
            <h4 class="mb-0">Learn HTML5</h4>
          </div>
        </BaseBlock>
        <!-- END Bottom Left Primary -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Top Left Primary -->
        <BaseBlock content-full ribbon="$28" ribbon-left>
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-html5 text-gray"></i>
            </p>
            <h4 class="mb-0">Learn HTML5</h4>
          </div>
        </BaseBlock>
        <!-- END Top Left Primary -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Success Color -->
        <BaseBlock content-full ribbon="$32" ribbon-variant="success">
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-css3 text-gray"></i>
            </p>
            <h4 class="mb-0">Discover CSS3</h4>
          </div>
        </BaseBlock>
        <!-- END Success Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Info Color -->
        <BaseBlock content-full ribbon="$32" ribbon-variant="info">
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-css3 text-gray"></i>
            </p>
            <h4 class="mb-0">Discover CSS3</h4>
          </div>
        </BaseBlock>
        <!-- END Info Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Warning Color -->
        <BaseBlock content-full ribbon="$32" ribbon-variant="warning">
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-css3 text-gray"></i>
            </p>
            <h4 class="mb-0">Discover CSS3</h4>
          </div>
        </BaseBlock>
        <!-- END Warning Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Danger Color -->
        <BaseBlock content-full ribbon="$32" ribbon-variant="danger">
          <div class="text-center py-4">
            <p>
              <i class="fab fa-3x fa-css3 text-gray"></i>
            </p>
            <h4 class="mb-0">Discover CSS3</h4>
          </div>
        </BaseBlock>
        <!-- END Danger Color -->
      </div>
      <div class="col-md-6">
        <!-- Glass on Background Color -->
        <BaseBlock class="bg-primary" ribbon ribbon-variant="glass">
          <template #ribbon>
            <i class="fa fa-check mr-1"></i> Crystal
          </template>

          <div class="text-center py-6 push">
            <h4 class="text-white mb-0">Awesome Color</h4>
          </div>
        </BaseBlock>
        <!-- END Glass on Background Color -->
      </div>
      <div class="col-md-6">
        <!-- Glass on Background Image -->
        <BaseBackground image="/assets/media/photos/photo25.jpg">
          <BaseBlock class="bg-black-50" ribbon ribbon-variant="glass">
            <template #ribbon>
              <i class="fa fa-check"></i>
            </template>

            <div class="text-center py-6 push">
              <h4 class="font-w600 text-white mb-0">Awesome Image</h4>
            </div>
          </BaseBlock>
        </BaseBackground>
        <!-- END Glass on Background Image -->
      </div>
    </div>
    <!-- END Simple Ribbon -->

    <!-- Bookmark Ribbon -->
    <h2 class="content-heading">Bookmark Ribbon</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <!-- Default Position -->
        <BaseBlock content-full ribbon ribbon-bookmark>
          <template #ribbon>
            <i class="far fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-cog text-gray"></i>
            </p>
            <h4 class="mb-0">Settings</h4>
          </div>
        </BaseBlock>
        <!-- END Default Position -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Bottom Right -->
        <BaseBlock content-full ribbon ribbon-bookmark ribbon-bottom>
          <template #ribbon>
            <i class="far fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-cog text-gray"></i>
            </p>
            <h4 class="mb-0">Settings</h4>
          </div>
        </BaseBlock>
        <!-- END Bottom Right -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Bottom Left -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-bookmark
          ribbon-bottom
          ribbon-left
        >
          <template #ribbon>
            <i class="far fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-cog text-gray"></i>
            </p>
            <h4 class="mb-0">Settings</h4>
          </div>
        </BaseBlock>
        <!-- END Bottom Left -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Top Left -->
        <BaseBlock content-full ribbon ribbon-bookmark ribbon-left>
          <template #ribbon>
            <i class="far fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-cog text-gray"></i>
            </p>
            <h4 class="mb-0">Settings</h4>
          </div>
        </BaseBlock>
        <!-- END Top Left -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Success Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-bookmark
          ribbon-variant="success"
        >
          <template #ribbon>
            <i class="fa fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-wrench text-gray"></i>
            </p>
            <h4 class="mb-0">Options</h4>
          </div>
        </BaseBlock>
        <!-- END Success Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Info Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-bookmark
          ribbon-variant="info"
        >
          <template #ribbon>
            <i class="fa fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-wrench text-gray"></i>
            </p>
            <h4 class="mb-0">Options</h4>
          </div>
        </BaseBlock>
        <!-- END Info Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Warning Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-bookmark
          ribbon-variant="warning"
        >
          <template #ribbon>
            <i class="fa fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-wrench text-gray"></i>
            </p>
            <h4 class="mb-0">Options</h4>
          </div>
        </BaseBlock>
        <!-- END Warning Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Danger Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-bookmark
          ribbon-variant="danger"
        >
          <template #ribbon>
            <i class="fa fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="fa fa-3x fa-wrench text-gray"></i>
            </p>
            <h4 class="mb-0">Options</h4>
          </div>
        </BaseBlock>
        <!-- END Danger Color -->
      </div>
      <div class="col-md-6">
        <!-- Glass on Background Color -->
        <BaseBlock
          class="bg-primary"
          :ribbon="true"
          ribbon-bookmark
          ribbon-variant="glass"
        >
          <template #ribbon>
            <i class="fa fa-check mr-1"></i> Crystal
          </template>

          <div class="text-center py-6 push">
            <h4 class="text-white mb-0">Awesome Color</h4>
          </div>
        </BaseBlock>
        <!-- END Glass on Background Color -->
      </div>
      <div class="col-md-6">
        <!-- Glass on Background Image -->
        <BaseBackground image="/assets/media/photos/photo25.jpg">
          <BaseBlock
            class="bg-black-50"
            :ribbon="true"
            ribbon-bookmark
            ribbon-variant="glass"
          >
            <template #ribbon>
              <i class="fa fa-check"></i>
            </template>

            <div class="text-center py-6 push">
              <h4 class="font-w600 text-white mb-0">Awesome Image</h4>
            </div>
          </BaseBlock>
        </BaseBackground>
        <!-- END Glass on Background Image -->
      </div>
    </div>
    <!-- END Bookmark Ribbon -->

    <!-- Modern Ribbon -->
    <h2 class="content-heading">Modern Ribbon</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <!-- Default Position -->
        <BaseBlock content-full ribbon ribbon-modern>
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-copy text-gray"></i>
            </p>
            <h4 class="mb-0">Files</h4>
          </div>
        </BaseBlock>
        <!-- END Default Position -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Bottom Right -->
        <BaseBlock content-full ribbon ribbon-modern ribbon-bottom>
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-copy text-gray"></i>
            </p>
            <h4 class="mb-0">Files</h4>
          </div>
        </BaseBlock>
        <!-- END Bottom Right -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Bottom Left -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-modern
          ribbon-bottom
          ribbon-left
        >
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-copy text-gray"></i>
            </p>
            <h4 class="mb-0">Files</h4>
          </div>
        </BaseBlock>
        <!-- END Bottom Left -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Top Left -->
        <BaseBlock content-full ribbon ribbon-modern ribbon-left>
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-copy text-gray"></i>
            </p>
            <h4 class="mb-0">Files</h4>
          </div>
        </BaseBlock>
        <!-- END Top Left -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Success Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-modern
          ribbon-variant="success"
        >
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-image text-gray"></i>
            </p>
            <h4 class="mb-0">Photos</h4>
          </div>
        </BaseBlock>
        <!-- END Success Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Info Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-modern
          ribbon-variant="info"
        >
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-image text-gray"></i>
            </p>
            <h4 class="mb-0">Photos</h4>
          </div>
        </BaseBlock>
        <!-- END Info Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Warning Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-modern
          ribbon-variant="warning"
        >
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-image text-gray"></i>
            </p>
            <h4 class="mb-0">Photos</h4>
          </div>
        </BaseBlock>
        <!-- END Warning Color -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Danger Color -->
        <BaseBlock
          content-full
          :ribbon="true"
          ribbon-modern
          ribbon-variant="danger"
        >
          <template #ribbon>
            <i class="fa fa-fw fa-heart"></i>
          </template>

          <div class="text-center py-4">
            <p>
              <i class="far fa-3x fa-image text-gray"></i>
            </p>
            <h4 class="mb-0">Photos</h4>
          </div>
        </BaseBlock>
        <!-- END Danger Color -->
      </div>
      <div class="col-md-6">
        <!-- Glass on Background Color -->
        <BaseBlock
          class="bg-primary"
          :ribbon="true"
          ribbon-modern
          ribbon-variant="glass"
        >
          <template #ribbon>
            <i class="fa fa-check mr-1"></i> Crystal
          </template>

          <div class="text-center py-6 push">
            <h4 class="text-white mb-0">Awesome Color</h4>
          </div>
        </BaseBlock>
        <!-- END Glass on Background Color -->
      </div>
      <div class="col-md-6">
        <!-- Glass on Background Image -->
        <BaseBackground image="/assets/media/photos/photo25.jpg">
          <BaseBlock
            class="bg-black-50"
            :ribbon="true"
            ribbon-modern
            ribbon-variant="glass"
          >
            <template #ribbon>
              <i class="fa fa-check"></i>
            </template>

            <div class="text-center py-6 push">
              <h4 class="font-w600 text-white mb-0">Awesome Image</h4>
            </div>
          </BaseBlock>
        </BaseBackground>
        <!-- END Glass on Background Image -->
      </div>
    </div>
    <!-- END Modern Ribbon -->
  </div>
  <!-- END Page Content -->
</template>
