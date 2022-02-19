<?php

// Connection to DataBase
$host = "192.168.0.26";
$username = "root";
$password =  "1234";
$database = "employment_form";

$conn = new mysqli($host, $username, $password, $database);

$fullname = $email = $select = $company_name = $contact_phone = " ";

function fullnameCheck($fullname) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fullname"])) {
    $fullname = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
    return $fullname ;
  } else {

    }
  }
}

function emailCheck($email) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $email ;
    } else {
      
    }
  }
}

function selectionCheck($select){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($select == '0'){
      return "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
    }
    else {

    }
  }
}

function company_nameCheck($company_name) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["company_name"])) {
      $company_name = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $company_name ;
    } else {
      
      }
    }
  }

  function telephoneCheck($contact_phone) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["contact_phone"])) {
        $contact_phone = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
        return $contact_phone ;
      } else {
    
        }
      }
    }


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$selection = $_POST['select']; 
$company_name = $_POST ['company_name'];
$contact_phone = $_POST ['contact_phone'];
$insertData = "INSERT INTO form (fullname, email, selection, companyname, contactphone)
VALUES ('$fullname', '$email', '$select', '$company_name', '$contact_phone')";

  
}

    if ($conn->connect_error) {
      echo "ERROR connecting to server...";
    } else {
      
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вработи студент</title>
    <link rel="stylesheet" href="./assets/scss/main.css" />
  </head>

  <body class="body bg-warning">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning py-2">
      <div
        class="navbar-brand d-flex justify-content-center align-items-center d-inline-block flex-column logo ml-4"
      >
        <a href="index.html" class="text-black-50 align-self-center">
          <img src="./Design/Logo-resized.png" alt="" class="w-100 d-block" />
        </a>
        <h6 class="mb-0"><small class="font-weight-bold">BRAINSTER</small></h6>
      </div>
      <button
        class="navbar-toggler border-0"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <div class="navbar-toggler-inner"></div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pt-5 pt-lg-0">
          <li class="nav-item py-sm-3 ml-2">
            <a
              class="nav-link font-weight-bold p-lg-2 from-top ml-0 ml-lg-4 h6"
              href="https://brainster.co/marketing/"
              ><span>Академија за маркетинг</span></a
            >
          </li>
          <li class="nav-item py-3 ml-2">
            <a
              class="nav-link font-weight-bold p-lg-2 from-left ml-0 ml-lg-4 h6"
              href="https://brainster.co/full-stack/"
              ><span>Академија за програмирање</span></a
            >
          </li>
          <li class="nav-item py-3 ml-2">
            <a
              class="nav-link font-weight-bold p-lg-2 from-right ml-0 ml-lg-4 h6"
              href="https://brainster.co/data-science/"
              ><span>Академија за data science</span></a
            >
          </li>
          <li class="nav-item py-3 ml-2">
            <a
              class="nav-link font-weight-bold p-lg-2 from-bottom ml-0 ml-lg-4 h6"
              href="https://brainster.co/graphic-design/"
              ><span>Академија за дизајн</span></a
            >
          </li>
          <li class="nav-item py-3">
            <a
              href="./employment_page/employment_form.php"
              class="btn btn-danger text-white mx-4 mt-2 mx-lg-5 mx-md-5 py-2 button"
              ><span class="h5">Вработи наш студент</span></a
            >
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-12 heading text-center">
          <h1 class="display-3">Вработи студенти</h1>
        </div>
      </div>
      <div class="container">
        <form method="POST">
          <div class="row">
            <div class="col-12 col-md-6 py-2">
              <label for="name" class="font-weight-bold">Име и презиме</label>
              <?php echo fullnameCheck($fullname); ?>
              <input
                type="text"
                name="fullname"
                id="fullname"
                class="form-control p-4"
                placeholder="Вашето име и презиме "
                aria-describedby="helpId"
                required
              />
            </div>

            <div class="col-12 col-md-6 py-2">
              <label for="company" class="font-weight-bold">Име на компанија</label>
              <?php echo company_nameCheck($company_name)?>
              <input
                type="text"
                name="company_name"
                id="companyname"
                class="form-control p-4"
                placeholder="Име на вашата компанија"
                aria-describedby="helpId"
                required
              />
            </div>

            <div class="col-12 col-md-6 py-2">
              <label for="email" class="font-weight-bold">Контакт имејл</label>
              <?php echo emailCheck($email);?>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control p-4"
                value=""
                placeholder="Контакт имејл на вашата компанија"
                required
              />
            </div>

            <div class="col-12 col-md-6 py-2">
              <label for="tel" class="font-weight-bold">Контакт телефон</label>
              <?php echo telephoneCheck($contact_phone)?>
              <input
                type="tel"
                name="contact_phone"
                id="contactphone"
                class="form-control p-4"
                minlength="9"
                placeholder="Контакт телефон на вашата компанија"
                required
              />
            </div>

            <div class="col-12 col-md-6 py-2">
              <label for="select" class="font-weight-bold">Тип на студенти</label>
              <?php echo selectionCheck($selection)?>
              <div class="form-group">
                <div class="custom-select mb-4">
                  <select
                    class="form-control select"
                    name="select"
                    id="select"
                    required
                  >
                    <option value="0">Изберете тип на студент</option>
                    <option value="Студент од маркетинг">
                      Студент од маркетинг
                    </option>
                    <option value="Студент од програмирање">
                      Студент од програмирање
                    </option>
                    <option value="Студент од data science">
                      Студент од data science
                    </option>
                    <option value="Студент од дизајн">Студент од дизајн</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 pt-sm-0 pt-md-4 mt-md-3">
              <label for="submit" class="label-hide ">label</label>
              <button
                type="submit"
                id="submit"
                name="submit"
                value="испрати"
                class="btn btn-danger btn-block text-uppercase font-weight-bold"
              >
                Испрати
                
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <footer>
      <div class="container-fluid text-center text-white bg-dark">
        <div class="row">
          <div class="col-md-12 pt-3">
            <p>Изработено со &#10084; од студентите на Brainster</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/form.js"></script>
    <script>
      document.getElementsByClassName("custom-select")[0].style.border = "0px";
      document.getElementsByClassName("custom-select")[0].style.background =
        "translatent";
      document.getElementsByClassName("custom-select")[0].style.height = "auto";
      document.getElementsByClassName("custom-select")[0].style.display =
        "block";
      document.getElementsByClassName("custom-select")[0].style.width = "auto";
      document.getElementsByClassName("custom-select")[0].style.padding = "0px";
      document.getElementsByClassName("custom-select")[0].style.background =
        "none";
    </script>
  </body>
</html>
