@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Isi data dosen</h3>
        <form action="{{ route('dosen.store') }}" method="POST">


        @csrf
       

            <div class="col-sm-3">
             Nama dosen   <input type="text" class="form-control" name="nama_dosen"><br/>
            </div>

            <div class="col-sm-3">
             Email  <input type="text" class="form-control" name="email"><br/>
            </div>

            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="Tambah">Tambah</button>
            </div>
        </form>
        @endauth
        <!-- soal 1 implementasi view -->
        @guest 
Anda harus login
@endguest 