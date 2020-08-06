<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\PrefectureType;

class ContactController extends Controller
{
  public function index(Request $request){

    $prefectures = PrefectureType::toSelectArray();

    return view('tkestate.contact', compact('prefectures'));
  }
  public function create(Request $request){

    $this->validate($request, \App\Contact::$validate_rule, \App\Contact::$validate_message);

    try{

      $contact = new \App\Contact;
      $form = $request->all();
      // unset($form['_token']);
      $form['prefecture'] = (int)$request->prefecture;
      // $form['prefecture'] = (int)implode($request->prefecture);
      $form['request_contact'] = serialize($request->request_contact);

      $result = $contact->fill($form)->save();

      // return redirect()->action('index', $form)->session()->flash('message', '送信完了しました');
      // return view('tkestate.contact')->session()->flash('message', '送信完了しました');
      return redirect('/tkestate/contact')->with('message', '送信完了しました');

    } catch (\Illuminate\Database\QueryException $e) {
      if ($e->getCode() == 23000) {
        $prefectures = PrefectureType::toSelectArray();

        return redirect('/tkestate/contact')->with('message', '送信失敗しました');
      }
    }
  }
}
