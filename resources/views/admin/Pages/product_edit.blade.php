
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
                    <li class="breadcrumb-item active">Məhsulu düzəlt</li>
                </ol>
                <!-- Modal -->
                <div  class="col-md-6">
                    <form id="addForm" novalidate method="post" action="{{route('admin.product.add',['product'=>@$product['url']])}}" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                        @endif
                        <input type="hidden" name="url"  value="{{@$product['url']}}">
                        <div class="form-group">
                            <label for="inputAddress">Məhsulun adı</label>
                            <input type="text" value="{{@$product['name']}}" class="form-control" id="inputAddress" name="name" placeholder="Məhsulun adını yazın...">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kateqoriya</label>
                            <select name="category" class="form-control" id="exampleFormControlSelect1">
                                <option>Kateqoriyanı seçin...</option>
                                @foreach(@$categories as $category)
                                    <option {{$category['id']==@$product['category_id'] ? 'selected':null}} value="{{$category['id']}}">{{@$category['title']}}</option>
                                @endforeach
                            </select>
                        </div>


                        @if($product)
                            <div class="row my-3">
                                <div class="col-md-2 ">
                                    <img style="width: 100px; height: 100px; object-fit: cover" src="{{asset($product['image_1'])}}" alt="">
                                </div>
                                <div class="col-md-3 border-info">
                                    <img style="width: 100px; height: 100px; object-fit: cover" src="{{asset($product['image_2'])}}" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img style="width: 100px; height: 100px; object-fit: cover" src="{{asset($product['image_3'])}}" alt="">
                                </div>
                            </div>
                        @else
                            <div class="form-group">
                                <label>Şəkillər</label>
                                <input type="file" class="form-control-file" name="images[]" multiple >
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Məhsul haqqında</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" placeholder="Məhsul haqqında informasiyaları yazın..." rows="3">{{@$product['description']}}
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
