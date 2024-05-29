<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-4">Create New Piece</h1>
        <form action="{{ route('pieces.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="numero_chambre">Numero Chambre</label>
                <input type="text" class="form-control" id="numero_chambre" name="numero_chambre" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <textarea class="form-control" id="type" name="type" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="">Select Status</option>
                    <option value="0">Disponible</option>
                    <option value="1">Occupé</option>
                    <option value="2">En Maintenance</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Piece</button>
        </form>
    </div>
</body>

</html>