<?php
$url = $_SERVER['REQUEST_URI'];
if(!preg_match('/index.php/',$url)){
    echo '<div class="breadclumb">';
    echo '<p><a href="index.php">Top</a> &gt;',$url,'</p>';
    echo '</div><hr>';
}
if(isset($_SESSION['customer'])){
    echo '<div class="customerName">';
    echo '<p>ようこそ&nbsp;&nbsp;',$_SESSION['customer']['name'],'</p>';
    echo '</div>';
    echo '<hr>';

}else{
    echo '<div class="customerName">';
    echo '<p>ようこそ&nbsp;&nbsp;ゲスト様</p>';
    echo '</div>';
    echo '<hr>';
}
?>