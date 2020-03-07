@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Update dosen</h3>
        <form action="{{ route('dosen.update', $dosen->nid)}}" method="POST">
            @csrf
            @method('PUT')

           


                <input type="hidden" class="form-control" name="nid" value="{{$dosen->nid}}">
           

            <div class="col-sm-3">
               Nama Dosen <input type="text" class="form-control" name="nama_dosen" value="{{ $dosen->nama_dosen}}"><br/>
            </div>

            <div class="col-sm-3">
             Email  <input type="text" class="form-control" name="email" value="{{ $dosen->email}}"><br/>
            </div>

            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="Edit">Edit</button>
            </div>
        </form>
        @endauth
    <!-- soal 1 implementasi view -->
     <!--//soal 1 implementasi view menggunakan boostrap front end-->
            <!--//soal 1 implementas menggunakan boostrap based front end-->

@guest Anda harus login @endguest 