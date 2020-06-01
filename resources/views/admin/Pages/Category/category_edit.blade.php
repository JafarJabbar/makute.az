
@extends('admin.Layout.app')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Ana səhifə</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active" >
                        <a href="{{route('admin.dashboard')}}">
                            Ana səhifə
                        </a>
                    </li>
                    <li  class="breadcrumb-item active"><a href="{{route('admin.category.index')}}">Kateqoriyalar</a></li>
                    <li class="breadcrumb-item active">Kateqoriya əlavə et</li>
                </ol>
                <!-- Modal -->
                <div  class="col-md-6">
                    <form id="addForm" novalidate method="post" action="{{route('admin.category.add',['category'=>@$category['url']])}}" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <input type="hidden" name="url"  value="{{@$category['url']}}">
                        <div class="form-group">
                            <label for="inputAddress">Kateqoriyanın adı</label>
                            <input type="text" value="{{@$category['title']}}" class="form-control" id="inputAddress" name="name" placeholder="Kateqoriyanın adını yazın...">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">Yadda saxla</button>
                            </div>

                            <div class="col-md-6">
                                <button type="reset" class="btn btn-danger btn-block">Təmizlə</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </main>
    </div>
@endsection
