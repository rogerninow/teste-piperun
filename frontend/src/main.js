import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import VueMask from 'v-mask';

import VueElementLoading from 'vue-element-loading';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

import DefaultRoutes from './router/default';

Vue.config.productionTip = false;

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(VueMask);
Vue.use(BootstrapVue, IconsPlugin);

Vue.component('VueElementLoading', VueElementLoading);

const router = new VueRouter({
    routes: [
        ...DefaultRoutes
    ],
    mode: 'history'
});

new Vue({
    render: h => h(App),
    router
}).$mount('#app');