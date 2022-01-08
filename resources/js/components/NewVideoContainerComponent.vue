<template>
    <div class="form-group">
        <label for="review-video">Link to Youtube video</label>
        <div class="d-flex flex-row">
            <textarea class="form-control mr-2" id="review-video" rows="1" v-model="current_url"></textarea>
            <button type="button" class="btn btn-success" @click="add_video()">Add</button>
        </div>
        <div class="text-center d-inline-block">
            <div class="d-inline-block" v-for="video_url in video_urls">
                <iframe style="margin: 10px"
                        width="140" height="90"
                        :src="video_url"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>

                </iframe>
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
            this.video_urls.push(
                this.convert_url_to_embed(this.current_url)
            );
            this.current_url = '';
        }
    }
}
</script>

<style scoped>

</style>
