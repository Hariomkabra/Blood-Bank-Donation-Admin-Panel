<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Admin Login">
  <meta name="author" content="Blood Bank & Management">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Full screen container */
    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
      background: #141E30; /* Dark background */
      background: linear-gradient(to right, #243B55, #141E30); /* Gradient */
      overflow: hidden;
    }

    /* Container for login form */
    .container {
      position: relative;
      z-index: 2;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Login card styling */
    .login-card {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
      padding: 30px;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    /* Heading styling */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

h1 {
  color: #fff;
  font-family: 'Poppins', sans-serif; 
  font-size: 3em;
  font-weight: bold;
  margin-bottom: 20px;
  background: linear-gradient(45deg, #ff4b2b, #ff416c); 
  -webkit-background-clip: text;
  color: transparent; 
  text-shadow: 2px 4px 6px rgba(0, 0, 0, 0.3); 
  letter-spacing: 1px;
  text-align: center;
}


    /* Input and button styles */
    .form-control {
      border-radius: 10px;
      background-color: #F3F3F3;
    }

    .btn-primary {
      background-color: #D2F015;
      border: none;
      font-weight: bold;
      color: #333;
      border-radius: 20px;
      padding: 10px 20px;
    }

    .btn-primary:hover {
      background-color: #b5cc12;
      color: #fff;
    }
  </style>
</head>

<body>
  <!-- Animated background -->
  <div id="particles-js"></div>

  <!-- Container with login form -->
  <div class="container">
    <div class="login-card">
      <h1>Blood Bank & Donation Management<br>  Admin Login Portal</h1>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label class="font-weight-bold">Username <span style="color:red">*</span></label>
          <input type="text" name="username" placeholder="Enter your username" class="form-control" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">Password <span style="color:red">*</span></label>
          <input type="password" name="password" placeholder="Enter your Password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>

        <!-- PHP code for login validation -->
        <?php
          include 'conn.php';
          if (isset($_POST["login"])) {
            $username = mysqli_real_escape_string($conn, $_POST["username"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);

            $sql = "SELECT * FROM admin_info WHERE admin_username='$username' AND admin_password='$password'";
            $result = mysqli_query($conn, $sql) or die("Query failed.");

            if (mysqli_num_rows($result) > 0) {
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION["username"] = $username;
              header("Location: dashboard.php");
            } else {
              echo '<div class="alert alert-danger mt-3">Username and Password are not matched!</div>';
            }
          }
        ?>
      </form>
    </div>
  </div>

  <!-- Particles.js library -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!-- Configuration for particles -->
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 100,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          }
        },
        "opacity": {
          "value": 0.5,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "repulse"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>
</body>
</html>
