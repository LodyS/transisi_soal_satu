@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<a href="{{ route('mahasiswa.create') }}">Tambah data Mahasiswa</a>
<table class="table table-hover">
	<tr>
		<th>Nim</th>
		<th>Nama mahasiswa</th>
		<th>Jurusan</th>
		<th>Dosen pembimbing</th>
		<th>Ubah profil mahasiswa</th>
		<th>Hapus profil mahasiswa</th>
	</tr>
	@foreach ($mahasiswa as $m)
	<tr>
		<td>{{ $m->nim }}</td>
		<td>{{ $m->nama_mahasiswa }}</td>
		<td>{{ $m->jurusan }}</td>
		<td>{{ $m->nama_dosen }}</td>
		<td><a href="{{ route('mahasiswa.edit', $m->nim)}}">Update profil</a></td>
		<form action="{{ route('mahasiswa.destroy',$m->nim) }}" method="POST">
		@csrf
                    @method('DELETE')
		<td><button type="submit" class="btn btn-danger">Hapus Profil</button></td>
	</tr>
	@endforeach

	{{ $mahasiswa->links() }}

	@endauth  
	<!-- soal 1 implementasi view -->
	 <!--//soal 1 implementasi view menggunakan boostrap front end-->
            <!--//soal 1 implementas menggunakan boostrap based front end-->
			@guest 
     Anda harus login
@endguest 