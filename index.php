<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mahasiswa</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }


        th, td {
            padding: 8px;
            text-align: left;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
        
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            padding-top: 30px;
            color: #333;
            text-align: center;
        }

        table {
            width: 60%;
            margin-top: 20px;
            margin-left: 20%;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }
        
        tr:hover {
            background-color: #ddd;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: goldenrod;
            margin-top: 10px;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover{
            background-color: rgb(231, 189, 83);
        }

       

        h2 {
            color: #333;
        }
        
    </style>
<body>
    <form action="" name="form-header" method="post">
        <h2><b>Formulir Nilai Mahasiswa</b></h2>
        <label for="">Nama Mahasiswa :</label>
        <input type="text" placeholder="Nama Mahasiswa" name="nama">
        <br>
        <label for="">NIM :</label>
        <input type="text" placeholder="NIM" name="NIM">
        <br>
        <label for="">Nilai Absen :</label>
        <input type="number" placeholder="Nilai Absen" name="nilai_absen">
        <br>
        <label for="">Nilai Tugas :</label>
        <input type="number" placeholder="Nilai Tugas" name="nilai_tugas">
        <br>
        <label for="">Nilai Kuis :</label>
        <input type="number" placeholder="Nilai Kuis" name="nilai_kuis">
        <br>
        <label for="">Nilai UTS :</label>
        <input type="number" placeholder="Nilai UTS" name="nilai_uts">
        <br>
        <label for="">Nilai UAS :</label>
        <input type="number" placeholder="Nilai UAS" name="nilai_uas">
        <button type="submit" value="submit" name="input">Input Nilai</button>
        <footer>
   
    </footer>
    </form>
    
</body>
<?php
if(isset($_POST['input'])){
    // Validasi input nama
    if(isset($_POST['nama']) && !empty($_POST['nama'])){
        $nama = $_POST['nama'];
    } else {
        echo "<p>Nama Mahasiswa Tidak Boleh Kosong</p>";
        exit;
    }

    // Validasi input NIM
    if(isset($_POST['NIM']) && !empty($_POST['NIM'])){
        $nim = $_POST['NIM'];
    } else {
        echo "<p>NIM Tidak Boleh Kosong</p>";
        exit;
    }

    // Validasi input nilai_absen
    if(isset($_POST['nilai_absen']) && !empty($_POST['nilai_absen'])){
        $nilai_absen = floatval($_POST['nilai_absen']);
    } else {
        echo "<p>Nilai Absen Tidak Boleh Kosong</p>";
        exit;
    }

    // Validasi input nilai_tugas
    if(isset($_POST['nilai_tugas']) && !empty($_POST['nilai_tugas'])){
        $nilai_tugas = floatval($_POST['nilai_tugas']);
    } else {
        echo "<p>Nilai Tugas Tidak Boleh Kosong</p>";
        exit;
    }

    // Validasi input nilai_kuis
    if(isset($_POST['nilai_kuis']) && !empty($_POST['nilai_kuis'])){
        $nilai_kuis = floatval($_POST['nilai_kuis']);
    } else {
        echo "<p>Nilai Kuis Tidak Boleh Kosong</p>";
        exit;
    }

    // Validasi input nilai_uts
    if(isset($_POST['nilai_uts']) && !empty($_POST['nilai_uts'])){
        $nilai_uts = floatval($_POST['nilai_uts']);
    } else {
        echo "<p>Nilai UTS Tidak Boleh Kosong</p>";
        exit;
    }

    // Validasi input nilai_uas
    if(isset($_POST['nilai_uas']) && !empty($_POST['nilai_uas'])){
        $nilai_uas = floatval($_POST['nilai_uas']);
    } else {
        echo "<p>Nilai UAS Tidak Boleh Kosong</p>";
        exit;
    }

    // Operasi Matematika Nilai Akhir
    /*$data_input_nilai = [$nilai_absen,$nilai_tugas,$nilai_kuis,$nilai_uts,$nilai_uas];
    foreach($data_input_nilai as $nilai_akhir){
        $nilai_akhir =floatval($nilai_akhir);
    }*/
    $nilai_akhir = $nilai_absen * 0.1 + $nilai_tugas * 0.1 + $nilai_kuis * 0.1 + $nilai_uts * 0.3 + $nilai_uas * 0.4;

    //Operasi Matematika Nilai Rata Rata
    /*$data_nilai_rata = [$nilai_absen,$nilai_tugas,$nilai_kuis,$nilai_uts,$nilai_uas];
    foreach($data_nilai_rata as $nilai_rata_rata){
        $nilai_rata_rata = floatval($nilai_rata_rata);
    }*/
    $nilai_Rata=($nilai_absen + $nilai_tugas + $nilai_kuis + $nilai_uts + $nilai_uas)/5;
    
     //Menampilkan hasil input dalam tabel beserta nilai akhir
        echo "<h2>Hasil Input:</h2>";
        echo "<table>";
        echo "<tr><th>Nama Mahasiswa</th><th>NIM</th><th>Nilai Absen</th><th>Nilai Tugas</th><th>Nilai Kuis</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Nilai Rata Rata</th></tr>";
        echo "<tr>";
        echo "<td>".htmlspecialchars($_POST['nama'])."</td>";
        echo "<td>". htmlspecialchars($_POST['NIM']) ."</td>";
        echo "<td>".htmlspecialchars($_POST['nilai_absen'])."</td>";
        echo "<td>".htmlspecialchars($_POST['nilai_tugas'])."</td>";
        echo "<td>".htmlspecialchars($_POST['nilai_kuis'])."</td>";
        echo "<td>".htmlspecialchars($_POST['nilai_uts'])."</td>";
        echo "<td>".htmlspecialchars($_POST['nilai_uas'])."</td>";
        echo "<td>".htmlspecialchars($nilai_akhir)."</td>";
        echo "<td>".htmlspecialchars($nilai_Rata)."</td>";
        echo "</tr>";
        echo "</table>";
        echo "<h2>&copy; 2023 Made By ❤️ </h2>";
}
?>
</html>