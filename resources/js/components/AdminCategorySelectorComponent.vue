<template>
    <select class="form-control select2-category-selector select2-hidden-accessible" style="width: 100%;"
            name="category_id" tabindex="-1" aria-hidden="true">
        <option selected="selected" data-select2-id="0" value="">None</option>

        <option v-for="category in categories"
                :data-select2-id="category.id"
                :value="category.id">
            {{ category.name }}
        </option>
    </select>
</template>

<script>
export default {
    name: "AdminCategorySelectorComponent",
    props: ['categories'],
    mounted() {
        $('.select2-category-selector').select2();

        $('.select2-category-selector').on('select2:select', function (e) {
            let selected_category_id = e.params.data.element.value;

            //get characteristics list from the server
            axios.post('/characteristic/for_category/' + selected_category_id)
                 .then(response => window.events.$emit('update_specification_with_characteristics', response.data))
        });
    }
}
</script>

<style scoped>

</style>
