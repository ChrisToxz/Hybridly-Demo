<script setup lang="ts">

const $props = defineProps<{
  todos: App.Data.TodoData
}>()

useHead({
  title: 'Todos',
})
</script>

<template layout>
  <div class="space-y-4">
    <UITodoCard v-for="todo in todos" :key="todo.id" :todo="todo" as="list-item" />
  </div>
</template>
