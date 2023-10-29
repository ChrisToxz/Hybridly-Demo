<script setup lang="ts">

import TextInput from '@/components/UI/TextInput.vue'
import PrimaryButton from '@/components/UI/PrimaryButton.vue'

const form = useForm({
  method: 'post',
  url: route('todo.store'),
  fields:{
    'title': '',
    'description': '',
  },
})
</script>

<template>
  <UIBaseModal title="Create Todo item">
    <div class="container max-w-xl ">
      <form class="space-y-4" @submit.prevent="form.submit">
        <span v-if="form.errors" v-text="form.errors" />
        <TextInput v-model="form.fields.title" placeholder="Title" />
        <TextInput v-model="form.fields.description" placeholder="Description" />
        <PrimaryButton>Save</PrimaryButton>
      </form>
    </div>
    <!--    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">-->
    <!--      <div class="max-w-screen-sm sm:text-center sm:mx-auto text-left">-->
    <!--        <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl sm:leading-none">-->
    <!--          Create Todo item-->
    <!--        </h2>-->
    <!--        <p class="text-base text-gray-200 md:text-lg sm:px-4">-->
    <!--          This is just a test project to test and try the capabilities of Hybridly!-->
    <!--        </p>-->
    <!--        <hr class="w-full my-8 border-gray-300" />-->
    <!--      </div>-->
    <!--    </div>-->
  </UIBaseModal>
</template>
