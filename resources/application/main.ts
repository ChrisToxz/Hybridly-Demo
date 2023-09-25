import { initializeHybridly } from 'virtual:hybridly/config'
import { createHead } from '@vueuse/head'
import './tailwind.css'

initializeHybridly({
  enhanceVue: (vue) => {
    vue.use(createHead({
      titleTemplate: (title) => title ? `${title} — Hybridly` : 'Hybridly',
    }))
  },
  progress: {
    color: '#3271a8',
    delay: 0,
    includeCSS: true,
    spinner: true,
  },
})
