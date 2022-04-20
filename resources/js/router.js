import { createRouter, createWebHistory } from 'vue-router';

import textSpiral from './component';

const routes = [{

    path: '/',
    name: 'text.spiral',
    component: textSpiral,
}]; 

export default createRouter({
    history: createWebHistory(),
    routes
})