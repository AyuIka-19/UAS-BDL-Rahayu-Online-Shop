<?php

require_once 'app/init.php';
if (!empty($_POST)) {
    if(isset($_POST['nama'], $_POST['jenis_kelamin'], $_POST['no_hp'], $_POST['alamat'])) {

        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        $indexed = $client->index([
            'index' => 'member',
            'type' => 'member',
            'body' => [
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'no_hp' => $no_hp,
                'alamat' => $alamat
                ]
            ]);

            if($indexed) {
                print_r($indexed);
            }
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

            <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Jenis Pakaian</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="bajuwanita.php">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Baju Wanita
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Baju Pria
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Celana Wanita
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Celana Pria</a></h4>
                                </div>
                            </div>
                            
                        </div><!--/category-products-->
                    
                    
                        
                        <div class="brands_products"><!--brands_products-->
                            <h2>Pembayaran</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">BRI (a.n RahayuShop  : 0669.01.004717.973)</a></li>
                                    <li><a href="#"> BNI (a.n RahayuShop  : 0669.01.004717.531)</a></li>
                                    <li><a href="#"> BCA (a.n RahayuShop: 0321670012)</a></li>
                                    <li><a href="#"> Mandiri (a.n RahayuShop : 06584304656)</a></li>
                                    <li><a href="#"> Mega (a.n RahayuShop : 08535335305)</a></li>
                                    <li><a href="#"> Danamon (a.n RahayuShop : 0604305405)</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        
                    
                    </div>
                </div>
                
               
        
               <div class="container">    
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Input Data Member</h2>
                        <div class="col-sm-15">
                <div class="jumbotron">
                <form action="member.php" method="post" name="form1">
        <table width="50%" border="0">
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Nama</h4></label>
                    <input type="text" class="form-control" name="nama" id="exampleInputNama" >
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Jenis Kelamin</h4></label>
                    <input type="text" class="form-control" id="" name="jenis_kelamin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDate"><h4>No HP</h4></label>
                    <input type="text" class="form-control" name="no_hp" id="exampleInputDate" >
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Alamat</h4></label>
                    <input type="text" class="form-control"  name="alamat"id="">
                  </div>
                 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                        
             </div>
         </div>
                                        
                </div>
            </div>
        </div>
        </div>
    </section>
    
    
          
</body>
</html>