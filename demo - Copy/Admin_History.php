<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History  | Orginal Burger</title>
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

    <section class="home" >
    <div class="text"> 
        <center>Transaction History</center>
    </div> 

   
    <!-----------------TABLE--------------------->
    <div class="container"  >
        <form method="GET" >
    <div class="input-group mb-3" >

            <input type="text" name="search" class="form-control" placeholder="Search order no">
            <button class="btn btn-success" style="width: 15vh;" type="submit" id="button-addon2">Search</button>
        </div>
        </form>
        <div class="card" >
            <div class="card-body" >
            <?php
                $conn = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($conn, 'original_burger');
                if(isset($_GET['search'])){
                    $search = $_GET['search'];
                    $query = "SELECT * FROM orders WHERE `NAME` LIKE '%$search%' OR ORDER_NO LIKE '%$search%'";
                } else {
                    $query = "SELECT * FROM orders";
                }
                    $query_run = mysqli_query($conn, $query);
            ?>
                <table id="datatableid"  class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">OID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Delivery Date</th>
                            <th scope="col">Delivery Time</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date Ordered</th>
                            <th scope="col">Status</th>
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
                                <td> <?php echo $row['ORDER_NO']; ?> </td>
                                <td> <?php echo $row['NAME']; ?> </td>
                                <td> <?php echo $row['ADDRESS']; ?> </td>
                                <td> <?php echo $row['PHONE_NO']; ?> </td>                 
                                <td> <?php echo $row['DELIVERY_DATE']; ?> </td>
                                <td> <?php echo $row['DELIVERY_TIME']; ?> </td>
                                <td> <?php echo $row['TOTAL']; ?> </td>
                                <td> <?php echo $row['ORDER_DATE']; ?> </td>
                                <td> <?php echo $row['STATUS']; ?> </td>
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
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    
    <!-----------------NAVIVAGTION--------------------->
    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");

        toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
    })
    </script>

    <!-----------------APPROVEDMODAL--------------------->
    <script>
        $(document).ready(function () {

            $('.approvedbtn').on('click', function () {

                $('#approvedmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#approved_order').val(data[0]);

            });
        });
    </script>

    <!-----------------DISAPPROVEDMODAL--------------------->
    <script>
        $(document).ready(function () {

            $('.disapprovedbtn').on('click', function () {

                $('#disapprovedmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#disapproved_order').val(data[0]);

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