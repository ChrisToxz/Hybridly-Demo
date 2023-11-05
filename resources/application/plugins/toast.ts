import { definePlugin } from 'hybridly'
import { useProperty } from 'hybridly/vue'
import { toast } from 'vue-sonner'

export interface ToastPluginOptions {}

export default function ToastPlugin(options?: ToastPluginOptions) {
  return definePlugin({
    name: 'hybridly:toast',
    after: () => {
      const payload = useProperty<App.Data.Toast.ToastData | null>(
        'toast',
      ).value

      if (payload) {
        toast[payload.type](payload.body)
      }
    },
  })
}
