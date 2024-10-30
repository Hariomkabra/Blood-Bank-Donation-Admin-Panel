<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Averia+Gruesa+Libre">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Averia Gruesa Libre', sans-serif;
      font-size: 15px;
      color: #333;
      background-color: #f4f6f9;
    }

    /* Sidebar Styling */
    .sidebar {
      width: 220px;
      height: 100%;
      position: fixed;
      background: linear-gradient(180deg, #8fd9fb, #00c9ff);
      padding-top: 20px;
      box-shadow: 2px 0 12px rgba(0, 0, 0, 0.2);
      overflow: auto;
      transition: width 0.3s;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 14px 20px;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      border-radius: 6px;
      margin: 10px;
      transition: background 0.3s, color 0.3s;
    }

    .sidebar a:hover {
      background: #0047ab;
      color: #fff;
    }

    /* Active Link Styling */
    .sidebar a.act {
      background: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
      color: #333;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
      font-weight: bold;
    }

    .content {
      margin-left: 240px;
      padding: 20px;
      transition: margin-left 0.3s;
    }

    /* Responsive Styling */
    @media screen and (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a { float: left; }
      .content { margin-left: 0; }
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
  </style>
</head>
<body>

<div class="sidebar">
  <a href="dashboard.php" <?php if($active=='dashboard') echo "class='act'"; ?>>
    <span class="glyphicon glyphicon-dashboard"></span> Dashboard
  </a>
  <a href="add_donor.php" <?php if($active=='add') echo "class='act'"; ?>>
    <span class="glyphicon glyphicon-pencil"></span> Add Donor
  </a>
  <a href="donor_list.php" <?php if($active=='list') echo "class='act'"; ?>>
    <span class="glyphicon glyphicon-list-alt"></span> Donor List
  </a>
  <a href="query.php" <?php if($active=='query') echo "class='act'"; ?>>
    <span class="glyphicon glyphicon-check"></span> Check Contact Us Query
  </a>
  <a href="pages.php" <?php if($active=='pages') echo "class='act'"; ?>>
    <span class="glyphicon glyphicon-edit"></span> Manage Pages
  </a>
  <a href="update_contact.php" <?php if($active=='contact') echo "class='act'"; ?>>
    <span class="glyphicon glyphicon-edit"></span> Update Contact Info
  </a>
</div>

  <style>
    /* General Styles */

    .content h2 {
      font-size: 32px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
      background: linear-gradient(90deg, #ff6b6b, #f94d6a);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .content p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }
  </style>
</head>

<body>
  <div class="content">
    <h2>Dashboard</h2>
    <p>Welcome to the Blood Bank & Donation Admin Panel! </p>
  </div>
</body>
</html>

