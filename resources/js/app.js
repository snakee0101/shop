require('./bootstrap');
require('alpinejs');

import Vue from 'vue';
Vue.component('cart-button-component', require('./components/CartButtonComponent').default);
Vue.component('cart-button-quantity-component', require('./components/CartButtonQuantityComponent').default);
Vue.component('favorite-button-component', require('./components/FavoriteButtonComponent').default);
Vue.component('wishlist-component', require('./components/WishlistComponent').default);
Vue.component('product-card-component', require('./components/ProductCardComponent').default);
Vue.component('new-wishlist-component', require('./components/NewWishlistComponent').default);
Vue.component('product-cart-table-component', require('./components/ProductCartTableComponent').default);
Vue.component('cart-totals-component', require('./components/CartTotalsComponent').default);
Vue.component('vote-controls-component', require('./components/VoteControlsComponent').default);
Vue.component('new-photo-container-component', require('./components/NewPhotoContainerComponent').default);

window.events = new Vue();

window.onload = function(){
    const app = new Vue({
        el: '#app',
    });
};


