<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
</head>
<body>
    <center>
        <table border="1" width="300px">
            <tr>
                <td><center><?php echo $_GET["name"]; ?></center></td>
            </tr>
            <tr>
                <td><center><?php echo $_GET["alamat"]; ?></center></td>
            </tr>
            <tr>
                <td><center><?php echo $_GET["phone"]; ?></center></td>
            </tr>
            <tr>
                <td><center><?php echo $_GET["subject"]; ?></center></td>
            </tr>
            <tr>
                <td><center><?php echo $_GET["pesanan"]; ?></center></td>
            </tr>
        </table>

        <table border="0">
            <tr>
                <th><br>Pesanan Berhasil <?php echo $_GET["name"]; ?></th>
            </tr>
            <tr>
            <th><a><a href="tamu.php"><button type="submit" name="ok" value="ok">Pesan lagi
            </button></a></a></th>
            </tr>
        </table>
    </center>
</body>
</html>
