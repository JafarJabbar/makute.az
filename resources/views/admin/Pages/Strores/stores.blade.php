@extends('admin.Layout.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Mağazalarımız</h1>
                <ol class="breadcrumb mb-4">
                    <li  class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Ana səhifə</a></li>
                    <li  class="breadcrumb-item ">Mağazalarımız</li>
                </ol>
                <div class="row">
                    <div class="col-md-2 float-right">
                        <a  href="{{route('admin.store.show',['store'=>''])}}" class="btn btn-primary btn-block my-3"><i class="fas fa-plus-circle"></i> Yeni məlumat</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Mağazalar cədvəli</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th style="width: 50px"> Şəkil</th>
                                    <th class="text-center">Adı</th>
                                    <th class="text-center">İş saatları</th>
                                    <th width="500">Haqqında</th>
                                    <th width="200" class="text-center">Ünvan</th>
                                    <th class="text-center">Əməliyyatlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($stores as $store)
                                    <tr>
                                        <th class="text-center"><img  width="50" style="object-fit: cover" height="50"  src="{{$store['image_1']?asset($store['image_1']):asset('img/Stores/default.jpg')}}" alt="Store image"></th>
                                        <th class="text-center">{{$store['name']}}</th>
                                        <th class="text-center">{{$store['work_hour']}}</th>
                                        <th>{{substr($store['description'],0,100)}}</th>
                                        <th class="text-center">{{$store['address']}}</th>
                                        <th class="text-center">
                                            <button  data-type="hide" data-id="{{$store['id']}}" data-toggle="tooltip" data-placement="top" title="{{$store['status']==1? 'Gizlət':'Göstər'}}" class="action-btn btn text-white btn-sm btn-warning">
                                                <i data-type="hide" data-id="{{$store['id']}}" class="action-btn fa {{$store['status']==1? 'fa-eye':'fa-eye-slash'}}"></i>
                                            </button>
                                            <button data-type="delete"  data-id="{{$store['id']}}" data-toggle="tooltip" data-placement="top" title="Sil" class="action-btn btn btn-sm btn-danger">
                                                <i data-type="delete"  data-id="{{$store['id']}}" class="action-btn fa fa-times"></i>
                                            </button>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('admin.Components.Static.footer')
    </div>
@endsection
@section('extraJS')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.action-btn').on('click',(e)=>{
            let type=e.target.getAttribute('data-type'),
                id=e.target.getAttribute('data-id');

            if(type=='delete'){
                swal({
                    title: "Silmək istədiyinizdən əminsiniz?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type:'post',
                                url:'{{route('admin.store.action')}}',
                                data:{
                                    'type':type,
                                    'id':id
                                },
                                success:(response)=>{
                                    window.location.reload();
                                }
                            })
                        }
                    });
            }else{
                $.ajax({
                    type:'post',
                    url:'{{route('admin.store.action')}}',
                    data:{
                        'type':type,
                        'id':id
                    },
                    success:(response)=>{
                        window.location.reload();
                    }
                })

            }


        })
    </script>
@endsection
