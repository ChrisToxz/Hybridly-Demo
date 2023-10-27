<script lang='ts'>
</script>

<template>
  <div
    class="w-full full-w bg-gray-700/70 shadow-lg rounded-lg shadow-dark-xl ring-1 dark:ring-white/10"
  >
    <div class="px-4 py-3">
      <div class="flex items-center justify-between">
        <span
          class="text-sm font-light text-gray-800 dark:text-gray-400"
        >URL Bookmark</span>
        <div class="flex-flex-col space-x-3">
          <span
            class="px-3 py-1 text-xs text-blue-800 uppercase bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900"
          >Tag 1</span>
          <span
            class="px-3 py-1 text-xs text-blue-800 uppercase bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900"
          >Tag 2</span>
        </div>
      </div>

      <div class="flex flex-row space-x-4 mt-5">
        <img
          src="https://picsum.photos/500/300"
          class="rounded-xl shadow-lg h-32 aspect-video"
        />
        <div class="flex flex-col">
          <h1
            class="text-lg font-semibold text-gray-800 dark:text-white"
          >
            Page Title
          </h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 w-2/3">
            Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Odio eligendi similique exercitationem optio
            libero vitae accusamus cupiditate laborum eos.
          </p>
          <p class="mt-2 text-sm font-cursive">https://asdasd.com</p>
        </div>
      </div>
    </div>

    <div
      class="flex items-center justify-between border-t border-gray-600 px-4 py-3 text-right mt-4"
    >
      <span class="text-sm font-light text-gray-800 dark:text-gray-400">Added 5 days ago</span>
      <div class="flex items-center space-x-2 text-right">
        <button
          as="button"
          class="focus:ring-primary-600 dark:focus:border-primary-600 block cursor-pointer items-center justify-center whitespace-nowrap rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-700 opacity-100 shadow focus:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:text-white dark:focus:text-white dark:focus:ring-offset-gray-900"
          type="button"
        >
          Resets
        </button>
        <button
          as="button"
          class="focus:ring-primary-500 bg-primary-600 block cursor-pointer items-center justify-center whitespace-nowrap rounded-md px-3 py-2 text-sm font-medium text-white opacity-100 shadow focus:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
          type="button"
        >
          Submit
        </button>
      </div>
    </div>
  </div>
</template>
