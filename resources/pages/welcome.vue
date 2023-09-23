<script setup lang="ts">
import TextInput from "@/components/UI/TextInput.vue";

useHead({
  title: 'Welcome'
})

const $props = defineProps<{
  user: App.Data.User
  test: String
}>()

const login = useForm({
  method: 'POST',
  fields: {
    username: '',
    password: '',
  }

})

</script>

<template layout>
  <form @submit.prevent="">
    <div class="w-1/2 mx-auto space-y-4">
<!--      <h1 v-text="user.email_verified_at" />-->
      <div>
        <UIInputLabel>Username</UIInputLabel>
        <UITextInput v-model="login.fields.username">test</UITextInput>
      </div>
      <div>
        <UIInputLabel>Password</UIInputLabel>
        <UITextInput type="password" v-model="login.fields.username">test</UITextInput>
      </div>
      <div class="flex justify-center">
        <UIPrimaryButton>Login</UIPrimaryButton>
      </div>
      <div class="mt-4 text-center">
        <router-link class="text-sm text-gray-200">Register here</router-link>
      </div>
    </div>
  </form>
</template>
