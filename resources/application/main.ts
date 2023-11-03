import { initializeHybridly } from 'virtual:hybridly/config'
import { createHead } from '@unhead/vue'
import './tailwind.css'
import {watch} from 'vue'

initializeHybridly({
  enhanceVue: (vue) => {
    const head = createHead()
    head.push({titleTemplate: (title) => title ? `${title} - Todoly` : 'Todoly'})
    vue.use(head)
  },
  progress: {
    color: '#3271a8',
    delay: 0,
    includeCSS: true,
    spinner: true,
  },
})

// const flash = useProperty('flash')
//
// const watcher = watch(
//   () => flash.value.success,
//   () => {
//     alert(flash.value.success)
//   },
// )
