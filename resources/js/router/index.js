import { createRouter, createWebHistory } from 'vue-router'

import UserssIndex from '../components/userss/UserssIndex.vue'

const routes = [
    {
        path: '/dashboard',
        // name: 'userss.index',
        component: UserssIndex
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})