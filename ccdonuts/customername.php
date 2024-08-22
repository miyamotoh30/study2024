<?php
$filename = basename($_SERVER['REQUEST_URI']);
if($filename!='index.php' && $filename!='ccdonuts'){
    echo '<div class="breadclumb">';
    echo '<p><a href="index.php">Top</a> &gt;',$filename,'</p>';
}
if(isset($_SESSION['customer'])){
    echo '<div class="customerName">';
    echo '<p>ようこそ&nbsp;&nbsp;',$_SESSION['customer']['name'],'</p>';
    echo '</div>';
}else{
    echo '<div class="customerName">';
    echo '<p>ようこそ&nbsp;&nbsp;ゲスト様</p>';
    echo '</div>';
}
?>