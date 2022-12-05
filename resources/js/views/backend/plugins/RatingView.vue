<script setup>
import { ref } from "vue";

// Vue Star Rating, for more info and examples you can check out https://github.com/craigh411/vue-StarRating
import StarRating from "vue-star-rating";

// Helper variables
const starRatingSimple = ref(0);
const starRatingPredefined = ref(3);
const starRatingMore = ref(5);
const starRatingReset = ref(4);
const starRatingIncrement = ref(2.5);
const starRatingFluid = ref(0);
const starRatingColors = ref(3);
const starRatingSize = ref(3);
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Rating"
    subtitle="Adding rating functionality to your pages has never been easier."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Rating</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock title="Vue Star Rating">
      <div class="row items-push-2x">
        <!-- Simple -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Simple</h4>
          <p class="font-size-sm text-muted mb-2">
            Setting up rating is just a component away
            <span v-if="starRatingSimple">({{ starRatingSimple }})</span>
          </p>
          <StarRating
            v-model:rating="starRatingSimple"
            :star-size="24"
            :show-rating="false"
          ></StarRating>
        </div>
        <!-- END Simple -->

        <!-- Predefined Score -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Predefined Score</h4>
          <p class="font-size-sm text-muted mb-2">
            You can easily set a default score
            <span v-if="starRatingPredefined"
              >({{ starRatingPredefined }})</span
            >
          </p>
          <StarRating
            v-model:rating="starRatingPredefined"
            :star-size="24"
            :show-rating="false"
          ></StarRating>
        </div>
        <!-- END Predefined Score -->

        <!-- More Stars -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">More Stars</h4>
          <p class="font-size-sm text-muted mb-2">
            You can easily set the number of stars
            <span v-if="starRatingMore">({{ starRatingMore }})</span>
          </p>
          <StarRating
            v-model:rating="starRatingMore"
            :star-size="24"
            :show-rating="false"
            :max-rating="10"
          ></StarRating>
        </div>
        <!-- END More Stars -->

        <!-- Reset Button -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Reset Button</h4>
          <p class="font-size-sm text-muted mb-2">
            You can also add a reset button to your rating
            <span v-if="starRatingReset">({{ starRatingReset }})</span>
          </p>
          <div class="d-flex align-items-center space-x-2">
            <button
              type="button"
              class="btn btn-sm btn-alt-danger mt-1 mr-2"
              @click="starRatingReset = 0"
            >
              <i class="fa fa-times-circle"></i>
            </button>
            <StarRating
              v-model:rating="starRatingReset"
              :star-size="24"
              :show-rating="false"
            ></StarRating>
          </div>
        </div>
        <!-- END Reset Button -->

        <!-- Half Stars -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Half Stars</h4>
          <p class="font-size-sm text-muted mb-2">
            You can have half stars
            <span v-if="starRatingIncrement">({{ starRatingIncrement }})</span>
          </p>
          <StarRating
            v-model:rating="starRatingIncrement"
            :star-size="24"
            :show-rating="false"
            :increment="0.5"
          ></StarRating>
        </div>
        <!-- END Half Stars -->

        <!-- Fluid Stars -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Fluid Stars</h4>
          <p class="font-size-sm text-muted mb-2">
            You can even have fluid stars
            <span v-if="starRatingFluid">({{ starRatingFluid }})</span>
          </p>
          <StarRating
            v-model:rating="starRatingFluid"
            :star-size="24"
            :increment="0.01"
            :fixed-points="2"
            text-class="font-size-sm text-muted"
          ></StarRating>
        </div>
        <!-- END Fluid Stars -->

        <!-- Color and Shape Variations -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Color and Shape Variations</h4>
          <p class="font-size-sm text-muted mb-2">
            You can set the colors to what ever you like
            <span v-if="starRatingColors">({{ starRatingColors }})</span>
          </p>
          <StarRating
            v-model:rating="starRatingColors"
            :star-size="24"
            :show-rating="false"
            active-color="#5c80d1"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-2"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingColors"
            :star-size="24"
            :show-rating="false"
            active-color="#46c37b"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-2"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingColors"
            :star-size="24"
            :show-rating="false"
            active-color="#70b9eb"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-2"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingColors"
            :star-size="24"
            :show-rating="false"
            active-color="#f3b760"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-2"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingColors"
            :star-size="24"
            :show-rating="false"
            active-color="#d26a5c"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-2"
          ></StarRating>
        </div>
        <!-- END Color and Shape Variations -->

        <!-- Size and Shape Variations -->
        <div class="col-md-6">
          <h4 class="border-bottom pb-2">Size and Shape Variations</h4>
          <p class="font-size-sm text-muted mb-2">
            Changing the size of the stars is also possible
            <span v-if="starRatingSize">({{ starRatingSize }})</span>
          </p>
          <StarRating
            v-model:rating="starRatingSize"
            :star-size="16"
            :show-rating="false"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-1"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingSize"
            :star-size="24"
            :show-rating="false"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-1"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingSize"
            :star-size="32"
            :show-rating="false"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-1"
          ></StarRating>
          <StarRating
            v-model:rating="starRatingSize"
            :star-size="48"
            :show-rating="false"
            :star-points="[
              23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46,
              19, 31, 17,
            ]"
            class="mb-1"
          ></StarRating>
        </div>
        <!-- END Size and Shape Variations -->
      </div>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
