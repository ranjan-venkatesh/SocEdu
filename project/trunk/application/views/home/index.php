<div class="jumbotron">
    <div class="blog-header">
        <h1 class="blog-title" style="color: #269abc">Welcome <?php echo $_SESSION['username'];?></h1></div>
        <!--<p class="lead blog-description"><?php echo $_SESSION['username'];?></p>-->
      </div>
<div class="container" style="padding: 27px 15px;">
    <input type="text" class="form-control" id="newfeed" name="newfeed" placeholder="Twirp Something..">
    <input type="button" class="btn btn-primary comment_button" style="float: right" id="comment_button" name="comment_button" value="POST">
    <br/>
    <div id="flash"></div>
    <div id="display">
        <div class="news" style="padding: 15px 20px;">
        </div>
    </div>
</div>


<script type="text/javascript">
    var newsfeeds = <?php echo json_encode($feeds); ?>
    
   // var tauthor = ?php echo $feeds['author']; ?>
    //var tdate = ?php echo $feeds['date_time']; ?>
    //var tcontent = ?php echo $feeds['content']; ?>
</script>
<script type="text/javascript" src="/public/js/index.js"></script>
