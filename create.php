<?php include_once("templates/header.php");?>

<div class="container">
    <?php include_once('templates/backbtn.html')?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="config/process.php" method="post">
        <input type="hidden" name="type" value="create">
        <div class="from-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" required>
        </div>
        <div class="from-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o telefone" required>
        </div>
        <div class="from-group">
            <label for="observations">Observações</label>
            <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Insira as observações" rows=3></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>


<?php include_once("templates/footer.php");?>