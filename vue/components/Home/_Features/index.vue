<template>
  <div class="row">
    <div
      class="col-lg-4 col-md-6 col-12 mt-4 pt-2"
      v-for="(feature, i) in featuresData"
      :key="`feature_${i}`"
    >
      <div class="card service-wrapper rounded border-0 shadow p-4">
        <div class="icon text-center text-custom h1 shadow rounded bg-white">
          <span class="uim-svg" style=""
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="1em"
            >
              <path
                class="uim-primary"
                d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"
              ></path>
              <path
                class="uim-tertiary"
                d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"
              ></path></svg
          ></span>
        </div>
        <div class="content mt-4">
          <h5 class="title">{{ feature.name }}</h5>
          <p class="text-muted mt-3 mb-0">
            {{ feature.description }}
          </p>
        </div>
        <div class="big-icon h1 text-custom">
          <span class="uim-svg" style=""
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="1em"
            >
              <path
                class="uim-primary"
                d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"
              ></path>
              <path
                class="uim-tertiary"
                d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"
              ></path></svg
          ></span>
        </div>
      </div>
    </div>
    <!--end col-->
  </div>
</template>

<script>
export default {
  name: "features",
  props: {
    featuresData: {
      type: Array,
      default: () => [],
    },
  },
};
</script>
