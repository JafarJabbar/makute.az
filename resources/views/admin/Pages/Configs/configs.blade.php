
@extends('admin.Layout.app')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Sayt parametrləri</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active" >
                        <a href="{{route('admin.dashboard')}}">
                            Ana səhifə
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Sayt parametrləri</li>
                </ol>
                <!-- Modal -->
                <div  class="col-md-6" style="margin: 50px auto">
                    <form id="addForm" novalidate method="post" action="{{route('admin.config.edit')}}" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    "Xahiş edirik bütün xanaları doldurasınız !"
                                </div>
                            @endforeach
                        @endif

                        <div class="form-group">
                            <label for="inputAddress">Title</label>
                            <input type="text" value="{{@$configs['title']}}" class="form-control" name="title" placeholder="Sayt başlığı...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Açar sözlər</label>
                            <input type="text" value="{{@$configs['keywords']}}" class="form-control" name="keywords" placeholder="Saytın açar sözlərini...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Sayt haqqında</label>
                            <textarea type="text"  class="form-control" name="description" placeholder="Sayt haqqında məlumat yazın...">{{@$configs['description']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Ünvan</label>
                            <input type="text" value="{{@$configs['address']}}" class="form-control" name="address" placeholder="Ünvanı yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">İş saatları</label>
                            <input type="text" value="{{@$configs['work_hour']}}" class="form-control" name="work_hour" placeholder="İş saatlarını yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Telefon 1</label>
                            <input type="text" value="{{@$configs['phone_1']}}" class="form-control" name="phone_1" placeholder="Mobil telefonu yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Telefon 2</label>
                            <input type="text" value="{{@$configs['phone_2']}}" class="form-control" name="phone_2" placeholder="İş telefonunu yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">E-mail</label>
                            <input type="text" value="{{@$configs['mail']}}" class="form-control" name="email" placeholder="Elektron poçtu yazın...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Facebook</label>
                            <input type="text" value="{{@$configs['facebook']}}" class="form-control" name="facebook" placeholder="Facebook səhifəsi">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">İnstagram</label>
                            <input type="text" value="{{@$configs['instagram']}}" class="form-control" name="instagram" placeholder="İnstagram səhifəsi">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Twitter</label>
                            <input type="text" value="{{@$configs['twitter']}}" class="form-control" name="twitter" placeholder="Twitter səhifəsi">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Linkedin</label>
                            <input type="text" value="{{@$configs['linkedin']}}" class="form-control" name="linkedin" placeholder="Linkedin səhifəsi">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Google Maps</label>
                            <input type="text" value="{{@$configs['google_maps']}}" class="form-control" name="maps" placeholder="Google maps ünvanı">
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
