<template>
  <div class="tile">
    <slot />
  </div>
</template>

<script>
export default {
  name: "ContentTile",
}
</script>

<style scoped>
.tile {
  @apply rounded-xl p-4 font-body mb-5;
  min-height: 1rem;
}

.tile:last-child {
  @apply rounded-b-iphone md:rounded-xl mb-0
}
</style>
