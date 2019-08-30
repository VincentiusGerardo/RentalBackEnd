<style>
h1{
    font-size:400%;
}
</style>
<h1 class="text-center">
<?php 
    $bulan = date("n"); 
    switch($bulan){
        case 1: $namaBulan = "Januari"; break;
        case 2: $namaBulan = "Febuari"; break;
        case 3: $namaBulan = "Maret"; break;
        case 4: $namaBulan = "April"; break;
        case 5: $namaBulan = "Mei"; break;
        case 6: $namaBulan = "Juni"; break;
        case 7: $namaBulan = "Juli"; break;
        case 8: $namaBulan = "Agustus"; break;
        case 9: $namaBulan = "September"; break;
        case 10: $namaBulan = "Oktober"; break;
        case 11: $namaBulan = "November"; break;
        case 12: $namaBulan = "Desember"; break;
    }

    $hari = date("N");
    switch($hari){
        case 1: $namaHari = "Senin"; break;
        case 2: $namaHari = "Selasa"; break;
        case 3: $namaHari = "Rabu"; break;
        case 4: $namaHari = "Kamis"; break;
        case 5: $namaHari = "Jumat"; break;
        case 6: $namaHari = "Sabtu"; break;
        case 7: $namaHari = "Minggu"; break;
    }
?>
    <p><?= $namaHari . date(", j ") . $namaBulan . date(" Y") ?></p>
    <table align="center">
        <tr>
            <td id="Jam"><?= date("h") ?></td>
            <td>:</td>
            <td id="Menit"><?= date("i") ?></td>
            <td>:</td>
            <td id="Detik"><?= date("s") ?></td>
            <td>&nbsp;</td>
            <td><?= date("A") ?></td>
        </tr>
    </table>
</h1>