<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product  | Orginal Burger</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  </head>
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="Image/22.png" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name">Admin</span>
                    <span class="profession">Original Burger</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link-active">
                        <a href="Admin.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link-active">
                        <a href="Admin_Order.php">
                            <i class='bx bx-basket icon'></i>
                            <span class="text nav-text">Pending Orders</span>
                        </a>
                    </li>
                    <li class="nav-link-active">
                        <a href="Admin_Product.php">
                            <i class='bx bx-bowl-hot icon'></i>  
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>
                    <li class="nav-link-active">
                        <a href="Admin_Sales.php">
                            <i class='bx bx-line-chart icon' ></i>
                            <span class="text nav-text">Sales</span>
                        </a>
                    </li>
                    <li class="nav-link-active">
                        <a href="Admin_Users.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Users</span>
                        </a>
                    </li>
                    <li class="nav-link-active">
                        <a href="Admin_History.php">
                        <i class='bx bx-history icon' ></i>
                            <span class="text nav-text">History</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="index.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text"> 
            <center>PRODUCT</center>
        </div> 

        <!-----------------------ADD MODAL-------------------->
        <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                </div>
                <form action="insertcode.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" 
                            minlength="6" maxlength="20" pattern="[a-zA-Z- ]{1,}" title="Letters only" required>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .jfif, .pjpeg, .pjp, .png, .gif" required>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Set Product Price in ₱" 
                                min="0" step=".01" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="input-group mb-3">    
                                <textarea rows="4" cols="50" name="description" id="description" class="form-control"  minlength="6" placeholder="Write description about the product..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Availability</label>
                            <select name="availability" class="form-control" required>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!---------------------------EDIT MODAL----------------------->
    
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                </div>
                <form action="updatecode.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name" required>
                        </div>
                     
                        <div class="form-group">
                        <label>Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" name="price" id="price1" class="form-control" placeholder="Set Product Price in ₱" min="0" step=".01" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <div class="input-group mb-3">    
                                <textarea rows="4" cols="50" name="description" id="description1" class="form-control"  minlength="6" placeholder="Write description about the product..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Availability</label>
                            <select name="availability" class="form-control" required>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--------------------------------- DELETE MODAL ----------------------------->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Product</h5>
                </div>
                <form action="deletecode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h4>Are you sure you waht to delete this data?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="deletedata" class="btn btn-primary">Delete Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!--------------------------------- CHANGE IMAGE MODAL ----------------------------->
     <div class="modal fade" id="changeimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Change Image</h5>
                </div>
                <form action="changeimage.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class="form-control" accept="application/img, .png,.jpg,.jpeg">
                        </div>
                  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="changeimage" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-----------------TABLE--------------------->
    <div class="container">
            <form method="GET">
        <div class="input-group mb-3">
                
            <input type="text" name="search" class="form-control" placeholder="Search Products">
            <button class="btn btn-success" style="width: 15vh;" type="submit" id="button-addon2">Search</button>
            
        </div>
            </form>
        <div class="card">
            <div class="card-body">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'original_burger');
                if(isset($_GET['search'])){
                    $search = $_GET['search'];
                    $query = "SELECT * FROM products WHERE name LIKE '%$search%' || id LIKE '%$search%'";
                } else {
                $query = "SELECT * FROM products";
            }
                $query_run = mysqli_query($connection, $query);
            ?>
                <table id="datatableid"  class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">PID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Availability</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    if($query_run)
                    {
                    foreach($query_run as $row)
                    {
                    ?>
                        <tbody>
                            <tr>
                                <td style="width:10vh;"> <?php echo $row['id']; ?> </td>
                                <td style="width:32vh;"> <?php echo $row['name']; ?> </td>
                                <td style="width:16vh;"><img src="<?php echo $row['image']; ?>" style="width:8vh;"></td>
                                <td style="width:12vh;"> <?php echo $row['price']; ?> </td>
                                <td style="width:93vh;"> <?php echo $row['description']; ?> </td>
                                <td style="width:17vh;"> <?php echo $row['availability']; ?> </td>
                                <td style="width:40vh;">
                                    <button type="button" class="btn btn-success editbtn" value="<?php echo $row['id']?>" name="edit"><i class='bx bx-edit-alt' ></i></button>
                                    <button type="button" class="btn btn-primary changeimage"><i class='bx bx-image-alt' ></i></button>
                                    <button type="button" class="btn btn-danger deletebtn"><i class='bx bx-trash' ></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                    }
                    else 
                    {
                        echo "No Record Found";
                    }
                        ?>
                </table>
                </div>
            </div>
            <div class="card-body">
                <p style="text-align:right;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">Add Product</button></p>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");

        toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click" , () =>{
        sidebar.classList.remove("close");
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.changeimage').on('click', function () {

                $('#changeimage').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#name').val(data[1]);
                $('#image').attr('src',"Image/"+data[2]);
                $('#price1').val(data[3]);
                $('#description1').val(data[4]);
                $('#availability1').val(data[5]);
            });
        });
    </script>

    <!-----------------PAGINATION--------------------->
    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "simple_numbers",
                "lengthMenu": [
                    [10, 5, 3, -1],
                    [3, 5, 10, "All"]
                ],
                responsive: true,
            });

        });
    </script>
</body>
</html>