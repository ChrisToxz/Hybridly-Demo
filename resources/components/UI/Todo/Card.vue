<script setup lang="ts">

import {computed} from 'vue'

const $props = defineProps<{
  todo: App.Data.TodoData
  as: 'list-item'
}>()

const dynamicCreatedAt = useTimeAgo($props.todo.created_at)

</script>

<template>
  <div class="w-full full-w  bg-gray-700/70 shadow-lg rounded-lg shadow-dark-xl ring-1 dark:ring-white/10">
    <div class="px-4 py-3">
      <div class="flex items-center justify-between">
        <span class="text-sm font-light text-gray-800 dark:text-gray-400">Todo due in <span class="font-bold">2</span> days</span>
        <span :class="`px-3 py-1 text-xs text-black uppercase bg-blue-300 rounded-full dark:bg-blue-500`">{{ todo.priority }}</span>
      </div>

      <div>
        <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">{{ todo.title }}</h1>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ todo.content }}</p>
      </div>
    </div>

    <div class="flex  items-center justify-between border-t border-gray-600 px-4 py-3 text-right mt-4">
      <span class="text-sm font-light text-gray-800 dark:text-gray-400">{{ dynamicCreatedAt }}</span>
      <div class="flex items-center space-x-2 text-right">
        <button as="button" class="focus:ring-primary-600 dark:focus:border-primary-600 block inline-flex cursor-pointer items-center justify-center whitespace-nowrap rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-700 opacity-100 shadow focus:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:text-white dark:focus:text-white dark:focus:ring-offset-gray-900" type="button">
          <div class="flex items-center space-x-1"><span>Resets</span></div>
        </button><button as="button" class="focus:ring-primary-500 bg-primary-600 block inline-flex cursor-pointer items-center justify-center whitespace-nowrap rounded-md px-3 py-2 text-sm font-medium text-white opacity-100 shadow focus:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900" type="button">
          <div class="flex items-center space-x-1"><span>Submit</span></div>
        </button>
      </div>
    </div>
  </div>
</template>
