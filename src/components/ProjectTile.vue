<template>
  <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
      <slot name="preview-image">Image</slot>
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
      <div class="mb-3">
        <slot name="badges">
          <span
            class="mr-2 bg-green-100 text-green-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
          >
            Vue
          </span>
        </slot>
      </div>
      <div class="flex-1">
        <a :href="url" class="block">
          <p class="text-xl font-semibold text-gray-900">
            {{ title }}
          </p>
          <p>{{ subtitle }}</p>
          <p class="mt-3 text-base text-gray-500">
            {{ description }}
          </p>
        </a>
      </div>
      <div class="mt-6 flex items-center justify-end flex-wrap">
        <a
          v-if="url"
          :href="url"
          class="flex-grow md:flex-grow-0 mb-2 md:mb-0 flex items-center justify-center px-4 py-1 text-sm rounded border shadow-sm hover:bg-gray-50"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="1.5"
              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
          Visit Website
        </a>
        <a
          v-if="githubUrl"
          :href="githubUrl"
          class="flex-grow md:flex-grow-0 justify-center md:ml-2 text-white bg-gray-800 flex items-center px-4 py-1 text-sm rounded shadow-sm hover:bg-gray-700"
        >
          <Icon icon="github" class="w-4 mr-2"></Icon>
          View on Github
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import Icon from "~/components/Icon";

export default {
  name: "ProjectTile",
  components: { Icon },
  props: {
    title: {
      type: String,
      required: true
    },
    description: {
      type: String,
      required: true
    },
    url: {
      type: String,
      default: null
    },
    githubUrl: {
      type: String,
      default: null
    },
    subtitle: {
      type: String,
      default: null
    }
  }
};
</script>

<style scoped></style>
