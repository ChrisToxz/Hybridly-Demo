<script setup lang="ts">
const $props = defineProps<{
  user: App.Data.User
  test: String
}>()

useHead({
	title: 'Welcome'
})
</script>

<template layout>
  <form @submit.prevent="">
    <div class="w-1/2 mx-auto">
      <h1 v-text="user.email_verified_at" />
      <div>
        <label for="email" class="block mb-1 text-gray-500 dark:text-gray-200 font-medium">Email</label>
        <input id="email" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
      </div>
      <div class="mt-4">
        <label for="password" class="block mb-1 text-gray-500 dark:text-gray-200 font-medium">Password</label>
        <input id="password" type="password" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
      </div>
      <div class="mt-4">
        <button class="btn-indigo w-full">Login</button>
      </div>
      <div class="mt-4 text-center">
        <Link class="text-sm text-gray-600 dark:text-gray-400">Register here</Link>
      </div>
    </div>
  </form>
</template>
