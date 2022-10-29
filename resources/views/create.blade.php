<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>New Data</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
   <div class="container mt-2">
      <div class="row">
         <div class="col-lg-12">
            <div class="pull-right mb-3">
               <h3 class="font-weight-bold mt-4 text-center">{{ __(' Formulir Pendaftaran siswa baru') }}</h3>
               <p class="font-italic font-weight-lighter text-center text-xs">{{ __('Isian dengan tanda * harus di isi') }}</p>
            </div>
         </div>
      </div>
      @if (session('status'))
         <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
         </div>
      @endif
      <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="d-flex justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-5">
               <div class="form-group">
                  <strong>{{ __('Nama Siswa *') }}</strong>
                  <input type="text" name="nama" class="form-control">
                  @error('nama')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <strong>{{ __('Alamat *') }}</strong>
                  <input type="text" name="alamat" class="form-control">
                  @error('alamat')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <strong>{{ __('Tanggal Lahir') }}</strong>
                  <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir">
                  @error('tanggal_lahir')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <strong>{{ __('Jenis Kelamin') }}</strong>
                  <div class="input-group mb-3">
                     <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option selected>{{ __('Select...') }}</option>
                        <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected=selected' : '' }}>{{ __('Laki-laki') }}</option>
                        <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected=selected' : '' }}>{{ __('perempuan') }}</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <strong>{{ __('Asal Sekolah') }}</strong>
                  <input type="text" name="asal_sekolah" class="form-control">
                  @error('asal_sekolah')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <strong>{{ __('Agama') }}</strong>
                  <div class="input-group mb-3">
                     <select class="custom-select" id="inputGroupSelect02" name="agama_id">
                        <option selected>{{ __('Select agama...') }}</option>
                        @foreach ($agama as $a)
                           <option value="{{ $a->id }}">{{ $a->agama_name }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <strong>{{ __('Nilai Bahasa Indonesia') }}</strong>
                  <input type="text" name="nilai_ind" class="form-control">
                  @error('nilai_ind')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <strong>{{ __('Nilai Matematika') }}</strong>
                  <input type="text" name="nilai_mtk" class="form-control">
                  @error('nilai_mtk')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <strong>{{ __('Nilai IPA') }}</strong>
                  <input type="text" name="nilai_ipa" class="form-control">
                  @error('nilai_ipa')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <button type="submit" class="btn btn-primary col">{{ __('Simpan') }}</button>
            </div>
         </div>
      </form>
   </div>
</body>

</html>
