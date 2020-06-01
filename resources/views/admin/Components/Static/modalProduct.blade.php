    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addForm" novalidate method="post" action="{{route('admin.product.add')}}" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <label for="inputAddress">Məhsulun adı</label>
                            <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Məhsulun adını yazın...">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kateqoriya</label>
                            <select name="category" class="form-control" id="exampleFormControlSelect1">
                                <option>Kateqoriyanı seçin...</option>
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Şəkillər</label>
                            <input type="file" class="form-control-file" name="images[]" multiple >
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Məhsul haqqında</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" placeholder="Məhsul haqqında informasiyaları yazın..." rows="3"></textarea>
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
        </div>
    </div>


