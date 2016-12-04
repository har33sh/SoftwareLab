<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
		REMINDER SERVICE
        </title>
        
        <!-- jQuery local used for bootstrap -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap headers required -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Javascript goes here -->
		<script>
         
                        function showAdd() {
				document.getElementById("add").style.display="block";
				document.getElementById("delete").style.display="none";
				document.getElementById("update").style.display="none";
				document.getElementById("showDate").style.display="none";
				document.getElementById("showall").style.display="none";
                        }
			function showDel() {
                                document.getElementById("add").style.display="none";
                                document.getElementById("delete").style.display="block";
                                document.getElementById("update").style.display="none";
                                document.getElementById("showDate").style.display="none";
				document.getElementById("showall").style.display="none";
                        }
			function showUp() {
                                document.getElementById("add").style.display="none";
                                document.getElementById("delete").style.display="none";
                                document.getElementById("update").style.display="block";
                                document.getElementById("showDate").style.display="none";
				document.getElementById("showall").style.display="none";
                        }
			function showDate() {
                                document.getElementById("add").style.display="none";
                                document.getElementById("delete").style.display="none";
                                document.getElementById("update").style.display="none";
                                document.getElementById("showDate").style.display="block";
				document.getElementById("showall").style.display="none";
                        }
			function showAll(){
				document.getElementById("add").style.display="none";
                                document.getElementById("delete").style.display="none";
                                document.getElementById("update").style.display="none";
                                document.getElementById("showDate").style.display="none";
                                document.getElementById("showall").style.display="block";
			}

		</script>
                
    </head>
    
    <body>
    
    	<!-- 
    		Page container in which all the page content is present
    			
    		Import components of Bootstrap, 
    			container: A box used to wrap all the data in a HTML page
    			row: A page-wide division which contains columns
    			col: columns used to divide row into 12 divisions
    		
    		Always follow below hierarchy to design proper webpages
    			container - can contain multiple rows 
    				row	- can contain multiple cols
    					col-xs-*    			
    	-->
        <div class="container">
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
            
            	<!-- 
            		Class col-xs-12 indicates that this column consumes 12 divisions of the current row 
            		Each row can max contain 12 divisons
            		Class page-header is a helper class to make a page header  
            		-->
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">REMINDER SERVICE</span>                		
                </div>
            </div>
        
        	<div class="row">
            	
            	<div class="col-xs-2">
                <!-- 
                	Example for leaving first 4 of 12 divisions of the current row blank 
                	Add content here to see how positioning using col-xs-<num> helps
                -->
                </div>
                
                <!-- Content that goes between so as to center your content -->
                <div class="col-xs-6" style="text-align:center">                	
                	<input type="submit" value="Add Event" name="Add" class="btn btn-primary" onclick=" showAdd();"> 
					<input type="submit" value="Delete Event" name="Delete" class="btn btn-primary" onclick="showDel();"> 
					<input type="submit" value="Update Event" name="Update" class="btn btn-primary" onclick="showUp();"> 
					<input type="submit" value="Check Date" name="CheckDate" class="btn btn-primary"onclick="showDate();" > 
					<input type="submit" value="Show All" name="ShowAll" class="btn btn-primary" onclick="showAll();"> 
                </div>
		<br/>	
               <form id="add" method="POST" action="process.php" style="text-align:center ;  display:none" >
		      <br/><br/>
		      <strong>Event Name : </strong>
			   <input type="text" placeholder="Event Name" name="name" /><br/>
		      <strong>Date : </strong>
			   <input type="text" name="year" placeholder="YYYY" required="required"  size="4" maxlength="4"/>
			   <input type="text" name="month" placeholder="MM" required="required"  size="2" maxlength="2"/> 
			   <input type="text" name="day" placeholder="DD" required="required" size="2" maxlength="2"/><br/>  
		      <strong>Start Time : </strong>
			   <input type="text" name="sHour" placeholder="HH" required="required" size="2" maxlength="2" /> 
			   <input type="text" name="sMinute" placeholder="MM" required="required"  size="2" maxlength="2" /> 
			   <input type="text" name="sSecond" placeholder="SS" required="required"  size="2" maxlength="2" /><br/>
		      <strong>End Time : </strong>
			    <input type="text" name="eHour" placeholder="HH" required="required" size="2" maxlength="2" /> 
			    <input type="text" name="eMinute" placeholder="MM" required="required" size="2" maxlength="2" /> 
			    <input type="text" name="eSecond" placeholder="SS" required="required" size="2" maxlength="2" /><br/>
		      <br/> 
			<input type="submit" name="submit" value="Add Event" class="btn btn-secondary" />
                </form>

		 <form id="update" method="POST" action="process.php" style="text-align:center ; display:none" >
                      <br/><br/>
		      <strong>Event ID : </strong>
                           <input type="text" placeholder="Event ID" required="required" name="id" /><br/>
                      <strong>Event Name : </strong>
                           <input type="text" placeholder="Event Name" name="name" /><br/>
                      <strong>Date : </strong>
			   <input type="text" name="year" placeholder="YYYY" required="required"  size="4" maxlength="4"/>
                           <input type="text" name="month" placeholder="MM" required="required"  size="2" maxlength="2"/> 
                           <input type="text" name="day" placeholder="DD" required="required" size="2" maxlength="2" /> <br/> 
                      <strong>Start Time : </strong>
                           <input type="text" name="startHour" placeholder="HH" required="required" size="2" maxlength="2" /> 
                           <input type="text" name="startMinute" placeholder="MM" required="required"  size="2" maxlength="2" /> 
                           <input type="text" name="startSecond" placeholder="SS" required="required"  size="2" maxlength="2" /><br/>
                      <strong>End Time : </strong>
                            <input type="text" name="endHour" placeholder="HH" required="required" size="2" maxlength="2" />              
                            <input type="text" name="endMinute" placeholder="MM" required="required" size="2" maxlength="2" />       
                            <input type="text" name="endSecond" placeholder="SS" required="required" size="2" maxlength="2" /><br/>
                      <br/>
                        <input type="submit" name="submit" value="Update Event" class="btn btn-secondary" />
                </form>


		<form id="delete" method="POST" action="process.php" style="text-align:center ; display:none" >
                      <br/><br/>
                      <strong>Event ID : </strong>
                           <input type="text" placeholder="Event ID" required="required" name="id" /><br/>
                      <br/>
                        <input type="submit" name="submit" value="Delete Event" class="btn btn-secondary" />
                </form>

		<form id="showDate" method="POST" action="process.php" style="text-align:center ; display:none" >
                      <br/><br/>
                      <strong>Date : </strong>
                           <input type="text" name="year" placeholder="YYYY" required="required"  size="4" maxlength="4"/>
                           <input type="text" name="month" placeholder="MM" required="required"  size="2" maxlength="2"/>
                           <input type="text" name="day" placeholder="DD" required="required" size="2" maxlength="2" /> <br/>
                      <br/>
                        <input type="submit" name="submit" value="Show Events" class="btn btn-secondary" />
                </form>

		<form id="showall" method="POST" action="process.php" style="text-align:center ; display:none">
			<br/>
                        <input type="submit" value="Show All" name="submit" class="btn btn-secondary" >
                 </form>

                <div class="col-xs-2">
                <!-- 
                	Example for leaving last 2 of 12 divisions of the current row blank 
                	Add content here to see how positioning using col-xs-<num> helps
               	-->
                </div>
                		
         	</div>
                        
       	</div>
        <!-- End of page container -->
                            
        
        
    </body>
</html>
