<template>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 layout-spacing">
        <div class="statbox widget box box-shadow">
          <StoryHeader />
          <StoryList :stories="stories" />
          <div class="widget-footer p-2 text-center bg-light-primary">
            <a class="text-primary strong" href="#">View All</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StoryHeader from "vue/components/Stories/_StoryHeader";
import StoryList from "vue/components/Stories/_StoryList";

export default {
  name: "stories-page",
  components: {
    StoryHeader,
    StoryList,
  },
  data() {
    return {
      stories: {},
    };
  },
  mounted() {
    this.getData();
  },
  methods: {
    async getData() {
      try {
        const storiesRes = await axios.get("/api/stories");
        this.stories = storiesRes.data;
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>

<style>
body {
  background: #eee;
  margin-top: 20px;
}
.widget {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  border-radius: 6px;
  -webkit-box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%),
    0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
  -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08),
    0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%),
    0px 1px 11px 0px rgb(0 0 0 / 7%);
}
.widget.box .widget-header {
  background: #fff;
  padding: 0px 8px 0px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
}
.widget .widget-header {
  border-bottom: 0px solid #f1f2f3;
}
.widget.box .widget-header {
  background: #fff;
  padding: 0px 8px 0px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
}
.widget .widget-header {
  border-bottom: 0px solid #f1f2f3;
}
.widget .widget-header:after {
  clear: both;
}
.widget .widget-header:before,
.widget .widget-header:after {
  display: table;
  content: "";
  line-height: 0;
}
.widget-content-area {
  padding: 20px;
  position: relative;
  background-color: #fff;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
}

.statbox .widget-content:before,
.statbox .widget-content:after {
  display: table;
  content: "";
  line-height: 0;
  clear: both;
}
.statbox .widget-content:before,
.statbox .widget-content:after {
  display: table;
  content: "";
  line-height: 0;
  clear: both;
}

.story-container-2 .single-story {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.story-container-2 .story-dp {
  height: 50px;
  width: 50px;
  position: relative;
  border-radius: 50%;
  margin-right: 15px;
  padding: 3px;
}

.story-container-2 .story-dp img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
}

.story-container-2 .story-author p.name {
  margin-bottom: 0px;
  font-weight: 600;
  font-size: 13px;
}
.story-container-2 .story-author p.time {
  margin-bottom: 0px;
  font-weight: 500;
  font-size: 12px;
}
.story-container-2 .story-dp img.add-story {
  position: absolute;
  height: 19px !important;
  width: 19px !important;
  right: -3px;
}
.story-container-2 .story-dp img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
}
.story-container-2 p.divider {
  margin: 10px 0px 10px 0px;
  font-weight: 600;
  font-size: 12px;
  color: #404040;
}
.widget.box .widget-footer {
  padding: 2rem 2.25rem;
  background-color: #ffffff;
  border-top: 1px solid #ebedf3;
}
.bg-light-primary {
  background-color: #f6f1ff !important;
  border-color: #f6f1ff;
  color: #5526ab;
}
</style>
