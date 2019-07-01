<?php

namespace App\Http\Controllers\Api;


use DB;
use Auth;
use Response;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ImagesProduct;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function products(Request $request)
    {
        $singleImage = DB::raw(" (select coalesce(image,null) from images_product WHERE products.id = images_product.product_id order by images_product.id desc limit 1  ) as image ");

        $query = Product::select('*', $singleImage);

        if ($request->search != null) {
            $query->where('product', 'like', '%' . $request->search . '%');
        }

        $query->orderBy('product');

        $products = $query->paginate(15);

        if ($products->isEmpty()) {
            return Response::json([
                'status' => [
                    'code' => 404,
                    'description' => 'Data Not Found',
                ]
            ], 404);
        } else {
            // return $products;

            return ProductResource::collection($products)
                ->additional([
                    'status' => [
                        'code' => 200,
                        'description' => 'OK',
                    ]
                ])
                ->response()
                ->setStatusCode(200);
        }
    }


    public function product($id)
    {

        $product = Product::with('imageRelation')->select('*')->where('id', $id)->first();

        if ($product == null) {
            return Response::json([
                'status' => [
                    'code' => 404,
                    'description' => 'Data Not Found',
                ]
            ], 404);
        } else {
            return (new ProductResource($product))
                ->additional([
                    'status' => [
                        'code' => 200,
                        'description' => 'OK',
                    ]
                ])
                ->response()
                ->setStatusCode(200);
        }
    }
}
