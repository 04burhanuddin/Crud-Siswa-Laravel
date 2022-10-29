<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Berhasil Mendaftar</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
   <div class="d-flex justify-content-center container mt-5">
      <div class="card">
         <div class="card-header font-weight-bold text-center">
            <h4>No Pendaftaran Anda Adalah : {{ $siswa->no_pendaftaran }}</h4>
         </div>
         <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">No Pendaftaran : {{ $siswa->no_pendaftaran }}</li>
            <li class="list-group-item">Nama : {{ $siswa->nama }}</li>
            <li class="list-group-item">Alamat : {{ $siswa->alamat }}</li>
         </ul>
      </div>
   </div>

</body>

</html>
