<script setup lang="ts">
import {ref} from 'vue'
import useAuth from '@/composables/auth'
import MenuItem from '@/components/UI/MenuItem.vue'
import { vOnClickOutside } from '@vueuse/components'

const {user, authenticated} = useAuth()

const addItemMenuOpen = ref(false)

useHead({
    titleTemplate: (title) => `${(title)? title : 'Unnamed'} - Todoly`,
})
</script>

<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex justify-between">
        <div class="flex text-lg font-medium flex-grow basis-0">
          <div v-if="authenticated" class="relative ">
            <div>
              <span class="text-xs font-semibold tracking-wide uppercase hover:bg-gray-600/75 rounded-xl transition duration-300 py-2 px-4 hover:text-blue-400" @click="addItemMenuOpen = ! addItemMenuOpen">
                + New Todo
              </span>
              <div
                v-if="addItemMenuOpen" v-on-click-outside="() => {addItemMenuOpen = ! addItemMenuOpen}"
                class="absolute z-10 mt-2 bg-zinc-700 p-2 rounded-lg w-32 "
              >
                <div class="flex flex-col text-center" @click="() => {addItemMenuOpen = ! addItemMenuOpen}">
                  <menu-item :href="route('todo.create')">New todo</menu-item>
                  <menu-item>Add link</menu-item>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-xl text-blue-600 font-bold text-center">
          <router-link :href="route('dashboard')">Todoly</router-link>
        </div>
        <div v-if="authenticated" class="flex items-center space-x-4 flex-grow basis-0 justify-end">
          <router-link class="text-sm text-gray-400">{{ user.name }}</router-link>
          <div class="flex">
            <menu-item :href="route('todo.index')">Todos</menu-item>
            <menu-item :href="route('logout')" method="POST" as="button">Logout</menu-item>
          </div>
        </div>
        <div v-else class="flex items-center gap-2 flex-grow basis-0 justify-end text-xs font-semibold uppercase tracking-wide">
          <menu-item :href="route('register')">Register</menu-item>
          <menu-item :href="route('login')">Log in</menu-item>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
    <slot />
  </main>

  <footer class="footer footer-center w-full p-4 bg-gray-900/75 backdrop-blur-md text-gray-400 fixed bottom-0">
    <div class="text-center">
      <router-link class="font-semibold" :href="route('info')">
        <p>
          Copyright © -
          By CT
        </p>
      </router-link>
    </div>
  </footer>
</template>
