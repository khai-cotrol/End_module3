
    <div class="card card-success">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{route('store')}}"  method="post"  >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Ten Dai Ly</label>
                    <input type="text" name="name" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputPrice">Dien Thoai</label>
                    <input type="number" name="phone" id="inputPrice" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputImage">Email</label>
                    <input type="text"  name="email" id="image"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputDescription">Dia chi</label>
                    <input type="text" name="address" id="inputDescription" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Ten nguoi quan Ly</label>
                    <input type="text" name="manager" id="inputDescription" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputCategory_id">Trang Thai</label>
                    <select name="status" id="">
                        @foreach($status as $sta)
                            <option value="{{$sta->id}}">{{$sta->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Accept</button>
                <a href="{{route('list')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>


