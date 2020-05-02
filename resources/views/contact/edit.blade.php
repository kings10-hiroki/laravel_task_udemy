@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お問い合わせ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.update', ['id' => $contact->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="your_name">氏名</label>
                          <input type="text" name="your_name" class="form-control" id="your_name" value="{{ $contact->your_name }}"/>
                        </div>
                        <div class="form-group">
                          <label for="title">件名</label>
                          <input type="text" name="title" class="form-control" id="title" value="{{ $contact->title }}"/>
                        </div>
                        <div class="form-group">
                          <label for="email">メールアドレス</label>
                          <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}"/>
                        </div>
                        <div class="form-group">
                          <label for="url">ホームページ</label>
                          <input type="url" name="url" class="form-control" id="url" value="{{ $contact->url }}"/>
                        </div>
                        <div class="form-check form-check-inline">
                          <div style="margin-right: 15px;">性別</div>
                          <input class="form-check-input" id="gender1" type="radio" name="gender" value="0"
                          @if ($contact->gender === 0) checked @endif>
                          <label class="form-check-label" for="gender1"style="margin-right: 10px;">男性</label>
                          <input class="form-check-input" id="gender2" type="radio" name="gender" value="1"
                          @if ($contact->gender === 1) checked @endif>
                          <label class="form-check-label" for="gender2">女性</label>
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                          <label for="age">年齢</label>
                          <select class="form-control" id="age" name="age">
                            <option value="">選択してください</option>
                            <option value="1" @if ($contact->age === 1) selected @endif>～19歳</option>
                            <option value="2" @if ($contact->age === 2) selected @endif>20歳～29歳</option>
                            <option value="3" @if ($contact->age === 3) selected @endif>30歳～39歳</option>
                            <option value="4" @if ($contact->age === 4) selected @endif>40歳～49歳</option>
                            <option value="5" @if ($contact->age === 5) selected @endif>50歳～59歳</option>
                            <option value="6" @if ($contact->age === 6) selected @endif>60歳～</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="contact">お問い合わせ内容</label>
                          <textarea class="form-control" id="contact" name="contact" rows="3">{{ $contact->contact }}</textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="btn_confirm" value="更新する" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

