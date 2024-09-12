'use stricts';

let penguins = Array.from(document.getElementsByClassName('penguin'));
/* ペンギンをクリックしたときのイベントを設定する*/
penguins.forEach(function(element){
    element.addEventListener('click',function(){
        gameSet(element.querySelector('img'));
    });    
});
function gameSet(img){
    console.log(img);
    document.getElementById('gameStartMessage').style.display='none';
    document.getElementById('clearGame').style.display='block';
    penguins.forEach(function(element){
        element.style.display='none';
    });
}
const maxPattern = 3;/* アニメーションパターンを3とする */
function setAnimation(penguin){
    //console.log(penguin);
    const act = `animation${getRandomInt(maxPattern)}`;
    //console.log(act);
    penguin.classList.add(act);
}

function getRandomInt(max){
    return Math.floor(Math.random()*max);
}
/* テストのための仮の値設定+*/
const sec=3000;/*3秒ごとにアニメーションをセットする*/
let i = 0; /* setIntervalを管理するためのカウンター */
let id = 0;/* setIntervalを終了するためのid */

window.addEventListener('load',function(){
    console.log('window load');/* ページが読み込み終わったのを確認 */
    id = this.setInterval(setMove,sec); /*3秒ごとにアニメーションをセットし、アニメーションの開始をずらす*/
    //for(i=0;i<=penguins.length;i++){
        //setAnimation(penguins[i]); /*ペンギンにアニメーションを設定する */
    //}
});
/* アニメーションをセット*/
let setMove = function(){
    console.log(`${i}回目`);
    if(i>=penguins.length){
        clearInterval(id);
        console.log('setInterval終了');
    }else{
        setAnimation(penguins[i]);
    }
    i++;
}