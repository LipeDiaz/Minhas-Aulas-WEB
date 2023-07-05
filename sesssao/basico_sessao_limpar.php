<?php
session_start();
session_destroy();
/* 
    DOC PHP: header() — Envia um cabeçalho HTTP bruto 
*/
header('Location: basico_sessao.php');

