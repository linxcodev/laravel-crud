<h1>Input Data Santri</h1>
<form action="{{ route('santri.store') }}" method="post">
    {{-- <!-- {{}} --> --}}
    @csrf
    <input type="text" name="nama" placeholder="nama..."><br>
    @if ($errors->has('nama'))
        <strong>{{ $errors->first('nama')}}</strong><br>
    @endif
    <input type="text" name="umur" placeholder="umur..."><br>
    @if ($errors->has('umur'))
        <strong>{{ $errors->first('umur')}}</strong><br>
    @endif
    <textarea name="alamat" placeholder="alamat..."></textarea><br>
    @if ($errors->has('alamat'))
        <strong>{{ $errors->first('alamat')}}</strong><br>
    @endif
    <input type="text" name="jenis_kelamin" placeholder="jenis kelamin..."><br>
    @if ($errors->has('jenis_kelamin'))
        <strong>{{ $errors->first('jenis_kelamin')}}</strong><br>
    @endif
    <button type="submit">Save</button>
    <a href="{{ route('santri.index') }}">Batal</a>
    
</form>
