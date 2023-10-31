<script setup lang="ts">

// defineProps(['modelValue'])
// defineEmits(['update:modelValue'])

const modelValue = defineModel()

</script>

<template>
  <input
    v-model="modelValue"
    class="block w-full p-2 rounded-md shadow-sm bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-200"
  />
</template>
