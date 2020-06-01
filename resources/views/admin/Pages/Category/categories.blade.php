@extends('admin.Layout.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Kateqoriyalar</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Ana səhifə</a></li>
                    <li class="breadcrumb-item ">Kateqoriyalar</li>
                </ol>
                <div class="row">
                    <div class="col-md-2 float-right">
                        <a  href="{{route('admin.category.show')}}" class="btn btn-primary btn-block my-3"><i class="fas fa-plus-circle"></i> Yeni məlumat</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Kateqoriyalar cədvəli</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th style="width: 50px"> ID</th>
                                    <th class="text-center">Kateqoriya adı</th>
                                    <th>İkon</th>
                                    <th class="text-center">Əməliyyatlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th class="text-center">{{$category['id']}}</th>
                                        <th class="text-center">{{$category['title']}}</th>
                                        <th>{{$category['icon']}}</th>
                                        <th class="text-center">
                                            <a href="{{route('admin.category.show',['category'=>$category['url']])}}" data-toggle="tooltip" data-placement="top" title="Düzəlt" class="btn btn-sm btn-primary">
                                                <i data-id="{{$category['id']}}" class="fa fa-edit"></i>
                                            </a>

                                            <button  data-type="hide" data-id="{{$category['id']}}" data-toggle="tooltip" data-placement="top" title="{{$category['status']==1? 'Gizlət':'Göstər'}}" class="action-btn btn text-white btn-sm btn-warning">
                                                <i data-type="hide" data-id="{{$category['id']}}" class="action-btn fa {{$category['status']==1? 'fa-eye':'fa-eye-slash'}}"></i>
                                            </button>
                                            <button data-type="delete"  data-id="{{$category['id']}}" data-toggle="tooltip" data-placement="top" title="Sil" class="action-btn btn btn-sm btn-danger">
                                                <i data-type="delete"  data-id="{{$category['id']}}" class="action-btn fa fa-times"></i>
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
    @include('admin.Components.Static.modalProduct')
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
                                url:'{{route('admin.category.action')}}',
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
                    url:'{{route('admin.category.action')}}',
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
