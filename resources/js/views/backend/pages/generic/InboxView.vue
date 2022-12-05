<script setup>
import { ref } from "vue";

// Helper variables
const mobileSideNav = ref(false);
</script>

<template>
  <!-- Page Content -->
  <div class="content">
    <div class="row">
      <div class="col-md-5 col-xl-3">
        <!-- Toggle Inbox Side Navigation -->
        <div class="d-md-none push">
          <button
            type="button"
            class="btn w-100 btn-primary"
            @click="mobileSideNav = !mobileSideNav"
          >
            Inbox Menu
          </button>
        </div>
        <!-- END Toggle Inbox Side Navigation -->

        <!-- Inbox Side Navigation -->
        <div class="d-md-block push" :class="{ 'd-none': !mobileSideNav }">
          <!-- Inbox Menu -->
          <BaseBlock title="Inbox">
            <template #options>
              <button
                type="button"
                class="btn btn-sm btn-alt-primary"
                data-bs-toggle="modal"
                data-bs-target="#one-inbox-new-message"
              >
                <i class="fa fa-pencil-alt me-1 opacity-50"></i> Compose
              </button>
            </template>

            <ul class="nav nav-pills flex-column push">
              <li class="nav-item my-1">
                <a
                  class="nav-link d-flex justify-content-between align-items-center active"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm">
                    <i class="fa fa-fw fa-inbox me-1 opacity-50"></i> Inbox
                  </span>
                  <span class="badge rounded-pill bg-black-50">3</span>
                </a>
              </li>
              <li class="nav-item my-1">
                <a
                  class="nav-link d-flex justify-content-between align-items-center"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm">
                    <i class="fa fa-fw fa-star me-1 opacity-50"></i> Starred
                  </span>
                  <span class="badge rounded-pill bg-black-50">48</span>
                </a>
              </li>
              <li class="nav-item my-1">
                <a
                  class="nav-link d-flex justify-content-between align-items-center"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm">
                    <i class="fa fa-fw fa-paper-plane me-1 opacity-50"></i>
                    Sent
                  </span>
                  <span class="badge rounded-pill bg-black-50">1480</span>
                </a>
              </li>
              <li class="nav-item my-1">
                <a
                  class="nav-link d-flex justify-content-between align-items-center"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm">
                    <i class="fa fa-fw fa-pencil-alt me-1 opacity-50"></i>
                    Draft
                  </span>
                  <span class="badge rounded-pill bg-black-50">2</span>
                </a>
              </li>
              <li class="nav-item my-1">
                <a
                  class="nav-link d-flex justify-content-between align-items-center"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm">
                    <i class="fa fa-fw fa-folder me-1 opacity-50"></i> Archive
                  </span>
                  <span class="badge rounded-pill bg-black-50">1987</span>
                </a>
              </li>
              <li class="nav-item my-1">
                <a
                  class="nav-link d-flex justify-content-between align-items-center"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm">
                    <i class="fa fa-fw fa-trash-alt me-1 opacity-50"></i>
                    Trash
                  </span>
                  <span class="badge rounded-pill bg-black-50">10</span>
                </a>
              </li>
            </ul>
          </BaseBlock>
          <!-- END Inbox Menu -->

          <!-- Friends -->
          <BaseBlock title="Friends">
            <template #options>
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </template>

            <ul class="nav-items fs-sm">
              <li>
                <a class="d-flex py-2" href="javascript:void(0)">
                  <div
                    class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom"
                  >
                    <img
                      class="img-avatar img-avatar48"
                      src="/assets/media/avatars/avatar3.jpg"
                      alt="Avatar"
                    />
                    <span
                      class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"
                    ></span>
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Amber Harvey</div>
                    <div class="fw-normal text-muted">Web Designer</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex py-2" href="javascript:void(0)">
                  <div
                    class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom"
                  >
                    <img
                      class="img-avatar img-avatar48"
                      src="/assets/media/avatars/avatar9.jpg"
                      alt="Avatar"
                    />
                    <span
                      class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"
                    ></span>
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Brian Stevens</div>
                    <div class="fw-normal text-muted">Graphic Designer</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex py-2" href="javascript:void(0)">
                  <div
                    class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom"
                  >
                    <img
                      class="img-avatar img-avatar48"
                      src="/assets/media/avatars/avatar2.jpg"
                      alt="Avatar"
                    />
                    <span
                      class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"
                    ></span>
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Lisa Jenkins</div>
                    <div class="fw-normal text-muted">Photographer</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex py-2" href="javascript:void(0)">
                  <div
                    class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom"
                  >
                    <img
                      class="img-avatar img-avatar48"
                      src="/assets/media/avatars/avatar15.jpg"
                      alt="Avatar"
                    />
                    <span
                      class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"
                    ></span>
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Jack Greene</div>
                    <div class="fw-normal text-muted">Copywriter</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex py-2" href="javascript:void(0)">
                  <div
                    class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom"
                  >
                    <img
                      class="img-avatar img-avatar48"
                      src="/assets/media/avatars/avatar11.jpg"
                      alt="Avatar"
                    />
                    <span
                      class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"
                    ></span>
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Wayne Garcia</div>
                    <div class="fw-normal text-muted">UI designer</div>
                  </div>
                </a>
              </li>
            </ul>
          </BaseBlock>
          <!-- END Friends -->

          <!-- Account -->
          <BaseBlock title="Account">
            <template #options>
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </template>

            <div class="text-center mb-3">
              <img
                class="img-avatar"
                src="/assets/media/avatars/avatar7.jpg"
                alt="Avatar"
              />
            </div>
            <BaseBlock tag="a" bordered link-shadow href="javascript:void(0)">
              <div class="block-content block-content-full text-center">
                <div class="push">
                  <i class="si si-like fa-2x text-success"></i>
                </div>
                <div class="fs-2 fw-bold">
                  <span class="text-muted">+</span> 2.5TB
                </div>
                <div class="fs-sm text-muted text-uppercase">Upgrade Now</div>
              </div>
            </BaseBlock>
          </BaseBlock>
          <!-- END Account -->
        </div>
        <!-- END Inbox Side Navigation -->
      </div>
      <div class="col-md-7 col-xl-9">
        <!-- Message List -->
        <BaseBlock content-class="py-0" btn-option-fullscreen>
          <template #title>
            15-30 <span class="fw-normal text-lowercase">from</span> 700
          </template>

          <template #options>
            <button
              type="button"
              class="btn-block-option"
              title="Previous 15 Messages"
            >
              <i class="si si-arrow-left"></i>
            </button>
            <button
              type="button"
              class="btn-block-option"
              title="Next 15 Messages"
            >
              <i class="si si-arrow-right"></i>
            </button>
          </template>

          <!-- Messages -->
          <div class="pull-x">
            <table class="table table-hover table-vcenter fs-sm">
              <thead>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg15"
                        name="inbox-msg-all"
                      />
                      <label
                        class="form-check-label"
                        for="inbox-msg-all"
                      ></label>
                    </div>
                  </td>
                  <td colspan="4">
                    <!-- Messages Options -->
                    <div class="d-flex justify-content-between">
                      <div class="btn-group">
                        <button
                          class="btn btn-sm btn-alt-secondary"
                          type="button"
                        >
                          <i class="fa fa-archive text-primary"></i>
                          <span class="d-none d-sm-inline ms-2">Archive</span>
                        </button>
                        <button
                          class="btn btn-sm btn-alt-secondary"
                          type="button"
                        >
                          <i class="fa fa-star text-warning"></i>
                          <span class="d-none d-sm-inline ms-2">Star</span>
                        </button>
                      </div>
                      <button
                        class="btn btn-sm btn-alt-secondary"
                        type="button"
                      >
                        <i class="fa fa-times text-danger"></i>
                        <span class="d-none d-sm-inline ms-2">Delete</span>
                      </button>
                    </div>
                    <!-- END Messages Options -->
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center" style="width: 60px">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg15"
                        name="inbox-msg15"
                      />
                      <label class="form-check-label" for="inbox-msg15"></label>
                    </div>
                  </td>
                  <td
                    class="d-none d-sm-table-cell fw-semibold"
                    style="width: 140px"
                  >
                    Brian Cruz
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Welcome to our service</a
                    >
                    <div class="text-muted mt-1">
                      It's a pleasure to have you on our service..
                    </div>
                  </td>
                  <td
                    class="d-none d-xl-table-cell text-muted"
                    style="width: 80px"
                  >
                    <i class="fa fa-paperclip me-1"></i> (3)
                  </td>
                  <td
                    class="d-none d-xl-table-cell text-muted"
                    style="width: 120px"
                  >
                    <em>2 min ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg14"
                        name="inbox-msg14"
                      />
                      <label class="form-check-label" for="inbox-msg14"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Thomas Riley
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Your subscription was updated</a
                    >
                    <div class="text-muted mt-1">
                      We are glad you decided to go with a vip..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (2)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>10 min ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg13"
                        name="inbox-msg13"
                      />
                      <label class="form-check-label" for="inbox-msg13"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Megan Fuller
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Update is available</a
                    >
                    <div class="text-muted mt-1">
                      An update is under way for your app..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted"></td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>25 min ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg12"
                        name="inbox-msg12"
                      />
                      <label class="form-check-label" for="inbox-msg12"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">Carl Wells</td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >New Sale!</a
                    >
                    <div class="text-muted mt-1">
                      You had a new sale and earned..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (1)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>30 min ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg11"
                        name="inbox-msg11"
                      />
                      <label class="form-check-label" for="inbox-msg11"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">Susan Day</td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Action Required for your account!</a
                    >
                    <div class="text-muted mt-1">
                      Your account is inactive for a long time and..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted"></td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>1 hour ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg10"
                        name="inbox-msg10"
                      />
                      <label class="form-check-label" for="inbox-msg10"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Jeffrey Shaw
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >New Photo Pack!</a
                    >
                    <div class="text-muted mt-1">
                      Our new photo pack is available now! You..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted"></td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>2 hrs ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg9"
                        name="inbox-msg9"
                      />
                      <label class="form-check-label" for="inbox-msg9"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Ralph Murray
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Product is released!</a
                    >
                    <div class="text-muted mt-1">
                      This is a notification about our new product..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (1)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>1 day ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg8"
                        name="inbox-msg8"
                      />
                      <label class="form-check-label" for="inbox-msg8"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">Laura Carr</td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Now on Sale!</a
                    >
                    <div class="text-muted mt-1">
                      Our Book is out! You can buy a copy and..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (9)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>1 day ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg7"
                        name="inbox-msg7"
                      />
                      <label class="form-check-label" for="inbox-msg7"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">Lori Grant</td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Monthly Report</a
                    >
                    <div class="text-muted mt-1">
                      The monthly report you requested for..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (6)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>3 days ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg6"
                        name="inbox-msg6"
                      />
                      <label class="form-check-label" for="inbox-msg6"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Thomas Riley
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Trial Started!</a
                    >
                    <div class="text-muted mt-1">
                      You 30-day trial has now started and..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted"></td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>3 days ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg5"
                        name="inbox-msg5"
                      />
                      <label class="form-check-label" for="inbox-msg5"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Henry Harrison
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Invoice #INV001645</a
                    >
                    <div class="text-muted mt-1">
                      This is the invoice for the project we..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted"></td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>5 days ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg4"
                        name="inbox-msg4"
                      />
                      <label class="form-check-label" for="inbox-msg4"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Danielle Jones
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Friend Request!</a
                    >
                    <div class="text-muted mt-1">
                      You have a new friend request. Click the..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (5)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>1 week ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg3"
                        name="inbox-msg3"
                      />
                      <label class="form-check-label" for="inbox-msg3"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">Lori Grant</td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Enjoy life!</a
                    >
                    <div class="text-muted mt-1">
                      Thank you for helping us with our cause...
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (3)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>1 week ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg2"
                        name="inbox-msg2"
                      />
                      <label class="form-check-label" for="inbox-msg2"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Alice Moore
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >New Twitter follower!</a
                    >
                    <div class="text-muted mt-1">
                      You have a new follower, congratulations..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <i class="fa fa-paperclip me-1"></i> (1)
                  </td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>2 weeks ago</em>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="form-check d-inline-block">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inbox-msg1"
                        name="inbox-msg1"
                      />
                      <label class="form-check-label" for="inbox-msg1"></label>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell fw-semibold">
                    Ralph Murray
                  </td>
                  <td>
                    <a
                      class="fw-semibold"
                      data-bs-toggle="modal"
                      data-bs-target="#one-inbox-message"
                      href="#"
                      >Huge Discount available!</a
                    >
                    <div class="text-muted mt-1">
                      Due to the fact that you are a great..
                    </div>
                  </td>
                  <td class="d-none d-xl-table-cell text-muted"></td>
                  <td class="d-none d-xl-table-cell text-muted">
                    <em>3 weeks ago</em>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- END Messages -->
        </BaseBlock>
        <!-- END Message List -->
      </div>
    </div>

    <!-- New Message Modal -->
    <div
      class="modal fade"
      id="one-inbox-new-message"
      tabindex="-1"
      role="dialog"
      aria-labelledby="one-inbox-new-message"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form @submit.prevent>
            <BaseBlock transparent class="mb-0">
              <template #title>
                <i class="fa fa-pencil-alt me-1"></i> New Message
              </template>

              <template #options>
                <button
                  type="button"
                  class="btn-block-option"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i class="fa fa-fw fa-times"></i>
                </button>
              </template>

              <template #content>
                <div class="block-content">
                  <div class="mb-4">
                    <label class="form-label" for="message-email">Email</label>
                    <input
                      class="form-control form-control-alt"
                      type="email"
                      id="message-email"
                      name="message-email"
                    />
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="message-subject"
                      >Subject</label
                    >
                    <input
                      class="form-control form-control-alt"
                      type="text"
                      id="message-subject"
                      name="message-subject"
                    />
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="message-msg">Message</label>
                    <textarea
                      class="form-control form-control-alt"
                      id="message-msg"
                      name="message-msg"
                      rows="6"
                    ></textarea>
                    <div class="form-text">
                      Feel free to use common tags: &lt;blockquote&gt;,
                      &lt;strong&gt;, &lt;em&gt;
                    </div>
                  </div>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                  <button
                    type="button"
                    class="btn btn-sm btn-alt-secondary me-1"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fa fa-paper-plane me-1 opacity-50"></i> Send
                    Message
                  </button>
                </div>
              </template>
            </BaseBlock>
          </form>
        </div>
      </div>
    </div>
    <!-- END New Message Modal -->

    <!-- Message Modal -->
    <div
      class="modal fade"
      id="one-inbox-message"
      tabindex="-1"
      role="dialog"
      aria-labelledby="one-inbox-message"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
        <div class="modal-content">
          <BaseBlock title="Welcome to our service" transparent class="mb-0">
            <template #options>
              <button
                type="button"
                class="btn-block-option"
                title="Reply"
                aria-label="Reply"
              >
                <i class="fa fa-fw fa-reply"></i>
              </button>
              <button
                type="button"
                class="btn-block-option"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <i class="fa fa-fw fa-times"></i>
              </button>
            </template>

            <template #content>
              <BaseBackground
                class="block-content block-content-full text-center"
                image="/assets/media/photos/photo7.jpg"
              >
                <img
                  class="img-avatar img-avatar96 img-avatar-thumb"
                  src="/assets/media/avatars/avatar4.jpg"
                  alt="User Photo"
                />
              </BaseBackground>
              <div
                class="block-content block-content-full fs-sm d-flex justify-content-between bg-body-light"
              >
                <a href="javascript:void(0)">user@example.com</a>
                <span class="text-muted"><em>2 min ago</em></span>
              </div>
              <div class="block-content">
                <p>Dear John,</p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>Best Regards,</p>
                <p>Judy Ford</p>
              </div>
              <div class="block-content bg-body-light">
                <div class="row g-sm items-push fs-sm">
                  <div class="col-md-4">
                    <div class="options-container fx-item-zoom-in mb-2">
                      <img
                        class="img-fluid options-item"
                        src="/assets/media/photos/photo1.jpg"
                        alt="Example Photo"
                      />
                      <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                          <a
                            class="btn btn-sm btn-light"
                            href="javascript:void(0)"
                          >
                            <i class="fa fa-download me-1"></i> Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="text-muted">01.jpg (350kb)</div>
                  </div>
                  <div class="col-md-4">
                    <div class="options-container fx-item-zoom-in mb-2">
                      <img
                        class="img-fluid options-item"
                        src="/assets/media/photos/photo2.jpg"
                        alt="Example Photo"
                      />
                      <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                          <a
                            class="btn btn-sm btn-light"
                            href="javascript:void(0)"
                          >
                            <i class="fa fa-download me-1"></i> Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="text-muted">02.jpg (480kb)</div>
                  </div>
                  <div class="col-md-4">
                    <div class="options-container fx-item-zoom-in mb-2">
                      <img
                        class="img-fluid options-item"
                        src="/assets/media/photos/photo3.jpg"
                        alt="Example Photo"
                      />
                      <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                          <a
                            class="btn btn-sm btn-light"
                            href="javascript:void(0)"
                          >
                            <i class="fa fa-download me-1"></i> Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="text-muted">03.jpg (652kb)</div>
                  </div>
                </div>
              </div>
            </template>
          </BaseBlock>
        </div>
      </div>
    </div>
    <!-- END Message Modal -->
  </div>
  <!-- END Page Content -->
</template>
