@extends('utama/layout/main')
@section('title', 'Selesai')
@section('container')

<section class="p-5 tm-container-outer tm-bg-gray">            
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                <h2 class="text-uppercase mb-4">Kamu Sudah Terdaftar !</h2>
                <p class="mb-4">Silahkan Melakukan Registrasi Ulang ke Pihak Terkait.</p>
                <a href="{{url('/')}}" class="text-uppercase btn-primary tm-btn">Kembali ke Home</a>
            </div>
        </div>
    </div>            
</section>

@endsection()