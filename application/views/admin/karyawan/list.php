<?php

    foreach ($karyawan as $karyawan):

        echo $karyawan->karyawan_id;
        echo $karyawan->nama;
        echo $karyawan->alamat;
        echo $karyawan->telepon;
        echo "<br />";
    endforeach;