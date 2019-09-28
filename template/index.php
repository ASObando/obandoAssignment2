<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>XKCD comic generator</title>
  <link href="https://use.fontawesome.com/f1c966bcb4.css" media="all" rel="stylesheet"></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-toggler navbar-brand" href="https://anthony-obando-assignment2.herokuapp.com/"><i class="fa fa-2x fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
         <li class="nav-item"><a class="nav-link" tabindex="-1" href="https://anthony-obando-assignment2.herokuapp.com/">Home</a></li><li class="nav-item"><a class="nav-link" tabindex="-1" href="https://anthony-obando-assignment2.herokuapp.com/?page=comic">Random Comic</a></li>        </ul>
      </div>
    </nav>
<?php
include 'content/home.phtml';
?>
<nav class="navbar fixed-bottom navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Fixed bottom NavBar to get back to where you need</a>
    </nav>
</body>
</html>