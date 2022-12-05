<script setup>
// Grab example data
import users from "@/data/users";
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Navigation"
    subtitle="UI components that will make navigating an easy task."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Navigation</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Pagination -->
    <h2 class="content-heading">Pagination</h2>
    <div class="row items-push">
      <div class="col-xl-6">
        <!-- Default Pagination -->
        <BaseBlock title="Default" class="h-100 mb-0">
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </BaseBlock>
        <!-- END Default Pagination -->
      </div>
      <div class="col-xl-6">
        <!-- Disabled and Active States -->
        <BaseBlock title="Disabled and Active States" class="h-100 mb-0">
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </BaseBlock>
        <!-- END Disabled and Active States -->
      </div>
      <div class="col-xl-12">
        <!-- Alignment -->
        <BaseBlock title="Alignment" class="h-100 mb-0">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  aria-label="Previous"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  aria-label="Next"
                >
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </BaseBlock>
        <!-- END Alignment -->
      </div>
    </div>
    <!-- END Pagination -->

    <!-- Breadcrumb -->
    <h2 class="content-heading">Breadcrumb</h2>
    <div class="row items-push">
      <div class="col-xl-6">
        <BaseBlock title="Default" class="h-100 mb-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb push">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">User</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Settings</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Billing
              </li>
            </ol>
          </nav>
        </BaseBlock>
      </div>
      <div class="col-xl-6">
        <BaseBlock title="Alternate" class="h-100 mb-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt push">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">User</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Settings</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Billing
              </li>
            </ol>
          </nav>
        </BaseBlock>
      </div>
    </div>
    <!-- END Breadcrumb -->

    <!-- Navigation Pills -->
    <h2 class="content-heading">Navigation Pills</h2>
    <div class="row items-push">
      <div class="col-xl-6">
        <!-- Default Pills -->
        <BaseBlock title="Default Style" class="h-100 mb-0">
          <ul class="nav nav-pills push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)"
                ><i class="fa fa-envelope"></i
              ></a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column push">
            <li class="nav-item mb-1">
              <a class="nav-link active" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item mb-1">
              <a class="nav-link" href="javascript:void(0)">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Tools</a>
            </li>
          </ul>
        </BaseBlock>
        <!-- END Default Pills -->
      </div>
      <div class="col-xl-6">
        <!-- With Icons -->
        <BaseBlock title="With Icons" class="h-100 mb-0">
          <ul class="nav nav-pills push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">
                <i class="fa fa-fw fa-home me-1"></i> Home
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-fw fa-pencil-alt me-1"></i> Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-wrench"></i>
              </a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column push">
            <li class="nav-item mb-1">
              <a class="nav-link active" href="javascript:void(0)">
                <i class="fa fa-fw fa-home me-1"></i> Home
              </a>
            </li>
            <li class="nav-item mb-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-fw fa-pencil-alt me-1"></i> Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-fw fa-wrench me-1"></i> Tools
              </a>
            </li>
          </ul>
        </BaseBlock>
        <!-- END With Icons -->
      </div>
      <div class="col-xl-6">
        <!-- With Badges -->
        <BaseBlock title="With Badges" class="h-100 mb-0">
          <ul class="nav nav-pills push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">
                Home
                <span class="badge rounded-pill bg-black-50 ms-1">3</span>
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                Settings
                <span class="badge rounded-pill bg-black-50 ms-1">1</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-wrench"></i>
              </a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column push">
            <li class="nav-item mb-1">
              <a class="nav-link active" href="javascript:void(0)">
                Home
                <span class="badge rounded-pill bg-black-50 ms-1">3</span>
              </a>
            </li>
            <li class="nav-item mb-1">
              <a class="nav-link" href="javascript:void(0)">
                Settings
                <span class="badge rounded-pill bg-black-50 ms-1">1</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Tools</a>
            </li>
          </ul>
        </BaseBlock>
        <!-- END With Badges -->
      </div>
      <div class="col-xl-6">
        <!-- Justified -->
        <BaseBlock title="Justified" class="h-100 mb-0">
          <ul class="nav nav-pills nav-justified push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">Profile</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Billing</a>
            </li>
          </ul>
          <ul class="nav nav-pills nav-justified push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Tools</a>
            </li>
          </ul>
        </BaseBlock>
        <!-- END Justified -->
      </div>
    </div>
    <!-- END Navigation Pills -->

    <!-- List Groups -->
    <h2 class="content-heading">List Groups</h2>
    <div class="row">
      <div class="col-xl-4">
        <!-- Default List Groups -->
        <BaseBlock title="Default Style">
          <ul class="list-group push">
            <li class="list-group-item">This is a simple</li>
            <li class="list-group-item">List Group</li>
            <li class="list-group-item">For showcasing</li>
            <li class="list-group-item">A list of items</li>
          </ul>
        </BaseBlock>
        <!-- END Default List Groups -->
      </div>
      <div class="col-xl-4">
        <!-- With Badges -->
        <BaseBlock title="With Badges">
          <ul class="list-group push">
            <li
              class="list-group-item d-flex justify-content-between align-items-center"
            >
              This is a simple
              <span class="badge rounded-pill bg-info">5</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between align-items-center"
            >
              List Group
              <span class="badge rounded-pill bg-success">4</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between align-items-center"
            >
              For showcasing
              <span class="badge rounded-pill bg-danger">8</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between align-items-center"
            >
              A list of items
              <span class="badge rounded-pill bg-warning">7</span>
            </li>
          </ul>
        </BaseBlock>
        <!-- END With Badges -->
      </div>
      <div class="col-xl-4">
        <!-- With Links -->
        <BaseBlock title="With Links">
          <div class="list-group push">
            <a
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active"
              href="javascript:void(0)"
            >
              This is a simple
              <span class="badge rounded-pill bg-black-50">1</span>
            </a>
            <a
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
              href="javascript:void(0)"
            >
              List Group
              <span class="badge rounded-pill bg-black-50">2</span>
            </a>
            <a
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled"
              href="javascript:void(0)"
            >
              For showcasing
            </a>
            <a
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
              href="javascript:void(0)"
            >
              A list of items
              <span class="badge rounded-pill bg-black-50">7</span>
            </a>
          </div>
        </BaseBlock>
        <!-- END With Links -->
      </div>
    </div>
    <!-- END List Groups -->

    <!-- User List -->
    <h2 class="content-heading">User List</h2>
    <div class="row items-push">
      <div class="col-xl-6">
        <BaseBlock title="Spacy" class="h-100 mb-0">
          <ul class="nav-items push">
            <li
              v-for="(user, index) in users.slice(0, 4)"
              :key="`userlist-spacy-${index}`"
            >
              <a class="d-flex py-3" :href="`${user.href}`">
                <div class="me-3 ms-2 overlay-container overlay-bottom">
                  <img
                    class="img-avatar img-avatar48"
                    :src="`/assets/media/avatars/${user.avatar}.jpg`"
                    alt="User Photo"
                  />
                  <span
                    :class="`overlay-item item item-tiny item-circle border border-2 border-white bg-${user.statusColor}`"
                  ></span>
                </div>
                <div class="flex-grow-1 fs-sm">
                  <div class="fw-semibold">{{ user.name }}</div>
                  <div class="text-muted">{{ user.profession }}</div>
                </div>
              </a>
            </li>
          </ul>
        </BaseBlock>
      </div>
      <div class="col-xl-6">
        <BaseBlock title="Minimal" class="h-100 mb-0">
          <ul class="nav-items push">
            <li
              v-for="(user, index) in users"
              :key="`userlist-minimal-${index}`"
            >
              <a class="d-flex py-2" :href="`${user.href}`">
                <div class="me-3 ms-2 overlay-container overlay-bottom">
                  <img
                    class="img-avatar img-avatar48"
                    :src="`/assets/media/avatars/${user.avatar}.jpg`"
                    alt="User Photo"
                  />
                  <span
                    :class="`overlay-item item item-tiny item-circle border border-2 border-white bg-${user.statusColor}`"
                  ></span>
                </div>
                <div class="flex-grow-1 fs-sm">
                  <div class="fw-semibold">{{ user.name }}</div>
                  <div class="text-muted">{{ user.profession }}</div>
                </div>
              </a>
            </li>
          </ul>
        </BaseBlock>
      </div>
    </div>
    <!-- END User List -->
  </div>
  <!-- END Page Content -->
</template>
