import { createApp } from "vue";
import 'mdb-vue-ui-kit';
import Home from './components/Home.vue';
import { createRouter, createWebHistory } from 'vue-router';



const routes = [
    {
        path: '/',
        component: Home
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

const app = createApp(Home).use(router).mount('#app');