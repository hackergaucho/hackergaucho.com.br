<?php
$title='Erro 404';
$content=<<<heredoc
<h1>{$title}</h1>
<p>Página não encontrada.</p>
heredoc;
$filename='inc/layout.php';
header("HTTP/1.0 404 Not Found");
require $filename;
?>
