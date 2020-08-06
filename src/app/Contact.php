<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $guarded = array('id');

  public static $validate_rule = [
    'name'=>'required',
    'name_kana'=>'required',
    'zip_code'=>'',
    'prefecture'=>'',
    'city'=>'',
    'street_number'=>'',
    'telephone'=>'',
    'email'=>'required|email',
    'request_contact'=>'',
    'contact_message'=>'max:300'
  ];
  public static $validate_message = [
    "required" => "必須項目です。",
    "email" => "メールアドレスの形式で入力してください。",
    "numeric" => "数値で入力してください。",
    "contact_message.max" => "500文字以内で入力してください。"
  ];
}
