@extends('admin_layout')

@section('admin_content')
<!-- /.row -->
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách tin tức</h3>
                    <span style="color: red">
                        @php
                        $message = Session::get('message');
                        if ($message){
                        echo "<br>".$message;
                        Session::put('message', null);
                        }
                        @endphp</span>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên tin tức</th>
                                <th>Lượt xem</th>
                                <th>Trạng thái</th>
                                <th>Thay đổi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_post as $item => $value)
                            <tr>
                                <td>{{ $value->post_id }}</td>
                                <td>{{ $value->post_name }}</td>
                                <td>{{ $value->post_view_count}}</td>
                                <td class="text-nowrap">{{ $value->post_status==0?'Hiển thị' : 'Ẩn' }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ URL::to('/admin/post/edit/'.$value->post_id) }}"
                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Bạn có chắc muốn xoá!')"
                                        href="{{ URL::to('/admin/post/destroy/'.$value->post_id) }}"
                                        class="btn btn-danger btn-sm" title="Xoá"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- /.card-body -->
            </div>
            <div class="card-tools">
                <a href="{{ URL::to('/admin/post/create') }}"><button class="btn btn-outline-info">Thêm tin tức</button></a>
                {!! $all_post->render('vendor.pagination.index') !!}
            </div>

            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

</div>
@endsection