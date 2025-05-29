@extends('layouts.template')

@section('content')
<h2>Kontak dan Bantuan</h2>
<p>Jika Anda membutuhkan bantuan, silakan hubungi kami melalui formulir di bawah ini.</p>
<form>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Pesan</label>
        <textarea class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Kirim</button>
</form>
@endsection