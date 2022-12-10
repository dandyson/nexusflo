<template>
<div>
    <!-- Positive News -->
    <div class="row">
        <h2 class="my-3">Positive.News</h2>
        <div class="row row-sm">
            <div class="d-flex justify-content-center" v-if="positiveNewsLoading === true">
                <div class="spinner-border text-primary m-1" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div v-for="(item, index) in positiveNewsData" :key="index" class="col-md-4 col-lg-4">
                <div class="card">
                    <a target="_blank" :href="item['link']">
                        <img alt="Image" class="img-fluid card-img-top" :src=" item['image'] ">
                    </a>
                    <div class="card-body ">
                        <a target="_blank" :href="item['link']">
                            <h3 class="card-title news-headline">{{ item['title'] }}</h3>
                        </a>
                        <p class="card-text">{{ item['description'] }}</p>
                    </div>
                </div>
            </div><!-- col-4 -->

        </div>
    </div>
    <!-- End of Positive News -->

    <hr class="my-4">

    <!-- Good News Network -->
    <div class="row my-5">
        <h2 class="my-3">Good News Network</h2>
        <div class="row row-sm">
            <div class="d-flex justify-content-center" v-if="goodNewsNetworkLoading === true">
                <div class="spinner-border text-primary m-1" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div v-for="(item, index) in goodNewsNetworkData" :key="index" class="col-md-4 col-lg-4">
                <div class="card">
                    <a target="_blank" :href="item['link']">
                        <img alt="Image" class="img-fluid card-img-top" :src=" item['image'] ">
                    </a>
                    <div class="card-body ">
                        <a target="_blank" :href="item['link']">
                            <h3 class="card-title news-headline">{{ item['title'] }}</h3>
                        </a>
                        <p class="card-text">{{ item['description'] }}</p>
                    </div>
                </div>
            </div><!-- col-4 -->

        </div>
    </div>
    <!-- End of Good News Network -->
</div>
</template>

<script>
import axios from "axios";
import cheerio from "cheerio";

export default {
    props: {
        routes: Object,
    },

    data() {
        return {
            positiveNewsData: '',
            positiveNewsLoading: true,

            goodNewsNetworkData: '',
            goodNewsNetworkLoading: true,
        }
    },

    mounted() {
        axios.get(this.routes.newsFetch)
            .then((res) => {
                this.positiveNewsData = res.data.data["positive-news"];
                this.positiveNewsLoading = false;
                console.log(res.data.data["good-news-network"]);
                this.goodNewsNetworkData = res.data.data["good-news-network"];
                this.goodNewsNetworkLoading = false;
            })
            .catch(error => console.error(error));
    },

}
</script>

<style>

</style>
