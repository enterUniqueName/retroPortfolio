
// function randomHits() {
//     var hitCount = Math.random() * (99999999 - 1) + 1;
//     hitCount = Math.round(hitCount);
//     document.getElementById('hits').innerHTML = hitCount;
// };
// randomHits();

const media_element = document.getElementById("audio_element");
function play_media() {
    if (media_element.paused) {
        media_element.play();
    } else {
        media_element.pause();
    }
}

document.body.addEventListener('click', play_media);

// Increment the custom counter by using increment.build
function reqListener () {
    console.log(this.responseText);
    document.getElementById('hits').innerHTML = this.responseText;
}
  
var oReq = new XMLHttpRequest();
oReq.addEventListener("load", reqListener);
oReq.open("GET", "https://increment.build/ananda-fetherston");
oReq.send();