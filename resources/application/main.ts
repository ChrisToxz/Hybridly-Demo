import { initializeHybridly } from 'virtual:hybridly/config'
import {defineConfiguration, VanillaComponents} from '@flavorly/vanilla-components'
import { createHead } from '@vueuse/head'
import './tailwind.css'



// Define some overrides
const overrides = {
  Card: {
    variants: {
      todo: {
        classes: {
          card: 'relative bg-white shadow-lg rounded-lg dark:bg-gray-700/70 dark:text-white dark:shadow-dark-xl ring-1 ring-gray-900/10 dark:ring-white/10',
          header: 'px-4 py-5 border-b border-gray-600 sm:px-6',
          footer: 'px-4 py-3 flex items-center justify-center sm:justify-end text-right sm:px-6 border-t border-gray-600',
        },
      },
    },
  },
}

initializeHybridly({
  enhanceVue: (vue) => {
    vue.use(createHead({
      titleTemplate: (title) => title ? `${title} — Hybridly` : 'Hybridly',
    })),
    vue.use(VanillaComponents, defineConfiguration(overrides))
  },
  progress: {
    color: '#3271a8',
    delay: 0,
    includeCSS: true,
    spinner: true,
  },
})
