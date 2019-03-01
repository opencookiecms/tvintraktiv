
var myvid = document.getElementById('myvideo');

myvid.addEventListener('ended', function(e) {
var activesource = document.querySelector("#myvideo source.active");
var nextsource = document.querySelector("#myvideo source.active + source") || document.querySelector("#myvideo source:first-child");
activesource.className = "";
nextsource.className = "active";
myvid.src = nextsource.src;
myvid.play();
});
