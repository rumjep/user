@extends('utama/layout/main')
@section('title', 'Pendaftaran')
@section('container')

<section class="p-5 tm-container-outer tm-bg-gray">            
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                <h2 class="text-uppercase mb-4">Silahkan isi data diri kamu !</h2>
                <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>                              
            </div>
        </div>
    </div>            
</section>

<div class="container" style="margin-top: 20px;">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <!-- Table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Form Pendaftaran</div>
                        <div class="table-responsive">
                            <div class="container" style="margin-top: 20px; margin-bottom: 20px;">

                                <form action="{{url('/postdaftar')}}" method="post">
                                    @csrf
                                    <div class="position-relative form-group">
                                        <label class="">Acara yg Akan diikuti</label>
                                        <input type="hidden" name="id_acara" value="{{$acara->id}}">
                                        <input name="acara" type="text" readonly="readonly" class="form-control" value="{{$acara->acara}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="">Nama</label>
                                        <input type="text" name="nama" placeholder="Ex : Lutfi" required="required" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="">Jenis Kelamin</label>
                                        <select name="j_kel" class="form-control">
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>

                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="">Tgl Lahir</label>
                                        <input name="tgl_lahir" type="date" class="form-control" required="required">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="">Email</label>
                                        <input name="email" placeholder="Ex : lutfi@gmail.com" type="email" class="form-control" required="required">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="">No Hp</label>
                                        <input name="no_hp" type="number" placeholder="Ex : 085245678XXX" class="form-control" required="required">
                                    </div>
                                    <button type="submit" class="mt-2 btn btn-primary">Daftar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
</div>
@endsection()