<div class="titulo">Tipo String</div>
<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("eu também");
echo '<br>';

// contatenação
echo ("nos também" . ' somos');
echo '<br>', "tambem aceito", " virgulas";

echo '<br>';
echo "'teste'". '"teste"' ;

echo '<br>';
print ("<br> tabem existe o função print");
print "<br> tabem existe o função print";

//Algumas Funçoes 

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('maximizado');
echo '<br>' . ucfirst('so a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras');
echo '<br>' . mb_strlen('Eu Também',"UTF-8");
echo '<br>' . substr('So uma parte mesmo', 7 , 6); // palavra parte
echo '<br>' . str_replace('senha', 'senhas', 'trocar senha ');

?>