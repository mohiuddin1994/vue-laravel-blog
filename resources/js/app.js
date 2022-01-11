

require('./bootstrap');


window.Vue = require('vue').default;
import axios from 'axios'
window.axios = axios


Vue.component('admin-master', require('./componentes/admin/adminMaster.vue').default);

// vform  vform vform

import Form from 'vform'
window.Form = Form

// sweet aler2 user
import Swal from 'sweetalert2'
window.Swal = Swal;


const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
     timerProgressBar: true,
  })
window.Toast = Toast;
// toast mesate end

// vuex start
import Vuex from 'vuex'

Vue.use(Vuex)

import {storeData} from "./index"

const store = new Vuex.Store(
    storeData
)



// moment formate
   import {filter} from "./filter"






// router Router

  import VueRouter from 'vue-router';

  Vue.use(VueRouter);

import {routes} from "./routes";
import Vue from 'vue';


const router = new VueRouter({
    routes, // short for `routes: routes`
    // mode:"hash",
  })

const app = new Vue({

    el: '#app',
    router,
    store
});
