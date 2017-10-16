<div class="container" style="padding: 60px 15px;">
    <div class="row">
        <div class="col-sm-10">
            <video controls style="width:640px;height:360px;" poster="">
                <source src="/public/media/videos/<?php echo $Video['fldName'];?>.mp4" 
                        type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
                <source src="/public/media/videos/<?php echo $Video['fldName'];?>.webm" 
                        type='video/webm;codecs="vp8, vorbis"' />
            </video>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div  class="comment-list">
                <ol class="comments">
                    <div class="comm" id="comm">
                    
                    </div>
                    <li>
                        <textarea rows="2" id="comment" name="comment" style="width: 100%"></textarea>
                        <input type="button" id="btnSubmit" name="btnSubmit" value="Post"/>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var VideoID = <?php echo $Video['fldMediaID'];?>;
var Comments = <?php echo json_encode($comments);?>
</script>
<script type="text/javascript" src="/public/js/tutorial.js"></script>