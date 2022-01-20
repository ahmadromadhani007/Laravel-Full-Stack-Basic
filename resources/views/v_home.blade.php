@extends('layout.v_template')
@section('title', 'Home')

@section('content')
    <h1> Ini halaman home </h1>
    <h4>{{ $nama_sekolah }}</h4><br>
    <h4>{{ $alamat }}</h4>
@endsection
