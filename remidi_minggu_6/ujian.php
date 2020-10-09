<?php
$motor = [
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


foreach($motor as $value){
    
    // echo $value [0].$value[1].$value[2].PHP_EOL."\t";
}



$temp_arr=[];
foreach($motor as $value){
    $temp_arr[]=$value[0];

}
$pilihan=array_unique($temp_arr);
foreach($pilihan as $valius_x){
    echo $valius_x."\n";
    

}