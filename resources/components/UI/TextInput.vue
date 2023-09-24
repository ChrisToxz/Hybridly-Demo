<script setup lang="ts">

defineEmits(['update:modelValue']);
</script>

<template>
  <input
  class="block w-full p-2 rounded-md shadow-sm bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-200"
  @input="$emit('update:modelValue', $event.target.value)"
  />
</template>
