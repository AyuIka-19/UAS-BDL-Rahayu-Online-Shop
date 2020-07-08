<?php

require_once 'app/init.php';

if (!empty($_POST)) {
    if(isset($_POST['nama'])) {

        $nama = $_POST['nama'];

        $indexed = $client->index([
            'index' => 'jenis',
            'type' => 'jenis',
            'body' => [
                'nama' => $nama
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
                                <a href="admin.php"><img src="images/home/jenis.png" alt="" /></a>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


            <section>
        
               <div class="container">    
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Input Data Jenis Pakaian</h2>
                        <div class="col-sm-15">
                <div class="jumbotron">
                <form action="addjenis.php" method="post" name="form1">
        <table width="50%" border="0">
                  <div class="form-group">
                    <label for="exampleInputText"><h4>Nama</h4></label>
                    <input type="text" class="form-control" name="nama" id="exampleInputNama" >
                
                  </div>

                 
                  <button type="submit" class="btn btn-primary">Submit</button><br><br>

                    <a class="btn btn-info" style="width:176px" href="datajenis.php">Back</a>
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