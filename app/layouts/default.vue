<script setup lang="ts">
useHead({
  meta: [
    { name: 'viewport', content: 'width=device-width, initial-scale=1' }
  ],
  link: [
    { rel: 'icon', href: '/images/icons/jpfitnesslogoicon.png' }
  ],
  htmlAttrs: {
    lang: 'en'
  }
})

const siteLinks = ref([
  {
    name: 'Home',
    url: '/',
  },
  {
    name: 'Classes',
    url: '/classes',
  },
  // {
  //   name: 'Qualifications',
  //   url: '/',
  // },
  // {
  //   name: 'Prices',
  //   url: '/',
  // },
  {
    name: 'Contact',
    url: '/contact',
  },
])

const bannerImages = ref([
  {
    src: '/images/instructor/instructor-10.jpg',
    class: 'w-[250px] h-[250px] relative top-[18px] left-[40px] scale-[0.9] rotate-[-15deg] z-[1] shadow-md'
  },
  {
    src: '/images/instructor/instructor-9.jpg',
    class: 'w-[250px] h-[250px] relative z-[2] shadow-md'
  },
  {
    src: '/images/instructor/instructor-13.jpg',
    class: 'w-[250px] h-[250px] relative top-[18px] right-[40px] scale-[0.9] rotate-[15deg] z-[1] shadow-md'
  }
])
</script>

<template>
  <div class="flex justify-between items-center w-full bg-[var(--theme-green)] h-[70px]">
    <div class="relative my-0 mx-[50px] font-bold">Move With Me!</div>
    <nav class="flex gap-[25px] items-center py-10 mx-0 px-[100px]">
      <NuxtLink
        v-for="(link, index) of siteLinks" :key="index"
        :to="link.url"
      >
        {{ link.name }}
      </NuxtLink>
    </nav>
  </div>
  <div class="flex justify-between max-w-[1600px] m-auto">
    <div class="flex justify-center">
      <img
        src="/images/logos/jpfitnesslogo2025.jpg"
        class="w-[350px] h-auto"
      />
    </div>
    <div class="flex justify-center items-center w-[800px] relative">
      <div
        v-for="(image, index) of bannerImages"
        :key="index"
        :class="image.class"
      >
        <NuxtImg
          :src="image.src"
          width="250"
          height="250"
          alt="Instructor"
          :placeholder="true"
          loading="eager"
          quality="80"
          class="w-[100%] h-[100%] rounded-md"
        />
      </div>
    </div>
  </div>
  <slot></slot>
  <footer class="w-full bg-[var(--theme-grey)]">
      <div class="flex justify-between w-[80%] py-[20px] mx-auto text-sm">
        <div>
        <h3 class="font-bold">Find what you're looking for?</h3>
          <nav class="flex flex-col gap-2">
            <NuxtLink
              v-for="(link, index) of siteLinks" :key="index"
              :to="link.url"
            >
              {{ link.name }}
            </NuxtLink>
          </nav>
      </div>
        <div>
          <h3 class="font-bold">Contact me</h3>
          <nav>
            <ul>
              <li class="flex gap-5">
                <span>Email:</span>
                <span>jaime@jpf-movewithme.co.uk</span>
              </li>
              <li class="flex gap-5">
                <span>Tel:</span>
                <span>07765 433100</span>
              </li>
            </ul>
          </nav>
        </div>
        <div>
          <h3 class="font-bold">Find me</h3>
          <nav class="flex gap-5 my-5 ">
            <UIcon name="i-lucide-facebook" class="size-7" />
            <UIcon name="i-lucide-instagram" class="size-7" />
          </nav>
        </div>
        <div>
          <nav>
            <div>Privacy Policy</div>
            <div>Web site designed by Jason Bourner</div>
            <div>© Copyright all rights reserved JP Fitness 2026</div>
          </nav>
        </div>
      </div>
  </footer>
</template>

<style scoped>

</style>
