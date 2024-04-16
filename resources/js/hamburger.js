const navLinks = document.querySelector('.nav-links')


function onToggleMenu(e){
    e.name = e.name === 'close' ? 'menu' : 'close'

    navLinks.classList.toggle('hidden');        
}

// document.addEventListener('click', function(event){
//     if(event.target !== navLinks){
//         navLinks.classList.add('hidden');
//     }
// });