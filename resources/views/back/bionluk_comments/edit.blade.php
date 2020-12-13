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
                  <h6 class="m-0 font-weight-bold text-primary">Bionluk Yorum Düzenle</h6>
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
                <form method="POST" action="{{route('bionluk_comment.update', $comment->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Kullanıcı Fotoğrafı</label> 
                            <input type="text" class="form-control" name="photo_link" value="{{$comment->user_photo}}">
                            {{-- <input type="file" class="form-control pt-3 pb-5" name="file_photo"> --}}
                        </div>
                        <div class="form-group">
                          <label>Kullanıcı Adı</label>
                          <input type="text" class="form-control" name="username" value="{{$comment->username}}">
                        </div>
                        <div class="form-group">
                            <label>Yorum</label>
                            <textarea type="text" rows="15" class="form-control" name="comment">{{$comment->comment}}</textarea>
                        </div>
                        <button type="submit" name="submitContent" class="btn btn-primary btn-block">Güncelle</button>
                    </form>
                </div>
            </div>
    

        </div>
      </div>


      @include('back.layouts.footer')