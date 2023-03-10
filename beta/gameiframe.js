// for iframe stuff? confusin
function createIframeFile(game) {
  var iframe = document.createElement("iframe");
  iframe.src = game.link;
  iframe.classList.add("game-iframe");
  document.body.appendChild(iframe);
}
