
<div class="container" style="padding: 63px 120px;">
    <div class="header">
        <div class="jumbotron">
            <h1 style="color: #269abc">My Profile</h1>
            <div style="float: left">
                <img src="public/img/R.png" height="140px" width="140px" alt=" ">
            </div>
            <div style="padding-left: 150px;">
                
                    <form class="form-group" method="POST" action="" id="frmprof">
                <div class="profileedit">        
                </div>
                    </form>
                
                <p><a type="submit" value="save" id="submit" name="submit" class="btn btn-lg btn-primary" role="button" ><span style="padding: 5px 5px;">Save</span></a></p>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    var datafeeds = <?php echo json_encode($data); ?>
</script>
<script type="text/javascript" src="/public/js/profile-edit.js"></script>