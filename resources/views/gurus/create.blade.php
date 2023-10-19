@extends('ApaituRPL.layouts.header')

@section('content')
    <form action="{{ route('gurus.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nama Guru</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="image">Foto Guru</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>

        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="number" class="form-control" id="nip" name="nip" required>
        </div>

        <div class="form-group">
            <label for="notes">Keterangan</label>
            <textarea class="form-control" id="notes" name="notes" required></textarea>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="number" class="form-control" id="kelas" name="kelas" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

{{-- @extends('ApaituRPL.layouts.footer') --}}
