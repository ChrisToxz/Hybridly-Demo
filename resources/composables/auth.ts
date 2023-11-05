export default function useAuth() {
  const user = useProperty('security.user')
  const authenticated = computed(() => !!user.value)

  return {
    user,
    authenticated,
  }
}
