<h1>DAFTAR SISWA</h1>
<br>
@foreach ($data as $siswa)
    {{ $siswa->id}}
    {{ $siswa->nama}}
    {{ $siswa->kontak}}
@foreach