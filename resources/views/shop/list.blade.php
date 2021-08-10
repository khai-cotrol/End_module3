
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sach phan phoi</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <form class="d-flex" method="post" action="{{route('search')}}">
                @csrf
                <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">
                    <a class="btn btn-success" href="{{route('create')}}">Them moi</a>
                </h3>
                <table  style="border: 1px solid black ; border-collapse: collapse; width: 1000px">
                    <thead>
                    <tr style="text-align: center" style="border: 1px solid black ; border-collapse: collapse">
                        <th style="border: 1px solid black ; border-collapse: collapse" >Ma Dai ly</th>
                        <th style="border: 1px solid black ; border-collapse: collapse" scope="col">Ten Dai ly</th>
                        <th style="border: 1px solid black ; border-collapse: collapse" scope="col">Dien Thoai</th>
                        <th style="border: 1px solid black ; border-collapse: collapse" scope="col">Email</th>
                        <th  style="border: 1px solid black ; border-collapse: collapse">Dia chi</th>
                        <th style="border: 1px solid black ; border-collapse: collapse" scope="col">Ten nguoi quan ly</th>
                        <th style="border: 1px solid black ; border-collapse: collapse" scope="col">Trang thai</th>
                        <th style="border: 1px solid black ; border-collapse: collapse" scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shops as $shop)
                        <tr id="product-{{$shop->id}}" style="text-align: center" scope="row">
                            <td style="border: 1px solid black ; border-collapse: collapse" >{{ $shop->id }}</td>
                            <td style="border: 1px solid black ; border-collapse: collapse"><h4>{{ $shop->name }}</h4></td>
                            <td style="border: 1px solid black ; border-collapse: collapse">{{ $shop->phone}}</td>
                            <td style="border: 1px solid black ; border-collapse: collapse">{{ $shop->email}}</td>
                            <td style="border: 1px solid black ; border-collapse: collapse">{{ $shop->address}}</td>
                            <td style="border: 1px solid black ; border-collapse: collapse">{{ $shop->manager}}</td>
                            <td style="border: 1px solid black ; border-collapse: collapse">{{ $shop->status->name}}</td>
                            <td>
                                <a href="{{route('delete',$shop->id)}}" class="btn btn-success" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                <a href="{{route('edit', $shop->id)}}"class="btn btn-danger" style="background-color: green">edit</a></td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>




