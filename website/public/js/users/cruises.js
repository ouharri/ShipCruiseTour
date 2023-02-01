const nav = document.querySelector('nav');
const waves = document.getElementById('waves');
const searchBox = document.getElementById('searchBox');
const searchText = document.getElementById('searchText');
const WavesContainer = document.querySelector('.WavesContainer');

const height = nav.offsetHeight + 15;
const sticky = searchBox.offsetTop - height - 30;

window.addEventListener('scroll', function () {
    waves.classList.toggle('d-none', window.scrollY > 0);
    searchText.classList.toggle('d-none', window.scrollY > 0);
    WavesContainer.classList.toggle('WavesContainerR', window.scrollY > 0);
    searchBox.classList.toggle('searchFixed', window.scrollY > sticky);
});

document.addEventListener("DOMContentLoaded", function () {
    if (localStorage.getItem('cruisesDetail') != null) {
        cruiseDetail(JSON.parse(localStorage.getItem('cruisesDetail')));
    }
});