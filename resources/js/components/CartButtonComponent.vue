<template>
    <button @click="toggleCart()" class="btn btn-primary product-card__addtocart" type="button">Add To
        Cart
    </button>
</template>

<script>
export default {
    name: 'CartButtonComponent',
    methods: {
        toggleCart() {
            alert('123');
        }
    }
}
</script>
