<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

echo 'Quer mesmo deletar esse registro? ';
echo "<a href='delete.php?id=$id'>Sim</a>";
echo "<a href='UsuariosCadastrados.php'>Não</a>";



?>