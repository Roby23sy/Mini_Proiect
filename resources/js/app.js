require('./bootstrap');

import Vue from 'vue';

import App from './vue/app'

const app = new Vue({
    el: '#app',
    comments: { App }
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
