<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Mercadorias</title>
</head>
<body>
    <h1>Formulário de Alteração de Mercadorias</h1>
    <form action="<?php echo e(route('mercadoria.update', $mercadoria->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="nome">Informe o nome da Mercadoria</label>
        <input type="text" name="nome" id="nome" value="<?php echo e($mercadoria->nome); ?>"><br>
        <label for="numerodeserie">Informe o número de série da Mercadoria</label>
        <input type="text" name="numerodeserie" id="numerodeserie" value="<?php echo e($mercadoria->numerodeserie); ?>"><br>
        <label for="validade">Informe a data de validade da Mercadoria</label>
        <input type="text" name="validade" id="validade" value="<?php echo e($mercadoria->validade); ?>"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/mercadoria/edit.blade.php ENDPATH**/ ?>