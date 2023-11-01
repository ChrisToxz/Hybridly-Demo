<script setup lang="ts">
``
const modelValue = defineModel()

defineProps({
  label: String,
  required: Boolean,
  helper: String,
  error: String,
})

</script>

<template>
  <div class="block mb-1">
    <label v-if="label" class="text-gray-500 dark:text-gray-200 font-medium" v-text="label" /> <span v-if="required" class="text-sm text-red-500">*</span>
  </div>
  <input
    v-model="modelValue"
    class="block w-full p-2 rounded-md shadow-sm bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-200"
  />
  <small v-if="helper" class="ml-1 text-gray-300 font-light italic" v-html="helper" />
  <label v-if="error" class="ml-1 block dark:text-red-500 text-sm">{{ error }}</label>
</template>
