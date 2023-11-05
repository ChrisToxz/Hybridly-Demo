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
    'title': '',
    'content': '',
    'priority': 'medium',
  },
})
</script>

<template>
  <UIBaseModal title="Create Todo item">
    <div class="container max-w-xl">
      <form class="space-y-4" @submit.prevent="form.submit">
        <div>
          <TextInput
            v-model="form.fields.title"
            placeholder="Title"
            label="Title"
            required
            helper="This is the title for your todo"
            :error="form.errors.title"
          />
        </div>
        <div>
          <UIInputLabel>Content</UIInputLabel>
          <TextInput
            v-model="form.fields.content"
            placeholder="Content"
            helper="Here you can add additional content to your todo"
            :error="form.errors.content"
          />
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
  </UIBaseModal>
</template>
