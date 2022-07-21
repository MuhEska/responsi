<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <form name = "form1" method="post" action="proses.php"></form>
</head>
<body>

    <h2>Jasa Pengiriman Barang</h2>
    <script>
        var pengirim = (prompt("Nama Pengirim : ", "Nama pengirim"));
        var penerima = (prompt("Nama Penerima : ", "Nama penerima"));
        var jarak = (prompt("Jarak Pengiriman(Km) ", 1));
        var alamat = (prompt("Alamat Penerima : ", "Alamat"));
        var jenis = (prompt("Jenis Barang : "));
        var berat = (prompt("Berat Barang (kg) : ", 1));

        document.write(`<strong>Detail pengiriman</strong><br><br>Nama Pengirim : ${pengirim}<br>Nama Penerima: ${penerima}<br>Jarak Pengiriman : ${jarak}<br>Alamat Penerima : ${alamat}<br>Jenis Barang : ${jenis}<br>Berat Barang : ${berat}`);

        var biayajarak = jarak*5000;
        var potongan = "";
        if (biayajarak > 50000){
            potongan = biayajarak*0.05;

        }else{
            potongan = 0;
        }
        var biayakirim = (biayajarak-potongan);
        document.write(`<br><strong>Biaya</strong><br><br><br>Biaya : ${biayajarak}<br>Potongan : ${potongan}<br>Total Biaya : ${biayakirim}`);


    </script>
    
</body>
</html>