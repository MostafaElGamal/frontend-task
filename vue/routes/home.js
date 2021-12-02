const home = () => import("vue/pages/home.vue");
const stories = () => import("vue/pages/stories.vue");

export default [
  {
    path: "/home",
    component: home,
    name: "home",
  },
  {
    path: "/stories",
    component: stories,
    name: "stories",
  },
];
