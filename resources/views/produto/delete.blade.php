<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Excluir um Produto</h1>
        <div class="alert alert-warming" role="alert">
            Você tem certeza que deseja excluir este produto?
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Nome:</strong></label>
            <p>{{ $produto->nome }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Descrição:</strong></label>
            <p>{{ $produto->descricao }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Lote:</strong></label>
            <p>{{ $produto->lote }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Validade:</strong></label>
            <p>{{ $produto->validade }}</p>
        </div>
        <form action="{{ route('produto.destroy', $produto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
            <a href="{{ route('produto.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>