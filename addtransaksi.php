<?php

require_once 'app/init.php';

if (!empty($_POST)) {
    if(isset($_POST['tanggal_transaksi'], $_POST['id_member'], $_POST['id_admin'])) {

        $tanggal_transaksi = $_POST['tanggal_transaksi'];
        $id_member = $_POST['id_member'];
        $id_admin = $_POST['id_admin'];

        $indexed = $client->index([
            'index' => 'transaksi',
            'type' => 'transaksi',
            'body' => [
                'tanggal_transaksi' => $tanggal_transaksi,
                'id_member' => $id_member,
                'id_admin' => $id_admin
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
                                <a href="admin.php"><img src="images/home/tra.png" alt="" /></a>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


            <section>
        
               <div class="container">    
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Input Data Transaksi</h2>
                        <div class="col-sm-15">
                <div class="jumbotron">
               <form action="addtransaksi.php" method="post" name="form1">
        <table width="50%" border="0">
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Tanggal Transaksi</h4></label>
                    <input type="text" class="form-control" name="tanggal_transaksi" id="exampleInputNama" >
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Id member</h4></label>
                    <input type="text" class="form-control" name="id_member" id="exampleInputNama" >
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Id Admin</h4></label>
                    <input type="text" class="form-control" name="id_admin" id="exampleInputNama" >
                
                  </div>
                
                 
                  <button type="submit" class="btn btn-primary">Submit</button><br><br>

                   <a class="btn btn-info" style="width:176px" href="datatransaksi.php">Back</a>
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