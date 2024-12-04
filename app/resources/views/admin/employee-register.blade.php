<div class="container">
    <h2>従業員アカウント作成</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.employee.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="join-date">入社日</label>
            <input type="date" name="join_date" id="join_date" class="form-control" require>
        </div>

        <div class="form-group">
            <label for="join-date">所属拠点</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" aria-label="Default select example" require>
                <option selected>所属拠点選択</option>
                <option value="1">東京</option>
                <option value="2">大阪</option>
                <option value="3">福岡</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">作成</button>
    </form>
</div>