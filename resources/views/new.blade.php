<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Project Report Details </title>
    </head>
    <body>
        
    
    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf
    
<div class="mb-3">
  			<label for="formFile" class="form-label"><label class="required">Upload Project PPT</label></label>
  			<input class="form-control" type="file" id="formFile" name="ppt" required>
		</div>
<div class="col-12" >
    		
	<button class="btn btn-primary" type="submit" name="submit">Submit form</button>

			
</div>
</form>
</body>
</html>

