<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Characteristic name</th>
            <th scope="col">Value</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="char in char_list">
            <td scope="row">{{ char.name }}</td>
            <td>
                <input type="text" class="form-control" :name="'char-' + char.id" :value="char.pivot ? char.pivot.value : ''">
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "AdminCharacteristicTableComponent",
    props: ['chars'],
    data() {
        return {
            char_list : {}
        };
    },
    mounted() {
        window.events.$on('update_specification_with_characteristics', this.update_specification);

        if(this.chars)
            this.char_list = this.chars;
    },
    methods: {
        update_specification(data)
        {
            this.char_list = data;
        }
    }
}
</script>

<style scoped>

</style>
