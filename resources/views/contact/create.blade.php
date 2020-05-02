@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お問い合わせフォーム</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="your_name">氏名</label>
                          <input type="text" name="your_name" class="form-control" id="your_name" value=""/>
                        </div>
                        <div class="form-group">
                          <label for="title">件名</label>
                          <input type="text" name="title" class="form-control" id="title" value=""/>
                        </div>
                        <div class="form-group">
                          <label for="email">メールアドレス</label>
                          <input type="email" name="email" class="form-control" id="email" value=""/>
                        </div>
                        <div class="form-group">
                          <label for="url">ホームページ</label>
                          <input type="url" name="url" class="form-control" id="url" value=""/>
                        </div>
                        <div class="form-check form-check-inline">
                          <div style="margin-right: 15px;">性別</div>
                          <input class="form-check-input" id="gender1" type="radio" name="gender" value="0">
                          <label class="form-check-label" for="gender1"style="margin-right: 10px;">男性</label>
                          <input class="form-check-input" id="gender2" type="radio" name="gender" value="1">
                          <label class="form-check-label" for="gender2">女性</label>
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                          <label for="age">年齢</label>
                          <select class="form-control" id="age" name="age">
                            <option value="">選択してください</option>
                            <option value="1">～19歳</option>
                            <option value="2">20歳～29歳</option>
                            <option value="3">30歳～39歳</option>
                            <option value="4">40歳～49歳</option>
                            <option value="5">50歳～59歳</option>
                            <option value="6">60歳～</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="contact">お問い合わせ内容</label>
                          <textarea class="form-control" id="contact" name="contact" rows="3" value=""></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="btn_confirm" value="確認する" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

