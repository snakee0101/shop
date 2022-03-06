require('./bootstrap');
require('alpinejs');

import Vue from 'vue';
Vue.component('cart-button-component', require('./components/CartButtonComponent').default);
Vue.component('cart-button-quantity-component', require('./components/CartButtonQuantityComponent').default);
Vue.component('favorite-button-component', require('./components/FavoriteButtonComponent').default);
Vue.component('compare-button-component', require('./components/CompareButtonComponent').default);
Vue.component('comparison-public-link-component', require('./components/ComparisonPublicLinkComponent').default);
Vue.component('wishlist-component', require('./components/WishlistComponent').default);
Vue.component('product-card-component', require('./components/ProductCardComponent').default);
Vue.component('product-set-card-component', require('./components/ProductSetCardComponent').default);
Vue.component('new-wishlist-component', require('./components/NewWishlistComponent').default);
Vue.component('product-cart-table-component', require('./components/ProductCartTableComponent').default);
Vue.component('cart-totals-component', require('./components/CartTotalsComponent').default);
Vue.component('vote-controls-component', require('./components/VoteControlsComponent').default);
Vue.component('new-photo-container-component', require('./components/NewPhotoContainerComponent').default);
Vue.component('new-video-container-component', require('./components/NewVideoContainerComponent').default);
Vue.component('admin-new-video-container-component', require('./components/AdminNewVideoContainerComponent').default);
Vue.component('admin-category-selector-component', require('./components/AdminCategorySelectorComponent').default);
Vue.component('admin-characteristic-table-component', require('./components/AdminCharacteristicTableComponent').default);
Vue.component('gallery-viewer-component', require('./components/GalleryViewerComponent').default);
Vue.component('report-component', require('./components/ReportComponent').default);


window.events = new Vue();

window.onload = function(){
    const app = new Vue({
        el: '#app',
    });
};


