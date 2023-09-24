<script setup lang="ts">
import TextInput from '@/components/UI/TextInput.vue'

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
        <UIInputLabel>Username</UIInputLabel>
        <UITextInput v-model="login.fields.username" />
        <UIFormError :value="login.errors.username" />
      </div>

      <div>
        <UIInputLabel>Password</UIInputLabel>
        <UITextInput v-model="login.fields.password" type="password" />
        <UIFormError :value="login.errors.password" />
      </div>

      <div class="flex justify-center">
        <UIPrimaryButton>Login</UIPrimaryButton>
      </div>

      <div class="mt-4 text-center">
        <router-link class="text-sm text-gray-200" :href="route('register')">Register here</router-link>
      </div>
    </div>
  </form>
</template>
