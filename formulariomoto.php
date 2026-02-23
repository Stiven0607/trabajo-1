<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>formulariomoto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php 
include'navbar.html';
?>

    <div class="container bg-danger text-dark p-4">
        <h2>Formulario</h2>

        <form action ="clasesvehiculos/vermotocicleta.php" method ="GET" class="row g-3">

              <div class="col-md-6">
                <label class="form-label">marca</label>
                <input type="text" class="form-control" name ="marca">
            </div>

            <div class="col-md-6">
                <label class="form-label">modelo</label>
                <input type="text" class="form-control" name ="modelo">
            </div>

            <div class="col-md-6">
                <label class="form-label">año</label>
                <input type="number" class="form-control" name ="año">
            </div>

            <div class="col-md-6">
                <label class="form-label">cilindrada</label>
                <input type="number" class="form-control" name="cilindrada">
            </div>





            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>

        </form>
    </div>

</div>

</body>
</html>