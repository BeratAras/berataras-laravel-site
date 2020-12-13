@section('title', 'Berat Aras | Ayarlar')
    @include('back.layouts.head')

    <body id="page-top">


        <div id="wrapper">

            @include('back.layouts.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    @include('back.layouts.navbar')

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Ayarlar</h6>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('settings.update', $settings->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" class="form-control pt-3 pb-5" name="logo_file">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{url($settings->logo)}}" height="100" class="bg-dark">
                                    </div>
                                    <div class="form-group">
                                        <label>Favicon</label>
                                        <input type="file" class="form-control pt-3 pb-5" name="favicon_file">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{url($settings->favicon)}}" height="50" class="bg-dark">
                                    </div>
                                    <div class="form-group">
                                        <label>Site Başlık</label>
                                        <input type="text" class="form-control" name="title" value="{{$settings->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Anahtar Kelimeler</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$settings->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="{{$settings->facebook}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" name="twitter" value="{{$settings->twitter}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" name="instagram" value="{{$settings->instagram}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitch</label>
                                        <input type="text" class="form-control" name="twitch" value="{{$settings->twitch}}">
                                    </div>
                                    <button type="submit" name="submitContent"
                                        class="btn btn-primary btn-block">Güncelle</button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>


                @include('back.layouts.footer')
