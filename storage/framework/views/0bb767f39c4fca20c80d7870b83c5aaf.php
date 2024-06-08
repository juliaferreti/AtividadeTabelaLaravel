<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Clientes</title>
</head>
<body>
    <h1>Formulário de Exclusão de Clientes</h1>
    <form action="<?php echo e(route('cliente.destroy', $cliente->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <label for="nome">Informe o nome do Cliente</label>
        <input type="text" name="nome" id="nome" disabled value="<?php echo e($cliente->nome); ?>"><br>
        <label for="telefone">Informe o telefone do Cliente</label>
        <input type="text" name="telefone" id="telefone" disabled value="<?php echo e($cliente->telefone); ?>"><br>
        <label for="email">Informe o email do Cliente</label>
        <input type="text" name="email" id="email" disabled value="<?php echo e($cliente->email); ?>"><br>
        <button type="submit">Excluir</button>
    </form>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/cliente/delete.blade.php ENDPATH**/ ?>