<script setup lang="ts">
import TextInput from '@/components/UI/TextInput.vue'

useHead({
  title: 'Register',
})

const register = useForm({
  method: 'POST',
  url: route('register.store'),
  fields: {
    username: '',
    name: '',
    password: '',
    password_confirmation: '',
  },

})

</script>

<template layout>
  <form @submit.prevent="register.submit">
    <div class="w-1/2 mx-auto space-y-4">
      <div>
        <UIInputLabel>Username</UIInputLabel>
        <UITextInput v-model="register.fields.username" />
        <UIFormError :value="register.errors.username" />
      </div>

      <div>
        <UIInputLabel>Name</UIInputLabel>
        <UITextInput v-model="register.fields.name" />
        <UIFormError :value="register.errors.name" />
      </div>

      <div>
        <UIInputLabel>Password</UIInputLabel>
        <UITextInput v-model="register.fields.password" type="password" />
        <UIFormError :value="register.errors.password" />
      </div>

      <div>
        <UIInputLabel>Password confirmation</UIInputLabel>
        <UITextInput v-model="register.fields.password_confirmation" type="password" />
        <UIFormError :value="register.errors.password_confirmation" />
      </div>

      <div class="flex justify-center">
        <UIPrimaryButton>register</UIPrimaryButton>
      </div>
      <div class="mt-4 text-center">
        <router-link class="text-sm text-gray-200" :href="route('login')">Login here</router-link>
      </div>
    </div>
  </form>
</template>
