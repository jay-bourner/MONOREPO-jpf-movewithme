<script setup lang="ts">
import * as z from "zod";
import type { FormSubmitEvent } from '@nuxt/ui'

const schema = z.object({
    name: z.string('Name is required'),
    email: z.email('Invalid email'),
    number: z.optional(z.string().min(10, 'Number too short').max(12, 'number too long')),
    message: z.string('Message is required')
})

type Schema = z.output<typeof schema>

const state = reactive<Partial<Schema>>({
  name: undefined,
  email: undefined,
  number: undefined,
  message: undefined
})

const toast = useToast()
async function onSubmit(event: FormSubmitEvent<Schema>) {
  toast.add({ title: 'Success', description: 'The form has been submitted.', color: 'success' })
  await useFetch('/api/contact', {
    method: 'POST',
    body: event.data
  })
}
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
      <UForm ref="form" :schema="schema" :state="state" class="space-y-4" @submit="onSubmit">
        <UFormField label="Name" name="name" required>
          <UInput v-model="state.name" type="text" :ui="{root: 'w-[100%]'}" />
        </UFormField>

        <UFormField label="Email" name="email" required>
          <UInput v-model="state.email" :ui="{root: 'w-[100%]' }" />
        </UFormField>

        <UFormField label="Number" name="number" :ui="{root: 'my-2'}">
          <UInput v-model="state.number" type="text" :ui="{root: 'w-[100%]'}" />
        </UFormField>

        <UFormField label="Message" name="message" required :ui="{root: 'my-2'}" >
          <UTextarea v-model="state.message" :rows="20" :ui="{root: 'w-[100%]' }" />
        </UFormField>

        <UButton type="submit" variant="solid" class="float-right cursor-pointer" :ui="{base: 'bg-[var(&#45;&#45;theme-green)]'}">
          Submit
        </UButton>
      </UForm>

          <!--      <UForm-->
<!--        ref="form"-->
<!--        :schema="schema"-->
<!--        :state="state"-->
<!--        @submit="onSubmit"-->
<!--      >-->
<!--        <UFormField-->
<!--          label="Name"-->
<!--          required-->
<!--        >-->
<!--          <UInput-->
<!--            v-model="state.name"-->
<!--            type="text"-->
<!--            :ui="{-->
<!--              root: 'w-[100%]'-->
<!--            }"-->
<!--          />-->
<!--        </UFormField>-->
<!--        <UFormField-->
<!--          label="Email"-->
<!--          required-->
<!--          :ui="{-->
<!--            root: 'my-2'-->
<!--          }"-->
<!--        >-->
<!--          <UInput-->
<!--            v-model="state.email"-->
<!--            type="email"-->
<!--            :ui="{-->
<!--              root: 'w-[100%]'-->
<!--            }"-->
<!--          />-->
<!--        </UFormField>-->
<!--        <UFormField-->
<!--          label="Number"-->
<!--          :ui="{-->
<!--            root: 'my-2'-->
<!--          }"-->
<!--        >-->
<!--          <UInput-->
<!--            v-model="state.tel"-->
<!--            type="text"-->
<!--            :ui="{-->
<!--              root: 'w-[100%]'-->
<!--            }"-->
<!--          />-->
<!--        </UFormField>-->
<!--        <UFormField-->
<!--          label="Message"-->
<!--          required-->
<!--          :ui="{-->
<!--            root: 'my-2'-->
<!--          }"-->
<!--        >-->
<!--          <UTextarea-->
<!--            v-model="state.message"-->
<!--            :rows="20"-->
<!--            :ui="{-->
<!--              root: 'w-[100%]'-->
<!--            }"-->
<!--          />-->
<!--        </UFormField>-->

<!--        <UButton-->
<!--          label="Submit"-->
<!--          type="submit"-->
<!--          variant="solid"-->
<!--          class="float-right cursor-pointer"-->
<!--          @click="form?.submit()"-->
<!--          :ui="{-->
<!--            base: 'bg-[var(&#45;&#45;theme-green)]'-->
<!--          }"-->
<!--        />-->
<!--      </UForm>-->
    </div>
  </div>
</div>
</template>

<style scoped>

</style>
