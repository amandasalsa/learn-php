<?php
/**
 * Array adalah kumpulan nilai yg berjenis sama
 * setiap data punya posisi yg disebut index (start from 0)
 * 
 * variabel -> individu
 * array -> populasi
 */
//$student = "Bill Gates";
//$siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
//echo $siswa[3];

// array numeric -> array yg indexnya berupa numerik
// array assosiative -> array yg indexnya berupa string

//array digunakan saat ada data yg bisa di kelompokkan
$person = [
    ["name" => "Gopal", "addres" => "Madrid", "age" => 40],
    ["name" => "Kaizo", "addres" => "Saturnus", "age" => 80],
    ["name" => "Kokochi", "addres" => "Pluto", "age" => 20],
];

echo $person[1][name];
?>