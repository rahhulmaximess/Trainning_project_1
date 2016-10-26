<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('templates/head-content.html') ?>
  <style type="text/css">
    .a ul{      
      list-style: none;
      text-align: left;
      padding-left: 0;
    }
    .a ul li{
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
    }
    .a ul li:hover{
      background:#c1d6db;
    }
    a{
      font-size: 15px;
      text-decoration:none;
      color: #719fac;
      cursor: pointer;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<section>
  <div class="container">
    <div class="row" style="background:whitesmoke;padding-top:3em;padding-bottom:3em;">
      <div class="a col-sm-3 text-center" style="border-right:1px solid grey">
          <img style="width:150px;border-radius:50%" src="images/default_user.jpg"><br>
          <a data-toggle="modal" data-target="#myModal">Change profile picture</a>
          <h3>User's Name</h3>
          <ul>
            <li><a href="">Edit Profile</a></li>
            <li><a href="">Delete Profile</a></li>
          </ul>
      </div>
      <div class="col-sm-9" style="border-left:1px solid grey">
        <div class="col-sm-12">
          <br>
          <h4>General Information</h4><hr>
          <div class="col-sm-6">
            <br><label>First Name :</label><input class="form-control" readonly value="">
            <br><label>Father's Name :</label><input class="form-control" readonly value="">
            <br><label>Gender :</label><input class="form-control" readonly value="">
          </div>
          <div class="col-sm-6">
            <br><label>Last Name :</label><input class="form-control" readonly value="">
            <br><label>Mother's Name :</label><input class="form-control" readonly value="">
            <br><label>Date of birth :</label><input class="form-control" readonly value="">
          </div>
        </div>


        <div class="col-sm-12">
          <br>
          <h4>Contact Information</h4><hr>
          <div class="col-sm-6">
            <br><label>Email Address :</label><input class="form-control" readonly value="">
            <br><label>Phone Number :</label><input class="form-control" readonly value="">
            <br><label>City :</label><input class="form-control" readonly value="">
            <br><label>Country :</label><input class="form-control" readonly value="">
          </div>
          <div class="col-sm-6">
            <br><label>Mobile Number :</label><input class="form-control" readonly value="">
            <br><label>State :</label><input class="form-control" readonly value="">
            <br><label>Pincode :</label><input class="form-control" readonly value="">
          </div>
        </div>


        <div class="col-sm-12">
          <br>
          <h4>Educational Information</h4><hr>
          <div class="col-sm-6">
            <br><label>Educational (Degree) :</label><input class="form-control" readonly value="">
            <br><label>Board / University :</label><input class="form-control" readonly value="">
          </div>
          <div class="col-sm-6">
            <br><label>Year of Passing :</label><input class="form-control" readonly value="">
          </div>
        </div>


        <div class="col-sm-12">
          <br>
          <h4>Other Information</h4><hr>
          <div class="col-sm-6">
            <br><label>Nationality :</label><input class="form-control" readonly value="">
            <br><label>Physical Disability :</label><input class="form-control" readonly value="">
          </div>
          <div class="col-sm-6">
            <br><label>Religion :</label><input class="form-control" readonly value="">
            <br><label>Disability Discription :</label><input class="form-control" readonly value="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

