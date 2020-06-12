@extends('utama/layout/main')
@section('title', 'Home')
@section('container')

<section class="p-5 tm-container-outer tm-bg-gray">            
	<div class="container">
		<div class="row">
			<div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
				<h2 class="text-uppercase mb-4">Segera <strong>Daftarkan</strong> dirimu !</h2>
				<p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>                              
			</div>
		</div>
	</div>            
</section>

<div class="tm-container-outer" id="tm-section-2">

	@foreach($acara as $data)
	<section class="@if($loop->iteration%2 != 0 ) tm-slideshow-section @else tm-slideshow-section clearfix tm-slideshow-section-reverse @endif">
		<div class="@if($loop->iteration%2 != 0 ) tm-slideshow @else tm-slideshow tm-right tm-slideshow-highlight @endif">
			<img src="{{asset('foto/'.$data->foto)}}" width="100%" alt="Image">    
		</div>
		<div class="@if($loop->iteration%2 != 0 ) tm-slideshow-description tm-bg-primary @else tm-slideshow-description tm-slideshow-description-left tm-bg-highlight @endif">
			<h2 class="">{{$data->acara}}</h2>
			<p>{{$data->deskripsi}}.</p>
			<p>Keterangan : Acara ini akan dilaksanakan pada tanggal <b style="font-weight: bold;">{{date('d M Y', strtotime($data->tanggal))}}</b> pada jam <b style="font-weight: bold;">{{$data->waktu}}</b> berlokasi di <b style="font-weight: bold;">{{$data->tempat}}</b>  </p>
			<p>Perhatian : <b style="font-weight: bold;">{{$data->keterangan}}</b></p>
			<p style="font-weight: bold;">Sisa Kuota : {{$data->jml_peserta}} Orang</p>
			<a href="{{url('/acara/daftar/'.$data->id)}}" class="@if($loop->iteration%2 != 0 ) text-uppercase tm-btn tm-btn-white tm-btn-white-primary @else text-uppercase tm-btn tm-btn-white tm-btn-white-highlight @endif">Daftar Sekarang</a>
			<a href="{{url('/datapeserta/verif/'.$data->id)}}" class="@if($loop->iteration%2 != 0 ) text-uppercase tm-btn tm-btn-white tm-btn-white-primary @else text-uppercase tm-btn tm-btn-white tm-btn-white-highlight @endif">Lihat Peserta</a>
			<a href="{{url('/datapemenang/dorprize/'.$data->id)}}" class="@if($loop->iteration%2 != 0 ) text-uppercase tm-btn tm-btn-white tm-btn-white-primary @else text-uppercase tm-btn tm-btn-white tm-btn-white-highlight @endif">Pemenang Dorprize</a>
		</div>
	</section>
	@endforeach


</div>
@endsection()