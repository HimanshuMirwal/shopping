l<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">

<script>
	function xyz(value)
{
	//alert("hello");
	var login=document.getElementById("log").value;
	var pass=document.getElementById("pass").value;
	var no=document.getElementById("no").value;
	var email=document.getElementById("email").value;
	var len = no.length;
	alert(len);
	//alert(login+"   "+pass);
	if(login.length<= 1)
	{
		value="signup.php";
		alert("please enter the user name");
		//document.getElementById("msg1").innerHTML="*";
		//document.getElementById("msg1").style="color:red";
	}
	else
	if(pass <= 1)
	{
		value="signup.php";
		alert("please enter the password");
		//document.getElementById("msg2").innerHTML="*";
		//document.getElementById("msg2").style="color:red";
	}
	else
	if(no <= 1)
	{
		value="signup.php";
		alert("please enter the mobile number");
		//document.getElementById("msg2").innerHTML="*";
		//document.getElementById("msg2").style="color:red";
	}
	else
	if(len > 10)
	{
		value="signup.php";
		alert("plaese enter the correct mobile number");
	}
	else
	if(len < 10)
	{
		value="signup.php";
		alert("plaese enter the correct mobile number");
	}
	else
	/*if(email == "")
	{
		value="signup.php";
		alert("please enter the email");
		//document.getElementById("msg2").innerHTML="*";
		//document.getElementById("msg2").style="color:red";
	}
	else */
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) //here !() is customize 
  {
    //return (true)
	
	 value='signup.php';
    alert("You have entered an invalid email address!")
  }
  else
  {
	  	value="hold.php";
		document.login_form.action=value;
		document.login_form.submit();
   // return (false)
	}
	
	//if(pass != "" && login != "" && email != "" && no != "")
	
	/*else
	{
		value="hold.php";
		document.login_form.action=value;
		document.login_form.submit();
	}*/
	
}

</script>
</head>

<body>
<div id="wrap">

	<div id="top">
    	<div id="top_left" style="float:left"><h1>ONLINE SHOP</h1></div>
    	<div id="top_right" style="float:right">
        			<!--
                    	<tr >
                        	<th id="login" onMouseOver="abc1()" onMouseOut="xyz1()">LOGIN</th>--><table >
                            <th  id="sign" onMouseOver="abc2()" onMouseOut="xyz2()"><a href="login.php">LOGIN</a></th>
                        </tr>
                    </table>
       	</div>
    </div>
    
    
    <div id="mid">
    		
       <div id="mid_one">
          
 	         <div  style="height:400px ; width:1200px;
    	       border:2px solid;border-color:#000;margin:auto;margin-top:100px;">
      			  
                  <h1 style="color:#000;text-align:center;line-height:400px">SUMMER SALE 70% OFF</h1>   
     
        	  </div>
            		
      </div>
      
      
      <div id="mid_two">
      			<hr><h1>SIGN-UP</h1><hr>
                
                <div style="height:350px ;width:600px ;margin:auto;
                box-shadow:0px 0px 20px 10px black;margin-top:100px" >
                
                <form action="" method="post" name="login_form">
                
                	<table cellspacing="30px"  height="200px" width="600px" >
                     	<tr>
                        	<th>USER NAME</th>
                            <td><input type="text" name="log" value="" id="log" size="40%"></td>
                        </tr>
                        
                        <tr>
                        	<th>PASSWORD</th>
                            <td><input type="password" name="pass" value="" id="pass" size="40%"></td>
                        </tr>
                        <tr>
                        <tr>
                        	<th>MOBILE no.</th>
                            <td><input type="number" name="no" value="" id="no" size="40%"></td>
                        </tr>
                        <tr>
                        <tr>
                        	<th>Email</th>
                            <td><input type="text" name="email" value="" id="email" size="40%"></td>
                        </tr>
                        <tr>
                        	
                            <td align="center" colspan="2"><input type="submit" name="btn_sign" value="SIGNUP" id="btn_sign" onClick="xyz('hold.php')"></td>
                        </tr>
                    </table>
                    </form>
                </div>
        </div>
    
    
    <div id="footer">
    	copyrigths &copy; next alogorithms All Rights Reserved.
        <br>FOLLOW US ON <br>
        <img src="home/facebook-icon-transparent-background-20.png" height="40px" width="40px">
        
        <img src="home/instagram-png-instagram-png-logo-1455.png" height="40px" width="40px">
        <img src="home/natural-health-thermography-digital-infrared-thermal-123747.png" height="40px" width="40px">
    </div>

</div>
</body>
</html>>