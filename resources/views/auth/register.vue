<script setup lang="ts">
import TextInput from '@/components/UI/TextInput.vue'

useHead({
  title: 'Register',
})

const form = useForm({
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
  <form @submit.prevent="form.submit">
    <div class="w-1/2 mx-auto space-y-4">
      <div>
        <TextInput v-model="form.fields.username" placeholder="Username" required label="Username" :error="form.errors.username" />
      </div>

      <div>
        <TextInput v-model="form.fields.name" placeholder="Name" required label="Name" :error="form.errors.name" />
      </div>

      <div>
        <TextInput v-model="form.fields.password" placeholder="Password" required label="Password" :error="form.errors.password" type="password" />
      </div>

      <div>
        <TextInput v-model="form.fields.password_confirmation" placeholder="Password" required label="Password" :error="form.errors.password_confirmation" type="password" />
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
