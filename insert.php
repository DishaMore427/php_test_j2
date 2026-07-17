<?php
session_start();
include 'db.php';
if ($_SERVER['REQUEST_METHOD']==="POST") {
    # code...
    $name=$_POST['name'];
    $cat=$_POST['cat'];
    $price=$_POST['price'];

    
            if (empty($name)) {
                # code...
                echo "<script>alert('Field is empty !'); </script>";
            }
             if (empty($cat)) {
                # code...
                echo "<script>alert('Please Select Category'); </script>";
            }
             if (empty($price)) {
                # code...
                echo "<script>alert('Please Enter Price'); </script>";
            }
else{
    $sql=$conn->prepare('insert into product(name,category,price) values(?,?,?)');
    $sql->bind_param('ssd',$name,$cat,$price);
    if ($sql->execute()) {
        # code...
        header('Location:home.php');
    }
}
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
            <h2 class="text-center">Insert Product</h2>
            <div
                class="container col-5 mt-3 shadow rounded border"
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
                    />
                   
                </div>
             <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <select
                    class="form-select form-select-lg"
                    name="cat"
                    id=""
                >
                    <option selected>Select one</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Electronic">Electronic</option>
                </select>
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
