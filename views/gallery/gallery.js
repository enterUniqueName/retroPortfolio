customElements.define('gallery-popup',
  class extends HTMLElement {
    constructor() {
      super();
      let template = document.getElementById('galleryPopupTemplate');
      let templateContent = template.content;

      const shadowRoot = this.attachShadow({mode: 'open'})
        .appendChild(templateContent.cloneNode(true));
    }
  }
);

function openPopup(i) {
  const popup = document.getElementById(i);
  popup.classList.add('active');
  const body = document.body;
  body.style.height = '100vh';
  body.style.overflowY = 'hidden';
  clearButton.classList.add('active');
};

const image1 = document.getElementById('image1');
image1.addEventListener('click', function() {
  openPopup('popup1');
}, false);

const image2 = document.getElementById('image2');
image2.addEventListener('click', function() {
  openPopup('popup2');
}, false);

const image3 = document.getElementById('image3');
image3.addEventListener('click', function() {
  openPopup('popup3');
}, false);

// add more if there are more popups and more images

// Function to clear the popup
function clearPopup() {
  const popups = document.querySelectorAll('[id^="popup"]');
  for (i = 0; i < popups.length; ++i) {
    popups[i].classList.remove('active');
  }
  clearButton.classList.remove('active');
  const body = document.body;
  body.style.height = '';
  body.style.overflowY = '';
}
const clearButton = document.getElementById("clearButton");
clearButton.addEventListener('click', clearPopup, false);