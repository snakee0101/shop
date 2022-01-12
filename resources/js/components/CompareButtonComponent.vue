<template>
    <button @click="addToCompare()"
            :class="(bigSized) ? 'btn btn-primary btn-svg-icon btn-lg' : 'btn btn-secondary btn-svg-icon btn-lg'"
            type="button"
            title="Compare"
            :data-toggle="(bigSized) ? 'tooltip' : 'btn btn-light product-card__compare'"
            :disabled="is_in_comparison">
        <svg width="16px" height="16px" fill="currentColor" v-if="is_in_comparison">
            <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16" v-else>
            <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
        </svg>
    </button>
</template>

<script>
export default {
    name: "CompareButtonComponent",
    props: ['user', 'product', 'bigSized'],
    data() {
        return {
            logged_in_user: this.user ? this.user : {},
            is_in_comparison: this.product.inComparison
        }
    },
    methods: {
        addToCompare() {
            if(this.logged_in_user.id) {
                axios.post(`/comparison/${this.product.id}`)
                     .then( response => this.is_in_comparison = !!response.data );
            } else {
                alert('The user is not logged in');
            }
        }
    }
}
</script>

<style scoped>

</style>
