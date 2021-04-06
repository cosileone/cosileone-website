<template>
  <Layout>
    <ContentTile id="top" class="bg-gradient-to-tr from-indigo-200 to-blue-50 pb-64 shadow-sm">
      <div class="mt-32 md:mt-48 md:pb-48 text-center">
        <p class="mb-7 text-lg text-gray-600">Hi, my name is</p>
        <h1 class="mb-8 text-6xl text-gray-700 font-display font-extrabold tracking-tighter">Cosimo Leone</h1>
        <p class="text-lg text-gray-500">I'm a senior software engineer with an eye&nbsp;for&nbsp;design.</p>
        <p class="text-lg text-gray-500 mb-16">I build websites, Rest APIs, component libraries and I can bring your company's web platform&nbsp;to&nbsp;life.</p>
        <div class="">
          <button
            type="button"
            class="learn-more-button"
          >
            Learn more
          </button>
          <button
            type="button"
            class="contact-button ml-6"
          >
            Get in touch
          </button>
        </div>
      </div>
<!--      <div class="relative flex justify-center">-->
<!--        <div class="h-64 w-5/6 p-4 bg-white bg-opacity-80 shadow rounded-xl absolute text-center">-->
<!--          <h2 class="text-4xl">-->
<!--            Here are some technologies I am familiar with-->
<!--          </h2>-->
<!--        </div>-->
<!--      </div>-->
    </ContentTile>
    <ContentTile class="bg-gray-50 shadow">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="py-6 px-1 md:px-6">
          <h4 class="text-gray-700 text-3xl font-display font-semibold tracking-tight">
            The tools I use
          </h4>
          <p class="font-body text-gray-700 mt-4">
            These are the languages and frameworks I prefer to work with and the ones I reach for when building new projects.
            Despite working with many web technologies, these remain my favourites.
          </p>
          <p class="hidden md:block font-body text-gray-700 mt-4">
            For a full list of technologies I am familiar with that didn't make the cut,
            go ahead and click the button below to view more.
          </p>
          <button
            type="button"
            class="hidden md:flex mt-6 bg-gradient-to-b hover:from-gray-50 hover:to-gray-50 from-white to-gray-50 items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
            @click="toggleShowMoreTech"
          >
            View {{ showingMoreTech ? 'Less' : 'More' }}
          </button>
        </div>
        <div class="pl-0 md:pl-3">
          <ul class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 xl:grid-cols-3">
            <GridListTile
              title="Vue"
              description="Preferred Frontend"
              href="https://vuejs.org"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16 p-2"
                  src="~/assets/svg/vuejs-logo.svg"
                ></g-image>
              </template>
            </GridListTile>
            <GridListTile
              title="React"
              description="Frontend Alternative"
              href="https://reactjs.org"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16"
                  src="~/assets/svg/react-logo.svg"
                ></g-image>
              </template>
            </GridListTile>
            <GridListTile
              title="Tailwind"
              description="Utility CSS"
              href="https://tailwindcss.com"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16 pl-2"
                  src="~/assets/svg/tailwindcss-logo.svg"
                ></g-image>
              </template>
            </GridListTile>
            <GridListTile
              title="Storybook"
              description="Component Libraries"
              href="https://storybook.js.org/"
            >
              <template #image>
                <div class="flex items-center flex-shrink-0 w-16">
                  <g-image
                    class="pl-3 w-12"
                    src="~/assets/svg/storybook.svg"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="Django"
              description="v2+"
              href="https://djangoproject.org"
            >
              <template #image>
                <div class="flex flex-shrink-0 w-16 items-center">
                  <g-image
                    class="w-full pl-3 pt-1"
                    src="~/assets/svg/django-logo.svg"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="ExpressJS"
              description="RESTful APIs"
              href="https://expressjs.com"
            >
              <template #image>
                <div class="flex flex-shrink-0 w-16 items-center">
                  <g-image
                    class="flex-shrink-0 pl-2"
                    src="~/assets/expressjs.png"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="Node"
              description="JavaScript Runtime"
              href="https://nodejs.org"
            >
              <template #image>
                <div class="flex flex-shrink-0 w-16 items-center">
                  <g-image
                    class="w-full pl-3 pt-2"
                    src="~/assets/svg/nodejs-logo.svg"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="Python"
              description="v2.7 & v3+"
              href="https://python.org"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16 p-2"
                  src="~/assets/svg/python-logo.svg"
                ></g-image>
              </template>
            </GridListTile>
            <GridListTile
              title="JavaScript"
              description="ES6+"
              href="https://www.javascript.com/"
            >
              <template #image>
                <div class="flex flex-shrink-0 w-16 items-center p-2">
                  <g-image
                    class="w-full rounded"
                    src="~/assets/svg/js-logo.svg"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
          </ul>
          <div class="flex justify-center">
            <button
              type="button"
              class="md:hidden mt-6 bg-gradient-to-b hover:from-gray-50 hover:to-gray-50 from-white to-gray-50 items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
              @click="toggleShowMoreTech"
            >
              View {{ showingMoreTech ? 'Less' : 'More' }}
            </button>
          </div>
        </div>
      </div>
      <div
        v-show="showingMoreTech"
        class="mt-6 xl:mt-0"
      >
        <ul class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-4 xl:grid-cols-6">
          <GridListTile
            title="Bootstrap"
            description="v3+"
            href="https://getbootstrap.com"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 p-2"
                src="~/assets/svg/vuejs-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Vue"
            description="Preferred Frontend"
            href="https://vuejs.org"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 p-2"
                src="~/assets/svg/vuejs-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Vue"
            description="Preferred Frontend"
            href="https://vuejs.org"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 p-2"
                src="~/assets/svg/vuejs-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Vue"
            description="Preferred Frontend"
            href="https://vuejs.org"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 p-2"
                src="~/assets/svg/vuejs-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Vue"
            description="Preferred Frontend"
            href="https://vuejs.org"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 p-2"
                src="~/assets/svg/vuejs-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Vue"
            description="Preferred Frontend"
            href="https://vuejs.org"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 p-2"
                src="~/assets/svg/vuejs-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
        </ul>
      </div>
    </ContentTile>
    <ContentTile class="bg-gradient-to-br from-indigo-100 to-yellow-100 shadow-sm">
      <div class="h-10"></div>
    </ContentTile>
    <ContentTile class="bg-gradient-to-bl from-purple-50 to-blue-50 flex justify-between items-center">
      <div class="justify-self-end inline-flex items-center text-gray-500">
        <span class="text-sm inline-flex">Handmade by&nbsp;Cosi.</span>
        <!--        <span class="text-lg hidden md:inline-flex">&nbsp;🚀</span>-->

      </div>
      <div class="social-icons inline-flex text-gray-700">
        <!-- Linkedin -->
        <a href="https://www.linkedin.com/in/cosimoleone" class="footer-icon">
          <Icon class="h-6 w-6" icon="linkedin"/>
        </a>
        <!-- Github -->
        <a href="https://github.com/cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="github"/>
        </a>
        <!-- Instagram -->
        <a href="https://instagram.com/cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="instagram"/>
        </a>
        <!-- Twitter -->
        <a href="https://twitter.com/cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="twitter"/>
        </a>
        <!-- Medium -->
        <a href="https://medium.com/@cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="medium"/>
        </a>
      </div>
    </ContentTile>
  </Layout>
</template>

<script>
import ContentTile from '~/components/ContentTile';
import Icon from '~/components/Icon';
import GridListTile from '~/components/GridListTile';

export default {
  components: { ContentTile, Icon, GridListTile },
  metaInfo: {
    title: 'Portfolio',
  },
  data() {
    return {
      showingMoreTech: false,
    };
  },
  methods: {
    toggleShowMoreTech() {
      this.showingMoreTech = !this.showingMoreTech;
    },
  },
}
</script>

<style>
.avoid-wrap {
  display: inline-block;
}

.learn-more-button {
  @apply inline-flex items-center px-4 py-2 border border-indigo-200 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500;
}

.contact-button {
  @apply inline-flex items-center px-4 py-2 border border-none font-medium rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500;
}

.footer-icon {
  @apply mr-3;
}

</style>
