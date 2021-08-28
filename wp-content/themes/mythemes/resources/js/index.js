import "../scss/style.scss";

const loader = document.querySelector('.loader-container');
const html = document.querySelector('html');
window.addEventListener('load', function() {
  loader.parentElement.removeChild(loader);
  html.style.overflowY = 'auto';
});