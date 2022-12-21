<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users  | Orginal Burger</title>
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
        <center>USER</center>
    </div> 

    <!---------------------------EDIT MODAL----------------------->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">VIEW USER RECORD</h5>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_uid" id="update_uid">
                        <div class="form-group">
                            <label>User ID</label>
                            <input type="text" name="uid" id="uid" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="text" name="bday" id="bday" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" id="age" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender" id="gender" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" id="address" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Phone No</label>
                            <input type="text" name="phoneno" id="phoneno" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control" readonly>
                        </div>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-----------------TABLE--------------------->
    <div class="container">
    <form method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search User">
            <button class="btn btn-success" style="width: 15vh;" type="submit" id="button-addon2">Search</button>
        </div>
        </form>
        <div class="card">
            <div class="card-body">
            <?php
                $conn = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($conn, 'original_burger');

                if(isset($_GET['search'])){
                    $search = $_GET['search'];
                    $query = "SELECT * FROM user WHERE USER_ID LIKE '%$search%' || FIRST_NAME LIKE '%$search%' || LAST_NAME LIKE '%$search%' || EMAIL_ADDRESS LIKE '%$search%' || USERNAME LIKE '%$search%'";
                } else {
                $query = "SELECT * FROM user";
            }
                $query_run = mysqli_query($conn, $query);
            ?>
                <table id="datatableid"  class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
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
                                <td> <?php echo $row['USER_ID']; ?> </td>
                                <td> <?php echo $row['FIRST_NAME']; ?> </td>
                                <td> <?php echo $row['LAST_NAME']; ?> </td>
                                <td> <?php echo $row['BIRTHDATE']; ?> </td>
                                <td> <?php echo $row['EMAIL_ADDRESS']; ?> </td>
                                <td> <?php echo $row['USERNAME']; ?> </td>
                                <td style="display:none;"> <?php echo $row['AGE']; ?> </td>
                                <td style="display:none;"> <?php echo $row['ADDRESS']; ?> </td>
                                <td style="display:none;"> <?php echo $row['PHONE_NO']; ?> </td>
                                <td style="display:none;"> <?php echo $row['GENDER']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn"><i class='bx bx-show'></i></button>
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

                $('#uid').val(data[0]);
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#email').val(data[4]);
                $('#bday').val(data[3]);
                $('#username').val(data[5]);  
                $('#age').val(data[6]); 
                $('#address').val(data[7]);
                $('#phoneno').val(data[8]);
                $('#gender').val(data[9]);    
            });
        });
    </script>

     <!-----------------PAGINATION--------------------->
     <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "simple_numbers",
                "lengthMenu": [
                    [20, 10, 5, -1],
                    [5, 10, 20, "All"]
                ],
                responsive: true,
            });

        });
    </script>
</body>
</html>