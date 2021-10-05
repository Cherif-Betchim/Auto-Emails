require('./bootstrap');


// window.Vue = require('vue');

// //Vue.component('front-page',require('./Components/MainFront.vue').default);
// Vue.component('example-component', require('./Components/MainFront.vue').default);

// const app = new Vue ({
//     el: '#app',
// });


 window.Vue = require('vue').default;

// Register Vue Components
Vue.component('example-component', require('./components/MainFront.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
});