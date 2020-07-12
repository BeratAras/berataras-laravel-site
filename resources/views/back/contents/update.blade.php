@section('title', 'Berat Aras | Makale Güncelle')
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
                  <h6 class="m-0 font-weight-bold text-primary">{{$contents->content_title}} Adlı Makaleyi Güncelle</h6>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="POST" action="{{route('content.update', $contents->id)}}" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group"> 
                            <label>Dış Banner</label> <br>
                            <img src="{{asset('img/content_img').'/'.$contents->content_file_banner}}" width="200" class="img-thumbnail rounded">
                            <input type="file" class="form-control pt-3 pb-5" name="file_banner">
                        </div>
                        <div class="form-group">
                            <label>İç Banner</label> <br>
                            <img src="{{asset('img/content_img').'/'.$contents->content_in_banner}}" width="200" class="img-thumbnail rounded">
                            <input type="file" class="form-control pt-3 pb-5" name="file_in_banner">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control form-control-lg" name="categorySelect">
                                <option>Seç</option>
                                @foreach($categories as $category)
                                <option @if($contents->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label>Başlık</label>
                          <input type="text" class="form-control" name="title" value="{{$contents->content_title}}">
                        </div>
                        <div class="form-group">
                            <label>Makale</label>
                            <textarea type="text" rows="15" id="summernote" class="form-control" name="description">{!!$contents->content_description!!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Anahtar Kelimeler</label>
                            <input type="text" class="form-control" name="keywords" value="{{$contents->content_keywords}}">
                        </div>
                        <div class="form-group">
                            <label>Durum</label>
                            <select class="form-control form-control-lg" name="statusSelect">
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                        </div>
                        <button type="submit" name="submitContent" class="btn btn-primary btn-block">Makaleyi Güncelle</button>
                    </form>
                </div>
            </div>
    

        </div>
      </div>


      @include('back.layouts.footer')