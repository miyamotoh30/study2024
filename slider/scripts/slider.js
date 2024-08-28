'use stricts';

let center = 1;/* 中心を管理する値 */
let sliderBox = document.getElementById('sliderBox');
const list = sliderBox.getElementsByTagName('li');
const pointerList = document.getElementById('pointerList');

document.getElementById('leftArrow').addEventListener('click',function(){
    console.log('左');
    center++;
    if(center >= list.length){
        center = 0;
    }
        let position = center * -100;
        sliderBox.style.marginLeft= `${position}px`;
});

document.getElementById('rightArrow').addEventListener('click',function(){
    console.log('右');
    center--;
    if(center < 0){
        center = list.length - 1;
    }
    let position = center * -100;
    sliderBox.style.marginLeft= `${position}px`;
});

Array.from(pointerList.getElementsByTagName('li')).forEach(function(pointer,index){
    pointer.addEventListener('click',function(){
        console.log(index);
        center = index;
        sliderBox.style.marginLeft = `${center*-100}px`;
    });
});