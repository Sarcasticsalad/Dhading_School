const aboutUsLink = document.getElementById('aboutUsLink');
const aboutUsDropdown = document.getElementById('aboutUsDropdown');




aboutUsLink.addEventListener('click', function(event){
    event.preventDefault();
    aboutUsDropdown.classList.toggle('hidden');

});

document.addEventListener('click', function(event){
    if(event.target !== aboutUsLink && !aboutUsDropdown.contains(event.target)) {
        aboutUsDropdown.classList.add('hidden');
    }
});
