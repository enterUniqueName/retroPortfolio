
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