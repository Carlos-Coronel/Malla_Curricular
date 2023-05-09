let hidetext_btn = document.getElementById('hidetext_btn');

let hidetext = document.getElementById('hidetext');

hidetext_btn.addEventListener('click', toggleText);

function toggleText(){
    hidetext_btn.classList.toggle('show');


}