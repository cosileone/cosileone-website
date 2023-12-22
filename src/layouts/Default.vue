<template>
  <div>
    <Navigation />
    <slot />
  </div>
</template>

<script>
import Navigation from "/src/components/Navigation";

export default {
  name: "Layout",
  components: {
    Navigation
  }
};
</script>

<style>
html {
  scroll-behavior: smooth;
}

body {
  @apply font-sans p-3 md:p-5 m-0;
}
</style>
