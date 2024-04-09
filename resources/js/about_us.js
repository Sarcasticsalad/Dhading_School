const aboutUsLink = document.getElementById('aboutUsLink');
const aboutUsDropdown = document.getElementById('aboutUsDropdown');

aboutUsLink.addEventListener('click', function(event){
    event.preventDefault();
    aboutUsDropdown.classList.toggle('hidden');
});