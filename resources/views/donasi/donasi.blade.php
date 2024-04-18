@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Donasi')

@section('content')
@include('layout.main-layout')
<style>
    span{
    background: url('images/image 1.png');
    }

    body{
        background-color:#395144;
    }

</style>
    <span class="d-block p-5 mb-5">
        <p class="fs-2 fw-bolder ms-2"style="color:#AA8B56; width: 320px">Donasi Barang</p>
        <p class="ms-2"style="color:    ; width: 400px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae eros dapibus, feugiat tellus non, venenatis metus. Duis vulputate leo sed magna vehicula, quis efficitur nibh facilisis.</p> 
    </span>



@endsection