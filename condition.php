<?php
// menghitung BMI
/**
 * 1. Input tinggi
 * 2. Input berat
 * 3. Menghitung BMI -> berat / tinggi * tinggi
 * 4. Tampilkan hasil BMI
 * 5. Tampilkan Kategori
 */

 $weight = 43;
 $height = 1.50;
 $bmi = $weight / $height * $height;
 echo "Your BMI: $bmi \n";
 if ($bmi < 18.5) {
     echo "Kurang berat badan";
 } elseif ($bmi >= 18.5 && $bmi < 23) {
     echo "Normal";
 } elseif ($bmi >= 23 && $bmi < 30){
     echo "Cenderung obesitas";
 } elseif ($bmi >= 30){
     echo "Obesitas";
 }
?>