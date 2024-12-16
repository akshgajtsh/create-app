@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>従業員アカウント一覧</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>入社日</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->join_date }}</td>
                <td>
                    <a href="{{ route('user.edit', $user) }}" class="btn btn-warning btn-sm">編集</a>
                    <form action="{{ route('user.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="return confirm('削除しますか？')">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
    <a href="{{ route('admin.admintop') }}" class="btn btn-primary">戻る</a>
</div>
@endsection