export default defineNuxtPlugin(() => {
  const config = useRuntimeConfig()

  const api = $fetch.create({
    baseURL: config.public.API_BASE,
    credentials: 'include'
  })

  return {
    provide: { api }
  }
})
