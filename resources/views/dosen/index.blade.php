@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<a href="{{ route('dosen.create') }}">Tambah data dosen</a>
<table class="table table-hover">
	<tr>
		<th>Nid</th>
		<th>Nama Dosen</th>
		<th>Email</th>
		<th>Ubah profil Dosen</th>
		<th>Hapus profil Dosen</th>
	</tr>
	@foreach ($dosen as $d)
	<tr>
		<td>{{ $d->nid }}</td>
		<td>{{ $d->nama_dosen }}</td>
		<td>{{ $d->email }}</td>
		<td><a href="{{ route('dosen.edit', $d->nid)}}">Update profil</a></td>
		<form action="{{ route('dosen.destroy',$d->nid) }}" method="POST">
		@csrf
                    @method('DELETE')
		<td><button type="submit" class="btn btn-danger">Hapus Profil</button></td>
	</tr>
	@endforeach

	{{ $dosen->links() }}
@endauth
	

@guest 
Anda harus login
@endguest 

<!-- soal 1 implementasi view -->
	 <!--//soal 1 implementasi view menggunakan boostrap front end-->
            <!--//soal 1 implementas menggunakan boostrap based front end-->