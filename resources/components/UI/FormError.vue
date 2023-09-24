<script setup lang="ts">

defineProps({
  value: String,
})
</script>

<template>
  <span v-if="value" class="text-sm text-red-600" v-text="value" />
</template>
