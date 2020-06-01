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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Giriş</h3></div>
                            <div class="card-body">
                                <form action="{{route('auth.start')}}" method="post">
                                    @csrf
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="text" name="email" placeholder="Email addresini daxil edin" /></div>
                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Şifrə</label><input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Şifrənizi daxil edin" /></div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><button class="btn btn-block btn-primary">Giriş</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
</body>
</html>
