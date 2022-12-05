<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Grid"
    subtitle="Smart and super flexible for building awesome interfaces."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Grid</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Grid -->
    <h2 class="content-heading">Grid <small>Columns never collapse</small></h2>
    <div class="row text-center">
      <div class="col-3">
        <BaseBlock>
          <p><code>col-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock>
          <p><code>col-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock>
          <p><code>col-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock>
          <p><code>col-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Grid -->

    <!-- sm Grid -->
    <h2 class="content-heading">
      sm Grid <small>Columns collapse at 576px</small>
    </h2>
    <div class="row text-center">
      <div class="col-sm-3">
        <BaseBlock>
          <p><code>col-sm-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-sm-3">
        <BaseBlock>
          <p><code>col-sm-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-sm-3">
        <BaseBlock>
          <p><code>col-sm-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-sm-3">
        <BaseBlock>
          <p><code>col-sm-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END sm Grid -->

    <!-- md Grid -->
    <h2 class="content-heading">
      md Grid <small>Columns collapse at 768px</small>
    </h2>
    <div class="row text-center">
      <div class="col-md-3">
        <BaseBlock>
          <p><code>col-md-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-md-3">
        <BaseBlock>
          <p><code>col-md-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-md-3">
        <BaseBlock>
          <p><code>col-md-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-md-3">
        <BaseBlock>
          <p><code>col-md-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END md Grid -->

    <!-- lg Grid -->
    <h2 class="content-heading">
      lg Grid <small>Columns collapse at 992px</small>
    </h2>
    <div class="row text-center">
      <div class="col-lg-3">
        <BaseBlock>
          <p><code>col-lg-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-lg-3">
        <BaseBlock>
          <p><code>col-lg-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-lg-3">
        <BaseBlock>
          <p><code>col-lg-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-lg-3">
        <BaseBlock>
          <p><code>col-lg-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END lg Grid -->

    <!-- xlg Grid -->
    <h2 class="content-heading">
      xl Grid <small>Columns collapse at 1200px</small>
    </h2>
    <div class="row text-center">
      <div class="col-xl-3">
        <BaseBlock>
          <p><code>col-xl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-xl-3">
        <BaseBlock>
          <p><code>col-xl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-xl-3">
        <BaseBlock>
          <p><code>col-xl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-xl-3">
        <BaseBlock>
          <p><code>col-xl-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END xlg Grid -->

    <!-- xxlg Grid -->
    <h2 class="content-heading">
      xxl Grid <small>Columns collapse at 1400px</small>
    </h2>
    <div class="row text-center">
      <div class="col-xxl-3">
        <BaseBlock>
          <p><code>col-xxl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-xxl-3">
        <BaseBlock>
          <p><code>col-xxl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-xxl-3">
        <BaseBlock>
          <p><code>col-xxl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-xxl-3">
        <BaseBlock>
          <p><code>col-xxl-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END xxlg Grid -->

    <!-- Mixed Grid -->
    <h2 class="content-heading">
      Mixed Grid <small>For complex layouts</small>
    </h2>
    <div class="row text-center">
      <div class="col-sm-6 col-lg-3">
        <BaseBlock>
          <p><code>col-md-6</code> <code>col-xl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-sm-6 col-lg-3">
        <BaseBlock>
          <p><code>col-md-6</code> <code>col-xl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-sm-6 col-lg-3">
        <BaseBlock>
          <p><code>col-md-6</code> <code>col-xl-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-sm-6 col-lg-3">
        <BaseBlock>
          <p><code>col-md-6</code> <code>col-xl-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Mixed Grid -->

    <!-- Complex Grid -->
    <h2 class="content-heading">
      Grid with Offsets <small>For complex layouts</small>
    </h2>
    <div class="row text-center">
      <div class="col-md-4 offset-md-1">
        <BaseBlock>
          <p><code>col-md-4 offset-md-1</code></p>
        </BaseBlock>
      </div>
      <div class="col-md-4 offset-md-2">
        <BaseBlock>
          <p><code>col-md-4 offset-md-1</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4 offset-md-3">
        <BaseBlock>
          <p><code>col-md-4 offset-md-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4 offset-md-6">
        <BaseBlock>
          <p><code>col-md-4 offset-md-6</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-6 offset-md-3">
        <BaseBlock>
          <p><code>col-md-5 offset-md-3</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3 offset-md-1">
        <BaseBlock>
          <p><code>col-md-3 offset-md-8</code></p>
        </BaseBlock>
      </div>
      <div class="col-md-3 offset-md-4">
        <BaseBlock>
          <p><code>col-md-3 offset-md-4</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <BaseBlock>
          <p><code>col-md-3</code></p>
        </BaseBlock>
      </div>
      <div class="col-md-3 ms-auto">
        <BaseBlock>
          <p><code>col-md-3</code> <code>ms-auto</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-lg-4 ms-auto">
        <BaseBlock>
          <p><code>col-lg-4</code> <code>ms-auto</code></p>
        </BaseBlock>
      </div>
      <div class="col-lg-4 me-auto">
        <BaseBlock>
          <p><code>col-lg-4</code> <code>me-auto</code></p>
        </BaseBlock>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-6">
        <BaseBlock>
          <p>
            <code>col-md-6</code> and <code>justify-content-center</code> in
            <code>row</code>
          </p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Complex Grids -->

    <!-- Small Grid Gutters -->
    <h2 class="content-heading">
      Small Grid Gutters <small>Useful for tiles/widgets</small>
    </h2>
    <div class="row g-sm">
      <div class="col-3">
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
        <BaseBlock>
          <p>...</p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Small Grid Gutters -->

    <!-- Flat Grid -->
    <h2 class="content-heading">Flat Grid <small>No gutters</small></h2>
    <div class="row g-0">
      <div class="col-3">
        <BaseBlock class="bg-body-dark mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="bg-body-dark mb-0">
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock class="mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="bg-body-dark mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="mb-0">
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock class="bg-body-dark mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="bg-body-dark mb-0">
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-3">
        <BaseBlock class="mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="bg-body-dark mb-0">
          <p>...</p>
        </BaseBlock>
        <BaseBlock class="mb-0">
          <p>...</p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Flat Grid -->

    <!-- Blocks in Grid -->
    <h2 class="content-heading">Blocks in Grid</h2>
    <div class="row">
      <div class="col-md-6 col-xl-4">
        <BaseBlock title="Block">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-4">
        <BaseBlock title="Block">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-4">
        <BaseBlock title="Block">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-4">
        <BaseBlock title="Block">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-4">
        <BaseBlock title="Block">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
      <div class="col-md-6 col-xl-4">
        <BaseBlock title="Block">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </template>

          <p>Block’s content..</p>
        </BaseBlock>
      </div>
    </div>
    <!-- END Blocks in Grid -->

    <!-- Equal Blocks in Grid -->
    <h2 class="content-heading">Equal Blocks in Grid</h2>
    <div class="row items-push">
      <div class="col-sm-4">
        <BaseBlock title="Block" class="h-100 mb-0">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
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
      <div class="col-sm-4">
        <BaseBlock title="Block" class="h-100 mb-0">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
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
      <div class="col-sm-4">
        <BaseBlock title="Block" class="h-100 mb-0">
          <template #options>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
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
    <!-- END Equal Blocks in Grid -->

    <!-- Paragraphs in Grid -->
    <h2 class="content-heading">Paragraphs in Grid</h2>
    <BaseBlock title="Example">
      <div class="row items-push">
        <div class="col-md-6">
          <h3>Flexible Grid</h3>
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
        </div>
        <div class="col-md-6">
          <h3>Many Options</h3>
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
        </div>
      </div>
      <div class="row items-push">
        <div class="col-md-4">
          <h3 class="">For all screen sizes</h3>
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
        </div>
        <div class="col-md-4">
          <h3>Easy to use</h3>
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
        </div>
        <div class="col-md-4">
          <h3>Bootstrap Grid</h3>
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
        </div>
      </div>
      <div class="row items-push">
        <div class="col-md-4">
          <h3>12 Columns</h3>
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
        </div>
        <div class="col-md-8">
          <h3>Multiple Layouts</h3>
          <p>
            Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere
            habitasse sollicitudin, libero sit potenti leo ultricies etiam
            blandit id platea augue, erat habitant fermentum lorem commodo
            taciti tristique etiam curabitur suscipit lacinia habitasse amet
            mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis
            proin duis fringilla praesent ornare lorem eros malesuada vitae
            nullam diam velit potenti consectetur, vehicula accumsan risus
            lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum
            taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi
            class praesent duis ligula, vel ornare faucibus potenti nibh turpis,
            at id semper nunc dui blandit. Enim et nec habitasse ultricies id
            tortor curabitur, consectetur eu inceptos ante conubia tempor platea
            odio, sed sem integer lacinia cras non risus euismod turpis platea
            erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing
            dapibus habitant sodales gravida pulvinar, elementum mi tempus ut
            commodo congue ipsum justo nec dui cursus scelerisque elementum
            volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu
            integer vulputate etiam ligula lobortis nunc, interdum commodo
            libero aliquam suscipit phasellus sollicitudin arcu varius venenatis
            erat ornare tempor nullam donec vitae etiam tellus.
          </p>
        </div>
      </div>
      <div class="row items-push">
        <div class="col-md-8">
          <h3>Mobile, Tablets and Desktop</h3>
          <p>
            Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere
            habitasse sollicitudin, libero sit potenti leo ultricies etiam
            blandit id platea augue, erat habitant fermentum lorem commodo
            taciti tristique etiam curabitur suscipit lacinia habitasse amet
            mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis
            proin duis fringilla praesent ornare lorem eros malesuada vitae
            nullam diam velit potenti consectetur, vehicula accumsan risus
            lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum
            taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi
            class praesent duis ligula, vel ornare faucibus potenti nibh turpis,
            at id semper nunc dui blandit. Enim et nec habitasse ultricies id
            tortor curabitur, consectetur eu inceptos ante conubia tempor platea
            odio, sed sem integer lacinia cras non risus euismod turpis platea
            erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing
            dapibus habitant sodales gravida pulvinar, elementum mi tempus ut
            commodo congue ipsum justo nec dui cursus scelerisque elementum
            volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu
            integer vulputate etiam ligula lobortis nunc, interdum commodo
            libero aliquam suscipit phasellus sollicitudin arcu varius venenatis
            erat ornare tempor nullam donec vitae etiam tellus.
          </p>
        </div>
        <div class="col-md-4">
          <h3>Mixed Grid</h3>
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
        </div>
      </div>
    </BaseBlock>
    <!-- END Paragraphs in Grid -->

    <!-- Responsive Utility Classes -->
    <BaseBlock title="Responsive Utility Classes" content-full>
      <p>
        For faster mobile-friendly development, use these utility classes for
        showing and hiding content by device via media query.
      </p>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mb-0">
          <thead>
            <tr>
              <th style="min-width: 100px"></th>
              <th class="text-center">
                xs<br />
                <small class="fw-normal text-muted">&lt; 576px</small>
              </th>
              <th class="text-center">
                sm<br />
                <small class="fw-normal text-muted">&ge; 576px</small>
              </th>
              <th class="text-center">
                md<br />
                <small class="fw-normal text-muted">&ge; 768px</small>
              </th>
              <th class="text-center">
                lg<br />
                <small class="fw-normal text-muted">&ge; 992px</small>
              </th>
              <th class="text-center">
                xl<br />
                <small class="fw-normal text-muted">&ge; 1200px</small>
              </th>
              <th class="text-center">
                xxl<br />
                <small class="fw-normal text-muted">&ge; 1400px</small>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.d-none</code> <code>.d-sm-*</code></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
            </tr>
            <tr>
              <td><code>.d-none</code> <code>.d-md-*</code></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
            </tr>
            <tr>
              <td><code>.d-none</code> <code>.d-lg-*</code></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
            </tr>
            <tr>
              <td><code>.d-none</code> <code>.d-xl-*</code></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
            </tr>
            <tr>
              <td><code>.d-none</code> <code>.d-xxl-*</code></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-check text-success"></i></td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td><code>.d-none</code></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td><code>.d-sm-none</code></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
            </tr>
            <tr>
              <td><code>.d-md-none</code></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
            </tr>
            <tr>
              <td><code>.d-lg-none</code></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
            </tr>
            <tr>
              <td><code>.d-xl-none</code></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-close text-danger"></i></td>
              <td><i class="si si-close text-danger"></i></td>
            </tr>
            <tr>
              <td><code>.d-xxl-none</code></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-check text-success"></i></td>
              <td><i class="si si-close text-danger"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Responsive Utility Classes -->
  </div>
  <!-- END Page Content -->
</template>
