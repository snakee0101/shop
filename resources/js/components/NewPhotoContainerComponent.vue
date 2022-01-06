<template>
    <div class="form-group">
        <label>Photos</label><br>

        <div class="images">
            <div class="d-inline-block m-2 position-relative" v-for="(encoded_image, index) in encoded_images">
                <img :src="encoded_image" style="height: 120px; width: 120px">
                <a class="bg-danger rounded-circle position-absolute top-0 end-0"
                   style="cursor: pointer; top: .2em; right: .2em"
                   @click.prevent="delete_image(index)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
        </div>

        <button type="button" class="btn btn-success" @click="selectImage()">Add Photos</button>
        <input type="file" ref="image" class="d-none" accept="image/jpeg,image/png,image/gif"
               @change="handleFiles()">
    </div>

</template>

<script>
export default {
    name: "NewPhotoContainerComponent",
    data() {
        return {
            encoded_images: [],
            images: []
        }
    },
    methods: {
        delete_image(index) {
            this.images.splice(index, 1);
            this.encoded_images.splice(index, 1);
        },
        selectImage() {
            this.$refs['image'].click();
        },
        handleFiles() {
            let file = this.$refs['image'].files[0];

            this.images.push(file);
            const reader = new FileReader();

            reader.onloadend = () => {
                this.encoded_images.push(reader.result);
            };

            reader.readAsDataURL(file);
        },
    }
}
</script>

<style scoped>

</style>
