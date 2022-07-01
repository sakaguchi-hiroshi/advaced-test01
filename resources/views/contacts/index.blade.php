<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="{{ asset('/assets/css/reset.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
</head>
<body>
  <div class="container">
    <h1 class="title">お問い合わせ</h1>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <script>
    $(function(){
      function toHalfWidth(input) {
        return input.replace(/[！-～]/g,
          function(input){
            return String.fromCharCode(input.charCodeAt(0)-0xFEE0);
          }
        );
      };
      $('#postcode').on('blur',function(e){
        $(this).val(toHalfWidth($(this).val()));
      });
    }
    </script>
    <form class="h-adr" action="/contact/create" method="POST">
    @csrf
      <table>
        <tr>
          <th>お名前<span>※</span></th>
          <td>
            <input type="text" name="last_name" required value="{{old('last_name')}}">
            <br>例）山田
          </td>
          <td>
            <input type="text" name="first_name" required value="{{old('first_name')}}">
            <br>例）太郎
          </td>
        </tr>
        <tr>
          <th>性別<span>※</span></th>
          <td>
            <input type="radio" name="gender" value="1" checked="checked"><span>男性</span>
            
            <input type="radio" name="gender" value="2"><span>女性</span>
          </td>
        </tr>
        <tr>
          <th>メールアドレス<span>※</span></th>
          <td>
            <input type="email" name="email" required value="{{old('email')}}">
            <p>例）test@example.com</p>
            @if ($errors->first('email'))
              <p>{{$errors->first('email')}}</p>
            @endif
          </td>
        </tr>
        <tr>
          <th>郵便番号<span>※</span></th>
          <td>
            <input type="hidden" class="p-country-name" value="Japan">
            <span>〒</span><input type="text" name="postcode" required value="{{old('postcode')}}" class="p-postal-code" pattern="\d{3}-?\d{4}" />
            <p>例）123-4567</p>
            @if ($errors->first('postcode'))
              <p>{{$errors->first('postcode')}}</p>
            @endif
          </td>
        </tr>
        <tr>
          <th>住所<span>※</span></th>
          <td>
            <input type="text" name="address" required value="{{old('address')}}"  class="p-region p-locality p-street-address p-extended-address" />
            <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
            @if ($errors->first('address'))
              <p>{{$errors->first('address')}}</p>
            @endif
          </td>
        </tr>
        <tr>
          <th>建物名</th>
          <td>
            <input type="text" name="building_name" value="{{old('building_name')}}">
            <p>例）千駄ヶ谷マンション101</p>
          </td>
        </tr>
        <tr>
          <th>ご意見<span>※</span></th>
          <td>
            <textarea name="opinion" cols="30" rows="10" maxlength="120" required value="{{old('opinion')}}"></textarea>
            @if ($errors->first('opinion'))
              <p>{{$errors->first('opinion')}}</p>
            @endif
          </td>
        </tr>
      </table>
      <button type="submit" class="">確認</button>
    </form>
  </div>
</body>
</html>