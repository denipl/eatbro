<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pesanan</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>	
<div class="wrapper">
  <div class="title">
    <h1>Pesan Di Sini !</h1>
  </div>
  <form class="contact-form" action="hasiltamu.php" method="get">
    <div class="input-fields">
      <input type="text" class="input" name="name" placeholder="Name">
      <input type="text" class="input" name="alamat" placeholder="Alamat">
      <input type="text" class="input" name="phone" placeholder="Phone">
      <input type="text" class="input" name="subject" placeholder="Subject">
    </div>
    <div class="msg">
      <textarea name="pesanan"" placeholder="Pesanan"></textarea>
      <button type="submit" name="Proses" value="proses">Proses</button>
      <a href="index.html">kembali</a>
    </div>
  </form>
</div>
</body>
</html>