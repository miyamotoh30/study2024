<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
        <title>Catcher in the Forest</title>
    </head>
    <body>
        <header>
            <h1>キャッチャーインザフォレスト</h1>
        </header>
        <main>
            <h2 id="gameStartMessage">ペンギンを捕まえて！</h2>
            <div id="clearGame">
                <h2 id="gameSetMessage">ペンギンを捕まえました！</h2>
            </div>
<?php
    $penguinImages=['<img src="penguins/penguin15_cape.png" alt="ケープペンギン">',
                '<img src="penguins/penguin16_humboldt.png" alt="フンボルトペンギン">',
                '<img src="penguins/penguin17_magellanic.png" alt="マゼランペンギン">'];
    $pTag = ['<p class="penguin first">',
            '<p class="penguin second">',
            '<p class="penguin thread">'];
    
    $html = '<div class="bgForest">';
    foreach($pTag as $tag){
        $html .= $tag.$penguinImages[rand(0,2)].'</p>';
    }
    $html .= '<p class="rock firstrock"><img src="images/iwa.png" alt="岩"></p>';
    $html .= '<p class="rock secondrock"><img src="images/iwa.png" alt="岩"></p>';
    $html .= '<p class="rock threadrock"><img src="images/iwa.png" alt="岩"></p>';
    $html .= '</div>';
    /* HTML出力 */
    echo $html;
?>
        </main>
        <footer></footer>
        <script src="scripts/game.js"></script>
    </body>
</html>