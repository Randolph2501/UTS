<?php
use App\Models\mahasiswa;
use App\Models\vjlhmhskrs;
?>
@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
    <h1>Index Mahasiswa</h1>
    <style>
        table tr td {
            padding: 10px;
        }
    </style>
    <table style="padding: 10px;">
        <tr>
            <td>Student ID</td>
            <td>Nama</td>
            <td>Jumlah KRS</td>
        </tr>
        <?php
        // $mahasiswas = mahasiswa::get();

        // foreach ($mahasiswas as $mahasiswa) {
        //     echo "<tr>";
        //     echo "<td>".$mahasiswa->studentId."</td>";
        //     echo "<td>".$mahasiswa->nama."</td>";
        //     echo "<td>".$mahasiswa->jurusan."</td>";
        //     echo "<td>".$mahasiswa->tahunMasuk."</td>";
        //     echo "</tr>";
        // }

        $rows = \DB::select('select studentid, nama, jlhkrs from vjlhmhskrs');

        foreach ($rows as $row) {
            echo '<tr>';
            echo '<td>' . $row->studentid . '</td>';
            echo '<td>' . $row->nama . '</td>';
            echo '<td style="text-align: center">' . $row->jlhkrs . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
@endsection
