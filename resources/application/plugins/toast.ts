import { definePlugin } from 'hybridly'
import { useProperty } from 'hybridly/vue'
import { toast } from 'vue-sonner'

export default function ToastPlugin() {
  return definePlugin({
    name: 'hybridly:toast',
    after: () => {
      const payload = useProperty<App.Data.Toast.ToastData | null>(
        'toast',
      ).value

      if (payload) {
        toast[payload.type](payload.body, {
          description: payload.description,
        })
      }
    },
  })
}
