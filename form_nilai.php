<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama_mahasiswa" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim_mahasiswa" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select name="mata_kuliah" class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Web Programming">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statiska">Statiska</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

            </form>
            </div>

            <?php
            $nama_mahasiswa = $_GET['nama_mahasiswa'];
            $nim_mahasiswa = $_GET['nim_mahasiswa'];
            $mata_kuliah = $_GET['mata_kuliah'];
            $nilai_uts = $_GET['nilai_uts'];
            $nilai_uas = $_GET['nilai_uas'];
            $nilai_tugas = $_GET['nilai_tugas'];
            $total_nilai = $_GET['total_nilai'];
            $huruf = $_GET['huruf'];
            
             $proses = $_GET['proses'];
             $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
             $rata2 = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;
             if ($rata2 >= 85 AND $rata2 <= 100) {
                $huruf = "A";
             }else if ($rata2 >= 70 AND $rata2 <= 84){
                $huruf = "B";
             }else if ($rata2 >= 60 AND $rata2 <= 79){
                $huruf = "C";
             }else if ($rata2 >= 40 AND $rata2 <= 59){
                $huruf = "D";
             }else  ($rata2 <= 40){ 
                $huruf = "E"
             }
        ?>


            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Name : <?php echo $nama_mahasiswa ?></li>
                    <li class="list-group-item">Nim : <?php echo $nim_mahasiswa ?></li>
                    <li class="list-group-item">Lesson : <?php echo $mata_kuliah ?></li>
                    <li class="list-group-item"> UTS Value : <?php echo $nilai_uts ?></li>
                    <li class="list-group-item">UAS Value : <?php echo $nilai_uas ?></li>
                    <li class="list-group-item">Assignment Value : <?php echo $nilai_tugas ?></li>
                    <li class="list-group-item">Value Total :  <?php echo $total_nilai ?></li>
                    <li class="list-group-item">Rata-Rata :  <?php echo $rata2 ?></li>
                    <li class="list-group-item">Value in Alphabet : <?php echo $huruf ?></li>
                    
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>
