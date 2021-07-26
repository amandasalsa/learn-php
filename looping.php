<?php
/**
 * looping (perulangan) -> mengulang baris kode perintah
 * 
 * type of looping -> for, while, do.. while
 * 
 * Konsep looping:
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisinya benar, looping akan berlanjut
 * saat kondisi salah, looping akan berhenti
 */

  // case 1: menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
//$start = -70;
//for ($i=$start; $i < 100 ; $i+=7) {
//   echo "$i ";
//}


 // case 2
 $person = [
    ["name" => "Gopal", "addres" => "Madrid", "age" => 40],
    ["name" => "Kaizo", "addres" => "Saturnus", "age" => 80],
    ["name" => "Kokochi", "addres" => "Pluto", "age" => 20],
];
//tanda titik digunakan untuk menggabungkan antara string 1 dengan string yg lain
//echo $person[0]['name']." ".$person[0]['adress']." ".$person[0]['age']." | ";
//echo $person[1]['name']." ".$person[1]['adress']." ".$person[1]['age']." | ";
//echo $person[2]['name']." ".$person[2]['adress']." ".$person[2]['age']." | ";
// menampilkan isi dalam array person
# count digunakan untuk mengetahui jumlah array (java -> .lenght())

for ($i=0; $i < count($person); $i++) {
    echo $person[0]['name']." ".$person[0]['addres']." ".$person[0]['age']." | ";
    

}

?>