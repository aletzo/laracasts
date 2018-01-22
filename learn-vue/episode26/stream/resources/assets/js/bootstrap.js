import axios     from 'axios';
import Vue       from 'vue';
import VueRouter from 'vue-router';

import Form from './utilities/Form';

window.axios = axios;
window.Vue   = Vue;


Vue.use(VueRouter);


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Form = Form;

