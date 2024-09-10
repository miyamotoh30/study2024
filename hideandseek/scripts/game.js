'use stricts';

/* ペンギンをクリックしたとき*/
let penguins = Array.from(document.getElementsByClassName('penguin'));
penguins.forEach(function(element){
    element.addEventListener('click',function(){
        //console.log(element);
        document.getElementById('clearGame').style.display='block';
    });    
});
