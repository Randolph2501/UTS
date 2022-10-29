<?php
use App\Models\mahasiswa;
use App\Models\vjlhmhskrs;
?>
@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')

    <style>
        table tr td {
            padding: 10px;
        }
    </style>
    <?php

    $mhss = \DB::select('SELECT studentID,nama,kode_krs,kode_term,kode_matakuliah,nama_matakuliah,sks,NilaiHuruf,totalsks FROM vrand')[0];
    echo 'Nama       : ' . $mhss->Nama . '<br>';
    echo 'Student ID : ' . $mhss->StudentID . '<br>';
    echo 'Term       : ' . $mhss->kode_term . '<br><br>';

    ?>
    <p>Matakuliah yang diambil</p>
    <table style="padding: 10px;">
        <tr>
            <td>No</td>
            <td>Kode Matakuliah</td>
            <td>Nama Matakuliah</td>
            <td>SKS</td>
            <td>Nilai Huruf</td>
        </tr>
        <?php

        $rows = \DB::select('SELECT studentID,nama,kode_krs,kode_term,kode_matakuliah,nama_matakuliah,sks,NilaiHuruf,totalsks FROM vrand');

        $no = 1;
        foreach ($rows as $row) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $row->kode_matakuliah . '</td>';
            echo '<td>' . $row->nama_matakuliah . '</td>';
            echo '<td style="text-align: center">' . $row->sks . '</td>';
            echo '<td style="text-align: center">' . $row->NilaiHuruf . '</td>';
            echo '</tr>';
            $no += 1;
        }
        ?>
    </table>
@endsection
