const aboutUsLink = document.getElementById('aboutUsLink');
const aboutUsDropdown = document.getElementById('aboutUsDropdown');


aboutUsLink.addEventListener('click', function(event){
    event.preventDefault();
    aboutUsDropdown.classList.toggle('hidden');
});

// document.addEventListener('click', function(event){
    
//     if(aboutUsDropdown.classList.contains('hidden')) return;

//     if(!aboutUsDropdown.classList.contains('hidden')){

//         if(!aboutUsDropdown.classList.contains(event.target)){

//             aboutUsDropdown.classList.add('hidden');
//         }

//     }

    
// });