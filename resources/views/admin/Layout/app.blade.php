<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{$configs['description']}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="{{$configs['author']}}" />
    <title>{{$configs['title']}}</title>
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('extraCSS')
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        @include('admin.Components.Static.header')
        @include('admin.Components.Static.sidenav')
        @yield('content')
    </div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/demo/datatables-demo.js')}}"></script>
@yield('extraJS')


</body>
</html>

