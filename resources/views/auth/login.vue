<script setup lang="ts">
import TextInput from '@/components/UI/TextInput.vue'
import PrimaryButton from '@/components/UI/PrimaryButton.vue'

useHead({
  title: 'Login',
})

const login = useForm({
  method: 'POST',
  url: route('login.attempt'),
  fields: {
    username: '',
    password: '',
  },

})

</script>

<template layout>
  <form @submit.prevent="login.submit">
    <div class="w-1/2 mx-auto space-y-4">
      <div>
        <TextInput v-model="login.fields.username" placeholder="Username" required label="Username" :error="login.errors.username" />
      </div>

      <div>
        <TextInput v-model="login.fields.password" placeholder="Password" required label="Password" :error="login.errors.password" type="password" />
      </div>

      <div class="flex justify-center">
        <PrimaryButton>Login</PrimaryButton>
      </div>

      <div class="mt-4 text-center">
        <router-link class="text-sm text-gray-200" :href="route('register')">Register here</router-link>
      </div>
    </div>
  </form>
</template>
