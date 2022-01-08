<template>
    <div class="form-group">
        <label for="review-video">Link to Youtube video</label>
        <div class="d-flex flex-row">
            <textarea class="form-control mr-2" id="review-video" rows="1" v-model="current_url"></textarea>
            <button type="button" class="btn btn-success" @click="add_video()">Add</button>
        </div>
        <div class="text-center d-inline-block">
            <div class="d-inline-block" v-for="video_url in video_urls" :key="video_url">
                <iframe style="margin: 10px"
                        width="140" height="90"
                        :src="video_url"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>

                </iframe>
                <p>
                    <button class="btn btn-danger btn-sm" type="button" @click="remove_video(video_url)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewVideoContainerComponent",
    data() {
        return {
            'video_urls': [],
            'current_url' : ""
        };
    },
    methods: {
        convert_url_to_embed(url)
        {
            let video_id = url.match(/\?v=(.+)/)[1];
            return `https://www.youtube.com/embed/${video_id}`;
        },
        add_video()
        {
            if(this.video_urls.indexOf( this.convert_url_to_embed(this.current_url) ) != -1) {
                alert('This video is already added');
            } else {
                this.video_urls.push(
                    this.convert_url_to_embed(this.current_url)
                );
            }

            this.current_url = '';
        },
        remove_video(video_url)
        {
            this.video_urls.splice( this.video_urls.indexOf(video_url) , 1)
        }
    }
}
</script>

<style scoped>

</style>
