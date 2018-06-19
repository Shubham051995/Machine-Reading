<html>
<head>
<title>
Indian Railway
</title>
</head>
<style>
.header{
background-image:url('top.jpg');
width:100%;
height:100px;}

.pan{
background-color:#33ff33;
width:100%;
margin-top:20px;
height:20px;}

select.full{
width:100%;
}

select.short{
width:33%;
}

input[type="date"]{
width:50%;

}
input[type="time"]{
width:48%;
}
input[type="submit"]{
color:white;
background-color:blue;
}

body{
	
}
</style>
<body>
<div class="mid" >

</div>
<div class="header">

</div>
<form action="form.php" method="post">
<div class="pan">
<h4 style="color:white;">Complaint:</h4>
</div>
Name:
<input type="text" name="name" style="width:100%;" required>
<div class="pan">
<h4 style="color:white;">Complaint Description:(Max 256 char)</h4></div>
<input type="textarea" name="text" style="width:100%; height:50px; margin-top:15px;" required>
<div class="pan">
<h4 style="color:white;">Complaint Details:</h4></div>
Complaint/Feedback/Suggestions:
<select name="mySelect" class="full" required>
<option>--Select Here--	</option>
<option value="Medical Department">Accident Claims	</option>
<option value="Commercial Department">Allotments of seats - Berths by train staff</option>
<option value="Stores Department">Bedroll Complaints</option>
<option value="Commercial Department">Booking of luggage/Parscels/goods	</option>
<option value="Personnel Department">Bribery & Corruption</option>
<option value="Stores Department">Catering and Vending services	</option>
<option value="Engineering Department">Cleanliness at stations	</option>
<option value="Personnel Department">Improper behaviour of staff 	</option>
<option value="Engineering Department">Maintenance/cleanliness of coaches	</option>
<option value="3">Malfunctioning of electrical equipments 	</option>
<option value="Engineering Department">Non-availability of water sub</option>
<option value="Commercial Department">Passenger booking</option>
<option value="Operating and Traffic (Transportation) Department">Punctuality of train</option>
<option value="Commercial Department">Refund of tickets</option>
<option value="Commercial Department">Reservations issues</option>
<option value="Security Department">Security	</option>
<option value="Security Department">Theft/Pilferages	</option>
<option value="Commercial Department">Unauthorised passengers in coaches	</option>
<option value="	Signal & Telecommunication Engineering Department">WIFi services</option>
<option value="Electrical Engineering Department">Working of enquiry offices	</option>
</select>
Reporting Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time:<br>
<input type="date" name="created_date" required/>
<input type="time" name="created_time" />
<br/>
<input type="submit" value="Submit" style="margin-left:43%;">
</form>
</body>
</html>