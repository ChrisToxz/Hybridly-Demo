<script setup lang="ts">

import Card from '@/views/todo/todo/card.vue'

const $props = defineProps<{
  todos: App.Data.TodoData
}>()

useHead({
  title: 'Todos',
})
</script>

<template layout>
  <div class="space-y-4">
    <card v-for="todo in todos" :key="todo.id" :todo="todo" as="list-item" />
  </div>
</template>
