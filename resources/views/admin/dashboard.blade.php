@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <h2>Trang Quản Trị</h2>
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" onclick="showSection('users')">Quản lý người dùng</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showSection('posts')">Quản lý bài viết</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showSection('comments')">Quản lý bình luận</a>
            </div>
        </div>

        <!-- Nội dung -->
        <div class="col-md-10">
            <!-- Người dùng -->
            <div id="section-users" class="admin-section">
                <h4>👤 Quản lý người dùng</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Năm sinh</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @if(!$user->is_admin)
                            <tr>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->profile->birth_date ?? 'N/A' }}</td>
                                <td>
                                    <form method="POST" action="{{ url('/admin/delete-user/'.$user->id) }}">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xoá người dùng này?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- Bài viết -->
            <div id="section-posts" class="admin-section d-none">
                <h4>📝 Quản lý bài viết</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Người đăng</th>
                            <th>Nội dung</th>
                            <th>Ảnh</th>
                            <th>Thời gian</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->user->first_name ?? 'N/A' }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                @foreach($post->media as $media)
                                    <img src="{{ asset('uploads/' . $media->link) }}" width="80">
                                @endforeach
                            </td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <form method="POST" action="{{ url('/admin/delete-post/'.$post->id) }}">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Bình luận -->
            <div id="section-comments" class="admin-section d-none">
                <h4>💬 Quản lý bình luận</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Người bình luận</th>
                            <th>Nội dung</th>
                            <th>Thời gian</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->user->first_name ?? 'N/A' }}</td>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>
                                <form method="POST" action="{{ url('/admin/delete-comment/'.$comment->id) }}">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Xác nhận xoá bình luận?')">Xoá</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function showSection(section) {
    document.querySelectorAll('.admin-section').forEach(div => {
        div.classList.add('d-none');
    });
    document.querySelectorAll('.list-group-item').forEach(tab => {
        tab.classList.remove('active');
    });
    document.getElementById('section-' + section).classList.remove('d-none');
    event.target.classList.add('active');
}
</script>
@endsection
