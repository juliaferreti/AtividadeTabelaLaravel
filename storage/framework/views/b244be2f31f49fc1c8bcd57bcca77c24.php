<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
 
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do produto</h1>
        <div class="mb-3">
            <label class="form-label"><strong>Nome:</strong></label>
            <p><?php echo e($produto->nome); ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Descrição:</strong></label>
            <p><?php echo e($produto->descricao); ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Lote:</strong></label>
            <p><?php echo e($produto->lote); ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Validade:</strong></label>
            <p><?php echo e($produto->validade); ?></p>
        </div>
        <a href="<?php echo e(route('produto.index')); ?>" class="btn btn-secondary">Voltar</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html><?php /**PATH D:\projeto-crud\resources\views/produto/show.blade.php ENDPATH**/ ?>