<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/48/487a06dd5d80149a8a212b12a28e25d2_w.jpg',
          'property_id' => 1],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/c2/c210e266083a5f4cdd64e1f54192e447_w.jpg',
          'property_id' => 1],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/34/341fdfe500c2b558d5cfce4cb722c30f_w.jpg',
          'property_id' => 1],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/d9/d942ac3997d5a414d3094803de438f1e_w.jpg',
          'property_id' => 1],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/43/43b167796873a9be4d8684f79ee83d6d_w.jpg',
          'property_id' => 1],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/e9/e9c76306ed38e2dd0fb3dcd00a013cc3_w.jpg',
          'property_id' => 2],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/3c/3cd7d28a0d0539d83cfe0e2fc88cdf6f_w.jpg',
          'property_id' => 2],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/e4/e4c32f902e4a5720c369a6df364fa32b_w.jpg',
          'property_id' => 2],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/5b/5bbfcb3bfbae28e422801e2d8a61c575_w.jpg',
          'property_id' => 2],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/ef/efd857d8c00b2014b609e1bb51155d7f_w.jpg',
          'property_id' => 2],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/d7/d7ef1c724c2c3e605f78d7cb2af4cbae_w.jpg',
          'property_id' => 3],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/89/892799bbfd712bec899c5b0ec5b67f38_w.jpg',
          'property_id' => 3],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/4a/4a0e1e9ad558882145fdcb0acef3790d_w.jpg',
          'property_id' => 3],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/b9/b90f47c32c56ae5d97160a8ef8f007c5_w.jpg',
          'property_id' => 3],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/77/770fb6013d10290f43b368cf9fc2321c_w.jpg',
          'property_id' => 3],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/15/1555359ff253f3da2cea9446c321567e_w.jpg',
          'property_id' => 4],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/b3/b3a3c4922e9fc6ff36c7743519e21fe3_w.jpg',
          'property_id' => 4],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/57/57a28ece722edefd3ec6d9d3995c7f03_w.jpg',
          'property_id' => 4],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/ed/ed1a1226a023bf0a43434a3832b342d4_w.jpg',
          'property_id' => 4],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/c3/c3138afe59e7fd01677c5effe1e983dd_w.jpg',
          'property_id' => 4],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/c5/c5f1bd34fef0f5ba938449986831e835_w.jpg',
          'property_id' => 5],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/7a/7a6d4cee8bc3e68960889f209728e17a_w.jpg',
          'property_id' => 5],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/29/299c0ccc35da6b1a809989b195f35a3e_w.jpg',
          'property_id' => 5],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/11/1188d54172d212448b28ac2b6bc427cf_w.jpg',
          'property_id' => 5],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/87/87cf04b443bae3a0883196a3939ef92e_w.jpg',
          'property_id' => 5],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/51/51eb07af9b60537a221599db965f2882_w.jpg',
          'property_id' => 6],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/b3/b3e78a77b66106daee57ed876dd252a8_w.jpg',
          'property_id' => 6],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/4f/4fb8eb058610cb0e94855a4146580f28_w.jpg',
          'property_id' => 6],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/29/297a4fae4b128f5f1364f2e9cba450f7_w.jpg',
          'property_id' => 6],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/58/58ba2ce84409b0811145a4e741fbbef6_w.jpg',
          'property_id' => 7],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/06/060ed73cd4f0409105d995b492413350_w.jpg',
          'property_id' => 7],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/86/864409f5d2cdd53442454042a36558f3_w.jpg',
          'property_id' => 7],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/18/18acb0a985871e77233ac2f0a32cc62e_w.jpg',
          'property_id' => 7],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/e1/e1754a72fe9d314d614a146b09ede0f1_w.jpg',
          'property_id' => 8],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/81/81bea188ad47234522df778a87ff2335_w.jpg',
          'property_id' => 8],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/4c/4cf6620720f3cc614f28f8e66886e481_w.jpg',
          'property_id' => 8],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/f5/f56651169a888e296733fdfee21fc8a6_w.jpg',
          'property_id' => 8],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/ce/ce1c9203601e61f47931d176ed1298f2_w.jpg',
          'property_id' => 9],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/67/67203317d89eb91b769fb7ea6663f5db_w.jpg',
          'property_id' => 9],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/94/94f1a06e3e135965b62519eb20d8a9b4_w.jpg',
          'property_id' => 9],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/45/456aae08cf712b5735c8b880c34f2ecb_w.jpg',
          'property_id' => 10],
          ['image' => 'https://d1f5hsy4d47upe.cloudfront.net/ad/ad18bc9db60bec6a8969fa75f605d677_w.jpg',
          'property_id' => 10]
          
        ];
        foreach ($images as $image) {
            DB::table('images')->insert($image);
        }
    }
}
