<template>
  <div>
    <Navigation />
    <slot />
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
import Navigation from "~/components/Navigation";

export default {
  name: "Layout",
  components: {
    Navigation
  }
};
</script>

<style>
@tailwind base;
@tailwind components;
@tailwind utilities;

html {
  scroll-behavior: smooth;
}

body {
  @apply font-sans p-3 md:p-5 m-0;
}
</style>
