'use strict';

const leftPosition = [0,120,240,360,480];
let counter=0;

/* prevボタンが押された時 */
let prevButton = document.getElementById('prev');
prevButton.addEventListener('click',function(){
    counter--;/* count up */
    let position = counter%leftPosition.length;
    clickPrevEvent(position);
});

/* backボタンが押された時*/
let backButton = document.getElementById('back');
backButton.addEventListener('click',function(){
    counter++;/* count up */
    let position = counter%leftPosition.length;
    clickPrevEvent(position);
});

function clickPrevEvent(position){
    for(let i=0;i<leftPosition.length;i++){
        console.log(`position=${position}`);
        changeSlidePosition(position,i);
    }
}

function changeSlidePosition(position,n){
    if((position+n<leftPosition.length) && (position+n >= 0)){
        console.log('slider'+(n+1));
        console.log(leftPosition[position+n]);

        let slide=document.getElementsByClassName('slider'+position+n);
        console.log(slide.style);
        slide.style.left=`${leftPosition[position+n]}px`;
    }else if(position+n < 0){
        console.log('slider'+(n+1));
        console.log(leftPosition[position+n+leftPosition.length]);

        let slide=document.getElementsByClassName('slider'+(n+1));
        console.log(slide.style);
        slide.style.left=`${leftPosition[position+n+leftPosition.length]}px`;
        //slide.style.left=leftPosition[position+n+leftPosition.length];
    }else{
        console.log('slider'+(n+1));
        console.log(leftPosition[position+n-leftPosition.length]);
        let slide=document.getElementByClassName('slider'+(n+1));
        console.log(slide.style);
        slide.style.left=`${leftPosition[n-leftPosition.length]}px`;
        //slide.style.left=leftPosition[n-leftPosition.length];
    }
}