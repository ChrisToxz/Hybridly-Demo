import { initializeHybridly } from 'virtual:hybridly/config'
import { createHead } from '@unhead/vue'
import './tailwind.css'
import toastPlugin from '@/application/plugins/toast'

initializeHybridly({
  enhanceVue: (vue) => {
    const head = createHead()
    head.push({titleTemplate: (title) => title ? `${title} - Todoly` : 'Todoly'})
    vue.use(head)
  },
  plugins: [
    toastPlugin(),
  ],
  progress: {
    color: '#3271a8',
    delay: 0,
    includeCSS: true,
    spinner: true,
  },
})
