function writeCookie() {
  const name = document.getElementById("name").value

  if (name != "") {
    document.cookie = "name=" + name

    console.log('cookie is set')
  }
}

function readCookies() {
  console.log(document.cookie)
}
