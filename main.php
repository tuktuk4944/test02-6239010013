<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Student Information</h1>
    </div>
</div>
<!-- ... Your content goes here ... -->
<div class="row">
    <form action="" class="form-horizontal" id="frmStudent">
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/students/0.jpg" alt="" id="imgStudent">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="code" class="control-label col-md-2">เลขประจำตัว:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="txtStudentCode" placeholder="ใส่เลขประจำตัวแล้วคลิก ค้นหา หรือกด Enter">
                </div> 
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i> ค้นหา
                    </button>
                </div>               
            </div>
            <div class="form-group">
                <label for="firstname" class="control-label col-md-2">ชื่อ:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="txtFirstName">
                </div>                
            </div>
            <div class="form-group">
                <label for="lastname" class="control-label col-md-2">นามสกุล:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="txtLastName">
                </div>                
            </div>
            <div class="form-group">
                <label for="department" class="control-label col-md-2">แผนกวิชา:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="txtDepartment">
                </div>                
            </div>
            <div class="form-group">
                <div class="col-md-9 col-md-offset-2">                   
                    <button type="reset" class="btn btn-danger">
                        รีเซต
                    </button>
                </div>                
            </div>
        </div>        
    </form>
</div>
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Academic Performance</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary" id="panel-gpa">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-graduation-cap fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge" id="gpa">x.xx</div>
                        <div class="">GPA</div>
                    </div>
                </div>                
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left" id="honor">Honor: </span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>            
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-green" id="panel-compre">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-stack-overflow fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" id="passCompre">????</div>
                            <div>Comprehensive Exam</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-yellow" id="panel-english">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" id="englishLevel">??</div>
                            <div>English Proficiency</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left" id="englishScore">Score: </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
        </div>
    </div>
</div>