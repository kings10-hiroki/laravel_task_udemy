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

                    <table class="table">
                      <thead style="background: #F7F7F7;">
                        <tr>
                          <th scope="col">内容</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">お名前</td>
                          <td>{{ $contact->your_name }}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td scope="row">タイトル</td>
                          <td>{{ $contact->title }}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td scope="row">eメール</td>
                          <td>{{ $contact->email }}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td scope="row">URL</td>
                          <td>{{ $contact->url }}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td scope="row">性別</td>
                          <td>{{ $gender }}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td scope="row">年齢</td>
                          <td>{{ $age }}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td scope="row">お問い合わせ内容</td>
                          <td>{{ $contact->contact }}</td>
                        </tr>
                      </tbody>
                    </table>

                    <div style="display: flex;">
                      <form action="{{ route('contact.edit', ['id' => $contact->id ]) }}" method="GET" style="margin-right: 15px;">
                        @csrf
                        <input type="submit" class="btn btn-info" name="btn_confirm" value="変更する" style="color: white;"/>
                      </form>

                      <form action="{{ route('contact.destroy', ['id' => $contact->id ]) }}" method="POST" id="delete_{{ $contact->id }}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                      </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function deletePost(e) {
  'use strict';
  if (confirm('本当に削除していいですか？')) {
    document.getElementById('delete_' + e.dataset.id).submit();
  }

}
</script>

@endsection

