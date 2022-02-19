-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2022 at 02:09 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrabotuvanje_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int UNSIGNED NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `select` int NOT NULL,
  `companyname` varchar(64) NOT NULL,
  `contactphone` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fullname`, `email`, `select`, `companyname`, `contactphone`) VALUES
(1, 'Dejan Ilkovski', 'ilkovski@gmail.com', 2, 'dejankompani', '078 222 555');

-- --------------------------------------------------------

--
-- Table structure for table `select_type`
--

CREATE TABLE `select_type` (
  `id` int NOT NULL,
  `type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `select_type`
--

INSERT INTO `select_type` (`id`, `type`) VALUES
(1, 'Студенти од маркетинг'),
(2, 'Студенти од програмирање'),
(3, 'Студенти од data science'),
(4, 'Студенти од дизајн');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `select` (`select`);

--
-- Indexes for table `select_type`
--
ALTER TABLE `select_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`<?php

// Connection to DataBase
$host = "192.168.0.26";
$username = "root";
$password =  "1234";
$database = "employment_form";

$conn = new mysqli($host, $username, $password, $database);

$fullname = $email = $selection = $company_name = $contact_phone = " ";

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

function selectionCheck($selection){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($selection == '0'){
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
$selection = $_POST['selection']; 
$company_name = $_POST ['company_name'];
$contact_phone = $_POST ['contact_phone'];
$insertData = "INSERT INTO form (fullname, email, selection, companyname, contactphone)
VALUES ('$fullname', '$email', '$selection', '$company_name', '$contact_phone')";

  if ($conn->query($insertData) === TRUE){
    header("Location:redirect_page.html");
  }
  else {
  }
}

    if ($conn->connect_error) {
      echo "ERROR connecting to server...";
    } else {
      
    }
?>
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`select`) REFERENCES `select_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
