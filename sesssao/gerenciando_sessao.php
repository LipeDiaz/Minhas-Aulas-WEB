<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('8a927f1e57b80f135061f764ba63c6dc');
session_start();
echo session_id();
/* 
    DOC PHP: session_id() — Obtém e/ou define o id de sessão atual 
*/

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;

echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
}
    session_regenerate_id();
    /* 
        session_regenerate_id() — Atualiza o id da sessão atual com um novo 
        id gerado
    */

if($_SESSION['contador'] > 10) {
    session_destroy();
    /* 
        session_destroy() — Destrói todos os dados registrados em uma sessão
    */
}

