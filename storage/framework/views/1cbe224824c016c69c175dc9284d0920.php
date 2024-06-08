<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/produto.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
        <?php endif; ?>
        <div class="text-center my-4" style="background-image: url('/images/pao.png'); background-size: cover; opacity:0.90;">
            <h2>Panificadora Bom Preço</h2>
            <h4>Desde 1953</h4>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Produtos</h2>
            </div>
            <div class="card-body">
                <a href="<?php echo e(route('produto.create')); ?>" class="btn btn-primary mb-3">Inserir Produto</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Lote</th>
                            <th>Validade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->nome); ?></td>
                            <td><?php echo e($c->descricao); ?></td>
                            <td><?php echo e($c->lote); ?></td>
                            <td><?php echo e($c->validade); ?></td>
                            <td>
                                <a href="<?php echo e(route('produto.show', $c->id)); ?>" class="btn btn-info">Ver</a>
                                <a href="<?php echo e(route('produto.edit', $c->id)); ?>" class="btn btn-primary">Editar</a>
                                <a href="<?php echo e(route('produto.delete', $c->id)); ?>" class="btn btn-danger"><b> Excluir </b></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/produto/index.blade.php ENDPATH**/ ?>