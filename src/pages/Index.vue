<template>
  <Layout>
    <ContentTile
      id="top"
      class="bg-gradient-to-tr from-black to-gray-800 pb-64 shadow-sm"
    >
      <div class="mt-32 md:mt-48 md:pb-48 text-center">
        <!--        <p class="mb-7 text-lg text-gray-500">Hi, my name is</p>-->
        <h1
          class="md:mb-40 mb-8 md:mt-80 text-8xl md:text-9xl text-gray-100 font-display font-bold tracking-tighter"
        >
          Cosi Leone
        </h1>
        <p class="text-lg text-gray-300">
          I'm a senior software engineer with an eye&nbsp;for&nbsp;design.
        </p>
        <p class="text-lg text-gray-300 mb-16">
          I build websites, Rest APIs, component libraries and I can bring your
          company's web platform&nbsp;to&nbsp;life!
        </p>
        <div class="">
          <a href="#tools" class="learn-more-button">
            Learn more
          </a>
          <button type="button" class="contact-button ml-6">
            Get a free quote
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
    <ContentTile class="bg-gray-50 shadow"></ContentTile>
    <ContentTile
      class="bg-gradient-to-tr from-indigo-200 to-blue-50 pb-64 shadow-sm"
    >
      <div class="p-6">
        <h4
          class="text-gray-700 text-6xl font-display font-semibold tracking-tight"
        >
          Projects
        </h4>
        <div
          class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none"
        >
          <ProjectTile
            title="Bills of Knowledge"
            subtitle="www.billsofknowledge.com"
            description="This project is a banking app aimed at 18-27 year olds (gen Z) in Italy to help them manage their money by gamifiying their saving, and learn about personal finance through short-form videos."
            url="https://www.billsofknowledge.com"
          >
            <template #preview-image>
              <g-image
                class="h-48 object-cover object-top md:w-full"
                src="~/assets/img/bok.webp"
                alt="Preview picture of the website of 'Bills of Knowledge'"
              />
            </template>
            <template #badges>
              <span
                class="mr-2 bg-gray-800 text-white inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                Next.js
              </span>
              <span
                class="mr-2 bg-blue-100 text-blue-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                Hubspot
              </span>
              <span
                class="mr-2 bg-gray-100 text-gray-900 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                Vercel
              </span>
              <span
                class="mr-2 bg-indigo-100 text-indigo-600 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                TypeScript (full stack)
              </span>
            </template>
          </ProjectTile>
          <ProjectTile
            title="Auction Goblin"
            subtitle="www.auctiongoblin.com"
            description="Master the World of Warcraft Classic economy with all the information from the Auction House at your fingertips. This project was built with the esteemed T3 stack and has over 2000 users signed up!"
            url="https://www.auctiongoblin.com"
          >
            <template #preview-image>
              <g-image
                class="h-48 object-cover object-top md:w-full"
                src="~/assets/img/auction-goblin2.webp"
                alt="Preview picture of the World of Warcraft auction house project named 'Auction Goblin'"
              />
            </template>
            <template #badges>
              <span
                class="mr-2 bg-gray-800 text-white inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                Next.js
              </span>
              <span
                class="mr-2 bg-blue-100 text-blue-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                Blizzard API
              </span>
              <span
                class="mr-2 bg-yellow-300 text-yellow-900 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                AWS
              </span>
              <span
                class="mr-2 bg-indigo-100 text-indigo-600 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
              >
                TypeScript (full stack)
              </span>
            </template>
          </ProjectTile>
          <!--          <ProjectTile-->
          <!--            title="Pokemon Randomizer"-->
          <!--            description="Remix your favourite Pokemon from the original 151!"-->
          <!--            url="http://pokemon.cosileone.com"-->
          <!--            github-url="https://github.com/ohnorobo/pokemon"-->
          <!--          >-->
          <!--            <template #preview-image>-->
          <!--              <g-image-->
          <!--                class="h-48 w-full object-cover md:object-top"-->
          <!--                src="~/assets/img/poke-card2.png"-->
          <!--                alt="Preview picture of the Pokemon randomizer project"-->
          <!--              />-->
          <!--            </template>-->
          <!--            <template #badges>-->
          <!--              <span-->
          <!--                class="mr-2 bg-purple-100 text-purple-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"-->
          <!--              >-->
          <!--                Bootstrap-->
          <!--              </span>-->
          <!--              <span-->
          <!--                class="mr-2 bg-gray-100 text-gray-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"-->
          <!--              >-->
          <!--                Flask-->
          <!--              </span>-->
          <!--              <span-->
          <!--                class="mr-2 bg-blue-100 text-blue-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"-->
          <!--              >-->
          <!--                Python-->
          <!--              </span>-->
          <!--              <span-->
          <!--                class="bg-yellow-100 text-yellow-800 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"-->
          <!--              >-->
          <!--                NLP-->
          <!--              </span>-->
          <!--            </template>-->
          <!--          </ProjectTile>-->
        </div>
      </div>
    </ContentTile>
    <ContentTile class="bg-gradient-to-br from-blue-50 to-purple-100 shadow">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="py-6 px-1 md:px-6">
          <h4
            id="tools"
            class="text-gray-700 text-3xl font-display font-semibold tracking-tight"
          >
            The tools I use
          </h4>
          <p class="font-body text-gray-700 mt-4">
            These are the languages and frameworks I prefer to work with and the
            ones I reach for when building new projects. Despite working with
            many web technologies, these remain my favourites.
          </p>
          <p class="hidden md:block font-body text-gray-700 mt-4">
            For a full list of technologies I am familiar with and have used
            throughout my career, go ahead and click the button below.
          </p>
          <button
            type="button"
            class="hidden md:flex mt-6 bg-gradient-to-b hover:from-gray-50 hover:to-gray-50 from-white to-gray-50 items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
            @click="toggleShowMoreTech"
          >
            View {{ showingMoreTech ? "Less" : "More" }}
          </button>
        </div>
        <div class="pl-0 md:pl-3">
          <ul
            class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 xl:grid-cols-3"
          >
            <GridListTile
              title="Vue"
              description="Preferred Frontend"
              href="https://vuejs.org"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16 h-16 p-2"
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
                  class="flex-shrink-0 w-16 h-16"
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
                <div class="flex w-16 items-center">
                  <g-image
                    class="w-full pl-3 pt-1"
                    src="~/assets/svg/tailwindcss-logo.svg"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="Next.js"
              description="v13+"
              href="https://nextjs.org/"
            >
              <template #image>
                <div class="flex w-16 items-center">
                  <g-image
                    class="w-full pl-3 pt-1"
                    src="~/assets/svg/nextjs-logo.svg"
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
              title="Express"
              description="Javascript RESTful APIs"
              href="https://expressjs.com"
            >
              <template #image>
                <div class="flex flex-shrink-0 w-16 items-center">
                  <g-image
                    class="flex-shrink-0 pl-2"
                    src="~/assets/img/logos/expressjs.png"
                  ></g-image>
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="TypeScript"
              description="Typed JavaScript"
              href="https://www.typescriptlang.org/"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16 h-16 p-2"
                  src="~/assets/svg/typescript-logo.svg"
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
            <GridListTile
              title="Python"
              description="v2.7 & v3+"
              href="https://python.org"
            >
              <template #image>
                <g-image
                  class="flex-shrink-0 w-16 h-16 p-2"
                  src="~/assets/svg/python-logo.svg"
                ></g-image>
              </template>
            </GridListTile>
          </ul>
          <div class="flex justify-center">
            <button
              type="button"
              class="md:hidden mt-6 bg-gradient-to-b hover:from-gray-50 hover:to-gray-50 from-white to-gray-50 items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
              @click="toggleShowMoreTech"
            >
              View {{ showingMoreTech ? "Less" : "More" }}
            </button>
          </div>
        </div>
      </div>
      <div v-show="showingMoreTech" class="mt-6 xl:mt-4">
        <ul
          class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 md:grid-cols-4 xl:grid-cols-6"
        >
          <GridListTile
            title="Django"
            description="v2+"
            href="https://djangoproject.com"
          >
            <template #image>
              <div class="flex w-16 items-center">
                <g-image
                  class="w-full pl-3 pt-1"
                  src="~/assets/svg/django-logo.svg"
                ></g-image>
              </div>
            </template>
          </GridListTile>
          <GridListTile
            title="Django Rest Framework"
            description="Django RESTful APIs"
            href="https://www.django-rest-framework.org/"
          >
            <template #image>
              <div class="flex flex-shrink-0 w-16 items-center">
                <g-image
                  class="pl-2"
                  src="~/assets/img/logos/drf-logo.png"
                ></g-image>
              </div>
            </template>
          </GridListTile>
          <GridListTile
            title="Flask"
            description="Python Microframework"
            href="https://flask.palletsprojects.com/en/1.1.x/"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 h-16 p-2"
                src="~/assets/svg/flask-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Webpack"
            description="JavaScript bundler"
            href="https://webpack.js.org/"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 h-16 p-2"
                src="~/assets/svg/webpack.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="Bootstrap"
            description="v3+"
            href="https://getbootstrap.com"
          >
            <template #image>
              <g-image
                class="flex-shrink-0 w-16 h-16 p-2"
                src="~/assets/svg/bootstrap-logo.svg"
              ></g-image>
            </template>
          </GridListTile>
          <GridListTile
            title="JQuery"
            description="Needs no introduction"
            href="https://jquery.com/"
          >
            <template #image>
              <div class="flex w-16 items-center">
                <g-image
                  class="w-full pl-3 pt-1"
                  src="~/assets/svg/jquery-logo.svg"
                ></g-image>
              </div>
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
        </ul>
      </div>
    </ContentTile>
    <ContentTile
      class="bg-gradient-to-bl from-purple-50 to-blue-50 flex justify-between items-center"
    >
      <div class="justify-self-end inline-flex items-center text-gray-500">
        <span class="text-sm inline-flex">Handmade by&nbsp;Cosi.</span>
        <!--        <span class="text-lg hidden md:inline-flex">&nbsp;🚀</span>-->
      </div>
      <div class="social-icons inline-flex text-gray-700">
        <!-- Linkedin -->
        <a href="https://www.linkedin.com/in/cosimoleone" class="footer-icon">
          <Icon class="h-6 w-6" icon="linkedin" />
        </a>
        <!-- Github -->
        <a href="https://github.com/cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="github" />
        </a>
        <!-- Instagram -->
        <a href="https://instagram.com/cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="instagram" />
        </a>
        <!-- Twitter -->
        <a href="https://twitter.com/cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="twitter" />
        </a>
        <!-- Medium -->
        <a href="https://medium.com/@cosileone" class="footer-icon">
          <Icon class="h-6 w-6" icon="medium" />
        </a>
      </div>
    </ContentTile>
  </Layout>
</template>

<script>
import ContentTile from "~/components/ContentTile";
import Icon from "~/components/Icon";
import GridListTile from "~/components/GridListTile";
import ProjectTile from "~/components/ProjectTile";

export default {
  components: { ContentTile, Icon, GridListTile, ProjectTile },
  metaInfo: {
    title: "Portfolio"
  },
  data() {
    return {
      showingMoreTech: false
    };
  },
  methods: {
    toggleShowMoreTech() {
      this.showingMoreTech = !this.showingMoreTech;
    }
  }
};
</script>

<style>
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
