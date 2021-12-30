require('./bootstrap');
require('alpinejs');

import Vue from 'vue';
Vue.component('cart-button-component', require('./components/CartButtonComponent').default);
Vue.component('favorite-button-component', require('./components/FavoriteButtonComponent').default);
Vue.component('wishlist-component', require('./components/WishlistComponent').default);

window.onload = function(){
    const app = new Vue({
        el: '#app',
    });
};


