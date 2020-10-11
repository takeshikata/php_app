<?php

namespace App\Http\Controllers;

use App\Image;
use App\Property;
use Illuminate\Http\Request;

class TkEstateController extends Controller
{

    public function index(Request $request){

      $keyword = $request->input('keyword');
      $query = Property::query();

      if (!empty($keyword)) {

        $inputs = $query->where('name', 'LIKE', "%{$keyword}%")->get();

        foreach($inputs as $input){
          $images[] = Image::where('property_id', $input->id)->get()->first();
        }

        if(isset($images)){
          $results = array();
          array_push($results, $images);
          array_push($results, $inputs);

          return view('tkestate.search', ['results' => $results]);

        } else {
          return redirect('/tkestate');
        }
      }
      else {

        $i = [2,7,12,17,22,27,31,35,39,42];
        foreach($i as $index => $value){
          $property_images[] = Image::where('id', $value)->get()->first();
          $properties[] = Property::where('id', $property_images[$index]->property_id)->get()->first();
        }

        $results = array();
        array_push($results, $property_images);
        array_push($results, $properties);

        return view('tkestate.index', ['properties_and_images' => $results]);
      }
    }

    public function show($id){
      $property = Property::find($id);
      $images = $property->images;

      return view('tkestate.show', ['property' => $property, 'images' => $images]);
    }
    public function station(Request $request){

      if (!empty($_GET["station"])){

        $form = $request->all();
        $inputs = Property::whereIn('station', $form['station'])->get();

        foreach($inputs as $input){
          $images[] = Image::where('property_id', $input->id)->get()->first();
        }

        $results = array();
        array_push($results, $images);
        array_push($results, $inputs);

        // $contact = new \App\Contact;
        // $form = $request->all();
        // // unset($form['_token']);
        // $form['prefecture'] = (int)$request->prefecture;
        // // $form['prefecture'] = (int)implode($request->prefecture);
        // $form['request_contact'] = serialize($request->request_contact);
        // // dd($form);
        // $result = $contact->fill($form)->save();
        // Property::whereIn('station');
        // return view('tkestate.search', ['inputs' => $inputs]);

        return view('tkestate.search', ['results' => $results]);
      }
      else {
        return view('tkestate.station');
      }

    }

    public function price(Request $request){
      if (!empty($_GET["price_number"])){

        $form = $request->all();

        $inputs = Property::whereIn('price_number', $form['price_number'])->get();

        foreach($inputs as $input){
          $images[] = Image::where('property_id', $input->id)->get()->first();
        }

        if(isset($images)){
          $results = array();
          array_push($results, $images);
          array_push($results, $inputs);

          return view('tkestate.search', ['results' => $results]);

        } else {
          return redirect('/tkestate/price')->with('message', '該当する物件は現在御座いません');
        }

      }
      else {
        return view('tkestate.price');
      }
      return view('tkestate.price');
    }
    public function search(){
      $i = [2,7,12,17,22,27,31,35,39,42];
      foreach($i as $index => $value){
        $property_images[] = Image::where('id', $value)->get()->first();
        $properties[] = Property::where('id', $property_images[$index]->property_id)->get()->first();
      }
      $results = array();
      array_push($results, $property_images);
      array_push($results, $properties);

      return view('tkestate.search', ['properties' => $results]);

    }
}
