@section('title', 'Berat Aras | Yorumlar')
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
                                <h6 class="m-0 font-weight-bold text-primary">Banner Ekle</h6>
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
                                <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Başlık</label>
                                        <input type="text" class="form-control" name="banner_text">
                                    </div>
                                    <div class="form-group">
                                        <label>Tip</label>
                                        <input type="text" class="form-control" name="banner_type">
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" class="form-control" name="banner_link">
                                    </div>
                                    <div class="form-group">
                                        <label>Fotoğraf</label>
                                        <input type="file" class="form-control pt-3 pb-5" name="banner_file">
                                    </div>
                                    <button type="submit" name="submitContent"
                                        class="btn btn-primary btn-block">Ekle</button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>


                @include('back.layouts.footer')
