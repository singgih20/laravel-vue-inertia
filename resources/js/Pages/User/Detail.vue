<template>
  <Layout :title="title">
    <h1>Daftar {{ title }}</h1>
    <ul>
      <li>
          <h3>{{user.name}}</h3>
          <p>{{user.email}}</p>
          <p>{{user.created_at}}</p>
          <inertia-link href="/users"> Kembali </inertia-link>
          <a href="" @click.prevent="deleteuser">Delete</a>
          <inertia-link :href="`/users/${user.id}/edit`"> Edit </inertia-link>
      </li>
    </ul>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue'
export default {
  components: {
      Layout
  },
  props: {
      title: String,
      user: Object
  },
  methods:{
      deleteuser(){
          if(confirm('data user ingin dihapus?')){
              this.$inertia.delete('/users/' + this.user.id)
          }else{
              return false
          }
      }
  }
};
</script>
