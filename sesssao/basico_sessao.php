<div class="titulo">Sessão</div>

<?php 
/* 
    DOC PHP: session_start — Inicia uma nova sessão 
    ou resume uma sessão existente
*/
session_start();
/* 
    print_r — Imprime informação sobre uma variável 
    de forma legível 
*/
print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Felipe';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'lipediaz.tec@gmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/sesssao/basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>