<script setup lang="ts">
defineProps({
  field: String,
})
</script>

<template>
  <label class="block dark:text-red-500 text-sm">{{ field }}</label>
</template>
