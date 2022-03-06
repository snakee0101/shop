<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Characteristic name</th>
            <th scope="col">Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "AdminCharacteristicTableComponent",
    mounted() {
        window.events.$on('update_specification_with_characteristics', this.update_specification);
    },
    methods: {
        update_specification(data)
        {
            console.log(data);
        }
    }
}
</script>

<style scoped>

</style>
