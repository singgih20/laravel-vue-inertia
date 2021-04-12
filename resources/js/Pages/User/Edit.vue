<template>
    <Layout v-bind:title="title">
        <h1>Update </h1>
        <form @submit.prevent="update">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" v-model="form.name">
                <p v-if="errors.name">{{errors.name}}</p>
            </div>

             <div class="form-group">
                <label for="email">Email</label>
                <input type="text" v-model="form.email">
                 <p v-if="errors.email">{{errors.email}}</p>
            </div>


            <button type="submit">Register</button>
        </form>
    </Layout>
</template>
<script>
import Layout from '../../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    data(){
        return {
            form: {
                name: this.user.name,
                email: this.user.email
            }
        }
    },
    props: {
        title: String,
        errors: Object,
        user: Object
    },
    methods: {
        update(){
            this.$inertia.put('/users/' + this.user.id, this.form)
        }
    }
}
</script>

<style>

</style>
