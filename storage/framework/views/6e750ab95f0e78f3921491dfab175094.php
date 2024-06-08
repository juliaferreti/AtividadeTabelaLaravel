<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Mercadorias</title>
</head>
<body>
    <h1>Formulário de Inserção de Mercadorias</h1>
    <form action="<?php echo e(route ('mercadoria.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nome">Informe o nome da Mercadoria</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="numerodeserie">Informe o número de série da Mercadoria</label>
        <input type="text" name="numerodeserie" id="numerodeserie"><br>
        <label for="validade">Informe a data de validade da Mercadoria</label>
        <input type="text" name="validade" id="validade"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/mercadoria/create.blade.php ENDPATH**/ ?>