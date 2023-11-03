<script setup lang="ts">

import TextInput from '@/components/UI/TextInput.vue'
import PrimaryButton from '@/components/UI/PrimaryButton.vue'
import useCapitalized from '../../composables/capitalized'

useHead({
  title: 'Add Todo',
})

const $props = defineProps({
  priorities: Object,
})

const form = useForm({
  method: 'POST',
  url: route('todo.store'),
  fields: {
    'title': 'Default title',
    'content': 'Default content',
    'priority': 'medium',
  },
})
</script>

<template>
  <UIBaseModal title="Create Todo item">
    <div class="container max-w-xl ">
      <form class="space-y-4" @submit.prevent="form.submit">
        <div>
          <TextInput
            v-model="form.fields.title" placeholder="Title" label="Title" required helper="This is the title for your todo" :error="form.errors.title"
          />
        </div>
        <div>
          <UIInputLabel>Content</UIInputLabel>
          <TextInput id=" content" placeholder="Content" helper="Here you can add additional content to your todo" />
          <UIInputError :field="form.errors.content" />
        </div>
        <div>
          <UIInputLabel>Priority</UIInputLabel>
          <select v-model="form.fields.priority" class="bg-gray-700 rounded-md w-full">
            <option v-for="priority in priorities" :value="priority">{{ useCapitalized(priority) }}</option>
          </select>
        </div>
        <!--        <div>-->
        <!--          <UIInputLabel>Due date</UIInputLabel>-->
        <!--          <TextInput v-model="form.fields.duedate" type="date" />-->
        <!--        </div>-->
        <PrimaryButton>Save</PrimaryButton>
      </form>
    </div>
    <!--    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">-->
    <!--      <div class="max-w-screen-sm sm:text-center sm:mx-auto text-left">-->
    <!--        <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl sm:leading-none">-->
    <!--          Create todo item-->
    <!--        </h2>-->
    <!--        <p class="text-base text-gray-200 md:text-lg sm:px-4">-->
    <!--          This is just a test project to test and try the capabilities of Hybridly!-->
    <!--        </p>-->
    <!--        <hr class="w-full my-8 border-gray-300" />-->
    <!--      </div>-->
    <!--    </div>-->
  </UIBaseModal>
</template>
