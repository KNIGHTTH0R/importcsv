<!DOCTYPE html>
<html lang="en">
<head>
	<title>Import CSV</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="page-header" style="margin-bottom: 60px; margin-top: 12px;">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<h1>
						This is how you could easily import csv file in your database.
					</h1>
					
					<p class="lead h1">
						Upload the csv file into form and click to <kbd>Submit</kbd>. And you will see how fast it works.
					</p>
				</div>
			</div><!--row-->
		</div>
		
		
		<div class="row">
			<div class="col-sm-6">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<div class="col-sm-12">
							<input type="text" class="form-control" name="host" placeholder="Host or ip" autocomplete="off"/>
						</div>			
					</div>
					
					
					<div class="form-group row">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off"/>
						</div>
						<div class="col-sm-6">
							<input type="password" class="form-control" name="password" placeholder="Password if have" />
						</div>	
					</div>
					
					
					<div class="form-group row">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="db" placeholder="Name of database" autocomplete="off"/>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="table" placeholder="Name of table" autocomplete="off"/>
						</div>	
					</div>
					
					
					<div class="form-group row">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="byf" placeholder="Fields terminated by" autocomplete="off"/>
						</div>
						
						<div class="col-sm-6">
							<input type="text" class="form-control" name="byl" placeholder="Lines terminated by" autocomplete="off"/>
						</div>		
					</div>
					
					
					<div class="form-group row">
						<div class="col-sm-12">
							<label>Upload CSV file to Database</label>
							<input type="file" name="file" class="form-control" autocomplete="off"/>		
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<input type="submit" class="btn btn-success" name="submit" value="Sumbit" />
						</div>			
					</div>
				</form>
			</div>
			
			<div class="col-sm-6">
				<div class="legend alert alert-info">
					<h3>
						Couple things you should know about this script:
					</h3>
					
					<ul>
						<li>
							create a database on your server
						</li>
						<li>
							create a table in database with rows amount of rows as in the csv file
						</li>
						<li>
							fill the fields in form
						</li>
						<li>
							don't forget which character terminated fields and lines in csv file
						</li>
						<li>
							CSV file must be a UTF-8 code
						</li>
						<li>
							click to submit
						</li>
					</ul>
				</div><!--legend-->
			</div>
		</div><!--row-->
	</div><!--container-->
</body>
</html>