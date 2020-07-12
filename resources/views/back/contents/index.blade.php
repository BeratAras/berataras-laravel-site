@section('title', 'Berat Aras | Makaleler')
@include('back.layouts.head')

<body id="page-top">


  <div id="wrapper">

    @include('back.layouts.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        @include('back.layouts.navbar')

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Makaleler</h1>
          </div>

          
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{count($contents)}} Makale Mevcut</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Link</th>
                          <th>Başlık</th>
                          <th>Makale</th>
                          <th>Dış Banner</th>
                          <th>İç Banner</th>
                          <th>Anahtar Kelimeler</th>
                          <th>Kategori</th>
                          <th>Durum</th>
                          <th>İşlemler</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contents as $content)
                        <tr>
                          <td>{{$content->content_slug}}</td>
                          <td>{{$content->content_title}}</td>
                          <td>{{$content->content_description}}</td>
                          <td>
                              <img src="{{asset('img/content_img').'/'.$content->content_file_banner}}" width="100">
                          </td>
                          <td>
                              <img src="{{asset('img/content_img').'/'.$content->content_in_banner}}" width="100">
                          </td>
                          <td>{{$content->content_keywords}}</td>
                          <td>{{$content->getCategory['category_name']}}</td>
                          <td>
                          <input class="switch" content-id="{{$content->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success" @if($content->content_status==1) checked @endif data-toggle="toggle">
                          </td>
                          <td>
                            <a href="" title="Görüntüle" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="{{route('content.edit', $content->id)}}" title="Güncelle" class="btn btn-success"><i class="fa fa-pen"></i></a>
                            <a href="{{route('delete', $content->id)}}" title="Sil" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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