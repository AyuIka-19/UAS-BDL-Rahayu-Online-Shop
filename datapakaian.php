<?php
require_once 'app/init.php';

if(isset($_GET['pakaian'])) {

	$pakaian = $_GET['pakaian'];

	$query = $client->search([
		'body' => [
		    'query' => [
		        'bool' => [
			         'should' => [
			            'match' => ['nama' => $pakaian]
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
					<div class="col-sm-15">
						<div class="contactinfo">
							<div class="col-sm-4">
								
							</div>
							
							<div class="col-sm-3">
								
							</div>
							<ul class="nav navbar">
								<a href="admin.php"><img src="images/home/pakai.png" alt="" /></a>
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
                    <a href="addpakaian.php"><button class="btn btn-dark btn-lg">Tambah Data</button></a> 
</div>
                        
                        <div class="search">
                        <form action="datapakaian.php" method="get" autocomplete="on">
                        <div class="row">
                        <div class="col-lg-4 col-lg-offset-4">
                        <div class="input-group">
                        <input type="text" name="pakaian"  placeholder="Search..." class="form-control" /> 
                         <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div></div></div></div></form>
            
	
	
		<div class="container">
			<div class="row">	
				<div class="col-sm-12 padding-right">
					<div class="features_items">
						<h2 class="title text-center">Data Pakaian</h2>

        </div>
    </div>
</div>
          <table class="table table-striped col-sm-12 ">
                <thead>
                    <tr>
                    <th scope="col-sm-2">No</th>      
                    <th scope="col-2">Nama</th>
                    <th scope="col-2">Stok</th>
                    <th scope="col-2">Harga</th>
                    <th scope="col-2">Id Jenis</th>
                    <th scope="col-2">Id Supplier</th>
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
                            <td><?= $r['_source']['nama'];?></td>
                            <td> <?= $r['_source']['stok'];?></td>
                            <td> <?= $r['_source']['harga'];?></td>
                            <td> <?= $r['_source']['id_jenis'];?></td>
							<td> <?= $r['_source']['id_supplier'];?></td>
                            <td><a href="hapuspakaian.php?id=<?= $r["_id"]?>" class="btn btn-danger" onclick="
                                return confirm('Anda yakin untuk hapus data pakaian?');" >Hapus</a>
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