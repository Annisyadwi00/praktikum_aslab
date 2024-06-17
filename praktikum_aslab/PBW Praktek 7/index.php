<?php
    $nama = "Annisya Dwi Chaerani";
    $panjang_nama = strlen($nama);
    $ada_spasi = false;

    for ($i = 0; $i < $panjang_nama; $i++){
        if ($nama[$i] == ' '){
            $ada_spasi = true;
            break;
        }
    }
    if ($ada_spasi){
        echo "Ada spasi dalam nama.";
    } else{
        echo "Tidak ada spasi dalam nama.";
    }
    
?>