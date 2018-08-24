<?php

if (isset($_POST["C"])) {
	setcookie("DF[C]", $_POST["C"], time()+24*3600, "/", ".drakewellcoffee.com");
	setcookie("DF[G]", $_POST["G"], time()+24*3600, "/", ".drakewellcoffee.com");
	setcookie("DF[W]", $_POST["W"], time()+24*3600, "/", ".drakewellcoffee.com");
	header('Location: http://www.drakewellcoffee.com/cart.php');
}else{

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Products.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Drakewell Coffee</title>
<link href="../CSS/Products.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->

<link href="../CSS/Master_CSS.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<!-- InstanceBeginEditable name="head" -->
<style>
.pan{
	background-image:url(../Images/Panoramic_Strips/decaf.jpg);
}
.itemTitle{
	color:#e27926;
}
.box #prev:hover, .box #next:hover{
	background-color:#e27926;
	border-color:#e27926;
}
.typeImage1{

}
.typeImage2{

}
</style>
<!-- InstanceEndEditable -->

</head>


<body>

<div id="header">

<div class="cut"></div>

	<div class="container">
	
    <!-- Header --->
    
    	<section id="logCart" class="f2"><a href="../login.php">Log In</a>  <a href="../cart.php">Your Cart</a></section>
	
		<div class="mainMenu f3">
        	
        	<a id="store" href="../coffee.php">Coffee</a>
            <a id="fundrasier" href="../fund.php">Fundraiser</a>
            <a id="logo" href="../index.php"><span id="cup"></span></a>
            <a id="contact" href="../contact.php">Contact</a>
        	<a id="about" href="../about.php">About</a>
            
        </div>
        
        
    
	
    </div><!--- End 1st Container --->
    
</div><!-- End Of Header -->
    
    
	<div class="container">
	
    
    <div class="pan">
    
    	
        
        	<div class="box">
            
            <!-- InstanceBeginEditable name="Nav" -->
        	<a id="prev" href="hazelnut.php"></a> <a id="next" href="hot_chocolate.php"></a>
            <!-- InstanceEndEditable -->
            
            	<div class="itemTitle f1">
            		<!-- InstanceBeginEditable name="Title" -->
            Decaffeinated
            		<!-- InstanceEndEditable -->
           		</div>
            
            	<div class="itemDescription f2">
            		<!-- InstanceBeginEditable name="Description" -->
                
                
                Color: Medium Dark<br />

                Taste: Robust<br />

                Smell: Robust<br />

                Texture: Full-bodied
                
                
                	<!-- InstanceEndEditable -->
            	</div>    
          
        </div>
        
    </div>
    
    
    
<div class="container">
    
    
    <div class="cut"></div>
    
   
    
    <div class="showcase">
    <!--- 1st --->
    
    <div class="typeShowcase">
    	
        <span class="typeTitle f1">
			Cups
        </span>
        
        <div class="typeImage1">
        </div>
        
        <div class="typeDescription f2">
        	
            <span class="typeCost">
            	<!-- InstanceBeginEditable name="Cost1" -->
                	<span class="logedHide">$9.99</span><span class="logedShow"></span>
                <!-- InstanceEndEditable -->
            </span>
            
            <span class="typeSize">
            	<!-- InstanceBeginEditable name="Size1" -->
                	<span class="logedHide">12 Cups</span><span class="logedShow"></span>
                <!-- InstanceEndEditable -->
            </span>
            
            
        </div>
    </div>
        
        
        
        
        <!--- 2nd --->
        
        <div class="typeShowcase">
    	
        <span class="typeTitle f1">
			Grounds
        </span>
        
        <div class="typeImage2">
        </div>
        
        <div class="typeDescription f2">
        	
            <span class="typeCost">
            	<!-- InstanceBeginEditable name="Cost2" -->
                	<span class="logedHide">$8.99</span><span class="logedShow"></span>
                <!-- InstanceEndEditable -->
            </span>
            
            <span class="typeSize">
            	<!-- InstanceBeginEditable name="Size2" -->
                	<span class="logedHide">12 .oz</span><span class="logedShow"></span>
                <!-- InstanceEndEditable -->
            </span>
            
            
        </div>
        </div>
        
        
        
        
        <!--- 3rd --->
        
        <div class="typeShowcase">
    	
        <span class="typeTitle f1">
			Whole Bean
        </span>
        
        <div class="typeImage3">
        </div> 
        
        <div class="typeDescription f2">
        	
            <span class="typeCost">
            	<!-- InstanceBeginEditable name="Cost3" -->
                	<span class="logedHide">$8.99</span><span class="logedShow"></span>
                <!-- InstanceEndEditable -->
            </span>
            
            <span class="typeSize">
            	<!-- InstanceBeginEditable name="Size3" -->
                	<span class="logedHide">12 .oz</span><span class="logedShow"></span>
                <!-- InstanceEndEditable -->
            </span>
            
            
        </div>
        </div>
        
        
        </div>
        
        
     
    </div>
	 
     <form method="post" action="">
     <input type="number" min="0" id="C" name="C" value="0" />
     <input type="number" min="0" id="G" name="G" value="0"/>
     <input type="number" min="0" id="W" name="W" value="0"/>
     <button type="submit"></button>
     </form>
<!-- sale -->
	
	
    </div><!--- End 2nd Container --->
    
    
    
 <!--- Footer --->
    
    <div id="footer">
    
    <div class="cut"></div>
    
    	<div class="container">
    
    
    		<div id="contactUs" class="f2">
        	
          	  <h3 class="f1">Contact Us</h3>
          	  	<p>
            		6 Arrow Road Suite 202<br />
					Ramsey, NJ 07446<br />
					(201) 735-0541
          	  	</p>
          	 	<p id="general">
            		General: Drinkwell@DrakewellCoffee.com<br />
					Catering: Catering@DrakewellCoffee.com<br />
					Wholesale: Wholesale@DrakewellCoffee.com<br />
					Careers: Drinkwell@DrakewellCoffee.com
            	</p>
            
        	</div><!--- End Contact US --->
            
            
            <div id="social" class="f2">
            
            	 <h3 class="f1">Social</h3>
                 <a class="socialIcon" style="background-image:url(../Images/Symbols/FaceBook_Gray-01.png)"></a>
                 <a class="socialIcon" style="background-image:url(../Images/Symbols/LinkedIn_Gray-01.png)"></a>
                 <a class="socialIcon" style="background-image:url(../Images/Symbols/Twitter_Gray-01.png)"></a>
                 <a class="socialIcon" style="background-image:url(../Images/Symbols/G+_Gray-01.png)"></a>                 
                 
            </div><!--- End of Social --->
            
            
            
            <div id="support" class="f2">
            	<h3 class="f1">Support</h3>
                <p>
                	<a>Wholesale</a><br />
                	<a>Employment</a><br />
                	<a>Contact</a><br />
                    <a>FAQs</a><br />
                    <a>Legal</a>
                </p>
            </div><!--- End Support --->
        
        </div><!--- End 3rd container --->
    
    </div><!--- End Of Footer --->
    
    
</body>
<!-- InstanceEnd --></html>