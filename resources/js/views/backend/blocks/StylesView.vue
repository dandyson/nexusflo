<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Block Styles"
    subtitle="Solid foundation and integral part of the design."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Blocks</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Styles</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Rounded Blocks -->
    <h2 class="content-heading">Rounded Blocks</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle" :header-bg="false">
          <p>Simple block..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle">
          <p>With header background..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          :header-bg="false"
          bordered
        >
          <p>Bordered block..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle" bordered>
          <p>Bordered block with header background..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-borderless push">
          <div class="card-header bg-transparent">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Simple card..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-borderless push">
          <div class="card-header">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">With header background..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card push">
          <div class="card-header border-bottom-0 bg-transparent">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Bordered card..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card push">
          <div class="card-header border-bottom-0">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Bordered card with header background..</div>
        </div>
      </div>
    </div>
    <!-- END Rounded Blocks -->

    <!-- Square Blocks -->
    <h2 class="content-heading">Square Blocks</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          :header-bg="false"
          :rounded="false"
        >
          <p>Simple block..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle" :rounded="false">
          <p>With header background..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          :rounded="false"
          :header-bg="false"
          bordered
        >
          <p>Bordered block..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle" :rounded="false" bordered>
          <p>Bordered block with header background..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-square card-borderless push">
          <div class="card-header bg-transparent">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Simple card..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-square card-borderless push">
          <div class="card-header">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">With header background..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-square push">
          <div class="card-header border-bottom-0 bg-transparent">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Bordered card..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-square push">
          <div class="card-header border-bottom-0">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Bordered card with header background..</div>
        </div>
      </div>
    </div>
    <!-- END Square Blocks -->

    <!-- Blocks with Footer -->
    <h2 class="content-heading">Blocks with Footer</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle" :header-bg="false">
          <template #footer>Footer content..</template>

          <p>Simple block..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle">
          <template #footer>Footer content..</template>

          <p>With header background..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          :header-bg="false"
          bordered
        >
          <template #footer>Footer content..</template>

          <p>Bordered block..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Title" subtitle="Subtitle" bordered>
          <template #footer>Footer content..</template>

          <p>Bordered block with header background..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-borderless push">
          <div class="card-header bg-transparent">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Simple card..</div>
          <div class="card-footer fs-sm border-top-0">Footer content..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card card-borderless push">
          <div class="card-header">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">With header background..</div>
          <div class="card-footer fs-sm border-top-0">Footer content..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card push">
          <div class="card-header border-bottom-0 bg-transparent">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Bordered card..</div>
          <div class="card-footer fs-sm border-top-0">Footer content..</div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card push">
          <div class="card-header border-bottom-0">
            <h3 class="block-title">Bootstrap <small>Card</small></h3>
          </div>
          <div class="card-body">Bordered card with header background..</div>
          <div class="card-footer fs-sm border-top-0">Footer content..</div>
        </div>
      </div>
    </div>
    <!-- END Blocks with Footer -->

    <!-- Transparent Blocks -->
    <h2 class="content-heading">Transparent Blocks</h2>
    <div class="row">
      <div class="col-md-6">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          :header-bg="false"
          transparent
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
      <div class="col-md-6">
        <BaseBlock
          title="Title"
          subtitle="Subtitle"
          :header-bg="false"
          transparent
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
    </div>
    <!-- END Transparent Blocks -->

    <!-- Block Effects -->
    <h2 class="content-heading">Block Effects</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Shadow" subtitle="FX" fx-shadow>
          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Pop" subtitle="FX" fx-pop>
          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Rotate Right" subtitle="FX" fx-rotate-right>
          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock title="Rotate Left" subtitle="FX" fx-rotate-left>
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
    <!-- END Block Effects -->

    <!-- Link Blocks -->
    <h2 class="content-heading">Link Blocks</h2>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          tag="a"
          title="Title"
          subtitle="Subtitle"
          href="javascript:void(0)"
        >
          <p>Default opacity hover effect..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          tag="a"
          title="Title"
          subtitle="Subtitle"
          href="javascript:void(0)"
          link-rotate
        >
          <p>Rotate hover effect..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          tag="a"
          title="Title"
          subtitle="Subtitle"
          href="javascript:void(0)"
          link-pop
        >
          <p>Pop hover effect..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-3">
        <BaseBlock
          tag="a"
          title="Title"
          subtitle="Subtitle"
          href="javascript:void(0)"
          link-shadow
        >
          <p>Shadow hover effect..</p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Link Blocks -->
  </div>
  <!-- END Page Content -->
</template>
