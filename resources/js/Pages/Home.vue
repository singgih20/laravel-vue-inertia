<template>
    <Layout title="Inertia Laravel">
        <h1>{{title}}!</h1>
        <inertia-link href="/about" as="button">about</inertia-link>
    </Layout>
</template>

<style scoped>

</style>

<script>
    import Layout from '../Shared/Layout.vue'
    export default {
        components: {
            Layout
        },
        props: ['title']
    }
</script>
