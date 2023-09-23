<script setup lang="ts">
</script>

<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex justify-between">
                <div class="text-lg font-medium flex-grow basis-0">
                    <router-link class="text-gray-200">Notes</router-link>
                </div>
                <div class="text-xl text-blue-600 font-bold text-center">
                    <router-link>CT Notes</router-link>
                </div>
                <div v-if="null" class="flex items-center gap-4 flex-grow basis-0">
                    <router-link class="text-gray-500 relative pr-2 py-2 text-lg">
                        🔔
                        <div v-if="null" class="absolute top-0 right-0 w-5 h-5 rounded-full bg-red-600 dark:bg-red-400 text-white font-medium border border-white dark:border-gray-900 text-xs text-center">{{ notificationCount }}</div>
                    </router-link>

                    <router-link class="text-sm text-gray-500">{{ user.name }}</router-link>
                    <router-link class="btn-indigo">+ New Listing</router-link>
                    <div>
                        <router-link method="delete" as="button">Logout</router-link>
                    </div>
                </div>
                <div v-else class="flex items-center gap-2 flex-grow basis-0 justify-end">
                    <router-link class="text-gray-200" method="get">Register</router-link>
                    <router-link class="text-gray-200">Log in</router-link>
                </div>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4 w-full">
       <slot></slot>
    </main>
</template>
