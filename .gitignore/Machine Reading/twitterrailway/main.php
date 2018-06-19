<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/login.css" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">

	<div class="row">
		<h2 class="text-center">Feedback Analysis</h2>

	</div>
	<div class="row">
		<button type="button" class="btn btn-info" style="margin-bottom: 10px; margin-left: 90%;" onclick="refresh();" ><span class="glyphicon glyphicon-refresh" ></span>  Refresh</button>

	</div>
    
        <div class="row">
		
            <div class="col-md-12">
            
            
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
              <th>S.NO</th>
							<th>Feedback</th>
							<th>Status</th>
							<th>Feedback_time</th>
						</tr>
					</thead>


					<tbody id="addmainentity">
						
                           
					</tbody>
				</table>

	
	</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Status</h4>
      </div>
          <div class="modal-body" id="editstatus">
          
        <div class="form-group">
        <select class="selectpicker" required style="margin-right: 10px; margin-bottom: 10px; margin-left: 40px; margin-top: 20px" id="changed_status" >MArks
        <option value="Not_Approved">Change Status</option> 
        <option value="Intiated">intiated</option>
        <option value="Processing">processing</option>
        <option value="Completed">Completed</option>
        </select>
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-success" style="width: 100%;" onclick="changestatus();"><span class="glyphicon glyphicon-ok-sign" ></span> Synchronize</button>
      </div>
        </div>
   
  </div>
       
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Select Department</h4>
      </div>
          <div class="modal-body" id="editstatus">
          
        <div class="form-group">
        <select class="selectpicker" required style="margin-right: 10px; margin-bottom: 10px; margin-left: 40px; margin-top: 20px" id="Department" >MArks
        <option value="Not_Approved">Select Department</option> 
        <option value="Engineering Department">Engineering Department</option>
        <option value="Electrical Engineering Department">Electrical Engineering Department</option>
        <option value="Signal & Telecommunication Engineering Department">Signal and Telecommunication Engineering Department</option>
        <option value="Operating and Traffic (Transportation) Department">Operating and Traffic (Transportation) Department</option>
        <option value="Commercial Department">Commercial Department</option>
        <option value="Medical Department">Medical Department</option>
        <option value="Stores Department">Stores Department</option>
        <option value="Personnel Department">Personnel Department</option>
        <option value="Security Department">Security Department</option>
        </select>
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-success" style="width: 100%;" onclick="deptselection();"><span class="glyphicon glyphicon-ok-sign" ></span> GET DATA</button>
      </div>
        </div>
   
  </div>
       
    </div>
    
    </body>
    <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
  </script>
<script type="text/javascript">
  function deptselection() {
    var id = document.getElementById("Department").value;
    var ajdata={id:id};
    ajaxcall2(ajdata);
     $('#myModal').modal('hide');

  }
    
	function ajaxcall2(data){
    console.log("ajaxcall");
                $.ajax({ 

               type:"POST",
               url:'retrivedata.php',
               //dataType="JSON",
               data : data,
               async : false,               //data format      
                success: function(data)          //on recieve of reply
                { var sno =0;
                  data = JSON.parse(data);
                  console.log(data);
                    for(var i=0;i<=data.length;i++){
                      sno=sno+1;
                     var name   = data[i]["name"];
                     var  text = data[i]["text"];
                     var  Status = data[i]["status"];
                     var  created_at = data[i]["created_at"];
                     $("#addmainentity").append('<tr> <td>'+sno+'</td>   <td><input id="text'+i+'" type="text" name="usrname" value="'+text+'" hidden>'+text+'</td> <td><input id="marks'+i+'" type="text" name="usrname" value="'+Status+'" hidden>'+Status+' <button type="button" style="margin-left: 30px;"class="btn btn-info" data-toggle="modal" data-target="#edit" onclick="editstatus('+i+');"><span class="glyphicon glyphicon-edit"></span></button></td> <td><input id="created_at'+i+'" type="text" name="usrname" value="'+created_at+'" hidden>'+created_at+'</td</tr>');
                    }
                } 
             });
      }

      function changestatus() {
        var created_at = document.getElementById("create_status").value;
        var changed_status = document.getElementById("changed_status").value;
        var ajaxdata={status:changed_status,created_at:created_at};
        console.log(ajaxdata);
        ajaxcall(ajaxdata);
         location.reload();
      }
      function ajaxcall(data) {
      
      $.ajax({
               type:"POST",
               url:'updatestatus.php',
               // dataType="JSON",
               data : data,
               async : false,
               success: function(data){
               console.log(data);
               }
         });  
      }

      function editstatus(data) {
        var created_at = document.getElementById("created_at"+data).value;
        $("#editstatus").append('<input id="create_status" type="text" name="usrname" value="'+created_at+'" hidden>');
      }
        function refresh() {
       $.ajax({
               type:"POST",
               url:'Feedback.php',
               // dataType="JSON",
               // data : data,
               async : false,
               success: function(data){
               console.log(data);
               location.reload();
               }
         });
     }
</script>
</html>