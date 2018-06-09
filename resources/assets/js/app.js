
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import router from './router';

Vue.config.devtools = true;
Vue.config.debug = true;
Vue.config.silent = false;

const app = new Vue({
    el: '#app',

    router: router
});
