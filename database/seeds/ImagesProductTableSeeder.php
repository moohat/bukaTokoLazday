<?php

use Illuminate\Database\Seeder;
use App\Models\ImagesProduct;

class ImagesProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_product = array(
            array('product_id' => '1','image' => 'product/mdaKIF8GJq27VOQYL3A85y3hQ8LgaaLvymwxYMIN.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '2','image' => 'product/TwLz3X3WqkF98xqK9S8qqCyoLMoie5syAs42MaZA.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '2','image' => 'product/M2DR4K6wRgohHucUNusc35nJtzIgKWpMa5T5Im9D.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '3','image' => 'product/3geeJdlbZP3zMlEH2SNrdUkIZctjJDnBaoANn1SQ.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '3','image' => 'product/yvDoyeBHWrGwiqQNpu0PoJEmPwIfQxEgJFSX4uPR.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '3','image' => 'product/1ldLllCe07BQaje8mdITDyJvdNOR39WWvOyF8OYR.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '4','image' => 'product/SU3SXhvZ3vSEjBBtLhJorJXX6If1Jju7qa4ndnau.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '4','image' => 'product/AAHunxoX1e22Z0anbmkKdiwMGJBBFpkX7cHHCqGp.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '4','image' => 'product/lhBeyaX4iY4Os49eZcCPDZst01eaAtKYmlf9EnyM.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '4','image' => 'product/bJj8pRmts8O4OHkXUvH0d8U6IK3uLgvUwAUc0B0w.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '5','image' => 'product/BMnxJUQjNN5FkbPZtVA6zYsr9wipnODRCbSGPeBm.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '5','image' => 'product/FIsEbTcELOy33GrUfCgmUAtqEAL5DTbKXAYSISZF.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '6','image' => 'product/JTeoIVUwYorwJjiqlAe80pOFjqfmQ2IRRE050kSB.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '6','image' => 'product/Vnf74FSKZPrgKZzu4CFZOvoFu00b4UIRr6x6SQq3.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '6','image' => 'product/3vKUjYg0ZIkTjlNmJvSvfZzy5EdFYcppmgrHE4gr.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '7','image' => 'product/wJMubHan2j36rVuACrnDydh9Ybj8CyCeywf76WUq.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '7','image' => 'product/mFDhD65SmPRoaWRELJUmAgP91eolmZTns1uHPwNd.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '7','image' => 'product/wiFQ80tHQMtzxQ9yo2IRbdlo7LGyiQ4U60jlxIju.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '8','image' => 'product/6GigSOsX2FHqP36EvrCZigU5GkLbpMAiWiUiRwgr.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '8','image' => 'product/DcCDT6FuquF0J3HnWxjcCxDV5CAduGNqfXimyELU.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '8','image' => 'product/NEI7PqiV5gCyQx7d8D13EfRX6KMtFo5pQDN9WlPs.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '9','image' => 'product/vIuWv22rM1ZMmS5zCq91FMzoXk99WGG44x1zoZUe.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '9','image' => 'product/2UeCIQMQSEL3CduAX4S2qJccUpocoIwr36b2NxQ1.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '9','image' => 'product/BiSOmkNbYMGsUncpkF9FhyJjM9yrvzy4dlurdWRr.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '10','image' => 'product/jEkfStAzxaXwYQEVrHwKAUI5NUEaz7OHIlGQPPFl.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '10','image' => 'product/LKUdDHCabsww70H9MuIeRKhnAkgb9IJZnWIknwXJ.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '10','image' => 'product/KSr2FC51xNXC3VJxxm6J4soW4TK9crC95pG97sVX.png','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '11','image' => 'product/oIPVv7Vq8FOVVRRQg8XOO8bnPzv3euM1VPQpoQ6G.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '11','image' => 'product/2ud1EZT5kI0jlEfos8GP7kXjDlqb1aGNtq3LRM94.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '11','image' => 'product/hNbGDRnIHQcoNIMoKnYjoE2MHXDHWR5wmP7rfls0.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '12','image' => 'product/UNuYWCOoBz0TNkDw90bz3JYw6PVfH4OUbXoQNIDK.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '12','image' => 'product/tX0U1caW83Bt05oaif96QN3dRtxdnMaqtJE9vvRh.jpeg','created_at' => \Carbon\Carbon::now()),
            array('product_id' => '12','image' => 'product/SsgJ9Tvy961vqdnA38uygadAhv2JEi4uNTHRmnar.jpeg','created_at' => \Carbon\Carbon::now())
        );

        ImagesProduct::insert($images_product);
    }
}
