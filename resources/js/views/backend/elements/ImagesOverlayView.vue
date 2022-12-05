<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Images Overlay"
    subtitle="Add extra options on hover to your images."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Images Overlay</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Image Default -->
    <h2 class="content-heading">Image Default</h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo1.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo1.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo1.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Image Default -->

    <!-- Image Zoom In -->
    <h2 class="content-heading">
      Image Zoom In
      <small><code class="text-lowercase">.fx-item-zoom-in</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo2.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo2.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo2.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Image Zoom In -->

    <!-- Image Rotate Right -->
    <h2 class="content-heading">
      Image Rotate Right
      <small><code class="text-lowercase">.fx-item-rotate-r</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-rotate-r">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo3.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-rotate-r">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo3.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-rotate-r">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo3.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Image Rotate Right -->

    <!-- Image Rotate Left -->
    <h2 class="content-heading">
      Image Rotate Left
      <small><code class="text-lowercase">.fx-item-rotate-l</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-rotate-l">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo4.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-rotate-l">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo4.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-rotate-l">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo4.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Image Rotate Left -->

    <!-- Options Slide Left -->
    <h2 class="content-heading">
      Overlay Slide Left
      <small><code class="text-lowercase">.fx-overlay-slide-left</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo12.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo12.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo12.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Options Slide Left -->

    <!-- Options Slide Right -->
    <h2 class="content-heading">
      Overlay Slide Right
      <small><code class="text-lowercase">.fx-overlay-slide-right</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo16.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo16.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo16.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Options Slide Right -->

    <!-- Options Slide Down -->
    <h2 class="content-heading">
      Overlay Slide Down
      <small><code class="text-lowercase">.fx-overlay-slide-down</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo7.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo7.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo7.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Options Slide Down -->

    <!-- Options Slide Top -->
    <h2 class="content-heading">
      Overlay Slide Top
      <small><code class="text-lowercase">.fx-overlay-slide-top</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo8.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo8.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo8.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Options Slide Top -->

    <!-- Options Zoom In -->
    <h2 class="content-heading">
      Overlay Zoom In
      <small><code class="text-lowercase">.fx-overlay-zoom-in</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo21.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo21.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo21.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Options Zoom In -->

    <!-- Options Zoom Out -->
    <h2 class="content-heading">
      Overlay Zoom Out
      <small><code class="text-lowercase">.fx-overlay-zoom-out</code></small>
    </h2>
    <div class="row items-push">
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo10.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo10.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-white-90">
            <div class="options-overlay-content">
              <h3 class="h4 text-gray-darker mb-2">Image Caption</h3>
              <h4 class="h6 text-gray-dark mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-pencil-alt text-primary me-1"></i> Edit
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-times text-danger me-1"></i> Delete
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
          <img
            class="img-fluid options-item"
            src="/assets/media/photos/photo10.jpg"
            alt="Image"
          />
          <div class="options-overlay bg-primary-dark-op">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-2">Image Caption</h3>
              <h4 class="h6 text-white-75 fw-normal mb-3">Some Extra Info</h4>
              <div class="space-x-2">
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-thumbs-up text-success me-1"></i> Like
                </a>
                <a
                  class="btn btn-sm btn-alt-secondary"
                  href="javascript:void(0)"
                >
                  <i class="fa fa-save text-info me-1"></i> Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Options Zoom Out -->
  </div>
  <!-- END Page Content -->
</template>
