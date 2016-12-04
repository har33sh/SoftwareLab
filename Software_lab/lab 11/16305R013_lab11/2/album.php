<?php
	//Setting default image_id
	$image_id = '1';
	
	if(isset($_GET['image_id'])){
		$image_id = $_GET['image_id'];
	}
	
	$last = 0;
	$files = glob("images/*.{jpg}",GLOB_BRACE);
	if ($files){
	 $last = count($files);
	}

        $first = 1;
        $prev = (int)$image_id - 1;
	$next=(int)$image_id + 1;

        if ($prev < $first)
                $prev = $first;

        if ($next > $last)
                $next = $last;

?>

<!DOCTYPE HTML>
<html>
	<head>
    	
    	<!-- Change author to your name -->
    	<meta name="author" content="Hareesh"/>
        
        <!-- Title of Page -->
        <title>
       		Photo Viewer || Photo Album
        </title>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script>
			<!-- Javascript goes here -->
		</script>
		
		<style>
			a{
				color: inherit;
			}
			a:hover{
				color: inherit;
			}
		</style>
		        
    </head>
    
    <body>
    
    	<!-- Page Container -->
        <div class="container">
        	
            <div class="row">
            	<div class="col-xs-12 jumbotron well well-lg">
                	<strong> Photo Album </strong>
                	
                	<div class="pull-right">
                		<a href="new_upload.php" class="btn btn-info" role="button">Upload New Image</a>
                	</div>
                </div>
            </div>
        
        	<div class="row" style="min-height:500px;">
        		
        		<div class="col-xs-3">        			
        		</div>
        		
            	<div class="col-xs-6">            	
            		 <img src="images/<?php echo $image_id ?>.jpg" class="img-thumbnail" alt="Cinque Terre" width="600">           		
               	</div> 
               	
               	<div class="col-xs-3">        			
        		</div>    		
        		
         	</div>
         	
         	<div class="row">
         		<!-- 
         			You will have to change the button to dynamically assign url with images ids
         			The navigation should look at the number of images you have stored and navigate accordingly
         			Invalid navigations not allowed
         				Eg: If you had 5 images, and you were on the last image a next click shouldn't be possible         			
         		-->        		
         		<div class="col-xs-12" style="text-align:center">
		     		<div class="btn-group">
						  
						  <btn type="button" class="btn btn-success"> 
						  	<a href="album.php?&image_id=<?php echo $first; ?>">
						  		
						  		<span class="glyphicon glyphicon-fast-backward"></span>First
						  	</a>
						  </btn>
						  
						  <btn type="button" class="btn btn-warning">
						  	<a href="album.php?&image_id=<?php echo $prev; ?>">
						  		<span class="glyphicon glyphicon-step-backward"></span> Prev  
						  	</a>
						  </btn>
						  
						  <btn type="button" class="btn btn-warning">
						  	<a href="album.php?&image_id=<?php echo $next; ?>">
						  		Next <span class="glyphicon glyphicon-step-forward"></span>
						  	</a>
						  </btn>
						  
						  <btn type="button" class="btn btn-success">
						  	<a href="album.php?&image_id=<?php echo $last; ?>">
						  		Last <span class="glyphicon glyphicon-fast-forward"></span>
						  	</a>
						  </btn>
					</div>
				</div>
				<br><br>
         	</div>
         	
         	<div class="row">
         		<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">
                    
                    <p>
                        <span class="glyphicon glyphicon-copyright-mark"></span> Hareesh, 2016 <br>
                        All Rights Reserved.
                    </p>
                </div>
            </div>
                        
       	</div>
        <!-- End of page container -->
                            
        
    </body>
</html>
