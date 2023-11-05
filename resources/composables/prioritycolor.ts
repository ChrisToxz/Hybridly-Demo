import {computed} from 'vue/dist/vue'

export default function usePriorityColor(priority: string){
  switch (priority) {
  case 'low':
    return 'green-700'
  case 'medium':
    return 'orange-400'
  case 'high':
    return 'red-400'
  default:
    return 'transparent'
  }


}
