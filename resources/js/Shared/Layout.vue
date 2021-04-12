<template>
  <main>
    <header>
      <inertia-link href="/home">Home</inertia-link>
      <inertia-link href="/about">About</inertia-link>
      <inertia-link href="/users">User</inertia-link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
  export default {
    props: {
      title: String,
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = title
        },
      },
    },
  }
</script>
