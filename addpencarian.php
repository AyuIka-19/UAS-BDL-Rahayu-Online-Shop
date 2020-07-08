<?php

require_once 'app/init.php';

if (!empty($_POST)) {
	if(isset($_POST['title'], $_POST['link'], $_POST['text'])) {

		$title = $_POST['title'];
		$link = $_POST['link'];
		$text = explode(',', $_POST['text']);

		$indexed = $client->index([
			'index' => 'rahayu',
			'type' => 'bookmarks',
			'body' => [
				'title' => $title,
				'link' => $link,
				'text' => $text
				]
			]);

			if($indexed) {
				print_r($indexed);
			}
	}
}

?>

<!doctype html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Add | Pencarian</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Search engine powered by Elasticsearch" >

  <meta name="author" content="Ruan Bekker">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Pattaya|Slabo+27px" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >

  <style>
      h1 {
        font-family: 'Pattaya', sans-serif;
        font-size: 59px;
        position: relative;
        right: -10px;
      }

      h3 {
        font-family: 'Pattaya', sans-serif;
        font-size: 20px;
        position: relative;
        right: -90px;
      }

      h4 {
        font-family: 'Slabo', sans-serif;
        font-size: 30px;
      }


    </style>

    </head>
    <body>


<br>
<div class="row vertical-center-row">
    <div class=" col-lg-offset-4">
        <div class="input-group">
            <h1>Rahayu OS Search</h1><p>
        </div>
    </div>
</div>


<br>
<form action="addpencarian.php" method="post" autocomplete="off">
<div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
        	<span class="input-group-addon" id="sizing-addon2">Title</span>
		<input type="text" name="title" class="form-control" placeholder="Name of keyword" aria-describedby="sizing-addon2"><p>
		<p>
 	</div>
</div>

  <div class="container">
    <div class="row">
    </div>
  </div>

<p>
<br>
<div class="col-lg-4 col-lg-offset-4">
	<div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">Link</span>
                <input type="text" name="link" class="form-control" placeholder="baju.php" aria-describedby="sizing-addon2">
        </div>
</div>
  <div class="container">
    <div class="row">
    </div>
  </div>

<p>
<br>

<div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">

		<span class="input-group-addon" id="sizing-addon2">Text</span>
		<textarea type="text" rows="1" name="text" class="form-control" placeholder="descriptive info about keyword" aria-describedby="sizing-addon2"></textarea>

       </div>
    </div>
</div>

  <div class="container">
    <div class="row">
    </div>
  </div>

<p>
<br>

<div class="row vertical-center-row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="center-block">
		<center
    		<br><input type="submit" class="btn btn-success" value="Submit Keyword">
		</center>
    	</form>
	<br>
                <center>
                <a class="btn btn-danger" style="width:176px" href="data.php">Back to Home</a>
                </center>
      </div>
    </div>
  </div>

  </body>
</html>