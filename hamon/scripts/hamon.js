'use stricts';

//クリックされた位置を取得する

document.body.onclick = (e) =>{
    const field = document.getElementById('field');
    const fieldPosition = field.getBoundingClientRect();
    console.log(fieldPosition);
    const xPoint = e.clientX-fieldPosition.left;/* X座標を取得 */
    const yPoint = e.clientY-fieldPosition.top;/* Y座標を取得 */
    console.log(`xpoint=${xPoint},ypoint=${yPoint}`);

    let newElement = document.createElement('div');
    newElement.classList.add('clickPoint');

    newElement.style.top=`${yPoint}px`;
    newElement.style.left=`${xPoint}px`;

    //クラスを付与したdivを追加する。
    field.appendChild(newElement);
    //10秒経過したら、追加したdivを削除する
    setTimeout(function(){
        newElement.remove();
    },12000);

}
//以下、うまくいってない処理「ダブルクリックで波紋を消す」
document.body.ondblclick = (e) =>{
    const elements = document.querySelectorAll('clickPoint');//クラス名を利用してクリックで追加されたdivを取得
    elements.forEach((element) =>{
        element.remove();
    });
}