export default function (jsonData, chang = false) {
  return chang ? window.JSON.parse(jsonData) : jsonData
}
