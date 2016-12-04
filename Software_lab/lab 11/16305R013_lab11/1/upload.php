<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
		WORD FREQUENCY COUNTER
        </title>
        
        <!-- jQuery local -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
                
    </head>
    
    <body>
    	<!-- Page Content -->
        <div class="container">
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
            
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">Processed Output</span>                		
                </div>
            </div>
        	
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
                     	
            
            	<div class="col-xs-12">
					
					<table class="table table-striped table-bordered">
						<tr>
							<th> Word </th> <th> Occurence </th>
						</tr>
							<?php
								 if ($_FILES["fileToUpload"]["size"] > 102400) {
									 echo "Sorry, your file is too large.";
 									}
								else{
									$f=$_FILES["fileToUpload"]["tmp_name"];	
									$words=strtolower(file_get_contents($f));
									$count = array_count_values(str_word_count($words, 1));
                                                                	ksort($count);
									foreach ($count as $item => $val) 
									echo "<tr><td>". $item ."</td><td>". $val."</td></tr>";
								}
								// Your php code to process the file recieved to output desired output goes here   
							?>
							
					</table>
				</div>
			</div>
				
			<div class="row">
				<div class="col-xs-12">
				</div>
			</div>
				
			</div>
	</body>
</html>

