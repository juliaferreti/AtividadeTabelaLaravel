<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadorias</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/mercadoria.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="text-center my-4">
            <img src="logo_url" alt="Panificadora Bom Preço" class="img-fluid logo">
            <h1>Panificadora Bom Preço</h1>
            <p>Desde 1953</p>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Mercadoria</h2>
            </div>
            <div class="card-body">
                <a href="<?php echo e(route('mercadoria.create')); ?>" class="btn btn-primary mb-3">Inserir Mercadoria</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Número de série</th>
                            <th>Validade</th>
                            <th>Local do Sepulcro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $mercadoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->nome); ?></td>
                            <td><?php echo e($c->numerodeserie); ?></td>
                            <td><?php echo e($c->validade); ?></td>
                            <td>Rinópolis</td>
                            <td>
                                <a href="<?php echo e(route('mercadoria.edit', $c->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="/mercadoria/<?php echo e($c->id); ?>/delete" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/mercadoria/index.blade.php ENDPATH**/ ?>