<?php
session_start();
include 'db.php';
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
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                  <h1>Hello  <?php echo $_SESSION['name']; ?></h1>
                   <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="insert.php"
                            role="button"
                            >Add</a
                           >
                   
                           <a
                            name=""
                            id=""
                            class="btn btn-danger"
                            href="logout.php"
                            role="button"
                            >Logout</a
                           >
                           
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>

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
            <h2 class="text-center mt-4">Product Dashboard</h2>
            <div
                class="container col-8 mt-5 border shadow rounded"
            >
             <?php
            $result=$conn->query('select * from product');
        

            ?>
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">ProductID</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Category</th>
                               <th scope="col">Price</th>
                                  <th scope="col">Action</th>
                                     <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    while($row=$result->fetch_assoc()){
                    ?>
                    
                    <tbody>
                        <tr class="">
                            <td scope="row"><?= $row['id'];?></td>
                            <td><?= $row['name'];?></td>
                            <td><?= $row['category'];?></td>
                             <td><?= $row['price'];?></td>
                             <td><a href="edit.php ?id=<?= $row['id']  ?>">Edit</a></td>
                             <td><a href="delete.php ?id=<?= $row['id']  ?>">Delete</a></td>
                        </tr>
                      
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
                
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
