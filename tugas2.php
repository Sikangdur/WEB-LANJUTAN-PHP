
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="belanja.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="nama_customer" value="" class="form-control">
                </div>
                <div class="form-group" name="nama_barang">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio2" value="Refrigator">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio3" value="Mesin Cuci" disabled>
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_barang" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date Shipping</label>
                    <input type="date" name="tanggal_beli" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select name="type_courier" class="form-select form-control" class="form-control" >
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="harga_courier" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="asuransi" value="" class="form-control">
                </div>

                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">

            </form>
            </div>

            <?php
       $nama_customer = $_POST['nama_customer'];
       $nama_barang = $_POST['nama_barang'];
       $total_barang = $_POST['total_barang'];
       $tanggal_beli = $_POST['tanggal_beli'];
       $type_courier = $_POST['type_courier'];
       $alamat = $_POST['alamat'];
       $harga_courier = $_POST['harga_courier'];
       $asuransi = $_POST['asuransi'];
       $harga_total = $_POST['harga_total'];
       $cost_list = $_POST['cost_list'];
       
        $simpan = $_POST['simpan'];
        ?>
            <div class="col-3 mt-3">     
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?php echo $nama_customer ?> </li>
                    <li class="list-group-item">Item : <?php echo $nama_barang ?></li>
                    <li class="list-group-item">Total Item : <?php echo $total_barang ?></li>
                    <li class="list-group-item">Date Shipping :  <?php echo $tanggal_beli ?></li>
                    <li class="list-group-item">Courier Type : <?php echo $type_courier ?></li>
                    <li class="list-group-item">Shipping Address : <?php echo $alamat ?></li>
                    <li class="list-group-item">Courier Cost : <?php echo $harga_courier ?></li>
                    <li class="list-group-item">Assurance Cost :  <?php echo $asuransi ?></li>
                    <li class="list-group-item">Total Cost : <?php echo $harga_total ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3" name="cost_list">
                <div class="card" style="width: 18rem;" name="cost_list">
                    <div class="card-header bg-success text-white" name="cost_list">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush" name="cost_list">
                    <li class="list-group-item" name="cost_list" value="tv">TV : Rp.3000.000</li>
                    <li class="list-group-item" name="cost_list" value="refrigator">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item" name="cost_list" value="mesin cuci">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
