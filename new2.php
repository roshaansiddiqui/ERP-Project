<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    </head>
    <body>
        <div class="container">
            <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width:70%"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button align="left" type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h4 class="modal-title">
                            	<i class="glyphicon glyphicon-list-alt"></i> Expense Form
                            </h4>
                            <a style="margin-left: 87%;" href="javascript: genPDF()" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-print"></i> PDF</a>
                       </div> 
                       <div class="modal-body" id="masterContent"> 
                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   <img src="images/ajax-loader.gif">
                       	   </div>
                           <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <div class="well panel panel-default" >
                                        <div class="panel-body">                                       
                                            <!-- content will be load here -->                          
                                            <div id="dynamic-content"></div>   
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div id="editor"></div>
                        <div class="modal-footer"> 
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                        </div> 
                    </div> 
              </div>
           </div>
        </div>         
        <div class="container loggedInContainer" align = "center">
            <div class="row">
                <div class="well panel panel-default" >
                    <div class="panel-body">
                        <div class="row" ><br><br>
                        <!-- Menu tabs are generated from bootstrap, the bootstap is included from the header.php file. -->
                            <ul class="nav nav-tabs nav-justified" id="homeTabs">
                                <li class="active"><a data-toggle="tab" href="#home"><h4>Home</h4></a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#myform"><h4>Expense Form</h4></a>
                                    <ul class="dropdown-menu" style="min-width: 100%;";>