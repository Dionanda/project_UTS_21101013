<?php
    echo "<option selected value=$h[id_barang]>$h[id_barang] - $h[nama_barang]</option>";
    $sql = "SELECT * FROM barang";
    $hsl = mysqli_query($cnn, $sql);
    while($h = mysqli_fetch_array($hsl)){
        echo "<option value=$h[id_barang]>$h[id_barang] - $h[nama_barang]</option>";  
    }
