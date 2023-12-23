<template>
  <Layout>
    <ContentTile
      id="top"
      class="bg-gradient-to-tr from-black to-slate-800 shadow pb-16"
    >
      <div class="text-center">
        <!--        <p class="mb-7 text-lg text-gray-500">Hi, my name is</p>-->
        <h1
          class="md:pb-40 pb-52 pt-[200px] md:pt-80 text-8xl md:text-9xl text-slate-50 font-display font-bold tracking-tighter"
        >
          Cosi Leone
        </h1>
        <p class="text-lg text-slate-300 tracking-tight text-balance">
          Best-in-class web development for your business.
        </p>
        <div class="mt-20 md:mt-28 mb-4">
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
    <ContentTile
      class="bg-gradient-to-bl from-slate-100 to-slate-200 shadow p-4 pb-8"
    >
      <div class="p-6 flex flex-col gap-12">
        <h2
          class="text-slate-700 text-6xl font-display font-semibold tracking-tight mb-10"
        >
          How can I help you?
        </h2>
        <div class="grid md:grid-cols-3">
          <h3 class="font-display text-4xl text-slate-600 font-semibold">
            E-commerce
          </h3>
          <div class="col-span-2">
            <p class="font-body text-balance text-slate-700 mt-4">
              Having worked at Amazon I bring with me the collective experience
              of a global ecommerce giant. I can help you build your first
              online store or improve your existing one, and increase your sales
              with industry best practices.
            </p>
          </div>
        </div>
        <div class="grid md:grid-cols-3">
          <h3 class="font-display text-4xl text-slate-600 font-semibold">
            Tech Startups
          </h3>
          <div class="col-span-2">
            <p class="font-body text-balance text-slate-700 mt-4">
              I have launched several startups and now have a battle-tested set
              of tools and strategies to help you get your idea off the ground.
              I can help you build your MVP, and scale it to as many users as
              you'll ever need.
            </p>
          </div>
        </div>
        <div class="grid md:grid-cols-3">
          <h3 class="font-display text-4xl text-slate-600 font-semibold">
            Individuals
          </h3>
          <div class="col-span-2">
            <p class="font-body text-balance text-slate-700 mt-4">
              Big ideas in mind? I can help you get there and there is no
              obligation until we agree on a plan. I can help you build your
              online presence and get your personal brand out there in the best
              way possible.
            </p>
          </div>
        </div>
      </div>
    </ContentTile>
    <ContentTile
      class="bg-gradient-to-tl from-slate-900 to-slate-700 shadow p-4"
    >
      <div class="p-6">
        <h2
          class="text-slate-50 text-6xl font-display font-semibold tracking-tight pb-6"
        >
          Recent Successes
        </h2>
        <div
          class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-2 lg:max-w-none"
        >
          <ProjectTile
            title="Bills of Knowledge"
            subtitle="www.billsofknowledge.com"
            description="Bills of Knowledge is a banking app aimed at the Italian Generation Z (18-27 year olds) to help them manage their money by gamifiying their saving, and learn about personal finance through short TikTok videos."
            url="https://www.billsofknowledge.com"
          >
            <template #preview-image>
              <img
                class="h-48 object-cover object-top md:w-full"
                src="/img/bok.webp"
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
            description="Auction Goblin is the Bloomberg terminal for World of Warcraft Classic, and helps players dominate the economic side of the game. This project was built with the esteemed T3 stack, and has over 2000 users signed up."
            url="https://www.auctiongoblin.com"
          >
            <template #preview-image>
              <img
                class="h-48 object-cover object-top md:w-full"
                src="/img/auction-goblin2.webp"
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
          <!--              <img-->
          <!--                class="h-48 w-full object-cover md:object-top"-->
          <!--                src="/img/poke-card2.png"-->
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
    <ContentTile
      class="bg-gradient-to-bl from-slate-100 to-slate-200 shadow p-4"
    >
      <div class="p-6">
        <h2
          class="text-slate-700 text-6xl font-display font-semibold tracking-tight mb-10"
        >
          The Process
        </h2>
        <div class="flex flex-col gap-12 max-w-[1200px] mx-auto">
          <div class="sm:flex gap-12">
            <h3 class="font-display text-6xl text-slate-300 font-bold shrink-0">
              1. Intro<span class="hidden sm:inline">duce</span>
            </h3>
            <div>
              <p class="font-body text-balance text-slate-500 mt-4">
                <i>
                  "Usually I like to have an initial phone call to say hello,
                  talk about who I am and what it is you need to get done for
                  this project. After which, we can start outlining the
                  requirements of the project and determine what our goals are."
                </i>
              </p>
            </div>
          </div>
          <div class="sm:flex flex-row-reverse gap-12">
            <h3
              class="font-display text-6xl text-slate-300 font-bold shrink-0 sm:text-right"
            >
              2. Plan
            </h3>
            <div>
              <p class="font-body text-balance text-slate-500 mt-4">
                <i>
                  "After some preliminary research, I'll present a timeline that
                  we can go through together, agree on a budget and get started.
                  We'll also discuss what our communication and feedback loop
                  will look like, so that the details don't get lost in
                  translation."
                </i>
              </p>
            </div>
          </div>
          <div class="sm:flex gap-12">
            <h3
              class="font-display text-6xl text-slate-300 font-bold shrink-0 whitespace-nowrap"
            >
              3. Develop
            </h3>
            <div>
              <p class="font-body text-balance text-slate-500 mt-4">
                <i>
                  "Once we have a clear idea of what we want to achieve, I will
                  start working on a first version. Depending on the complexity
                  of the project this step may require some back and forth."
                </i>
              </p>
            </div>
          </div>
          <div class="sm:flex flex-row-reverse gap-12">
            <h3
              class="font-display text-6xl text-slate-300 font-bold shrink-0 sm:text-right"
            >
              4. Deliver
            </h3>
            <div>
              <p class="font-body text-balance text-slate-500 mt-4">
                <i>
                  "Delivery means we are at the finish line of the project. Any
                  work beyond this point will usually be limited to rounds of
                  revision. The number of revisions will depend on each project,
                  but I will always guarantee at least one round."
                </i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </ContentTile>
    <ContentTile class="bg-gradient-to-tl from-black to-gray-800 shadow p-4">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="py-6 px-1 md:px-6">
          <h3
            id="tools"
            class="text-slate-50 text-3xl font-display font-semibold tracking-tight"
          >
            The tools I use
          </h3>
          <p class="font-body text-slate-200 mt-4">
            These are the languages and frameworks I prefer to work with and the
            ones I reach for when building new projects. Despite working with
            many web technologies, these remain my favourites.
          </p>
          <p class="hidden md:block font-body text-slate-200 mt-4">
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
            class="grid gri
            d-cols-1 gap-5 sm:gap-6 lg:grid-cols-2 xl:grid-cols-3"
          >
            <GridListTile
              title="React"
              description="Preferred Frontend"
              href="https://reactjs.org"
            >
              <template #image>
                <img
                  class="flex-shrink-0 w-16 h-16"
                  src="/svg/react-logo.svg"
                />
              </template>
            </GridListTile>
            <GridListTile
              title="Vue"
              description="Frontend Alternative"
              href="https://vuejs.org"
            >
              <template #image>
                <img
                  class="flex-shrink-0 w-16 h-16 p-2"
                  src="/svg/vuejs-logo.svg"
                />
              </template>
            </GridListTile>
            <GridListTile
              title="Tailwind"
              description="Utility CSS"
              href="https://tailwindcss.com"
            >
              <template #image>
                <div class="flex w-16 items-center">
                  <img
                    class="w-full pl-3 pt-1"
                    src="/svg/tailwindcss-logo.svg"
                  />
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
                  <img class="w-full pl-3 pt-1" src="/svg/nextjs-logo.svg" />
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
                  <img class="w-full pl-3 pt-2" src="/svg/nodejs-logo.svg" />
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
                  <img
                    class="flex-shrink-0 pl-2"
                    src="/img/logos/expressjs.png"
                  />
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="TypeScript"
              description="Typed JavaScript"
              href="https://www.typescriptlang.org/"
            >
              <template #image>
                <img
                  class="flex-shrink-0 w-16 h-16 p-2"
                  src="/svg/typescript-logo.svg"
                />
              </template>
            </GridListTile>
            <GridListTile
              title="JavaScript"
              description="ES6+"
              href="https://www.javascript.com/"
            >
              <template #image>
                <div class="flex flex-shrink-0 w-16 items-center p-2">
                  <img class="w-full rounded" src="/svg/js-logo.svg" />
                </div>
              </template>
            </GridListTile>
            <GridListTile
              title="Python"
              description="v2.7 & v3+"
              href="https://python.org"
            >
              <template #image>
                <img
                  class="flex-shrink-0 w-16 h-16 p-2"
                  src="/svg/python-logo.svg"
                />
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
                <img class="w-full pl-3 pt-1" src="/svg/django-logo.svg" />
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
                <img class="pl-2" src="/img/logos/drf-logo.png" />
              </div>
            </template>
          </GridListTile>
          <GridListTile
            title="Flask"
            description="Python Microframework"
            href="https://flask.palletsprojects.com/en/1.1.x/"
          >
            <template #image>
              <img
                class="flex-shrink-0 w-16 h-16 p-2"
                src="/svg/flask-logo.svg"
              />
            </template>
          </GridListTile>
          <GridListTile
            title="Webpack"
            description="JavaScript bundler"
            href="https://webpack.js.org/"
          >
            <template #image>
              <img class="flex-shrink-0 w-16 h-16 p-2" src="/svg/webpack.svg" />
            </template>
          </GridListTile>
          <GridListTile
            title="Bootstrap"
            description="v3+"
            href="https://getbootstrap.com"
          >
            <template #image>
              <img
                class="flex-shrink-0 w-16 h-16 p-2"
                src="/svg/bootstrap-logo.svg"
              />
            </template>
          </GridListTile>
          <GridListTile
            title="JQuery"
            description="Needs no introduction"
            href="https://jquery.com/"
          >
            <template #image>
              <div class="flex w-16 items-center">
                <img class="w-full pl-3 pt-1" src="/svg/jquery-logo.svg" />
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
                <img class="pl-3 w-12" src="/svg/storybook.svg" />
              </div>
            </template>
          </GridListTile>
        </ul>
      </div>
    </ContentTile>
    <ContentTile
      class="bg-gradient-to-bl from-slate-700 to-slate-900 flex justify-between items-center p-4"
    >
      <div class="justify-self-end inline-flex items-center text-slate-50">
        <span class="text-sm inline-flex">
          Handmade by&nbsp;Cosi 🍿
        </span>
        <!--        <span class="text-lg hidden md:inline-flex">&nbsp;🚀</span>-->
      </div>
      <div class="social-icons inline-flex text-slate-50">
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
import ContentTile from "/src/components/ContentTile";
import Icon from "/src/components/Icon";
import GridListTile from "/src/components/GridListTile";
import ProjectTile from "/src/components/ProjectTile";
import Layout from "/src/layouts/Default";

export default {
  components: { Layout, ContentTile, Icon, GridListTile, ProjectTile },
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
  @apply inline-flex items-center px-4 py-2 border border-slate-200 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500;
}

.contact-button {
  @apply inline-flex items-center px-4 py-2 border border-none font-medium rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500;
}

.footer-icon {
  @apply mr-3;
}
</style>
