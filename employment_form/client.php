 <?php

    // Connection to DataBase
    $host = "localhost";
    $username = "root";
    $password =  "1234";
    $database = "employment_form";
    
    $conn = new mysqli($host, $username, $password, $database);
    
      
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $select = $_POST['select']; 
    $companyname = $_POST ['companyname'];
    $contactphone = $_POST ['contactphone'];
    
    $sql = "INSERT INTO form (`fullname`, `email`, `select`, `companyname`, `contactphone`)
    VALUES ('$fullname', '$email', '$select', '$companyname', '$contactphone')";
    
    mysqli_query($conn, $sql);
    
    header("Registation Success");
    
    ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brainster Labs</title>

    <link rel="stylesheet" href="../assets/scss/main.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-warning">
    <div class="container client text-center position-absolute">
      <span class="d-block"><img src="../Design/Logo.png" alt="Brainster Logo" class=" w-25 py-5"></span>
      <span class="display-4 text-uppercase d-block client_text py-2 text-white-50">Ви благодариме</span>
      <span class="display-4 client_text text-uppercase d-block client_text pb-2 text-white-50">Brainster Labs</span>
      <span class="displa-4 text-uppercase d-block client_text pb-2 text-danger">Информациите беа успешно испратени.</span>
      <a href="../brainster_labs.html" class="h1 d-block text-decoration-none text-secondary client_text">Врати се на почеток</a>
    </div>

    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2ba8dc390d.js" crossorigin="anonymous"></script>
  </body>
</html>