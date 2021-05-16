require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'

import router from './Router/index'
import App from './App.vue'


window.Vue = require('vue').default;


Vue.use(VueRouter)


Vue.filter('myDate', function (created) {
    return moment(created).format('DD MMM YYYY');
});


 
import moment from "moment";
import VueMomentJS from "vue-momentjs";

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)

 
const app = new Vue({
    el: '#app',
    router,
    components: {App}
});