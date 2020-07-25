<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">

<script>
	function xyz(value)
{
	//alert("hello");
	var login=document.getElementById("log").value;
	var pass=document.getElementById("pass").value;
	alert(login+"   "+pass);
	if(login.length < 1)
	{
		value="login.php";
		alert("please enter the user name");
		//document.getElementById("msg1").innerHTML="*";
		//document.getElementById("msg1").style="color:red";
	}
	else
	if(pass.length < 1)
	{
		value="login.php";
		alert("please enter the password");
		//document.getElementById("msg2").innerHTML="*";
		//document.getElementById("msg2").style="color:red";
	}
	// if(pass != "" && login != "")
	else
	{
		value="hold.php";
		document.login_form.action=value;
		document.login_form.submit();
	}
	
}

</script>
<style>
#log_btn
{
	padding:15px;
	background-color:green;
	font-weight:bold;
	color:#FFF;
}
</style>
</head>

<body>
<div id="wrap">

	<div id="top">
    	<div id="top_left" style="float:left"><h1>ONLINE SHOP</h1></div>
    	<div id="top_right" style="float:right">
        			<!--
                    	<tr >
                        	<th id="login" onMouseOver="abc1()" onMouseOut="xyz1()">LOGIN</th>--><table >
                            <th  id="sign" onMouseOver="abc2()" onMouseOut="xyz2()"><a href="signup.php">SIGNUP</a></th>
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
      			<hr><h1>LOGIN</h1><hr>
                
                <div style="height:200px ;width:600px ;margin:auto;
                box-shadow:0px 0px 20px 10px black;margin-top:100px" >
                
                <form action="" method="POST" name="login_form">
                
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
                        	
                            <td align="center" colspan="2"><input type="submit" name="log_btn" value="LOGIN" id="log_btn" onClick="xyz('hold.php')"></td>
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