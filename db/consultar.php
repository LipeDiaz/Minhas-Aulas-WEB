<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar Registro</div>

<?php 

require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;
}

 
$conexao->close();

?>


<table class="table table-hover table-striped table-bordered">
<thead>
    <th>Código</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
</thead>
<tbody>
    <?foreach($registros as $registro): ?>
        <tr>    
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td>
                <?= 
                    date('d/m/Y', strtotime($registro['nascimento']));
                ?>
            </td>
            <td><?= $registro['email']?></td>
        </tr>
    <?endforeach?>    
</tbody>

</table>
