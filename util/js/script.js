
const home = document.querySelector('#home');

home.addEventListener('mouseover', () =>{
    add('img-darken');
})

home.addEventListener('mouseout', () => {
    remove('img-darken');
})