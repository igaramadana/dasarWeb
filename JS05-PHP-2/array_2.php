<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title></title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f4f4f4;  
            margin: 20px;  
        }  
        table {  
            width: 50%;  
            margin: auto;  
            border-collapse: collapse;  
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
            background-color: white;  
        }  
        th, td {  
            padding: 12px;  
            border: 1px solid #ddd;  
            text-align: left;  
        }  
        th {  
            background-color: #4CAF50;  
            color: white;  
        }  
        tr:hover {  
            background-color: #f1f1f1;  
        }  
    </style>  
</head>  
<body>  
    <?php   
        $Dosen = [  
            'nama' => 'Elok Nur Hamdana',  
            'domisili' => 'Malang',  
            'jenis_kelamin' => 'Perempuan'  
        ];  
    ?>  
    
    <table>  
        <tr>  
            <th>Informasi</th>  
            <th>Detail</th>  
        </tr>  
        <tr>  
            <td>Nama</td>  
            <td><?php echo $Dosen['nama']; ?></td>  
        </tr>  
        <tr>  
            <td>Domisili</td>  
            <td><?php echo $Dosen['domisili']; ?></td>  
        </tr>  
        <tr>  
            <td>Jenis Kelamin</td>  
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>  
        </tr>  
    </table>  
</body>  
</html>