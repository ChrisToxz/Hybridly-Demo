export default function useCapitalized(string: string) {
  const capitalizedFirst = string[0].toUpperCase()
  const rest = string.slice(1)
  return capitalizedFirst + rest

}
