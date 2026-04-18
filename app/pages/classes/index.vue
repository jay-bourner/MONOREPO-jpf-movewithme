<script setup lang="ts">
const { data: classes } = useFetch('/api/classes')
</script>

<template>
  <div>
    <div class="my-[50px] mx-auto w-[95%] lg:w-[50%] p-[20px] text-center border border-[var(--theme-green)] rounded-md">
      <h1 class="text-3xl font-bold text-center">Classes</h1>
      <p>There are a range of classes available to you, Check them out below.</p>
    </div>
    <div class="flex flex-wrap gap-5 my-[50px] w-[95%] lg:w-[80%] m-auto">
      <UCard
        v-for="(fitnessClass, index) of classes"
        :key="index"
        :ui="{
          root: 'w-[100%]',
          header: 'flex justify-between items-center bg-[var(--theme-green)]',
          footer: 'flex justify-between items-center'
        }"
      >
        <template #header>
          <div class="font-bold">
            {{ fitnessClass.name }}
          </div>
          <UChip color="info">
            <UButton label="In Person" color="neutral" />
          </UChip>
        </template>
        <div class="flex flex-col lg:flex-row gap-5">
          <NuxtImg
            :src="fitnessClass.image"
            width="300"
            height="300"
            alt=""
            :placeholder="true"
            loading="eager"
            quality="80"
            class="w-[300px] h-auto rounded object-cover"
          />
          <div>
            <h3 class="font-bold">{{ fitnessClass.short_description }}</h3>
            <div v-html="fitnessClass.description"></div>
          </div>
        </div>
        <!-- <template #footer>
          <UButton
            label="View Class"
          />
            <UButton
              label="Book a slot"
            />
        </template> -->
      </UCard>
    </div>
  </div>
</template>

<style scoped>

</style>
