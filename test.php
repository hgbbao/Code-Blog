<?php 
include "page/layout/Header.php";
include "include/Init.php";
?>
<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
    .container {
      width: 70%;
      max-width: 600px;
      margin: 0 auto;
    }
  </style>
</head>
<?php
$data_caterogy= $db->query("SELECT * FROM `caterogy` WHERE 1");
var_dump($data_caterogy);
echo $data_caterogy;
?>


<body>
  <br><br>
  <form action="" method="POST">
    <div class="container">
    Tiêu đề <input name="tieude">
    <select name="ca">
    <option value="" selected="selected">--Chọn--</option>
    <option value="1" >Cuộc sống</option>
    <option value="2">Tình yêu</option>
    <option value="3">Hôn nhân và gia đình</option>
    </select>
        <div id="editor">

        </div>
        <input type="submit">
    </div>
  </form>
			
    
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error)
        });
    </script>
    
			
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
include "page/layout/Footer.php";
?>