<html lang="en">

<head>
  <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Register Here</title>
  <style>
    *{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	font-family: century gothic, segoe ui;
}
body{
	background-color: #eee;
}
.main{
	width: 400px;
	background-color: #ccc;
	margin: 75px auto;
	border: 2px solid #fff;
	box-shadow: 0 0 20px #000;
}
.header{
	width: 100%;
	text-align: center;
	font-weight: bold;
	padding: 10px;
	background-color: #c13;
	color: #fff;
	font-size: 18px;
}
#frmBox{
	padding: 10px;
}
.inp{
	width: 100%;
	padding: 8px;
	font-size: 17px;
	margin-bottom: 8px;
	border: 1px solid #c77;
	border-radius: 2px;
	color: #c13;
}
::-webkit-input-placeholder{
	color: #c78;
}
.inp:focus{
	outline: none;
	box-shadow: 0 0 6px #c55;
}
.sub-btn{
	width: 100%;
	border: none;
	padding: 7px;
	font-size: 18px;
	background-color: #c12;
	color: #fff;
	cursor: pointer;
	border-radius: 2px;
}
.sub-btn:focus{
	outline: none;
}
.sub-btn:hover{
	background-color: #c44;
}
#success{
	width: 100%;
	text-align: center;
	color: #c04;
	margin-top: 10px;
	font-size: 18px;
}
    
    </style>
   
    
    
</head>

<body>
  <div class="main">
    <div class="header">REGISTER..!!!</div>
    <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();">
      <input type="text" name="name" class="inp" placeholder="Enter Name..." required>
       <input type="text" name="lastname" class="inp" placeholder="Enter your lastname " required>
       <input type="text" name="rollno" class="inp" placeholder="Enter your rollno " required>
        <label for="branch">Branch</label>
            <select class="inp" name="branch" id="branch">
              <option value="it">IT</option>
              <option value="comps">Computer Science</option>
              <option value="mech">Mechanical</option>
              <option value="extc">EXTC</option>
              <option value="elect">Electrical</option>
            </select>
        <label for="semester">Semester</label>
            <select class="inp" name="semester" id="semester">
              <option value="1">I</option>
              <option value="3">III</option>
              <option value="5">V</option>
              <option value="7">VII</option>
            </select>
      <input type="email" name="email" class="inp" placeholder="Enter Email..." required>
      <input type="text" name="phone" class="inp" placeholder="Enter Phone..." required>
      <input type="text" name="pass" class="inp" placeholder="Enter Password..." required>
      <input type="submit" name="submit" class="sub-btn" value="Submit">
      <h3 id="success"></h3>
    </form>
  </div>
  
  
   <script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    function formSubmit(){
        $.ajax({
            type:'POST',
            url:'insert.php',
            data:$('#frmBox').serialize(),
            success:function(response){
              $('#success').html(response);  
            }
            
            
        });
        
        var form = document.getElementById('frmBox').reset();
        return false;
        
    }
    
    
    
    </script>
  
   
   
  
</body>

</html>