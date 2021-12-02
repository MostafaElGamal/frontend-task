<template>
  <div class="widget-content widget-content-area">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="content_2" class="tabcontent">
          <div class="story-container-2">
            <p class="divider">Recently Added</p>
            <div
              class="single-story"
              v-for="(recentStory, i) in stories.recently_added"
              :key="`recentStory_${i}`"
            >
              <div class="story-dp unseen">
                <img :src="recentStory.avatar" />
              </div>
              <div class="story-author">
                <p class="name">
                  {{ recentStory.name }}
                </p>
                <p class="time">
                  {{ recentStory.date }}
                </p>
              </div>
            </div>

            <p class="divider">Viewed Stories</p>
            <div
              class="single-story"
              v-for="(viewedStory, i) in stories.viewed_stories"
              :key="`viewedStory_${i}`"
            >
              <div class="story-dp unseen">
                <img :src="viewedStory.avatar" />
              </div>
              <div class="story-author">
                <p class="name">
                  {{ viewedStory.name }}
                </p>
                <p class="time">
                  {{ viewedStory.date }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "story-list",
  props: {
    stories: {
      type: Object,
      default: () => [],
    },
  },
};
</script>
