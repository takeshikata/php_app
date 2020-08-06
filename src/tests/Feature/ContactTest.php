<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Contact;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactRequest;

class ContactTest extends TestCase
{
    /**
     * バリデーションテスト
     *
     * @param 項目名
     * @param 値
     * @param 期待値
     *
     * @dataProvider dataprovider
     */
    public function testExample(string $item, string $data, bool $expect)
    {

        $request  = new ContactRequest();
        $rules    = $request->rules();
        $dataList = [$item => $data];

        $validator = Validator::make($dataList, $rules);
        $result    = $validator->passes();

        $this->assertEquals($expect, $result);
        // $response = $this->get('/');
        //
        // $response->assertStatus(200);
    }
    public function dataproviderExample()
    {
        return [
            '必須項目です。' => ['name', '', false],
            '必須項目です。' => ['name_kana', '', false],
            '必須項目です。' => ['email', '', false],
            'expect'   => ['username', 'ユーザ名', true],
            'required' => ['username', null, false],
            'required' => ['username', '', false],
            'max'      => ['contact_message', str_repeat('a', 200), false],
            'max'      => ['contact_message', str_repeat('a', 200), true],
        ];
    }
}
