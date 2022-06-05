<template>
    <div>
        <div class="form-group">
            <label for="characteristic_name">Background Color</label>
            <input type="color" name="background_color" v-model="badge_style.background">
        </div>
        <div class="form-group">
            <label for="characteristic_name">Text Color</label>
            <input type="color" name="text_color" v-model="badge_style.color">
        </div>
        <div class="mt-4">
            <p>Badge sample</p>
            <p class="text-center">
                <span class="badge text-lg" :style="badge_style">New</span>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "BadgeStyleEditComponent",
    props: ['background', 'textColor'],
    data() {
      return {
          badge_style: {
              background: this.background ?? '#000000',
              color: this.textColor ?? '#ffffff',
          }
      };
    }
}
</script>

<style scoped>

</style>
