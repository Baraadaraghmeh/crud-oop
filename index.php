<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP OOP CRUD</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class="col-md-12 mt-5">
    <h1 class="text-center">
    PHP OOP CRUD 
    </h1>
    <?php
    include "model.php";
    $model = new Model();
    $model->getConnection();
    $model->insert();
    ?>
    <hr/>
    
    </div>
    <div class="col-md-5 mx-auto">
    <form action="" method="POST">
    <div class="form-group">
    <label for="name">Product name</label>
    <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" class="form-control">
    </div>
    <div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" class="form-control">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Create Product</button>
    </form>
    </div>
    </div>
    </div>

<!--    Bootsstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>