<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Registro</div>


<h2>Cadastro</h2>

<?php 
require_once 'conexao.php';
$conexao = novaConexao();

if($_GET['codigo']) {
    $sql = "SELECT * FROM cadastro WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('i', $_GET['codigo']);

    if($stmt->execute()) {
        $resultado = $stmt->get_result();
        if($resultado->num_rows > 0 ) {
            $dados = $resultado->fetch_assoc();
            if($dados['nascimento']) {
                $dt = new DateTime($dados['nascimento']);
                $dados['nascimento'] = $dt->format('d/m/Y');
            }
            if($dados['salario']) {
                $dados['salario'] = str_replace(".", ",", $dados['salario']);
            }
        }
    }


}




if (count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

   
    if(trim($dados['nome'] === "")) {
        $erros['nome']  = 'Nome é obrigatorio!';
    }

    if (isset($dados["nascimento"])) {
        $data = DateTime::createFromFormat(
            'd/m/Y', $dados['nascimento']);
        if(!$data) {
            $erros['nascimento']  = 'Data deve estar no padrão DD/MM/AAAA';
        }
    }


    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email']  = 'Email inválido';
    }

    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site']  ='Site inválido';
    }

    $filhosConfig = [
        "options" => ["min-range" => 0, "max" => 20] 
    ];
    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) 
    && $dados['filhos'] != 0) {
        $erros['filhos']  = 'Quantidade de filhos inválida';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($dados['salario'],
        FILTER_VALIDATE_FLOAT, $salarioConfig)) {
            $erros['salario']  = 'Salário inválido';
    }

    if(!count($erros)) {
        $sql = "UPDATE cadastro 
        SET nome = ?, nascimento = ?, email = ?, site = ?, 
        filhos = ?, salario = ? 
        WHERE id = ?";

        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'] ? str_replace(",", ".", $dados['salario']) : null,
            $dados['id']
        ];

        $stmt->bind_param("ssssidi", ...$params);


        if($stmt->execute()) {
            unset($dados);
        } 

    }

    
}

?>

<!-- <?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert">
       <?= $erro ?>
   </div>
<?php endforeach ?>
 -->

<form action="/exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" name="codigo"
                class="form-control"
                value="<?= $_GET['codigo']?>"
                placeholder="Infome o código para consulta">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Consulta</button>
        </div>
    </div>
</form>

<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $dados['id']?>">
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                name="nome" id="nome" placeholder="Nome"
                value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-5">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>" 
                name="nascimento" 
                id="nascimento" placeholder="Nascimento"
                value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" 
                name="email" 
                id="email" placeholder="E-mail"
                value="<?= $dados['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>    
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>" 
                name="site" 
                id="site" placeholder="Site"
                value="<?= $dados['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>    
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : ''?>" 
                name="filhos" 
                id="filhos" placeholder="Qtde de Filhos"
                value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : ''?>" 
                name="salario" 
                id="salario" placeholder="Salario"
                value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
        <button class="btn btn-primary btn-lg">Enviar</button>
    </div>
</form>

