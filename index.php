<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">		
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        
        <script src='jquery.min.js' type='text/javascript'></script>
   		<script src="index.js"></script>
		<title>chat</title>
	</head>
	<body>
		<div  class="container-fluid">
			<section  style="padding: 15%;">			
				<div class="row">				
					<h1 class="text-center">CHAT</h1>	
					<hr>
				</div>	
				<div class="row">
					<form id="formChat" role="form">
						<div class="form-group">
							<label for="user">User</label>
							<input type="text" class="form-control" id="user" name="user" placeholder="Enter User">
						</div>
						<div class="form-group">							
							<div class="row">
								<div class="col-md-12" >
									<div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">

									</div>
								</div>
							</div>
						</div>
						<div class="form-group">				
							<label for="message">Message</label>
							<textarea id="message" name="message" placeholder="Enter Message"  class="form-control" rows="3"></textarea>
						</div>
						<button id="send" class="btn btn-primary" >Send</button>						
					</form>
				</div>
			</section>	
		</div>	
	</body>
</html>