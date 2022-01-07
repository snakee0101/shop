<template>
    <div class="images">
        <div class="d-inline-block m-2 position-relative" v-for="photo in photos">
            <img :src="photo.url" style="height: 120px; width: 120px">
        </div>
    </div>
</template>

<script>
export default {
    name: "GalleryViewerComponent",
    props: ['photos']
}
</script>

<style scoped>

</style>
