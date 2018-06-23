<?php
if(is_array($posts)){
    $content='<h1 class="center">'.mb_ucfirst($categoria).'</h1>';
    $content.='<ul>';
    require 'mb_ucfirst.php';
    require 'corrigir.php';
    ksort($posts);
    foreach ($posts as $data => $post) {
        $content.='<li>';
        if($categoria=='blog'){
            $content.=date('d.M.Y',$data).' ~ ';
        }
        $postCorrigido=corrigir($post);
        $post=slug($post);
        $content.='<a href="/'.$categoria.'/'.$post.'">'.mb_ucfirst($postCorrigido).'</a>';
        $content.='</li>';
    }
    $content.='</ul>';
}else{
    $content='Nenhum post encontrado';
}
require 'layout.php';
?>