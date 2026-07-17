
<?php
session_start();
include 'db.php';
if (isset($_GET['id'])) {
    # code...
    $id=$_GET['id'];
    $sql=$conn->prepare('select * from product where id=?');
    $sql->bind_param('i',$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();
}
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center">Edit Product Information</h2>
            <div
                class="container col-5 mt-5 border shadow rounded"
            >
               <form action="" method="post">
<div class="mb-3">
    <label for="" class="form-label">Product Name</label>
    <input
        type="text"
        class="form-control"
        name="name"
        id=""
        aria-describedby="helpId"
        placeholder=""
        value="<?= $user['name'];?>"
    />
  
</div><div class="mb-3">
    <label for="" class="form-label">Category</label>
    <input
        type="text"
        class="form-control"
        name="cat"
        id=""
        aria-describedby="helpId"
        placeholder=""
        value="<?= $user['category'];?>"
    />
    
</div>
<div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input
        type="text"
        class="form-control"
        name="price"
        id=""
        aria-describedby="helpId"
        placeholder=""
            value="<?= $user['price'];?>"
    />
  
</div>
<button
    type="submit"
    class="btn btn-primary"
>
    Submit
</button>




               </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']==="POST") {
    # code...
    $name=$_POST['name'];
    $cat=$_POST['cat'];
    $price=$_POST['price'];
    $sql=$conn->prepare('update product set name=?,category=?,price=? where id=?');
    $sql->bind_param('ssdi',$name,$cat,$price,$id);
    if ($sql->execute()) {
        # code...
        header("Location:home.php");
    }
}
?>
