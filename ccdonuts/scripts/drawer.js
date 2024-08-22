'use stricts';

let openBtn = document.getElementById('openBtn');
let closeBtn = document.getElementById('closeBtn');
let menu = document.getElementById('headerMenu');

openBtn.addEventListener('click',function(){
    menu.style.left='0';
});

closeBtn.addEventListener('click',function(){
    menu.style.left='-100vw';
});

