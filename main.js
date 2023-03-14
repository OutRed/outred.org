// For the proxy test, connected to proxy.html
function loadUrl() {
  var url = document.getElementById("urlInput").value;
  document.getElementById("proxyFrame").src = "https://cors-anywhere.herokuapp.com/" + url;
}
