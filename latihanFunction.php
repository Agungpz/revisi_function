<?php
$namaLengkap = "Agung Prakoso";
$umur = "16";
$kelas = "X-RPL-2";
$tempatTanggal = "Jakarta, 7 Maret 2007";
$nomorWa = "083893164726";
$alamat = "Jl. Tomang Pulo GG.V No. 07, Jakarta Barat";

function myBiodata(){
    global $namaLengkap, $umur, $kelas, $tempatTanggal, $nomorWa, $alamat;
    echo "=== Program Biodata Sederhana Function ===<br/>";
    echo "Nama Lengkap : $namaLengkap <br/>";
    echo "Umur : $umur <br/>";
    echo "Kelas : $kelas <br/>";
    echo "Tempat/Tanggal lahir : $tempatTanggal <br/>";
    echo "Nomor Whatsapp : $nomorWa <br/>";
    echo "Alamat : $alamat <br/>";
    echo "======================================================================================= <br/><br/><br/>";
}

myBiodata();



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// function cek_ketersediaan_angkot($noAngkot) {
//     if ($noAngkot == 2 || $noAngkot == 9 || $noAngkot == 12 || $noAngkot == 17) {
//         return "sedang diperbaiki";
//     } elseif ($noAngkot == 10 || $noAngkot == 11) {
//         return "tersedia";
//     } elseif ($noAngkot >= 4 && $noAngkot <= 20) {
//         return "tidak tersedia";
//     } else {
//         return "tersedia";
//     }
// }

// echo "=== Program Angkot Sederhana ===\n <br/>";
// for ($no = 1; $no <= 20; $no++) {
//     $status = cek_ketersediaan_angkot($no);
//     echo "Angkot no - $no $status\n <br/>";
// }




function Angkot($noAngkot,  $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2, $kondisiTerminasi3,$kondisiTerminasi31,$kondisiTerminasi32, $kondisiTerminasi4, $kondisiTerminasi5,$kondisiTerminasi6, $kondisiTerminasi7){

for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
    if($noAngkot <= $kondisiTerminasi1 || $noAngkot == $kondisiTerminasi3 || $noAngkot == $kondisiTerminasi31 ||$noAngkot == $kondisiTerminasi32 ){
        echo "Angkot no - $noAngkot tersedia <br/>";
    }else if($noAngkot <= $kondisiTerminasi2 || $noAngkot == $kondisiTerminasi5 || $noAngkot == $kondisiTerminasi6 || $noAngkot == $kondisiTerminasi7 ){
        echo "Angkot no - $noAngkot sedang diperbaiki<br/>";
    }

    else{
        echo "Angkot no - $noAngkot tidak tersedia <br/>";
    }

}
}
echo Angkot(1, 20, 1, 2,3,10,11, 4,9,12,17);



?>