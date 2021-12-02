<template>
  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4 mt-5">
    <div
      class="col"
      v-for="(teamMemeber, i) in teamsMember"
      :key="`teamMember_${i}`"
    >
      <div class="card radius-15">
        <div class="card-body text-center">
          <div class="p-4 border radius-15">
            <img
              :src="teamMemeber.avatar"
              width="110"
              height="110"
              class="rounded-circle shadow"
              alt=""
            />
            <h5 class="mb-0 mt-5">
              {{ teamMemeber.name }}
            </h5>
            <p class="mb-3">
              {{ teamMemeber.title }}
            </p>
            <div class="list-inline contacts-social mt-3 mb-3">
              <a
                href="javascript:;"
                class="list-inline-item bg-facebook text-white border-0"
              >
                <i class="bx bxl-facebook"></i>
              </a>
              <a
                href="javascript:;"
                class="list-inline-item bg-twitter text-white border-0"
              >
                <i class="bx bxl-twitter"></i>
              </a>
              <a
                href="javascript:;"
                class="list-inline-item bg-linkedin text-white border-0"
              >
                <i class="bx bxl-linkedin"></i>
              </a>
            </div>
            <div class="d-grid">
              <a href="#" class="btn btn-outline-primary radius-15">
                Contact Me
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "teams-member",
  props: {
    teamsMember: {
      type: Array,
      default: () => [],
    },
  },
};
</script>
