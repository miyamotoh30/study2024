<?php require 'header.php';?>
<?php
    $pdo = new PDO(DBNAME,DBUSER,DBPASSWORD);
    foreach($pdo->query('select * from siteinfo') as $info){
        echo '<article>';
        echo '<h2><a href="',$info['url'],'" target="_blank"><img srcset="images/works',$info['id'],'.png 400w,images/works',$info['id'],'Pc.png 1024w" alt="',$info['name'],'"></a></h2>';
        echo '<dl>';
        echo '<dt>title</dt>';
        echo '<dd>',$info['name'],'</dd>';
        echo '<dt>工数</dt>';
        echo '<dd>',$info['hour'],'</dd>';
        echo '<dt>使用スキル</dt>';
        echo '<dd>',$info['skill'],'</dd>';
        echo '<dt>web site</dt>';
        echo '<dd><a href="',$info['url'],'" target="_blank">こちら<span class="triangle"></span></a></dd>';
        echo '<dt>Source</dt>';
        echo '<dd><a href="',$info['github'],'" target="_blank">こちら<span class="triangle"></span></a></dd>';
        echo '</dl>';
        echo '</article>';
    }
?>
<?php require 'footer.php';?>