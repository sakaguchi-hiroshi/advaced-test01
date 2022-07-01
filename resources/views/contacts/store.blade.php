<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>内容確認</title>
  <link rel="stylesheet" href="{{ asset('/assets/css/reset.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
</head>
<body>
  <section>
    <h1>内容確認</h1>
    <form action="/contact/thanks" method="POST">
      @csrf
      <input type="hidden" name="fullname" value="{{$fullname}}">
      <input type="hidden" name="email" value="{{$form['email']}}">
      <input type="hidden" name="postcode" value="{{$form['postcode']}}">
      <input type="hidden" name="address" value="{{$form['address']}}">
      <input type="hidden" name="building_name" value="{{$form['building_name']}}">
      <input type="hidden" name="opinion" value="{{$form['opinion']}}">
      <table>
        <tr>
          <th>お名前</th>
          <td>{{$fullname}}</td>
        </tr>
        <tr>
          <th>性別</th>
          <td>{{$form['gender']}}</td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>{{$form['email']}}</td>
        </tr>
        <tr>
          <th>郵便番号</th>
          <td>{{$form['postcode']}}</td>
        </tr>
        <tr>
          <th>住所</th>
          <td>{{$form['address']}}</td>
        </tr>
        <tr>
          <th>建物名</th>
          <td>{{$form['building_name']}}</td>
        </tr>
        <tr>
          <th>ご意見</th>
          <td>{{$form['opinion']}}</td>
        </tr>
      </table>
      <button type="submit" class="">送信</button>
      <div>
        <a href="{{ route('contacts.index') }}"></a>
      </div>
    </form>
  </section>
</body>
</html>