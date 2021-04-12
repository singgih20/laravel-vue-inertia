<template>
    <Layout v-bind:title="title">
        <h1>Register</h1>
        <form @submit.prevent="register">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" v-model="user.name">
                <p v-if="errors.name">{{errors.name}}</p>
            </div>

             <div class="form-group">
                <label for="email">Email</label>
                <input type="text" v-model="user.email">
                 <p v-if="errors.email">{{errors.email}}</p>
            </div>

             <div class="form-group">
                <label for="password">Password</label>
                <input type="password" v-model="user.password">
                 <p v-if="errors.password">{{errors.password}}</p>
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
            user: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    props: {
        title: String,
        errors: Object
    },
    methods: {
        register(){
            // console.log(this.user)
            this.$inertia.post('/users', this.user)
        }
    }
}
</script>

<style>

</style>
