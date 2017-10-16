<div class="jumbotron">
                <div>
                    <h1 style="color: #269abc">Learn At Your Comfort</h1>
                    <p class="lead">Just select your choice of subject and the course you wanna learn,and there you go!!Learn easily at your fingertips!! </p>
                </div>
            </div>
<div class="container" style="padding: 57px 15px;">
<div class="col-md-10 container">
    <div class="row">
        <div class="col-sm-12">
            
        </div>
    </div>
    <div class="row" style="padding-bottom: 10px;">
        <form id="frmClassRoom" action="">
            <div class="col-sm-4">
                <label for="sltcourse">Course</label>
                <select id="sltcourse" style="width: 50%" class="validate[required]">
                    <option value="">--Select--</option>
                    <option value="1">B.E.</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="sltcombination">Combination</label>
                <select id="sltcombination" style="width: 50%" class="validate[required]">
                    <option value="">--Select--</option>
                    <option value="1">Information Science</option>
                    <option value="2">Computer Science</option>
                    <option value="3">Civil</option>
                    <option value="4">Mechanical</option>
                    <option value="5">Electronics</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="sltyear">Year</label>
                <select id="sltyear" style="width: 50%" class="validate[required]">
                    <option value="">--Select--</option>
                    <option value="1">First year</option>
                    <option value="2">Second year</option>
                    <option value="3">Third year</option>
                    <option value="4">Final year</option>
                </select>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="after-header">
            <div class="vidlinks">
            
            </div>
        </div>
    </div>
</div>
<div class="sidebar-module sidebar-module-inset col-sm-2">
    <h4>Links And Downloads</h4>
    
        <div class="list-unstyled">
            <div class="links">
                
            </div>   
        </div>
    
    
</div>
</div>
<script type="text/javascript">
  var c = <?php echo $c;?>;
  var clsvids = <?php echo json_encode($clsvids);?>
</script>
<script type="text/javascript" src="/public/js/classroom.js"></script>
