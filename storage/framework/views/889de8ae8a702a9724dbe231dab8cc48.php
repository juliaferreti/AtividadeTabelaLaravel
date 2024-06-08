<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/produto.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="text-center my-4">
            <h1>Inserir um Produto</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('produto.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nome">Informe o nome do produto</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Informe a descrição do produto</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" required>
                    </div>
                    <div class="form-group">
                        <label for="lote">Informe o número do lote do produto</label>
                        <input type="text" class="form-control" name="lote" id="lote" required>
                    </div>
                    <div class="form-group">
                        <label for="validade">Informe a data de validade do produto</label>
                        <input type="date" class="form-control" name="validade" id="validade" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\projeto-crud\resources\views/produto/create.blade.php ENDPATH**/ ?>