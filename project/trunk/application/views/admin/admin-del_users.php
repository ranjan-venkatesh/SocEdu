<!--<div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li  ><a href="adminadd_users">Add Data</a></li>
            <li class="active"><a href="admindelusers">Delete Data</a></li>
          </ul>
          
        </div>
      </div>-->
<form method="POST" action="" id="myform">
<div id="mydiv" class="mydiv col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
            </div>
</form>
<script type="text/javascript">var usersList = <?php echo json_encode($users); ?></script>       
<script type="text/javascript" src="/public/js/admin-del_users.js"></script>
