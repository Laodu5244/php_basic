<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>notice</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
		crossorigin="anonymous">
</head>
<body>
	<div class='container'>
		<div class=" card mt-3">
			<div class="card-header" style="background:	#8B0000;color:#fff;">
				Error(运行错误)
			</div>
			<div class="card-body"> <?= $msg ?> </div>
		</div>
	</div>
</body>
</html>