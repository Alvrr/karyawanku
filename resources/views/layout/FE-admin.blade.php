<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"> <!-- Mengatur karakter encoding dokumen sebagai UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Menyesuaikan viewport dengan lebar perangkat dan zoom awal -->
  <title>Bootstrap demo</title> <!-- Judul dokumen HTML -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Mengimpor file CSS Bootstrap dari CDN untuk pengaturan gaya -->
</head>
<body>
  {{$slot}} <!-- Menampilkan konten utama yang dimasukkan dari view lain di Laravel -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Mengimpor file JavaScript Bootstrap dari CDN untuk fitur interaktif -->
</body>
</html>
