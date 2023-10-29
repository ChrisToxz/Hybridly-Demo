<script setup lang="ts">

defineProps({
  'items': Object,
})

</script>

<template layout>
  <div class="space-y-4">
    <UITodoCard v-for="item in items" :item="item" />
  </div>
  <UIURLCard />
</template>
