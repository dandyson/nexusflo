<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();
</script>

<template>
  <!-- Footer -->
  <footer id="page-footer">
    <slot>
      <div class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              <slot name="content-right">
                Crafted with
                <i class="fa fa-heart text-danger"></i> by
                <a
                  class="fw-semibold"
                  href="https://1.envato.market/ydb"
                  target="_blank"
                  >pixelcave</a
                >
              </slot>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <slot name="content-left">
                <a class="fw-semibold" href="https://1.envato.market/5Noyb">{{
                  store.app.name + " " + store.app.version
                }}</a>
                &copy; {{ store.app.copyright }}
              </slot>
            </div>
          </div>
        </div>
      </div>
    </slot>
  </footer>
  <!-- END Footer -->
</template>
