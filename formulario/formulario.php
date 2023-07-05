<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>
<?php 
if (count($_POST) > 0) {
    $erros = [];

    /* 
        DOC PHP: filter_input — Obtem a específica variável externa pelo nome e 
        opcionalmente a filtra

        
            Parâmetros 

            type
                Um dos INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, 
                INPUT_ENV, INPUT_SESSION (não implementado ainda) e 
                INPUT_REQUEST (não implementado ainda).
            
            variable_name

                Nome da variável a ser obtida.

            filter

                Filtro a ser aplicado. O padrão é FILTER_DEFAULT.
            options
                Array associativo de opções ou disjunção com operação binário 
                dos flags. Se o filtro aceita opções, flags podem ser providas 
                no campo "flags" da array.

    */
    // outra opção seria "isset($_POST['nome])"
    if(!filter_input(INPUT_POST, 'nome')) {
        $erros['nome']  = 'Nome é obrigatorio!';
    }

    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y', $_POST['nascimento']);
        if(!$data) {
            $erros['nascimento']  = 'Data deve estar no padrão DD/MM/AAAA';
        }
    }

    /* 
        DOC PHP: filter_var — Filtra a variável com um especificado filtro
    */
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email']  = 'Email inválido';
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site']  ='Site inválido';
    }

    $filhosConfig = [
        "options" => ["min-range" => 0, "max" => 20] 
    ];
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) 
    && $_POST['filhos'] != 0) {
        $erros['filhos']  = 'Quantidade de filhos inválida';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'],
        FILTER_VALIDATE_FLOAT, $salarioConfig)) {
            $erros['salario']  = 'Salário inválido';
    }

    
}

?>

<?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert">
       <?= $erro ?>
   </div>
<?php endforeach ?>


<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                name="nome" id="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-5">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>" 
                name="nascimento" 
                id="nascimento" placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
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
                value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>    
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>" 
                name="site" 
                id="site" placeholder="Site"
                value="<?= $_POST['site'] ?>">
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
                value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : ''?>" 
                name="salario" 
                id="salario" placeholder="Salario"
                value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
        <button class="btn btn-primary btn-lg">Enviar</button>
    </div>
</form>

