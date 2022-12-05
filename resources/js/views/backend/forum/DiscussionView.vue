<script setup>
import { ref } from "vue";

// CKEditor 5, for more info and examples you can check out https://ckeditor.com/docs/ckeditor5/latest/builds/guides/integration/frameworks/vuejs-v3.html
import CKEditor from "@ckeditor/ckeditor5-vue";

// CKEditor Classic editor
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

// CKEditor 5 variables
let ckeditor = CKEditor.component;

const editorData = ref("");
const editorConfig = ref({});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Discussion">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Forum</a>
          </li>
          <li class="breadcrumb-item">
            <RouterLink :to="{ name: 'backend-forum-topics' }" class="link-fx"
              >Topics</RouterLink
            >
          </li>
          <li class="breadcrumb-item" aria-current="page">Discussion</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Discussion -->
    <BaseBlock title="Hey all! I just signed up!">
      <template #options>
        <a class="btn-block-option me-2" href="#forum-reply-form">
          <i class="fa fa-reply me-1"></i> Reply
        </a>
      </template>

      <table class="table table-borderless">
        <tbody>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <RouterLink
                :to="{ name: 'backend-pages-generic-profile' }"
                class="fw-semibold"
                >Laura Carr</RouterLink
              >
              on <span class="text-muted">July 1, 2019 16:15</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px">
              <p>
                <a href="javascript:void(0)">
                  <img
                    class="img-avatar"
                    src="/assets/media/avatars/avatar3.jpg"
                    alt=""
                  />
                </a>
              </p>
              <p class="fs-sm fw-medium">267 Posts<br />Level 1</p>
            </td>
            <td>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <hr />
              <p class="fs-sm text-muted">
                There is only one way to avoid criticism: do nothing, say
                nothing, and be nothing.
              </p>
            </td>
          </tr>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <RouterLink
                :to="{ name: 'backend-pages-generic-profile' }"
                class="fw-semibold"
                >Brian Cruz</RouterLink
              >
              on <span class="text-muted">July 10, 2019 10:09</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px">
              <p>
                <a href="javascript:void(0)">
                  <img
                    class="img-avatar"
                    src="/assets/media/avatars/avatar12.jpg"
                    alt=""
                  />
                </a>
              </p>
              <p class="fs-sm fw-medium">157 Posts<br />Level 9</p>
            </td>
            <td>
              <p>
                Felis ullamcorper curae erat nulla luctus sociosqu phasellus
                posuere habitasse sollicitudin, libero sit potenti leo ultricies
                etiam blandit id platea augue, erat habitant fermentum lorem
                commodo taciti tristique etiam curabitur suscipit lacinia
                habitasse amet mauris eu eget ipsum nec magna in, adipiscing
                risus aenean turpis proin duis fringilla praesent ornare lorem
                eros malesuada vitae nullam diam velit potenti consectetur,
                vehicula accumsan risus lectus tortor etiam facilisis tempus
                sapien tortor, mi vestibulum taciti dapibus viverra ac justo
                vivamus erat phasellus turpis nisi class praesent duis ligula,
                vel ornare faucibus potenti nibh turpis, at id semper nunc dui
                blandit. Enim et nec habitasse ultricies id tortor curabitur,
                consectetur eu inceptos ante conubia tempor platea odio, sed sem
                integer lacinia cras non risus euismod turpis platea erat
                ultrices iaculis rutrum taciti, fusce lobortis adipiscing
                dapibus habitant sodales gravida pulvinar, elementum mi tempus
                ut commodo congue ipsum justo nec dui cursus scelerisque
                elementum volutpat tellus nulla laoreet taciti, nibh suspendisse
                primis arcu integer vulputate etiam ligula lobortis nunc,
                interdum commodo libero aliquam suscipit phasellus sollicitudin
                arcu varius venenatis erat ornare tempor nullam donec vitae
                etiam tellus.
              </p>
              <hr />
              <p class="fs-sm text-muted">
                Be yourself; everyone else is already taken.
              </p>
            </td>
          </tr>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <RouterLink
                :to="{ name: 'backend-pages-generic-profile' }"
                class="fw-semibold"
                >Henry Harrison</RouterLink
              >
              on <span class="text-muted">July 15, 2019 20:17</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px">
              <p>
                <a href="javascript:void(0)">
                  <img
                    class="img-avatar"
                    src="/assets/media/avatars/avatar14.jpg"
                    alt=""
                  />
                </a>
              </p>
              <p class="fs-sm fw-medium">290 Posts<br />Level 8</p>
            </td>
            <td>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <hr />
              <p class="fs-sm text-muted">
                Don't cry because it's over, smile because it happened.
              </p>
            </td>
          </tr>
          <tr class="bg-body-light">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <RouterLink
                :to="{ name: 'backend-pages-generic-profile' }"
                class="fw-semibold"
                >Laura Carr</RouterLink
              >
              on <span class="text-muted">July 20, 2019 20:29</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px">
              <p>
                <a href="javascript:void(0)">
                  <img
                    class="img-avatar"
                    src="/assets/media/avatars/avatar7.jpg"
                    alt=""
                  />
                </a>
              </p>
              <p class="fs-sm fw-medium">367 Posts<br />Level 4</p>
            </td>
            <td>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <p>
                Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
                etiam bibendum ad feugiat magna accumsan dolor, nibh molestie
                cras hac ac ad massa, fusce ante convallis ante urna molestie
                vulputate bibendum tempus ante justo arcu erat accumsan
                adipiscing risus, libero condimentum venenatis sit nisl nisi
                ultricies sed, fames aliquet consectetur consequat nostra
                molestie neque nullam scelerisque neque commodo turpis quisque
                etiam egestas vulputate massa, curabitur tellus massa venenatis
                congue dolor enim integer luctus, nisi suscipit gravida fames
                quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                nibh orci.
              </p>
              <hr />
              <p class="fs-sm text-muted">
                Strive not to be a success, but rather to be of value.
              </p>
            </td>
          </tr>
          <tr class="table-active" id="forum-reply-form">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <RouterLink
                :to="{ name: 'backend-pages-generic-profile' }"
                class="fw-semibold"
                >Carl Wells</RouterLink
              >
              Just now
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center">
              <p>
                <a href="javascript:void(0)">
                  <img
                    class="img-avatar"
                    src="/assets/media/avatars/avatar10.jpg"
                    alt=""
                  />
                </a>
              </p>
              <p class="fs-sm fw-medium">303 Posts<br />Level 5</p>
            </td>
            <td>
              <form @submit.prevent>
                <div class="mb-4">
                  <!-- CKEditor 5 -->
                  <ckeditor
                    :editor="ClassicEditor"
                    :config="editorConfig"
                    v-model="editorData"
                  />
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">
                    <i class="fa fa-reply me-1 opacity-50"></i> Reply
                  </button>
                </div>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </BaseBlock>
    <!-- END Discussion -->
  </div>
  <!-- END Page Content -->
</template>
