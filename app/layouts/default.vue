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

const navigationLinks = ref([
  {
    label: 'Home',
    to: '/'
  },
  {
    label: 'Classes',
    to: '/classes'
  },
  // {
  //   label: 'Qualifications',
  //   to: '/',
  // },
  // {
  //   label: 'Prices',
  //   to: '/',
  // },
  {
    label: 'Contact',
    to: '/contact'
  }
])

// const contactLinks = ref([
//   {
//     label: 'jaime@jpf-movewithme.co.uk',
//     to: 'mailto:jaime@jpf-movewithme.co.uk'
//   },
//   {
//     label: '07765 433100',
//     to: 'tel:07765433100'
//   }
// ])

const bannerImages = ref([
  {
    src: '/images/instructor/instructor-10.jpg',
    class: 'w-[250px] h-auto relative top-[18px] left-[40px] scale-[0.9] rotate-[-15deg] z-[1] shadow-md'
  },
  {
    src: '/images/instructor/instructor-9.jpg',
    class: 'w-[250px] h-auto relative z-[2] shadow-md'
  },
  {
    src: '/images/instructor/instructor-13.jpg',
    class: 'w-[250px] h-auto relative top-[18px] right-[40px] scale-[0.9] rotate-[15deg] z-[1] shadow-md'
  }
])
</script>

<template>
  <div>
    <UHeader
      mode="slideover"
      :ui="{
        root: 'bg-[var(--theme-green)]',
        title: 'relative my-0 mx-[50px] font-bold',
        header: 'flex justify-between items-center w-full bg-[var(--theme-green)] font-size-sm',
        container: 'w-full mx-0 max-w-[100%] px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-3 h-full'
      }"
    >
      <template #title>
        Move With Me!
      </template>

      <UNavigationMenu
        :items="navigationLinks"
        orientation="horizontal"
      />

      <template #body>
        <UNavigationMenu
          :items="navigationLinks"
          orientation="vertical"
          class="-mx-2.5"
        />
      </template>
    </UHeader>
    <div class="justify-between max-w-[1600px] m-auto flex-wrap lg:flex lg:flex-nowrap">
      <div class="flex justify-center">
        <img
          src="/images/logos/jpfitnesslogo2025.jpg"
          class="w-[350px] h-auto"
        >
      </div>
      <div class="flex justify-center items-center max-w-[800px] relative m-auto lg:m-0">
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
            class="w-[100%] h-auto rounded-md"
          />
        </div>
      </div>
    </div>

    <slot />

    <UFooter
      class="w-full bg-[var(--theme-grey)]"
      :ui="{
        container: 'w-full max-w-[100%] flex flex-col-reverse lg:flex lg:flex-row lg:items-center lg:justify-center',
        left: 'flex flex-col lg:justify-start lg:items-start',
        right: 'flex flex-col lg:justify-end lg:items-end'
      }"
    >
      <template #left>
        <h3>Contact me</h3>
        <NuxtLink
          label="jaime@jpf-movewithme.co.uk"
          to="mailto:jaime@jpf-movewithme.co.uk"
        >
          jaime@jpf-movewithme.co.uk
        </NuxtLink>
        <NuxtLink
          label="07765 433100"
          to="mailto:07765 433100"
        >
          07765 433100
        </NuxtLink>
      </template>

      <div class="flex flex-col justify-center items-center">
        <h3>Find me</h3>
        <nav class="my-5 flex gap-3">
          <UIcon
            name="i-lucide-facebook"
            class="size-7"
          />
          <UIcon
            name="i-lucide-instagram"
            class="size-7"
          />
        </nav>
      </div>

      <template #right>
        <h3>Privacy Policy</h3>
        <div>Web site designed by Jason Bourner</div>
        <div>© Copyright all rights reserved JP Fitness 2026</div>
      </template>
      <!-- <template #left>
        <div>
          <h3 class="font-bold">Find what you're looking for?</h3>
            <nav class="flex flex-col gap-2">
              <NuxtLink
                v-for="(link, index) of navigationLinks" :key="index"
                :to="link.to"
              >
                {{ link.label }}
              </NuxtLink>
            </nav>
        </div>
      </template>
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

      <template #right>
        <div>
          <nav>
            <div>Privacy Policy</div>
            <div>Web site designed by Jason Bourner</div>
            <div>© Copyright all rights reserved JP Fitness 2026</div>
          </nav>
        </div>
      </template> -->
      <!-- <div class="flex justify-between w-[80%] py-[20px] mx-auto text-sm"> -->
      <!-- <div>
          <h3 class="font-bold">Find what you're looking for?</h3>
            <nav class="flex flex-col gap-2">
              <NuxtLink
                v-for="(link, index) of navigationLinks" :key="index"
                :to="link.to"
              >
                {{ link.label }}
              </NuxtLink>
            </nav>
        </div> -->
      <!-- <div>
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
          </div> -->

      <!-- </div> -->
    </UFooter>
  </div>
</template>

<style scoped>

</style>
