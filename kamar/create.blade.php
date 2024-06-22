@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kamar</h1>
        <form action="{{ route('kamars.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomor_kamar">Nomor Kamar</label>
                <input type="text" name="nomor_kamar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tingkat">Tingkat</label>
                <input type="text" name="tingkat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="tersedia">Tersedia</option>
                    <option value="ditempati">Ditempati</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection