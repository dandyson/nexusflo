<script setup>
import { ref } from "vue";

// Vue Highlight.js, for more info and examples you can check out https://github.com/metachris/vue-highlightjs
import hljs from "highlight.js/lib/core";
import xmlLang from "highlight.js/lib/languages/xml";
import VueHighlightJS from "@highlightjs/vue-plugin";

// Register Languages
hljs.registerLanguage("xml", xmlLang);

// Get component
const HighlightJS = VueHighlightJS.component;

// Example Code
const codeHtml = ref(`<!doctype html>
<html>

<head>
  <meta charset="utf-8">

  <title>Title</title>
</head>

<body>
  <!-- Your content -->
</body>

</html>`);

const codeHtml2 = ref(`<div id="id-name" class="class-name">
    <!-- This is a comment -->
</div>`);
</script>

<style>
@import "highlight.js/styles/atom-one-dark.css";
</style>

<template>
  <!-- Hero Content -->
  <BaseBackground
    image="/assets/media/various/promo-code.png"
    inner-class="bg-primary-dark-op"
  >
    <div class="content content-full text-center py-7 pb-5">
      <h1 class="h2 text-white mb-2">
        Learn HTML5 in 10 simple and easy to follow steps
      </h1>
      <h2 class="h4 fw-normal text-white-75">10 Lessons &bull; 3 hours</h2>
    </div>
  </BaseBackground>
  <!-- END Hero Content -->

  <!-- Navigation -->
  <div class="bg-body-extra-light">
    <div class="content content-boxed py-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <RouterLink
              :to="{ name: 'backend-elearning-courses' }"
              class="link-fx"
              >Courses</RouterLink
            >
          </li>
          <li class="breadcrumb-item">
            <RouterLink
              :to="{ name: 'backend-elearning-course' }"
              class="link-fx"
              >Learn HTML5</RouterLink
            >
          </li>
          <li class="breadcrumb-item" aria-current="page">1.1 HTML5 Intro</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- END Navigation -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <p class="alert alert-primary text-center">
      <i class="fa fa-gift me-1"></i> This is a free preview! If you like it,
      you can subscribe or purchase this course for only $28!
    </p>
    <div class="row">
      <div class="col-xl-8">
        <!-- Lesson -->
        <BaseBlock>
          <h3>1.1 HTML5 Intro (free preview)</h3>
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
          <HighlightJS language="xml" :code="codeHtml" class="push" />
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
          <div class="alert alert-warning text-center">
            <i class="fa fa-exclamation-triangle me-1"></i> This is an attention
            message.
          </div>
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
          <HighlightJS language="xml" :code="codeHtml2" class="push" />
          <p class="fw-semibold">Things to do:</p>
          <ul class="fa-ul list list-simple-mini push">
            <li>
              <i class="fa fa-check fa-li text-success"></i>
              Make sure you are always closing your tags.
            </li>
            <li>
              <i class="fa fa-check fa-li text-success"></i>
              Keep writing markup to become more familiar.
            </li>
            <li>
              <i class="fa fa-check fa-li text-success"></i>
              Create your own projects.
            </li>
          </ul>
          <p class="alert alert-success text-center">
            <i class="fa fa-thumbs-up me-1"></i> Congrats! Let's head up to the
            next lesson.
          </p>
        </BaseBlock>
        <!-- END Lesson -->
      </div>
      <div class="col-xl-4">
        <!-- Subscribe -->
        <BaseBlock>
          <a class="btn btn-primary w-100 mb-2" href="javascript:void(0)"
            >Subscribe from $9/month</a
          >
          <p class="fs-sm text-center">
            or
            <a class="link-effect fw-medium" href="javascript:void(0)"
              >buy this course for $28</a
            >
          </p>
          <a
            class="btn btn-primary w-100 disabled push"
            href="javascript:void(0)"
          >
            <i class="fa fa-download me-1"></i> Download
          </a>
        </BaseBlock>
        <!-- END Subscribe -->

        <!-- Course Info -->
        <BaseBlock title="About This Course" header-class="text-center">
          <table class="table table-striped table-borderless fs-sm">
            <tbody>
              <tr>
                <td><i class="fa fa-fw fa-book me-1"></i> 10 Lessons</td>
              </tr>
              <tr>
                <td><i class="fa fa-fw fa-clock me-1"></i> 3 hours</td>
              </tr>
              <tr>
                <td><i class="fa fa-fw fa-heart me-1"></i> 16850 Favorites</td>
              </tr>
              <tr>
                <td><i class="fa fa-fw fa-calendar me-1"></i> 3 weeks ago</td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-fw fa-tags me-1"></i>
                  <a
                    class="fw-semibold link-fx text-primary"
                    href="javascript:void(0)"
                    >HTML</a
                  >,
                  <a
                    class="fw-semibold link-fx text-primary"
                    href="javascript:void(0)"
                    >CSS</a
                  >,
                  <a
                    class="fw-semibold link-fx text-primary"
                    href="javascript:void(0)"
                    >JavaScript</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </BaseBlock>
        <!-- END Course Info -->

        <!-- About Instructor -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          link-shadow
          title="About The Instructor"
          header-class="text-center"
        >
          <template #content>
            <div class="block-content block-content-full text-center">
              <div class="push">
                <img
                  class="img-avatar"
                  src="/assets/media/avatars/avatar14.jpg"
                  alt=""
                />
              </div>
              <div class="fw-semibold mb-1">Ralph Murray</div>
              <div class="fs-sm text-muted">Front-end Developer</div>
            </div>
          </template>
        </BaseBlock>
        <!-- END About Instructor -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->

  <!-- Get Started -->
  <div class="bg-body-dark">
    <div class="content content-full text-center py-6">
      <h3 class="h4 mb-4">Subscribe today and learn HTML5 in under 3 hours.</h3>
      <a class="btn btn-primary px-4 py-2" href="javascript:void(0)"
        >Subscribe from $9/month</a
      >
    </div>
  </div>
  <!-- END Get Started -->
</template>
