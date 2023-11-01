<script setup lang="ts">

import TextInput from '@/components/UI/TextInput.vue'

defineProps({
  'items': Object,
})
</script>

<template layout>
  <TextInput v-model="model" label="Label" required placeholder="Placeholder" error="error" />
</template>
