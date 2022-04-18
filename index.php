<?php
require_once 'partials/Database.php';
$dbObject = new Database();
//var_dump($dbObject);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--    Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>CRUD </title>
</head>
<body>
<h1 class="bg-dark text-light py-2 m-2 text-center"> PHP CRUD</h1>
<div class="container">
    <div class="row mb-3">
        <div class="col-10">
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-search"></i>
                </span>

                <input type="text" class="form-control" placeholder="Search User">

            </div>
        </div>
        <div class="col-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">
                Add User
            </button>



            <!-- Modal -->
            <?php
            include_once 'form.php';
            ?>
            <?php
            include_once 'profile.php';
            ?>

        </div>

    </div>
    <?php
    include_once 'tableData.php';
    ?>

<!--    Pagination-->
    <nav aria-label="..." id="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>


<!--Bootstrap bundled with popper-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="js/script.js"></script>
</body>
</html>