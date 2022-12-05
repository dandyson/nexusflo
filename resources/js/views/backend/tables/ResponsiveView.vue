<script setup>
import { reactive } from "vue";

// Example data
const users = reactive([
  {
    id: 1,
    name: "Adam McCoy",
    avatar: "avatar10",
    href: "javascript:void(0)",
    labelVariant: "success",
    labelText: "VIP",
  },
  {
    id: 2,
    name: "Betty Kelley",
    avatar: "avatar2",
    href: "javascript:void(0)",
    labelVariant: "info",
    labelText: "Business",
  },
  {
    id: 3,
    name: "Jesse Fisher",
    avatar: "avatar9",
    href: "javascript:void(0)",
    labelVariant: "info",
    labelText: "Business",
  },
  {
    id: 4,
    name: "Ryan Flores",
    avatar: "avatar12",
    href: "javascript:void(0)",
    labelVariant: "warning",
    labelText: "Trial",
  },
  {
    id: 5,
    name: "Alice Moore",
    avatar: "avatar4",
    href: "javascript:void(0)",
    labelVariant: "danger",
    labelText: "Disabled",
  },
]);
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Responsive Tables"
    subtitle="Mobile friendly tables that work across all screen sizes."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Tables</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Responsive</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Full Table -->
    <BaseBlock title="Full Table">
      <template #options>
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </template>

      <p class="fs-sm text-muted">
        The first way to make a table responsive is to wrap it with
        <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>.
        This way, the table will be horizontally scrollable and all data will be
        accessible on smaller screens. You could also append the following
        modifiers to the <code>table-responsive</code> to apply the horizontal
        scrolling on different screen widths: <code>-sm</code>,
        <code>-md</code>, <code>-lg</code>, <code>-xl</code>.
      </p>
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 100px">
                <i class="far fa-user"></i>
              </th>
              <th>Name</th>
              <th style="width: 30%">Email</th>
              <th style="width: 15%">Access</th>
              <th class="text-center" style="width: 100px">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in users" :key="user.id">
              <td class="text-center">
                <img
                  class="img-avatar img-avatar48"
                  :src="`/assets/media/avatars/${user.avatar}.jpg`"
                  alt="Avatar"
                />
              </td>
              <td class="fw-semibold fs-sm">
                {{ user.name }}
              </td>
              <td class="fs-sm">
                client{{ user.id }}<em class="text-muted">@example.com</em>
              </td>
              <td>
                <span
                  :class="`fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-${user.labelVariant}-light text-${user.labelVariant}`"
                >
                  {{ user.labelText }}
                </span>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Full Table -->

    <!-- Partial Table -->
    <BaseBlock title="Partial Table">
      <template #options>
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </template>

      <p class="fs-sm text-muted">
        The second way is to use responsive utility CSS classes for hiding
        columns in various screen resolutions. This way you can hide less
        important columns and keep the most valuable on smaller screens. At the
        following example the <strong>Access</strong> column isn't visible on
        small and extra small screens and <strong>Email</strong> column isn't
        visible on extra small screens.
      </p>
      <table class="table table-bordered table-striped table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 100px">
              <i class="far fa-user"></i>
            </th>
            <th>Name</th>
            <th class="d-none d-md-table-cell" style="width: 30%">Email</th>
            <th class="d-none d-sm-table-cell" style="width: 15%">Access</th>
            <th class="text-center" style="width: 100px">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td class="text-center">
              <img
                class="img-avatar img-avatar48"
                :src="`/assets/media/avatars/${user.avatar}.jpg`"
                alt="Avatar"
              />
            </td>
            <td class="fw-semibold fs-sm">
              {{ user.name }}
            </td>
            <td class="d-none d-md-table-cell fs-sm">
              client{{ user.id }}<em class="text-muted">@example.com</em>
            </td>
            <td class="d-none d-sm-table-cell">
              <span
                :class="`fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-${user.labelVariant}-light text-${user.labelVariant}`"
              >
                {{ user.labelText }}
              </span>
            </td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-fw fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-fw fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </BaseBlock>
    <!-- END Partial Table -->
  </div>
  <!-- END Page Content -->
</template>
