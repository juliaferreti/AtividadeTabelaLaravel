<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <a href="<?php echo e(route('cliente.create')); ?>">Inserir Cliente</a>
    <table>
        <tr>
            <td>Nome</td>
            <td>Telefone</td>
        </tr>
        <?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->nome); ?> </td>
            <td>
                <a href="<?php echo e(route('cliente.edit', $c->id)); ?>">Alterar</a>
                <a href="/cliente/<?php echo e($c->id); ?>/delete">Excluir</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/cliente/index.blade.php ENDPATH**/ ?>