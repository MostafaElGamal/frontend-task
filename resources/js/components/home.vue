<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Our Features</h4>
                        <p class="text-muted para-desc mx-auto mb-0">There is now an abundance of readable dummy texts.
                            These are usually used when a text is required purely to fill a space.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2" v-for="feature in features">
                    <div class="card service-wrapper rounded border-0 shadow p-4">
                        <div class="icon text-center text-custom h1 shadow rounded bg-white">
                            <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                width="1em"><path class="uim-primary"
                                                                                  d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path><path
                                class="uim-tertiary"
                                d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path></svg></span>
                        </div>
                        <div class="content mt-4">
                            <h5 class="title">{{ feature.name }}</h5>
                            <p class="text-muted mt-3 mb-0">{{ feature.description }}</p>

                        </div>
                        <div class="big-icon h1 text-custom">
                            <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                width="1em"><path class="uim-primary"
                                                                                  d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path><path
                                class="uim-tertiary"
                                d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path></svg></span>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>

    </div>
</template>
<script>
export default {
    data() {
        return {
            features: []
        }
    },
    methods: {
        getFeaturesList() {
            axios.get('/api/features').then(res => {
                if (res.data.success === true)
                    this.features = res.data.features
            }).catch(err => {
                console.log(err)
            })
        },

    },
    mounted() {
        this.getFeaturesList();
    }
};
</script>
<style scoped>
body {
    margin-top: 20px;
    background: #eee;
}

.service-container {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-container .icon {
    margin-top: 5%;
    font-size: 38px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-container .number-icon .icon-2 {
    height: 70px;
    width: 70px;
    line-height: 80px;
    border-radius: 64% 36% 55% 45% / 76% 72% 28% 24% !important;
    border-color: #f89d36 !important;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-container .number-icon .icon-2 i {
    font-size: 30px;
}

.service-container .number-icon .number {
    position: absolute;
    top: 0;
    right: 70px;
    left: 0;
    height: 35px;
    width: 35px;
    margin: 0 auto;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-container .number-icon .number span {
    line-height: 30px;
}

.service-container .content .number {
    font-size: 40px;
    color: #dee2e6;
}

.service-container .content .title {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-container.hover-bg {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-container.hover-bg .smooth-icon {
    position: absolute;
    bottom: -40px;
    right: -20px;
    font-size: 60px;
    color: #f8f9fa;
    -webkit-transition: all 0.8s ease;
    transition: all 0.8s ease;
}

.service-container.hover-bg:hover {
    background-color: #f89d36;
}

.service-container.hover-bg:hover .content .title {
    color: #ffffff !important;
}

.service-container.hover-bg:hover .content .serv-pera {
    color: #fafafb !important;
}

.service-container.hover-bg:hover .smooth-icon {
    font-size: 100px;
    opacity: 0.2;
    bottom: -20px;
    right: 10px;
}

.service-container:hover {
    background-color: #ffffff;
    -webkit-box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
    box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
}

.service-container:hover .icon {
    color: #f89d36;
    -webkit-animation: mover 1s infinite alternate;
    animation: mover 1s infinite alternate;
}

.service-container:hover .number-icon .icon-2 {
    background-color: #f89d36;
    border-radius: 50% !important;
}

.service-container:hover .number-icon .icon-2 i {
    color: #ffffff !important;
}

.service-container:hover .number-icon .number {
    color: #ffffff;
    background: #f89d36 !important;
    border-color: #ffffff !important;
}

.service-container:hover .content .title {
    color: #f89d36;
}

.service-container a:hover,
.service-container a .title:hover {
    color: #f89d36 !important;
}

@-webkit-keyframes mover {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

@keyframes mover {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

.service-wrapper {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-wrapper .icon {
    width: 60px;
    height: 60px;
    line-height: 45px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-wrapper .content .title {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    font-weight: 500;
}

.service-wrapper .big-icon {
    position: absolute;
    right: 0;
    bottom: 0;
    opacity: 0.05;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.service-wrapper:hover {
    -webkit-box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
    box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
    background: #ffffff;
    -webkit-transform: translateY(-8px);
    transform: translateY(-8px);
    border-color: transparent !important;
}

.service-wrapper:hover .icon {
    background: #0062ff !important;
    color: #ffffff !important;
}

.service-wrapper:hover .big-icon {
    z-index: -1;
    opacity: 0.1;
    font-size: 160px;
}

.text-custom {
    color: #0062ff !important;
}

.uim-svg {
    display: inline-block;
    height: 1em;
    vertical-align: -0.125em;
    font-size: inherit;
    fill: var(--uim-color, currentColor);
}


</style>
