<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
       		Fill in the title of your page
        </title>
        
        <!-- jQuery local -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script>
			function check(){
                                fileName=document.getElementById("fileToUpload").value;
                                ext=fileName.split('.').pop();
                                if(ext!="jpg")
                                        alert("Please Upload .jpg file");
                        }   
		</script>
                
    </head>
    
    <body>
    
    	 <div class="container">
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
            
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">Upload Image</span>                		
                </div>
            </div>
        
        	<div class="row">
            	
            	<div class="col-xs-12 " style="min-height:500px;">
               		<form action="upload.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <br/>
                                                Select file to upload:<input type="file" name="fileToUpload" id="fileToUpload" oninput="check()" />
                                                <br/>
                                                <input type="submit" value="Upload File" name="submit" class="btn btn-primary"> <br>
                                        </form>
		 </div>
                		
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
