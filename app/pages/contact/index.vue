<script setup lang="ts">

</script>

<template>
<div class="p-[2em] max-w-[1600px] m-auto">
  <div class="my-[50px] mx-auto">
    <h1 class="text-3xl font-bold text-center">Contact Me</h1>
  </div>
  <div class="flex my-8 gap-10 p-5">
    <div class="w-[100%] h-[400px] relative left-25 drop-shadow-lg">
      <NuxtImg
        src="/images/contact/Jaime-chilling.jpg"
        width="500"
        height="500"
        alt=""
        :placeholder="true"
        loading="eager"
        quality="80"
        class="w-[100%] h-[100%] rounded-md object-cover"
      />
    </div>
    <div class="border rounded-md p-5  relative right-25 top-20 backdrop-blur-2xl">
      <p>Have a question about training, classes, or which package would suit you best? Use the form below and I’ll get back to you as soon as possible.</p>
      <p>Whether your goal is fat loss, building strength, improving fitness, or simply feeling more confident day-to-day, I’m happy to chat through where you’re at and what you need—no pressure, just honest advice.</p>
      <p>Just send me a message with some info, like:</p>
      <ul class="m-5">
        <li>- Your main goal and any deadline you’re working towards</li>
        <li>- Your current training experience</li>
        <li>- Any injuries, limitations, or preferences</li>
        <li>- The best days/times to contact you</li>
      </ul>
      <p>and ill be happy to help</p>
      <p>You can also find additional contact details at the bottom of the page if you’d rather reach out another way.</p>
    </div>
  </div>
  <div class="w-[50%] my-8 py-[100px] mx-auto">
    <div class="rounded-md border bg-[var(--bg-lt-grey)] shadow-md px-5 pt-5 pb-10">
      <UForm>
        <UFormField label="Name">
          <UInput
            :ui="{
              root: 'w-[100%]'
            }"
          />
        </UFormField>
        <UFormField
          label="Email"
          :ui="{
            root: 'my-2'
          }"
        >
          <UInput
            :ui="{
              root: 'w-[100%]'
            }"
          />
        </UFormField>
        <UFormField
          label="Number"
          :ui="{
            root: 'my-2'
          }"
        >
          <UInput
            :ui="{
              root: 'w-[100%]'
            }"
          />
        </UFormField>
        <UFormField
          label="Message"
          :ui="{
            root: 'my-2'
          }"
        >
          <UTextarea
            :rows="20"
            :ui="{
              root: 'w-[100%]'
            }"
          />
        </UFormField>

        <UButton
          label="Submit"
          variant="solid"
          class="float-right"
          :ui="{
            base: 'bg-[var(--theme-green)]'
          }"
        />
      </UForm>
    </div>
  </div>
</div>
</template>

<style scoped>

</style>
