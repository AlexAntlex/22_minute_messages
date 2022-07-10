
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>22 minute messages</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/main.css">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/add.css">
</head>
<body>

<nav class="bg-dark navbar-dark">
  <div class="container">
    <a href="<?=BASE_URL?>" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Anonymous message</a>
  </div>
  </nav>
   <section id="header" class="jumbotron text-center">
   <div class="teni">
      <h1 class="display-3">Anonymous 22 minute messages</h1>
      <p class="lead">Any message on the site lives for only 22 minutes, and then disappears forever</p>
    </div>
      <a href="<?=BASE_URL?>add" class="btn btn-success">Add massage</a>
      <a href="<?=BASE_URL?>" class="btn btn-secondary">see last</a>
  </section>

<div class="site-content">
		<div class="container">
			<?=$content?>
		</div>
	</div>
</body>