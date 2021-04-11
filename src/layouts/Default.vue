<template>
  <div>
    <Navigation />
    <slot/>
  </div>
</template>

<static-query>
query {
  metadata {
    siteName
  }
}
</static-query>

<script>
import Navigation from '~/components/Navigation';

export default {
  name: "Layout",
  components: {
    Navigation,
  },
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Overpass:wght@800&display=swap');

html {
  scroll-behavior: smooth;
}

body {
  @apply font-sans p-3 md:p-5 m-0;
}
</style>
