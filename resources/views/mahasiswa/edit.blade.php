@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Update Mahsiswa</h3>

   
        <form action="{{ route('mahasiswa.update', $mahasiswa->nim)}}" method="POST">
            @csrf
            @method('PUT')

           


                <input type="hidden" class="form-control" name="nim" value="{{$mahasiswa->nim}}">
           

            <div class="col-sm-3">
               Nama Mahasiswa <input type="text" class="form-control" name="nama_mahasiwa" value="{{ $mahasiswa->nama_mahasiswa}}"><br/>
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
                <button type="submit" class="btn btn-danger" value="Edit">Edit</button>
            </div>
        </form>
        @endauth  
        <!--//soal 1 implementasi view menggunakan boostrap front end-->
            <!--//soal 1 implementas menggunakan boostrap based front end-->

            @guest 
     Anda harus login
@endguest 