<!--<div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active" ><a href="adminmyclass">Add Data</a></li>
            <li><a href="admindelclass">Delete Data</a></li>
          </ul>
          
        </div>
      </div>-->        
        <div id="mydiv" class="col-sm-6 " style="padding-left: 300px;">
            <h3 style="color: grey;text-align: center">Input MyClass Links</h3>
            <form class="text-center" role="form" action="" method="POST">
 <table style="text-align: left; width: 100%;padding-right: 60px;  " class="col-sm-4">
                                <tr>
                                    <td style="width: 50%; text-align: right"><label for="sltcourse">Course</label></td>
                                    <td style="text-align: left">
                                        <select name="sltcourse" id="sltcourse" style="width: 50%" class="validate[required]">
                                            <option value="">--Select--</option>
                                            <option value="1">B.E.</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%; text-align: right"><label for="sltcombination">Combination</label></td>
                                    <td style="text-align: left">
                                        <select name="sltcombination" id="sltcombination" style="width: 50%" class="validate[required]">
                                            <option value="">--Select--</option>
                                            <option value="">Information Science</option>
                                            <option value="2">Computer Science</option>
                                            <option value="3">Civil</option>
                                            <option value="4">Mechanical</option>
                                            <option value="5">Electronics</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><label for="sltyear">Year</label></td>
                                    <td style="text-align: left">
                                        <select name="sltyear" id="sltyear" style="width: 50%" class="validate[required]">
                                            <option value="">--Select--</option>
                                            <option value="1">First year</option>
                                            <option value="2">Second year</option>
                                            <option value="3">Third year</option>
                                            <option value="4">Final year</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </table>
                <br/>
                <input id="title" name="title" type="text" class="form-control" placeholder="Enter Title" required autofocus>
                <input id="link" name="link" type="text" class="form-control" placeholder="Enter Link" required autofocus>
                <button class="check btn btn-sm btn-primary " id="check" onclick="alert('Record Added!!')" name="check" type="submit" >Submit</button>
                 </form>

        </div>
             
           <!--   <div id="mydiv" class="col-sm-6" style="padding-left: 150px;padding-right: 150px;">
            <h3 style="color: grey;text-align: center">Delete MyClass Links</h3>
            <form class="text-center" role="form" action="">
 <table style="text-align: left; width: 100%;padding-right: 60px;  " class="col-sm-4">
                                <tr>
                                    <td style="width: 50%; text-align: right"><label for="sltcourse">Course</label></td>
                                    <td style="text-align: left">
                                        <select id="sltcourse" style="width: 50%" class="validate[required]">
                                            <option value="">--Select--</option>
                                            <option value="1">B.E.</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%; text-align: right"><label for="sltcombination">Combination</label></td>
                                    <td style="text-align: left">
                                        <select id="sltcombination" style="width: 50%" class="validate[required]">
                                            <option value="">--Select--</option>
                                            <option value="1">Information Science</option>
                                            <option value="2">Computer Science</option>
                                            <option value="3">Civil</option>
                                            <option value="4">Mechanical</option>
                                            <option value="5">Electronics</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><label for="sltyear">Year</label></td>
                                    <td style="text-align: left">
                                        <select id="sltyear" style="width: 50%" class="validate[required]">
                                            <option value="">--Select--</option>
                                            <option value="1">First year</option>
                                            <option value="2">Second year</option>
                                            <option value="3">Third year</option>
                                            <option value="4">Final year</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </table>
                <br/>
                <input type="text" class="form-control" placeholder="Enter Title" required autofocus>
                
               
                 <button class="btn btn-sm btn-primary " type="submit" style="alignment-adjust: central">Submit</button>
            </form>-->
        </div>
      
          <br/><br/><br/>
         <!-- <p style="padding-left: 300px;">hello</p>-->
   <script type="text/javascript" src="/public/js/admin.js"></script>
 
