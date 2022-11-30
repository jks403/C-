<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml">

<!-- note: this template was last modified 2017-02-03.
     (added link to a copy of version 5.0.0 of normalize.css)
     It is especially possible that it may be updated.
     (feel free to remove this comment when using
     this template! 8-) )
-->

<!--
    http://joshuakane.net/winebar_1/winebar.php
	http://nrs-projects.humboldt.edu/~jks403/hw11/custom-wine.php
    by: JOshua Stewart		
    last modified:	02 19 2017
-->

<head>  
    <title> JOshua K.Stewart CS 328 </title> <!--my name in the head of the document-->
    <meta charset="utf-8" />
     <?php
        /* these are bringing in PHP functions I am calling below */
                require_once("logintome.php");
                require_once("choose_next.php");
	            require_once("wine_sales.php");
	            require_once("droponme.php");
	            require_once("completeme.php");
	            require_once("get_wine_price.php");

    ?>

    <!-- to play it safe, I linked to a copy of normalize.css I *know*
         exists, in my directory; you may of course change this to 
         your local copy -->

    <link href="http://users.humboldt.edu/smtuttle/styles/normalize.css" 
          type="text/css" rel="stylesheet" />
</head> 
<h1> This is Joshua Stewart's wine Bar.</h1>

<body> 

    <hr />   

	<table>
		<caption>Wine Productss</caption>
				
		<col class= "product"/>
		<colgroup class="facts">
		<col /> <col /> <col class="fat" />
		</colgroup>
		<tr>
			<th>White Wine</th>
			<th>Wine Size(oz)</th>
			<th>Alcohol content (mg)</th>
			<th>Fat (g)</th>
		</tr>
		<tr><td> Zinfendel</td><td>8</td><td>20</td><td>0</td></tr>
		<tr><td> Chardonnay</td><td>2</td><td>20</td><td>19</td></tr>
		<tr><td> Chablis</td><td>12</td><td>4000</td><td>2000\</td></tr>

		
	</table>
	
	
	<form action ="http://www.google.com"
			method = "post" />
		<fieldset>
			<legend><b>Favorite Wine</b></legend>
			<label>Wine Choice</label>
			<input type ="checkbox" name ="tea"/> zinfindel
			<input type ="checkbox" name ="choc"/> chablis
			<input type ="checkbox" name ="coke"/>chardonnay
			<br/><br>
		</fieldset>
	
	<form>
	<br/><br>

	<form action="http://www.google.com"
		 method = "post" >

		<div>	
		
			<input type ="radio" name="drug" value="tea"       /> Chablis
			<input type ="radio"  name="drug" value="" /> Chardonnay
			<input type ="radio"  name="drug" value="" /> White Zinfindel
			<input type ="submit" />
		</div>
		
	</form>

	<form action="http://nrs-projects.humboldt.edu/~jks403/"
			method="post" >
		<fieldset>
			
                        
			</label>
			<label> :
			<select name="Caffine Choice"> 
				 <option>White Zinfindel</option>
				 <option>Chablis</option>
				 <option>Chardonnay</option>
 			</select> 

			</label>
			<label> quantity:
                        <input type="text" name="wine choice"
                        	placeholder="Enter in choice" /> 


			<label> username:
                        <input type="text" name="username"
                                placeholder="Enter in username" />
                        </label>
                        <label> Password:
                        <input type="password" name="password"
                                placeholder="Enter in Password" />
                        </label>
                        <input type="submit" />


			
		</fieldset>
		<fieldset>

                        </label>
                        <input type="submit" />

                </fieldset>



		<p>
       			<img src="https://si.wsj.net/public/resources/images/OD-AZ011_WINE_M_20130919114201.jpg"
	  		  alt = "Joshuas wine bar" />
    		</p>



		
	</form>


		
	





    <p>
        <a href="http://validator.w3.org/check/referer">
        Validate this HTML5 page
        </a>
    </p>

    <p>
        For full credit, this page must also pass the tests at
        <a href="https://validator.nu/">
        https://validator.nu/</a>:
        (instructions modified from
        http://stackoverflow.com/questions/16596493/html5-doctype-with-strict)
    </p>
    <ul>
         <li> switch to "text field" in the select box at the
              top left of the form (make sure JavaScript is
              enabled...!) </li>
         <li> paste in the text of your document </li>
         <li> in the Preset field, select: <br />
              "XHTML + SVG 1.1 + MathML 3.0 + RDFa Lite 1.1" </li>
         <li> click validate </li>
    </ul>

    <p>
        <a href=
           "http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
            <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
                 alt="Valid CSS3!" height="31" width="88" />
        </a>
    </p>

</body> 
	
</html>
