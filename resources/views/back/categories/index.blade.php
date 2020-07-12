@section('title', 'Berat Aras | Kategoriler')
@include('back.layouts.head')

<body id="page-top">


  <div id="wrapper">

    @include('back.layouts.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        @include('back.layouts.navbar')

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategoriler</h1>
          </div>

          <!-- Content Row -->
            <div class="row">

                <div class="col-lg-4 mb-4">
                    <!-- Approach -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('category.create')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Dış Banner</label> 
                                    <input type="file" class="form-control pt-3 pb-5" name="file_banner">
                                </div>
                                <div class="form-group">
                                    <label>Anahtar Kelimeler</label>
                                    <input type="text" class="form-control" name="keywords">
                                </div>
                                <button type="submit" name="submitCategory" class="btn btn-primary btn-block">Kategoriyi Ekle</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{count($categories)}} Kategori Mevcut</h6>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>Adı</th>
                                <th>Banner</th>
                                <th>Link</th>
                                <th>Anahtar Kelimeler</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <img src="{{asset('img/category_img').'/'.$category->category_files}}" width="100">
                                </td>
                                <td>{{$category->category_slug}}</td>
                                <td>{{$category->category_keywords}}</td>
                                <td>
                                    <input class="switch" category-id="{{$category->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success" @if($category->category_status==1) checked @endif data-toggle="toggle">
                                </td>
                                <td>
                                    <a href="" title="Görüntüle" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a category-id="{{$category->id}}" title="Güncelle" class="btn btn-success text-white edit-click"><i class="fa fa-pen"></i></a>
                                    <a href="{{route('delete', $category->id)}}" title="Sil" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

        </div>
      </div>

        
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kategoriyi Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="POST" action="{{route('category.update')}}" enctype="multipart/form-data"> 
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Başlık</label>
                                <input id="title" type="text" class="form-control" name="title">
                                <input type="hidden" name="id" id="category_id">
                            </div>
                            <div class="form-group">
                                <label>Dış Banner</label> 
                                <input id="file_banner" type="file" class="form-control pt-3 pb-5" name="file_banner">
                            </div>
                            <div class="form-group">
                                <label>Anahtar Kelimeler</label>
                                <input id="keywords" type="text" class="form-control" name="keywords">
                            </div>
                        </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                        <button type="submit" name="submitEdit" class="btn btn-primary">Düzenle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      @include('back.layouts.footer')