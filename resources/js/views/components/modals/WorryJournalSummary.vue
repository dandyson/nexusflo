<template>
  <div v-if="entry">
  <button
      type="button"
      class="btn btn-sm btn-alt-secondary"
      data-bs-toggle="modal"
      :data-bs-target="`#modal-block-tabs-alt-worry-${modalId}`"
    >
    <i class="fa fa-fw fa-eye"></i>
    </button>
    <div
      class="modal fade"
      :id="`modal-block-tabs-alt-worry-${modalId}`"
      tabindex="-1"
      role="dialog"
      :aria-labelledby="`modal-block-tabs-alt-worry-${modalId}`"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <BaseBlock transparent class="mb-0">
            <template #content>
              <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link active"
                    :id="`btabs-alt-static-main-worry-tab-worry-${modalId}`"
                    data-bs-toggle="tab"
                    :data-bs-target="`#btabs-alt-static-main-worry-worry-${modalId}`"
                    role="tab"
                    :aria-controls="`btabs-alt-static-main-worry-worry-${modalId}`"
                    aria-selected="true"
                  >
                    Main Worry
                  </button>
                </li>
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link"
                    :id="`btabs-alt-static-thinking-trap-tab-worry-${modalId}`"
                    data-bs-toggle="tab"
                    :data-bs-target="`#btabs-alt-static-thinking-trap-worry-${modalId}`"
                    role="tab"
                    :aria-controls="`btabs-alt-static-thinking-tra-worry-${modalId}`"
                    aria-selected="false"
                  >
                    Thinking Traps
                  </button>
                </li>
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link"
                    :id="`btabs-alt-static-balanced-thought-tab-worry-${modalId}`"
                    data-bs-toggle="tab"
                    :data-bs-target="`#btabs-alt-static-balanced-thought-worry-${modalId}`"
                    role="tab"
                    :aria-controls="`btabs-alt-static-balanced-thought-worry-${modalId}`"
                    aria-selected="false"
                  >
                    Balanced Thought
                  </button>
                </li>
                <li class="nav-item ms-auto">
                  <button
                    type="button"
                    class="nav-link"
                    data-bs-dismiss="modal" 
                    aria-label="Close"
                  >
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </li>
              </ul>
              <div class="block-content tab-content">
                <div
                  class="tab-pane active m-3 m-lg-6"
                  :id="`btabs-alt-static-main-worry-worry-${modalId}`"
                  role="tabpanel"
                  :aria-labelledby="`btabs-alt-static-main-worry-tab-worry-${modalId}`"
                  tabindex="0"
                >
                  <p class="lead">"{{ entry.main_worry }}"</p>
                </div>
                <div
                  class="tab-pane m-3 m-lg-1"
                  :id="`btabs-alt-static-thinking-trap-worry-${modalId}`"
                  role="tabpanel"
                  :aria-labelledby="`btabs-alt-static-thinking-trap-tab-worry-${modalId}`"
                  tabindex="0"
                >
                  <div class="content">
                    <div class="row justify-content-evenly">
                      <div v-for="trap in selectedTraps" :key="trap.id" class="col-12 col-lg-4">
                          <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                          <div class="block-content block-content-full">
                            <img class="img-avatar" :src="trap.image" alt="">
                          </div>
                          <div class="block-content block-content-full bg-body-light">
                            <p class="fw-semibold mb-0">{{ trap.title }}</p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane m-3 m-lg-6"
                  :id="`btabs-alt-static-balanced-thought-worry-${modalId}`"
                  role="tabpanel"
                  :aria-labelledby="`btabs-alt-static-balanced-thought-tab-worry-${modalId}`"
                  tabindex="0"
                >
                  <p class="lead">"{{ entry.balanced_thought }}"</p>
                </div>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button
                  type="button"
                  class="btn btn-sm btn-primary me-1"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </template>
          </BaseBlock>
        </div>
      </div>
    </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  entry: Object,
  selectedTraps: Object,
});

// Generate a unique modal ID based on entry.id
const modalId = `modal-entry-${props?.entry?.id}`;
</script>
