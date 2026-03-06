export default defineEventHandler(async (event) => {
  const config = useRuntimeConfig()
  const path = getRouterParam(event, 'path')
  const target = `${config.public.apiBase}/api/v1/${path}`

  return proxyRequest(event, target)
})
