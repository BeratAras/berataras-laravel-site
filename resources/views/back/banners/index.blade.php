@section('title', 'Berat Aras | Github Repo')
    @include('back.layouts.head')

    <body id="page-top">


        <div id="wrapper">

            @include('back.layouts.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    @include('back.layouts.navbar')

                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Github Repoları</h1>
                        </div>


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">{{ count($banner) }} Yorum Mevcut</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Başlık</th>
                                                <th>Tip</th>
                                                <th>Link</th>
                                                <th>Fotoğraf</th>
                                                <th>Aksiyonlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($banner as $banner)
                                                <tr>
                                                    <td>{{ $banner->banner_text }}</td>
                                                    <td>{{ $banner->banner_type }}</td>
                                                    <td>{{ $banner->banner_link }}</td>
                                                    <td>
                                                        <img src="{{ url($banner->banner_file) }}" width="100">
                                                    </td>
                                                    <td>
                                                        <a href="{{route('banner.edit', $banner->id)}}" title="Güncelle" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                                        
                                                        <a href="{{ route('banner.delete', $banner->id) }}"
                                                            title="Sil" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                @include('back.layouts.footer')
