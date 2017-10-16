<!--<div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active" ><a href="adminmycollege">Add Data</a></li>
            <li id="del"><a href="adminmycollege/getFeeds">Delete Data</a></li>
          </ul>
          
        </div>
      </div>-->              
        <div id="mydiv" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 style="color: grey">Input News</h3>
            <form class="text-center"  action="" id="frmadmincoll" method="POST">
                <input id="title" name="title" type="text" class="form-control" placeholder="Title" required autofocus >
                <textarea id="content" name="content" cols="50" rows="5" style = "resize: none"  class="form-control" placeholder="Enter College News" required autofocus></textarea>
                <button class="check btn btn-sm btn-primary " id="check" onclick="alert('Record Added!!')" >Submit</button>
            </form>
                </div>
      
   
  <script type="text/javascript" src="/public/js/admin.js"></script>
  