require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

import App from './components/views/App.vue';
import router from './router';

const app = new Vue({
   el: '#root',
   render: h => h(App),
   router,
});
