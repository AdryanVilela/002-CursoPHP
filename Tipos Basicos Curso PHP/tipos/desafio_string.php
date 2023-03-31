<div class="titulo">Desafio String</div>

<?php 

$texto = "!AbcaBcabc";
$stposs= str_replace('!AbcaBcabc','Abc', $texto);
echo $stposs;
echo '<br>';

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';


?>