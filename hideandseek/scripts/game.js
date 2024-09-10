'use stricts';

/* ペンギンをクリックしたとき*/
let penguins = Array.from(document.getElementsByClassName('penguin'));
const maxPattern = 3;/* アニメーションパターンを3とする */
const maxSec = 10;/* アニメーションを最大10秒とする */
penguins.forEach(function(element){
    element.addEventListener('click',function(){
        document.getElementById('clearGame').style.display='block';
    });    
});

function setAnimation(penguin){
    const second = getRandomInt(maxSec);
    const type = getRandomInt(maxPattern);
    const paramator = `hideandseek${type} ${seccond}s ease-in-out`;
    penguin.style.animation= paramator;    
}

function getRandomInt(max){
    return Math.floor(Math.random*max);
}