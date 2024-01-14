<template>
    <button class="btn btn-outline-primary mr-2" @click="copyLink()">
        Share comparison list
    </button>
</template>

<script>
export default {
    name: "ComparisonPublicLinkComponent",
    props: ['link'],
    data() {
          return {
              'unescaped_link' : this.link.replaceAll("\"", "")
          }
    },
    methods: {
        copyLink() {
            navigator.clipboard.writeText( this.unescaped_link )
                .then( () => alert('Comparison list URL was successfully copied') );
        }
    }
}
</script>

<style scoped>

</style>
