<template>
    <div class="images d-flex flex-wrap">
        <div class="d-inline-block m-2 position-relative" v-for="photo in photos">
            <div class="modal fade image-modal" :id="'imageModal_' + photo.id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img :src="photo.url" style="max-height: 90vh; max-width: 100%">
                        </div>
                    </div>
                </div>
            </div>

            <img :src="photo.url"
                 style="height: 120px; width: 120px; cursor: pointer"
                 data-toggle="modal"
                 :data-target="'#imageModal_' + photo.id">
        </div>

        <div class="d-inline-block position-relative m-2" v-for="video in videos">
            <img :src="get_thumbnail(video.url)"
                 style="height: 120px; width: 120px; cursor: pointer"
                 data-toggle="modal">
        </div>
    </div>
</template>

<script>
export default {
    name: "GalleryViewerComponent",
    props: ['photos', 'videos'],
    methods: {
        get_thumbnail(url)
        {
            let video_id = url.match(/\/embed\/(.+)/)[1]; //get video id
            return `https://img.youtube.com/vi/${video_id}/0.jpg`; //get youtube video thumbnail
        }
    }
}
</script>

<style scoped>

</style>
