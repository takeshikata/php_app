<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/show.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/search.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">

    <title>Contact</title>

    <style>
      .contents{padding-top: 10px;}
      .contents-wrap h2{text-align: center;}
      .contact-title{color: #ffffff; background: #412d1c;}
      .contact-form{padding-top: 20px;}
      table{width: 100%;}
      .contact-table tr{height: 50px;}
      .contact-table tr:nth-of-type(3){height: 100px;}
      .contact-table tr:last-of-type{height: 300px;}
      th{
        width: 40%;
        border-bottom: 1px dashed #886f60;
      }
      td{
        width: 60%;
        border-bottom: 1px dashed #886f60;
      }
      .contact-table td:first-of-type{position: relative;}
      .required{
        position: absolute;
        top: 14px;
        left: -50px;
        width: 40px;
        height: 20px;
        font-size: 12px;
        text-align: center;
        border: #D4322F 1px solid;
        color: #FFFFFF;
        background-color: #D4322F;
      }
      .request-type{
        display: flex;
        list-style: none;
      }
      .request-type > li{min-width: 100px;}
      input{height: 25px;}
      #request_contact{height: auto;}
      .submit-form{
        height: 50px;
        text-align: center;
        padding-top: 10px;
      }
      .submit{
        display: inline-block;
        width: 200px;
        height: 40px;
        line-height: 40px;
        border: solid 1px #FFFFFF;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        color: #FFFFFF;
        background: #068BF1;
      }
      .header-title a{
        text-decoration: none;
        color: #412d1c;
      }
      .flash_message{
        width: 100%;
        height: 40px;
        line-height: 40px;
        text-align: center;
        color: #ff0000;
        background: #068BF1;
      }
    </style>
  </head>

  <body>
    @if (session('message'))
      <div class="flash_message">
        {{ session('message') }}
      </div>
    @endif

    <div class="wrap">
      <div class="header">
        <div class="header-wrap">
          <div class="header-title">
            <h1><a href="/tkestate">TkEstate</a></h1>
          </div>
          <div class="header-info">
            <div class="header-info__telephone">
              03-1234-5678
            </div>
            <div class="header-info__open">
              営業時間：10:00 ~ 21:00
            </div>
          </div>
        </div>
      </div>

      <div class="contents">
        <div class="contents-wrap">
          <div class="contact-title">
            <h2>お問い合わせ</h2>
          </div>
          <div class="contact-form">
            <form action="/tkestate/contact" method="post">
              <table class="contact-table">
                @csrf
                <tbody>
                  <tr>
                    <th>お名前</th>
                    <td>
                      @error('name')
                        {{$message}}<br>
                      @enderror
                      <input type="text" name="name" placeholder="山田太郎">
                      <div class="required">
                        必須
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>フリガナ</th>
                    <td>
                      @error('name_kana')
                        {{$message}}<br>
                      @enderror
                      <input type="text" name="name_kana" placeholder="ヤマダタロウ">
                      <div class="required">
                        必須
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>住所</th>
                    <td>
                      〒
                      <input type="text" name="zip_code" placeholder="1234567"><br>
                      <select class="" name="prefecture">
                        <option value>都道府県</option>
                        @foreach($prefectures as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                      </select>
                      <input type="text" name="city" placeholder="豊島区"><br>
                      <input type="text" name="street_number" placeholder="2-12-18">
                      <input type="text" name="apartment" placeholder="アパート名・マンション名">
                    </td>
                  </tr>
                  <tr>
                    <th>電話番号</th>
                    <td><input type="text" name="telephone" placeholder="08012345678"></td>
                  </tr>
                  <tr>
                    <th>メールアドレス</th>
                    <td>
                      @error('email')
                        {{$message}}<br>
                      @enderror
                      <input type="text" name="email" placeholder="sample@gmail.com">
                      <div class="required">
                        必須
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>ご希望の連絡方法</th>
                    <td>
                      <ul class="request-type">
                        <li>
                          <input type="checkbox" name="request_contact[]" id="request_contact[]" value="1">
                          <label for="request_contact[]">メール</label>
                        </li>
                        <li>
                          <input type="checkbox" name="request_contact[]" id="request_contact[]" value="2">
                          <label for="request_contact[]">電話</label>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th>備考</th>
                    <td><textarea name="contact_message" rows="12" cols="50" placeholder="ご意見、ご要望等御座いましたらご記入ください。"></textarea></td>
                  </tr>
                </tbody>
              </table>
              <div class="submit-form"><input type="submit" class="submit"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
