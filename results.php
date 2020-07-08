<?php
require_once 'app/init.php';

if(isset($_GET['cari'])) {

	$cari = $_GET['cari'];

	$query = $client->search([
		'body' => [
		    'query' => [
		        'bool' => [
			         'should' => [
			            'match' => ['title' => $cari],
				          'match' => ['text' => $cari]
		            ]
		        ]
       ]
	    ]
	]);

	if($query['hits']['total'] >=1 ) {

		$results = $query['hits']['hits'];
	}
}
?>

<html>
<head>
    <title>Selamat Datang Di Rahayu Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head><!--/head-->
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<div class="col-sm-4">
								<div class="logo pull-left">
									<a href="index.php"><img src="images/home/logoo.jpg" alt="" /></a>
								</div>
							</div>
                            <form action="results.php" method="get" autocomplete="on">
                            
                                <div class="input-group pull-right">
                                <input type="text" name="cari" placeholder="Search..." class="form-control" /> 
                                    <span class="input-group-btn"> 
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </span>
                                </div>
                            </div>
                            </form>

							<ul class="nav navbar-nav">
								<li><a href="home.php"></i>Home</a></li>
								<li><a href="member.php"></i> Daftar Member</a></li>
								<li><a href="biodata.php"></i> Biodata </a></li>

							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
						<a href="index.php"><img src="images/home/bander1.png" alt="" /></a>
							
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Produk Terbaru</h2>
                <div class="container">
                <a class="btn btn-primary" style="width:176px" href="index.php">Back to Home</a>
                  <div class="row" style="text-align: center">
                     <h2> Hasil Pencarian: </h2>
                  </div>
                </div>
                <?php
                if(isset($results)) {
                    foreach($results as $r) {
                    ?>
                <div class="row" style="text-align: center">
   		              <div class="container">
  		                <div class="panel panel-success">
                       <div class=panel-heading>
                        <h2 class=panel-title>
                          <a href="<?php echo $r['_source']['link']; ?>" target="_blank"><p><br>
                            <?php echo $r['_source']['title']; ?>
                          </a>
                      </div>
                        <br><br>
                          <b>Content:</b><p> 
                              <?php echo implode(', ', $r['_source']['text']); ?><p></p><br>
                      <div class="">
                          <b>DocId:</b>
                            <center>
                                <?php echo $r['_id']; ?>
                            </center>
                        <br>
                    </div> 
                  </div>
                </div>
            <?php
            }
        }
        ?>
					</div>					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
			<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>RahayuShop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a>Tentang Kami</a></li>
								<li><a>Karir</a></li>
								<li><a>Blog</a></li>
								<li><a>Media Kit</a></li>
								<li><a>Kisah Penjual</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Beli</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a>Belanja Di RahayuShop</a></li>
								<li><a>Cara Belanja</a></li>
								<li><a>Pembayaran</a></li>
								<li><a>Pengembalian dana</a></li>
								<li><a>Hot List</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Jual</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a>Jualan Di RahayuShop</a></li>
								<li><a>Cara Berjualan</a></li>
								<li><a>Gold Merchant</a></li>
								<li><a>Beriklan</a></li>
								<li><a>Penarikan Dana</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Bantuan</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a>Syarat dan Ketentuan</a></li>
								<li><a>Kebijakan Privasi</a></li>
								<li><a>Pusat Resolusi</a></li>
								<li><a>Hubungi Kami</a></li>
								<li><a>Tentang Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Tentang RahayuShop</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Untuk mendapatkan Update baru dari Toko Online Rahayu<br />Tinggalkan Email Disini</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright &copy;  2020 RahayuShop. All rights reserved.</p>
					<p class="pull-right">Powered by <span><a target="_blank" href="http://www.rahayushop.com">RahayuShop</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
</body>
</html>