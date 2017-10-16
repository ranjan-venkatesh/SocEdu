<div class="container" style="padding: 63px 120px;">
            <div class="header">
                <div class="jumbotron">
                    <h1 style="color: #269abc">My Profile</h1>
                    <div style="float: left">
                        <img src="public/img/R.png" alt=" " height="140px" width="140px">
                    </div>
                    
                        <div class="profile" style="padding-left: 150px;"></div>
                        <p style="padding-left: 150px;"><a class="btn btn-lg btn-primary" href="profileedit" role="button" ><span style=" padding: 5px 5px;">Edit</span></a></p>
                    
                </div>
            </div>
        </div>
<script type="text/javascript">
        var datafeeds = <?php echo json_encode($data); ?>
</script>
<script type="text/javascript" src="/public/js/profile.js"></script>
