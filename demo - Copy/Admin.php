<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard  | Orginal Burger</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
            <font color = "000" size = "60px">
            <center>DASHBOARD</font>
            <br>
        </div>
        <?php
            date_default_timezone_set('Asia/Manila');
            echo "&emsp;&emsp;Today is ".date("l") ." - ". date("M d, Y")
        ?>

        <div class="box" style = "display: flex; justify-content: center; align-items: center; min-height: 400px;">
            <div class="card" style="width: 18rem; height: 365px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                &emsp; <img src="image/order.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style = "font-size: 23px; margin-bottom: 15px;">Pending</h5>
                    <p class="card-text" style ="line-height: 27px; margin-bottom: 25px;">Approve and Cancel orders of client here.</p>
                    <a href="Admin_Order.php" class="btn btn-primary" style = "background-color: #FF7800; color: white; text-decoration: none; border: 2px solid transparent font-weight: bold; padding: 9px 22px; border-radius: 20px;">See Pending</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height: 365px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
            <img src="image/prouduct.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style = "font-size: 23px; margin-bottom: 15px;">Product</h5>
                    <p class="card-text" style ="line-height: 27px; margin-bottom: 25px;">All about the products of Orginal Buger.</p>
                    <br>
                    <a href="Admin_Product.php" class="btn btn-primary" style = "background-color: #FF7800; color: white; text-decoration: none; border: 2px solid transparent font-weight: bold; padding: 9px 22px; border-radius: 20px;">See Product</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height: 365px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                <img src="image/sales.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style = "font-size: 23px; margin-bottom: 15px;">Sales</h5>
                    <p class="card-text" style ="line-height: 27px; margin-bottom: 25px;">See Orginal Burger revenue and sales here.</p>
                    <br>
                    <a href="Admin_Sales.php" class="btn btn-primary" style = "background-color: #FF7800; color: white; text-decoration: none; border: 2px solid transparent font-weight: bold; padding: 9px 22px; border-radius: 20px;">See Sales</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height: 365px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                <img src="image/user.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style = "font-size: 23px; margin-bottom: 15px;">Users</h5>
                    <p class="card-text" style ="line-height: 27px; margin-bottom: 25px;">Search and See list of Orginal Buger clients here.</p>
                    <a href="Admin_Users.php" class="btn btn-primary" style = "background-color: #FF7800; color: white; text-decoration: none; border: 2px solid transparent font-weight: bold; padding: 9px 22px; border-radius: 20px;">See User</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height: 365px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                <img src="image/history.png" class="card-img-top" alt="...">
                <div class="card-body"><br>
                    <h5 class="card-title" style = "font-size: 23px; margin-bottom: 15px;">History</h5>
                    <p class="card-text" style ="line-height: 27px; margin-bottom: 25px;">See transaction history of Orginal Burger here.</p>
                    <a href="Admin_History.php" class="btn btn-primary" style = "background-color: #FF7800; color: white; text-decoration: none; border: 2px solid transparent font-weight: bold; padding: 9px 22px; border-radius: 20px;">See History</a>
                </div>
            </div>
        </div>

        <div class="box" style = "display: flex; justify-content: center; align-items: center; min-height: 400px;">
        <div class="card" style="width: 25rem; height: 240px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                <div class="card-body">
                    <?php
                        $conn = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($conn, 'original_burger');
                        $query = "SELECT COUNT('id') as 'count_prod' FROM products";
                        $sql = mysqli_query($conn,$query);

                        if(($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))){ ?>
                            <h5 class="card-title" style = "font-size: 70px; color: #760E0A; margin-bottom: 10px;"> <?php echo $row['count_prod'];
                        }
                     ?>
                        </p>
                        <h5 class="card-title" style = "font-size: 30px; margin-bottom: 15px;">Total Number of Products</h5>
                    <br>
                </div>
            </div>

            <div class="card" style="width: 25rem; height: 240px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                <div class="card-body">
                    <?php
                        $conn = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($conn, 'original_burger');

                        $query = "SELECT SUM(`TOTAL`) FROM orders WHERE STATUS = 'Approved'";
                        $sql = mysqli_query($conn,$query);
                        $row = mysqli_fetch_array($sql);

                        ?> <h5 class="card-title" style = "font-size: 70px; color: #760E0A; margin-bottom: 10px;"> <?php echo "₱ $row[0]"; ?>
                        </p>
                        <h5 class="card-title" style = "font-size: 30px; margin-bottom: 15px;">Total Sales of Original Burger</h5>
                    <br>
                </div>
            </div>

            <div class="card" style="width: 25rem; height: 240px; padding: 20px 35px; background: #f6f4f1; border-radius: 20px; margin: 15px; overflow: hidden; text-align: center;">
                <div class="card-body">
                    <?php
                        $conn = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($conn, 'original_burger');

                        $query = "SELECT COUNT(`STATUS`) FROM orders WHERE STATUS = 'Pending'";
                        $sql = mysqli_query($conn,$query);
                        $row = mysqli_fetch_array($sql);

                        ?> <h5 class="card-title" style = "font-size: 70px; color: #760E0A; margin-bottom: 10px;"> <?php echo "$row[0]"; ?>
                        </p>
                        <h5 class="card-title" style = "font-size: 30px; margin-bottom: 15px;">Number of Pending Orders</h5>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");


        toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
        })
    </script>

</body>
</html>