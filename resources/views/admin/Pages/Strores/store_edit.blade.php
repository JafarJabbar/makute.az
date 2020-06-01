
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
                    <li  class="breadcrumb-item active"><a href="{{route('admin.store.index')}}">Mağazalar</a></li>
                    <li class="breadcrumb-item active">Mağaza əlavə et </li>
                </ol>
                <!-- Modal -->
                <div  class="col-md-6">
                    <form id="addForm" novalidate method="post" action="{{route('admin.store.add')}}" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <input type="hidden" name="url"  value="{{@$store['url']}}">
                        <div class="form-group">
                            <label for="inputAddress">Mağazanın adı</label>
                            <input type="text" value="{{@$store['name']}}" class="form-control" id="inputAddress" name="name" placeholder="Mağazanın adını yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Mağazanın ünvanı</label>
                            <input type="text" value="{{@$store['name']}}" class="form-control" id="inputAddress" name="address" placeholder="Mağazanın ünvanı yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Mağazanın iş saatları</label>
                            <input type="text" value="{{@$store['name']}}" class="form-control" id="inputAddress" name="work_hour" placeholder="Mağazanın iş saatları yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Mağazanın telefonu 1</label>
                            <input type="text" value="{{@$store['name']}}" class="form-control" id="inputAddress" name="phone_1" placeholder="Mağazanın nömrəsini yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Mağazanın telefonu 2</label>
                            <input type="text" value="{{@$store['name']}}" class="form-control" id="inputAddress" name="phone_2" placeholder="Mağazanın nömrəsini yazın...">
                        </div>
                            <div class="form-group">
                                <label>Şəkillər</label>
                                <input type="file" class="form-control-file" name="images[]" multiple >
                            </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mağaza haqqında</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" placeholder="Mağaza haqqında informasiyaları yazın..." rows="3">{{@$store['description']}}
                            </textarea>
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
