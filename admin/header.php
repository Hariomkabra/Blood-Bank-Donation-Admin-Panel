<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <style>
    /* General Styles */
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }
    
    /* Navbar Styles */
    .navbar {
      background: linear-gradient(90deg, #00C9FF, #92FE9D);
      border: none;
      border-radius: 0;
    }
    .navbar .navbar-brand {
      color: #fff;
      font-weight: bold;
      font-size: 24px;
    }
    .navbar .navbar-brand:hover {
      color: #fff;
      text-shadow: 1px 1px 2px #000;
    }

    /* Navbar Links */
    .navbar-nav > li > a {
      color: #fff;
      font-weight: 500;
    }
    .navbar-nav > li > a:hover {
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    /* Dropdown Menu */
    .dropdown-menu {
      background-color: #92FE9D;
      border: none;
    }
    .dropdown-menu > li > a {
      color: #333;
      font-weight: 500;
    }
    .dropdown-menu > li > a:hover {
      background-color: #00C9FF;
      color: #fff;
    }

    /* User Greeting */
    .navbar-right .dropdown-toggle {
      font-weight: bold;
      color: #fff;
    }

    /* Sidebar Styles */
    .sidebar {
      position: fixed;
      width: 210px;
      height: 100%;
      background-color: #333;
      padding-top: 20px;
      color: #fff;
    }
    .sidebar a {
      padding: 15px;
      font-size: 16px;
      color: #ddd;
      display: block;
      transition: background 0.3s ease, color 0.3s ease;
    }
    .sidebar a:hover {
      background-color: #00C9FF;
      color: #fff;
      border-radius: 5px;
    }
    .sidebar a.act {
      background: linear-gradient(90deg, #00C9FF, #92FE9D);
      color: #fff;
      font-weight: bold;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        position: relative;
      }
      .sidebar a {
        text-align: center;
      }
      .navbar-header {
        float: none;
      }
    }


    <style>
    /* Basic Styling */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-toggle {
      color: #333;
      font-weight: bold;
      cursor: pointer;
      padding: 10px;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .dropdown-toggle:hover {
      color: #0056b3;
    }

    .caret {
      margin-left: 5px;
      border: solid #333;
      border-width: 0 2px 2px 0;
      display: inline-block;
      padding: 3px;
      transform: rotate(45deg);
      transition: transform 0.3s ease;
    }

    .dropdown:hover .caret {
      transform: rotate(-135deg);
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #ffffff;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      overflow: hidden;
      z-index: 1;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }

    .dropdown-menu li {
      list-style: none;
    }

    .dropdown-menu a {
      color: #333;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: background 0.3s ease, color 0.3s ease;
    }

    .dropdown-menu a:hover {
      background-color: #0056b3;
      color: #ffffff;
    }

    /* Icons Styling */
    .dropdown-menu a i {
      margin-right: 10px;
      color: #0056b3;
      transition: color 0.3s ease;
    }

    .dropdown-menu a:hover i {
      color: #ffffff;
    }

  </style>

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php">Blood Bank & Donation Admin Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span> 
          <?php
            include 'conn.php';
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM admin_info WHERE admin_username='$username'";
            $result = mysqli_query($conn, $sql) or die("query failed.");
            $row = mysqli_fetch_assoc($result);
            echo "Hello " . $row['admin_name'];
          ?>
            <div class="dropdown">
              <a class="dropdown-toggle">
                Admin Panel
                <span class="caret"></span>
              </a>
            <ul class="dropdown-menu">
              <li><a href="change_password.php"><i class="fas fa-key"></i> Change Password</a></li>
              <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>