<?php

require_once 'app/init.php';

if (!empty($_POST)) {
    if(isset($_POST['jumlah'], $_POST['harga'], $_POST['total_harga'], $_POST['id_transaksi'], $_POST['id_pakaian'])) {

        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $total_harga = $_POST['total_harga'];
       $id_transaksi = $_POST['id_transaksi'];
        $id_pakaian = $_POST['id_pakaian'];

        $indexed = $client->index([
            'index' => 'detail',
            'type' => 'detail',
            'body' => [
                'jumlah' => $jumlah,
                'harga' => $harga,
                'total_harga' => $total_harga,
                'id_transaksi' => $id_transaksi,
                 'id_pakaian' => $id_pakaian
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
                                <a href="admin.php"><img src="images/home/detail.png" alt="" /></a>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
            <section>
        
               <div class="container">    
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Input Data Detail Transaksi</h2>
                        <div class="col-sm-15">
                <div class="jumbotron">
                <form action="adddetailtransaksi.php" method="post" name="form1">
        <table width="50%" border="0">
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Jumlah Barang</h4></label>
                    <input type="text" class="form-control" name="jumlah" id="exampleInputNama" >
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Harga</h4></label>
                    <input type="number" class="form-control" id="" name="harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDate"><h4>Total Harga</h4></label>
                    <input type="number" class="form-control" name="total_harga" id="exampleInputDate" >
                   
                  </div>
                <div class="form-group">
                    <label for="exampleInputText"><h4>Id Transaksi</h4></label>
                    <input type="text" class="form-control"  name="id_transaksi"id="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Id Pakaian</h4></label>
                    <input type="text" class="form-control"  name="id_pakaian"id="">
                 
                  </div>
                  
                 
                  <button type="submit" class="btn btn-primary">Submit</button></div><br><br>

                   <a class="btn btn-info" style="width:176px" href="datadetailtransaksi.php">Back</a>
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

          
