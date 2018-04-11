<h1>Data diri {{ $santri->nama }}</h1>

Umur: {{ $santri->umur }} <br>
Alamat: {{ $santri->alamat }} <br>
Jenis_kelamin: {{ $santri->jenis_kelamin }} <br>

<hr>

<a href="{{ route('santri.index') }}">Kembali</a>
