<template>
  <li class="col-span-1 shadow-sm rounded-md border border-gray-200 bg-white">
    <component :is="$attrs.href ? 'a' : 'span'" v-bind="$attrs" class="flex">
      <slot>
        <slot name="image">
          <div class="flex-shrink-0 w-16 rounded-l-md p-2">
            Hi
          </div>
        </slot>
        <slot name="body"></slot>
      </slot>
      <div class="flex-1 flex items-center justify-between truncate">
        <div class="flex-1 px-4 py-2 text-sm truncate">
          <p class="text-gray-900 font-medium hover:text-gray-600">{{title}}</p>
          <p class="text-gray-500">{{description}}</p>
        </div>
      </div>
    </component>
  </li>
</template>

<script>
export default {
name: "GridListTile",
  props: {
    title: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: true,
    },
  },
}
</script>

<style scoped>

</style>
