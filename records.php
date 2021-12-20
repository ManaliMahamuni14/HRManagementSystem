<html>
<head>
  <style>
  table{

    border-collapse: collapse;
    width: 70%;
    height: 30px;
    color: black;
    font-family: Arial;
    font-size: 20px;
    text-align: center;
    margin-left: 5%;
    margin-top: 10%;
  }
  th{
    background-color: grey;
  }
  tr:nth-child(even){background-color: lavender}
</style>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color:darkred;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  font-size: 15px;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: darkred;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<title>HR Recruitment Management System</title>
	<body>
    <ul>
      <li><a><br>Admin<br>admin@gmail.com</a></li>
      <li><a class="active" href="home.html">Dashboard</a></li>
      <li><a href="records.php">Records</a></li>
      <li><a href="#Home">Application Tracking</a></li>
      <li><a href="#Home">Appointment Scheduling</a></li>
      <li><a href="#Home">Job Posting</a></li>
      <li><a href="#Home">Contact Us</a></li>
      <li><a href="#login">Login</a></li>
      <li><a href="#login">Sign Up</a></li>
    </ul>
    <div style="margin-left: 16%;padding: 1px 16px;padding-top: 30px;height: 1000px;font-size: 25px;">
      <p>Employee Records</p>
      <hr></hr>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;font-size: 20px;margin-right:10%;margin-top:20px;">Add Record</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
       <label for="uname" style="font-size: 20px;"><b>Emp-ID</b></label>
      <input type="text" placeholder="IT Trainee" name="design" required style="width: 20%;">
      <label for="uname" style="font-size:20px"><b> EmpName</b></label>
      <input type="text" placeholder="John" name="fname" required style="width: 20%;">
      <label for="position" style="font-size:20px"><b>Position</b></label>
      <input type="text" placeholder="IT Trainee" name="design" required style="width: 20%;">
      <center><button type="submit" style="width:20%; background-color: darkgreen;">Submit</button></center>
      <br>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <center><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="width:20%">Cancel</button></center>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

      <table>
    <tr>
      <th>Employee_ID</th>
      <th>Employee_Name</th>
      <th>Employee_Designation</th>
      <th>Operation</th>
      <th></th>
    </tr>
      <?php 
$conn = mysqli_connect("localhost","root","","emp_detail");
//check connection
if($conn->connect_error){

  die("connection failed:".$conn->connect_error);
}

$sql = "Select * from employee";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
  //output data of each row

  while ($row = $result->fetch_assoc()) {
    
    echo "<tr>
        <td>".$row["EmpID"]."</td>
        <td>".$row["EmpName"]."</td>
        <td>".$row["EmpDesign"]."</td>
        <td><input type=submit value=Update style=float:right;background-color:darkgreen;color:white;font-size:15px;><input type=submit value=Delete style=float:right;background-color:darkred;color:white;font-size:15px;></td>
      </tr>";
  }

  echo "</table>";
}

else  {echo "0 results";}
$conn->close();
?>
</table>

</div>
</body>
</head>
</html>