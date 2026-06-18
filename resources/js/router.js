import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        name:"home",
        component: () => import("./Pages/HomeRoute.vue"),
    },
    {
        path: "/test",
        name:"test-page",
        component: () => import("./Pages/TestRoute.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});