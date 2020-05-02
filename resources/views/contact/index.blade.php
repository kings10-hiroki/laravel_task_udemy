@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <div>
                        お問い合わせ一覧
                    </div>
                    <form method="GET" action="{{ route('contact.index') }}" class="form-inline">
                      <input class="form-control mr-sm-2" type="search" name="search" placeholder="検索" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
                    </form>
                </div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead style="background: #F7F7F7;">
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">名前</th>
                            <th scope="col">タイトル</th>
                            <th scope="col">登録日時</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($contacts as $contact)
                            <tr>
                              <th scope="row">{{ $contact->id }}</th>
                              <td>{{ $contact->your_name }}</td>
                              <td>{{ $contact->title }}</td>
                              <td>{{ $contact->created_at }}</td>
                              <td><a class="btn btn-success" href="{{ route('contact.show', ['id' => $contact->id]) }}">詳細</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                    {{ $contacts->links() }}

                    <form method="GET" action="{{ route('contact.create') }}">
                        <button type="submit" class="btn btn-primary">
                            新規登録
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

