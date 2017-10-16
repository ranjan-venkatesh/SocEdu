<!--<div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active" ><a href="adminadd_users">Add Data</a></li>
            <li><a href="admindelusers">Delete Data</a></li>
          </ul>
          
        </div>
      </div>        -->
<div id="mydiv" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h3 style="color: grey">Input Users</h3>
    <form class="text-center" role="form" action="" method="POST">
        <input type="email" name="username" id="username" class="username form-control" placeholder="Enter Username" required autofocus>
        <input type="text" name="password" id="password" class="password form-control" placeholder="Enter Password" required autofocus>
        <button class="btn btn-sm btn-primary " id="submit" name="submit" type="submit" onclick="alert("User Added");" >Submit</button>
    </form>
        <br/>
      <!--  <h3 style="color: grey;text-align: left">Delete Users</h3>
        <form class="text-center" role="form" action="" method="POST">
            <input type="text" class="form-control" placeholder="Enter Username" required autofocus>
            <button class="btn btn-sm btn-primary " type="submit" >Submit</button>
        </form>-->
            </div>
            
            
            <script type="text/javascript" src="/public/js/admin.js"></script>
