require('./bootstrap');

import { createApp } from 'vue';

import router from './router';
import textSpiral from './component';

createApp({
    components: {
        textSpiral
    }
}).use(router).mount('#app');