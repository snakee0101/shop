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
                    <div class="d-flex flex-row justify-content-between px-3" style="width:280px; word-break:break-all; align-items: center">
                        <h4 class="ml-2">{{ video.title }}</h4>
                        <button class="btn btn-outline-danger btn-sm p-2" @click="remove(video)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </div>
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
        },
        remove(video) {
            this.videos.splice(this.videos.indexOf(video),1);
        }
    }
}
</script>

<style scoped>

</style>
