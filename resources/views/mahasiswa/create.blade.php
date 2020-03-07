@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Isi data dosen</h3>
        <form action="{{ route('mahasiswa.store') }}" method="POST">


        @csrf
            <div class="col-sm-3">
             Nama mahasiswa   <input type="text" class="form-control" name="nama_mahasiswa"><br/>
            </div>

            <div class="col-sm-3">
             Jurusan  <select class="form-control" name="jurusan"><br/>
                              <option value="Sistem Informasi">Sistem Informasi</value><br/>
                              <option value="Teknik Informatika">Teknik Informatika</value><br/>
                              <option value="Teknik Elektro">Teknik Elektro</value><br/>
                              <option value="Filsafat">Filsafat</value><br/>
                        </select>
            </div>

            <div class="col-sm-3">
					Nama Dosen Pembimbing : <select class="form-control" name="nid_dosen_pembimbing">
            @foreach ($dosen as $d)
                <option value="{{ $d->nid_dosen_pembimbing}}">{{ $d->nama_dosen }}</value><br/>
                @endforeach
        </select>
     </div>
   
            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="tambah">Tambah</button>
            </div>
        </form>
        @endauth
 <!-- soal 1 implementasi view -->
  <!--//soal 1 implementasi view menggunakan boostrap front end-->
            <!--//soal 1 implementas menggunakan boostrap based front end-->

            @guest 
     Anda harus login
@endguest 