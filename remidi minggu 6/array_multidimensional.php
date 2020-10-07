<?php
$merk = [
    ["Honda", "Honda Beat", 16000000,"Beat.jpg"],
    ["Honda", "Honda CRF150L", 34000000,"Crf.png"],
    ["Honda", "Honda Vario 125", 21000000,"Vario.png"],
    ["Honda", "Honda PCX", 32000000,"pcx.png"],
    ["Honda", "Honda ADV150", 37000000,"Adv.png"],
    ["Honda", "Honda CBR150R", 40000000,"Cbr.png"],
    ["Suzuki", "Suzuki GSX R150", 34000000,"Gsx.png"],
    ["Suzuki", "Suzuki Satria F150", 23000000,"Satria.png"],
    ["Suzuki", "Suzuki GSX S150",27000000,"Gsxs.png"],
    ["Suzuki", "Suzuki Smash F1", 16000000,"Smash.png"],
    ["Yamaha", "Yamaha Nmax", 33000000,"Nmax.png"],
    ["Yamaha", "Yamaha Aerox 155VVA", 28000000,"Aerox.png"],
    ["Yamaha", "Yamaha R15",36000000,"R15.png"],
    ["Yamaha", "Yamaha Vixen", 27000000,"Vixen.png"],
    ["Yamaha", "Yamaha Lexi", 25000000,"Lexy.png"],
    ["Yamaha", "Yamaha WR155 R",36000000,"Wrx.png"],
    ["Yamaha", "Yamaha MX King", 24000000,"Mxking.png"]
    
    
    
];

// Membuat Pilihan
$temp_arr=[];

foreach ($merk as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_merk=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk=$merk;
    }else{
        foreach($merk as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $tampilkan_merk=$merk;
}
// var_dump($tampilkan_merk);

?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <h1 class="text-light ">Indonesian Spot</h1>
    <hr>
            <form action="array_multidimensional.php" method="post">
                <select name="filter">
                    <option value="">
                        Tampilkan Semua
                    </option>
                    <?php foreach ($pilihan as $key): ?>
                        <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                    <?php endforeach; ?>      
                </select>
                <input type="submit" value="filter">
            </form>
            <br>
            <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">GAMBAR</th>
            <th scope="col">TYPE</th>
            <th scope="col">MERK</th>
            <th scope="col">HARGA</th>
            </tr>
        </thead>
        <?php $grand_total=0; ?>
        <?php foreach ($tampilkan_merk as $key => $value): ?>
        <tbody>
            <tr>
            <td><b><img src="images/<?php echo $value[3]; ?>" alt="gagal" width="200px"></b></td>
            <td><?php echo $value[0]; ?></td>
            <td><?php echo $value[1]; ?></td>
            <td><?php echo $value[2]; ?></td>
            </tr>
        </tbody>
        <?php $grand_total+=$value[2]; ?>
        <?php endforeach; ?>
        <thead class="thead-light">
            <tr>
            <th scope="col">Total Keseluruhan</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"><?php echo $grand_total; ?></th>
            </tr>
        </thead>

        </table>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>