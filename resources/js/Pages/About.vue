<template>
<Layout>
    <h1>This is about</h1>
</Layout>
</template>

<style scoped>

</style>

<script>
    import Layout from '../Shared/Layout.vue'
    export default {
        components :{
            Layout
        },
        props: ['title']
    }
</script>
