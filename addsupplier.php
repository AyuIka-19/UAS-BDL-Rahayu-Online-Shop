<?php

require_once 'app/init.php';

if (!empty($_POST)) {
    if(isset($_POST['nama'], $_POST['jenis_kelamin'], $_POST['no_hp'], $_POST['alamat'])) {

        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        $indexed = $client->index([
            'index' => 'supplier',
            'type' => 'supplier',
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

<!DOCTYPE html>
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
                                <a href="admin.php"><img src="images/home/sup.png" alt="" /></a>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

            <section>
        
               <div class="container">    
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Input Data Supplier</h2>
                        <div class="col-sm-15">
                <div class="jumbotron">
                <form action="addsupplier.php" method="post" name="form1">
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
<br><br>
                  <a class="btn btn-info" style="width:176px" href="datasupplier.php">Back</a>
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