<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<style>
@keyframes example
	{
		0%
		{
			font-size:9px;
			color:#FFF;
			text-align:center;
		}
		25%
		{
			font-size:20px;
			color:#FFF;
			text-align:center;
		}
		50%
		{
			font-size:40px;
			color:#FFF;
			text-align:center;
		}
		75%
		{
			font-size:60px;
			color:#FFF;
			text-align:center;
		}
		100%
		{
			
			font-size:larger;
			color:#FFF;
			text-align:center;
		}
	}
	#h1,#h2,#h3,#h4
	{
		animation-name:example;
		animation-duration:2s;
		animation-iteration-count:infinite;
	}
</style>
<script>
function abc1()
{
	//alert("hello");
	document.getElementById("login").style="background-color:white;color:black;";

		//document.getElementById("login").style="text-color:black;";

}
function xyz1()
{
	document.getElementById("login").style="background-color:black;color:white;";
}

function abc2()
{
	document.getElementById("sign").style="background-color:white;color:black;";
}
function xyz2()
{
	document.getElementById("sign").style="background-color:black;color:white;";
}




</script>
</head>

<body>
<div id="wrap">



		




	<div id="top">
    	<div id="top_left" style="float:left"><h1>ONLINE SHOP</h1></div>
    	<div id="top_right" style="float:right">
        			<table >
                    	<tr >
                        	<th id="login" onMouseOver="abc1()" onMouseOut="xyz1()"><a href="login.php">LOGIN</a></th>
                            <th  id="sign" onMouseOver="abc2()" onMouseOut="xyz2()"><a href="signup.php">SIGNUP</a></th>
                        </tr>
                    </table>
       	</div>
    </div>
    
    
    <div id="mid">
    		
       <div id="mid_one">
          
 	         <div  style="height:400px ; width:1200px;
    	       border:2px solid;border-color:#FFF;margin:auto;margin-top:100px;">
      			  
                  <h1 style="color:#FFF;text-align:center;line-height:400px">WELCOME INTO OUR SHOP</h1>   
     
        	  </div>
            		
      </div>
      
      
      <div id="mid_two">
      			<hr><h1>CATEGORIES</h1><hr>
            <div id="shirt" >
            
            	 <div  style="height:300px ; width:300px;
    	       border:2px solid;border-color:#FFF;margin:auto;
               margin-top:50px;text-align:center;color:#FFF;line-height:300px;     		               font-size:24px">
      			  
                     <a href="test.php"><h1 id="h1">SHIRTS</h1></a>
     
        	  </div>
            
            </div>
      		
            
            <div id="shorts">
            	
                <div  style="height:300px ; width:300px;
    	       border:2px solid;border-color:#FFF;margin:auto;
               margin-top:50px;text-align:center;color:#FFF;line-height:300px;     		               font-size:24px">
      			  
                     <a href="test.php"><h1 id="h2">SHORTS</h1></a>
     
        	  </div>
            
            </div>
            
            
            
            <div id="watch">
            	
                <div  style="height:300px ; width:300px;
    	       border:2px solid;border-color:#FFF;margin:auto;
               margin-top:50px;text-align:center;color:#FFF;line-height:300px;     		               font-size:24px">
      			  
                    <a href="test.php"><h1 id="h3">watches</h1></a>
     
        	  </div>
            
            
            </div>
            
            
            
            
            
            
            
            
            
            
            
            <div id="shoes">
            	<div  style="height:300px ; width:300px;
    	       border:2px solid;border-color:#FFF;margin:auto;
               margin-top:50px;text-align:center;color:#FFF;line-height:300px;						               font-size:24px">
      			  
                   <a href="test.php"><h1 id="h4">SHOES</h1></a>
     
        	  </div>
            
            </div>
      
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
</html>
