<?php
require_once 'app/init.php';

if(isset($_GET['transaksi'])) {

	$transaksi = $_GET['transaksi'];

	$query = $client->search([
		'body' => [
		    'query' => [
		        'bool' => [
			         'should' => [
			            'match' => ['nama' => $transaksi]
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
<br><br>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-15">
						<div class="contactinfo">
							<div class="col-sm-4">
								
							</div>
							
							<div class="col-sm-3">
								
							</div>
							<ul class="nav navbar">
								<a href="admin.php"><img src="images/home/tra.png" alt="" /></a>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<section>
			<div class="admin">
				<div class="container">
                <a href="data.php"><button class="btn btn-primary btn-lg">Home</button></a> <br><br>
                    <a href="addtransaksi.php"><button class="btn btn-dark btn-lg">Tambah Data</button></a> 
                </div>  
            <div class="search">
            <form action="datatransaksi.php" method="get" autocomplete="on">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="input-group">
                        <input type="text" name="transaksi"  placeholder="Search..." class="form-control" /> 
                         <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                         </span>
                    </div>
                </div>
            </div>
            </div>
            </form>
	
		<div class="container">
			<div class="row">	
				<div class="col-sm-12 padding-right">
					<div class="features_items">
						<h2 class="title text-center">Data Transaksi</h2>
                    </div>
                </div>
            </div>
          <table class="table table-striped col-sm-12 ">
                <thead>
                    <tr>
                    <th scope="col-sm-2">No</th>      
                    <th scope="col-2">Tanggal Transaksi</th>
                    <th scope="col-2">Id Member</th>
                    <th scope="col-2">Id Admin</th>
                    <th scope="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php $i=1; ?>
                    <?php
                    if(isset($results)){
                      foreach($results as $r){
                        ?>
                        <tr>
                            <td><?= $i ;?></td>
                            <td><?= $r['_source']['tanggal_transaksi'];?></td>
                            <td> <?= $r['_source']['id_member'];?></td>
                            <td> <?= $r['_source']['id_admin'];?></td>
                            <td><a href="hapustransaksi.php?id=<?= $r["_id"]?>" class="btn btn-danger" onclick="
                                return confirm('Anda yakin untuk hapus data transaksi?');" >Hapus</a>
                        </tr>
                        <?php $i++; ?>
                        <?php
                      }
                    }
                   ?>
                    </tr>
                </tbody>
            </table><br><br>
                        </div>			
				</div>
			</div>
		</div>
	</section>
	
	
</body>
</html>