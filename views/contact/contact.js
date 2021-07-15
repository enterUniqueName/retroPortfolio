const clearButton = document.getElementById("clearButton");

function openPopup(i) {
    const popup = document.getElementById(i);
    popup.classList.add('active');
    const body = document.body;
    body.style.height = '100vh';
    body.style.overflowY = 'hidden';
    clearButton.classList.add('active');
};

const trigger = document.getElementById('trigger-image');
trigger.addEventListener('click', function() {
  openPopup('contact-popup');
}, false);

function clearPopup() {
    const popup = document.getElementById('contact-popup');

    popup.classList.remove('active');

    clearButton.classList.remove('active');
    const body = document.body;
    body.style.height = '';
    body.style.overflowY = '';
}
  
clearButton.addEventListener('click', clearPopup, false);