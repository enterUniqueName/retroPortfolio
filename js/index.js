
function randomHits() {
    var hitCount = Math.random() * (99999999 - 1) + 1;
    hitCount = Math.round(hitCount);
    document.getElementById('hits').innerHTML = hitCount;
};
randomHits();
