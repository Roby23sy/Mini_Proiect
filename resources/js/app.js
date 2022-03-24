require('./bootstrap');

import Vue from 'vue';

import App from './vue/app.vue'

const app = new Vue({
    el: '#app',
    comments: {app}
})

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
