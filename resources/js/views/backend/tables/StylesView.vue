<script setup>
import { reactive } from "vue";

// Example data
const users = reactive([
  {
    id: 1,
    name: "Adam McCoy",
    labelVariant: "success",
    labelText: "VIP",
    rowVariant: "active",
  },
  {
    id: 2,
    name: "Betty Kelley",
    labelVariant: "info",
    labelText: "Business",
    rowVariant: "",
  },
  {
    id: 3,
    name: "Jesse Fisher",
    labelVariant: "info",
    labelText: "Business",
    rowVariant: "primary",
  },
  {
    id: 4,
    name: "Ryan Flores",
    labelVariant: "warning",
    labelText: "Trial",
    rowVariant: "",
  },
  {
    id: 5,
    name: "Alice Moore",
    labelVariant: "danger",
    labelText: "Disabled",
    rowVariant: "warning",
  },
  {
    id: 6,
    name: "Scott Young",
    labelVariant: "success",
    labelText: "VIP",
    rowVariant: "",
  },
  {
    id: 7,
    name: "Ralph Murray",
    labelVariant: "danger",
    labelText: "Disabled",
    rowVariant: "danger",
  },
  {
    id: 8,
    name: "Marie Duncan",
    labelVariant: "warning",
    labelText: "Trial",
    rowVariant: "",
  },
  {
    id: 9,
    name: "Helen Jacobs",
    labelVariant: "info",
    labelText: "Business",
    rowVariant: "info",
  },
  {
    id: 10,
    name: "Carl Wells",
    labelVariant: "info",
    labelText: "Business",
    rowVariant: "",
  },
  {
    id: 11,
    name: "Jose Mills",
    labelVariant: "success",
    labelText: "VIP",
    rowVariant: "success",
  },
]);
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Table Styles"
    subtitle="Multiple style options to match your preferences."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Tables</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Styles</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row">
      <div class="col-xl-6">
        <!-- Default Table -->
        <BaseBlock title="Default Table">
          <template #options>
            <div class="block-options-item">
              <code>.table</code>
            </div>
          </template>

          <table class="table table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%">
                  Access
                </th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.slice(0, 6)" :key="user.id">
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  <a href="javascript:void(0)">{{ user.name }}</a>
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
        <!-- END Default Table -->
      </div>
      <div class="col-xl-6">
        <!-- Striped Table -->
        <BaseBlock title="Striped Table">
          <template #options>
            <div class="block-options-item">
              <code>.table-striped</code>
            </div>
          </template>

          <table class="table table-striped table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%">
                  Access
                </th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.slice(0, 6)" :key="user.id">
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  <a href="javascript:void(0)">{{ user.name }}</a>
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
        <!-- END Striped Table -->
      </div>
      <div class="col-xl-6">
        <!-- Hover Table -->
        <BaseBlock title="Hover Table">
          <template #options>
            <div class="block-options-item">
              <code>.table-hover</code>
            </div>
          </template>

          <table class="table table-hover table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%">
                  Access
                </th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.slice(0, 6)" :key="user.id">
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  <a href="javascript:void(0)">{{ user.name }}</a>
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
        <!-- END Hover Table -->
      </div>
      <div class="col-xl-6">
        <!-- Bordered Table -->
        <BaseBlock title="Bordered Table">
          <template #options>
            <div class="block-options-item">
              <code>.table-bordered</code>
            </div>
          </template>

          <table class="table table-bordered table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%">
                  Access
                </th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.slice(0, 6)" :key="user.id">
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  <a href="javascript:void(0)">{{ user.name }}</a>
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
        <!-- END Bordered Table -->
      </div>
      <div class="col-xl-6">
        <!-- Borderless Table -->
        <BaseBlock title="Borderless Table">
          <template #options>
            <div class="block-options-item">
              <code>.table-borderless</code>
            </div>
          </template>

          <table class="table table-borderless table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%">
                  Access
                </th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.slice(0, 6)" :key="user.id">
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  <a href="javascript:void(0)">{{ user.name }}</a>
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
        <!-- END Borderless Table -->
      </div>
      <div class="col-xl-6">
        <!-- Small Table -->
        <BaseBlock title="Small Table">
          <template #options>
            <div class="block-options-item">
              <code>.table-sm</code>
            </div>
          </template>

          <table class="table table-sm table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%">
                  Access
                </th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.slice(0, 8)" :key="user.id">
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  <a href="javascript:void(0)">{{ user.name }}</a>
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
        <!-- END Small Table -->
      </div>
      <div class="col-12">
        <!-- Contextual Table -->
        <BaseBlock title="Contextual Table">
          <table class="table table-borderless table-vcenter table-hover">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px">#</th>
                <th>Name</th>
                <th class="text-center" style="width: 100px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="user in users"
                :key="user.id"
                :class="`table-${user.rowVariant}`"
              >
                <th class="text-center" scope="row">
                  {{ user.id }}
                </th>
                <td class="fw-semibold fs-sm">
                  {{ user.name }}
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
        <!-- END Contextual Table -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</template>
