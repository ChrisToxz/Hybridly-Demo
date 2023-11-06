import moment from 'moment'

export default function useTimeAgo(datetime: string){
  return moment(datetime).fromNow()
}
