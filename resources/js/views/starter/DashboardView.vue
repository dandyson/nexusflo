<script setup>
import { onMounted } from "vue";
import { useTemplateStore } from "@/stores/template";
import Swal from "sweetalert2";

const store = useTemplateStore();

// Props
const { verified } = defineProps(['verified']);

onMounted(() => {
  if (! store.verifiedNotificationShown) {
    Swal.fire({
      icon: 'success',
      title: 'Email Verified',
      text: 'Welcome to NexusFlo!',
      showConfirmButton: true,
    });
    store.setVerificationNotificationShown(true);
  }
});
</script>

<template>
  <BasePageHeading title="Dashboard" subtitle="Welcome!">
    <template #extra>
      <button type="button" class="btn btn-alt-primary" v-click-ripple>
        <i class="fa fa-plus opacity-50 me-1"></i>
        New Project
      </button>
    </template>
  </BasePageHeading>

  <div class="content">
    <div class="row items-push">
      <div class="col-sm-6 col-xl-4">
        <BaseBlock title="Block" class="h-100 mb-0">
          <p>
            This is a backend layout based page which you can use as a base for
            your backend pages.
          </p>
          <p>
            We created a custom Backend layout variation (
            <code>layouts/variations/BackendStarter.vue</code>) to showcase how
            easily you can add extra layout variations and override the default
            content of the partial elements.
          </p>
        </BaseBlock>
      </div>
      <div class="col-sm-6 col-xl-4">
        <BaseBlock title="Block" class="h-100 mb-0">
          <p>...</p>
        </BaseBlock>
      </div>
      <div class="col-xl-4">
        <BaseBlock title="Block" class="h-100 mb-0">
          <p>...</p>
        </BaseBlock>
      </div>
    </div>
  </div>
</template>
