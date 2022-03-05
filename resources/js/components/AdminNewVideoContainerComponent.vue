<template>
    <div class="form-group">
        <label for="review-video">Link to Youtube video</label>
        <input type="text" class="form-control mb-2" id="review-video" v-model="url">

        <label for="#title">Video title</label>
        <input type="text" class="form-control" v-model="title" id="title">

        <button type="button" class="btn btn-success mt-2" @click="add()">Add</button>
        <div>
            <div class="text-center d-inline-block" v-for="video in videos">
                <div class="d-inline-block">
                    <iframe style="margin: 10px"
                            width="280" height="157"
                            :src="video.url"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>

                    </iframe>
                    <h4 class="ml-2">{{ video.title }}</h4>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AdminNewVideoContainerComponent",
    data() {
        return {
            'videos': [],
            'url': "",
            'title': ''
        };
    },
    methods: {
        convert_url_to_embed(url) {
            let video_id = url.match(/\?v=(.+)/)[1];
            return `https://www.youtube.com/embed/${video_id}`;
        },
        add() {
            if(this.videos.findIndex(video => video.url == this.convert_url_to_embed(this.url)) != -1)
                return alert('this video is already added');

            this.videos.push({
                url : this.convert_url_to_embed(this.url),
                title : this.title
            });

            this.url = '';
            this.title = '';
        }
    }
}
</script>

<style scoped>

</style>
