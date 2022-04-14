window.Vue = require('vue');

import App from './views/App.vue'
import Router from './router'
import Vue from 'vue';

const app = new Vue({
    el:'#appVue',
    render: (h) => h(App),
    router: Router,
});