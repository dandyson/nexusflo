<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Carousel"
    subtitle="A slideshow component for cycling through elements"
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Carousel</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <!-- Bootstrap Carousel (data-bs-ride="carousel" is auto initiliazed through Bootstrap JS) -->
  <!-- For advanced Carousel usage you can check out https://getbootstrap.com/docs/5.2/components/carousel/ -->
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- With Controls -->
        <BaseBlock title="With Controls" content-full>
          <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="/assets/media/photos/photo4.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/assets/media/photos/photo5.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 2"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/assets/media/photos/photo6.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 3"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </BaseBlock>
        <!-- END With Controls -->
      </div>
      <div class="col-md-6">
        <!-- With Indicators -->
        <BaseBlock title="With Indicators" content-full>
          <div
            id="carouselExampleIndicators"
            class="carousel slide carousel-fade"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="/assets/media/photos/photo7.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/assets/media/photos/photo8.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/assets/media/photos/photo9.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 1"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </BaseBlock>
        <!-- END With Indicators -->
      </div>
      <div class="col-md-12">
        <!-- With Captions -->
        <BaseBlock title="With Captions" content-full>
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="/assets/media/photos/photo14@2x.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 1"
                />
                <div
                  class="carousel-caption d-none d-md-block bg-black-50 rounded-3 px-3"
                >
                  <h5 class="h3 mb-2">New Zealand</h5>
                  <p class="mb-0">Beautiful Landscapes</p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="/assets/media/photos/photo21@2x.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 2"
                />
                <div
                  class="carousel-caption d-none d-md-block bg-black-50 rounded-3 px-3"
                >
                  <h5 class="h3 mb-2">Greece</h5>
                  <p class="mb-0">Amazing Beaches</p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="/assets/media/photos/photo19@2x.jpg"
                  class="d-block w-100"
                  alt="Carousel Image 3"
                />
                <div
                  class="carousel-caption d-none d-md-block bg-black-50 rounded-3 px-3"
                >
                  <h5 class="h3 mb-2">New Zealand</h5>
                  <p class="mb-0">Inspiring Roads</p>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </BaseBlock>
        <!-- END With Captions -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</template>
