<script setup lang="ts">
import useAuth from '@/composables/auth'

const {user, authenticated} = useAuth()

</script>

<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex justify-between">
        <div class="text-lg font-medium flex-grow basis-0">
          <template v-if="authenticated">
            <router-link class="text-xs font-semibold uppercase tracking-wide">+ New Note</router-link>
          </template>
        </div>
        <div class="text-xl text-blue-600 font-bold text-center">
          <router-link :href="route('index')">CT Notes</router-link>
        </div>
        <div v-if="authenticated" class="flex items-center gap-4 flex-grow basis-0 justify-end">
          <router-link class="text-sm text-gray-400">{{ user.name }}</router-link>
          <router-link class="text-xs font-semibold uppercase tracking-wide" :href="route('index')">Notes</router-link>
          <div>
            <router-link :href="route('logout')" method="POST">
              <div class="flex flex-row place-items-center transition duration-300 hover:text-white">
                <!--                                <div class="grid h-12 w-12 place-items-center">-->
                <!--                                    <i-material-symbols-logout-rounded class="mr-1.5 scale-[-1] text-2xl" />-->
                <!--                                </div>-->
                <div class="text-xs font-semibold uppercase tracking-wide">
                  Logout
                </div>
              </div>
            </router-link>
          </div>
        </div>
        <div v-else class="flex items-center gap-2 flex-grow basis-0 justify-end text-xs font-semibold uppercase tracking-wide">
          <router-link class="text-gray-200" :href="route('register')">Register</router-link>
          <router-link class="text-gray-200" :href="route('login')">Log in</router-link>
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
