require('./bootstrap');
require('alpinejs');

import Vue from 'vue';
Vue.component('cart-button-component', require('./components/CartButtonComponent').default);

window.onload = function(){
    const app = new Vue({
        el: '#app',
    });
};


