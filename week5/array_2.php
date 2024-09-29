<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            width: 100%;
            margin: 20px auto;
            border: 2px solid #333;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Hammam mau tidur',
            'domisili' => 'Yemen',
            'jenis_kelamin' => 'MAN'];
            
        echo "<table>";    
        echo "<tr>
                <td>Nama</td>
                <td>{$Dosen['nama']}</td>
            </tr>";
        echo "<tr>
            <td>Domisili</td>
            <td>{$Dosen['domisili']}</td>
        </tr>";
        echo "<tr>
            <td>Jenis Kelamin</td>
            <td>{$Dosen['jenis_kelamin']}</td>
        </tr>";
        echo "</table>";
    ?>
</body>
</html>