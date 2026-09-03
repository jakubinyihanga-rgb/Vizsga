<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Product;
use PhpOption\Option;
use Illuminate\Support\Facades\DB as FacadesDB;
use Image;
use Response;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Facades\Storage;
use App\Models\Socialmedia;

class ProductController extends Controller
{
    ///////////////////////////////////////////////////////////////////////////////
    public function create(Request $request)
    {
        $products   =   Product::all();

        return view('new_product');
    }
    ////////////////////////////////////////////////////////////////////////////////////////
public function store(Request $request)
{
    $request->validate([
        'product_name_en' => 'required|string|max:255',
        'productdescription_en' => 'required|string',
        'Product_Price' => 'required|numeric',
        'image' => 'required|image',
    ]);

    $image = Image::make($request->file('image'))->encode('jpeg');

    $product = new Product();
    $product->pro_name_EN = $request->product_name_en;
    $product->pro_description_EN = $request->productdescription_en;
    $product->pro_price = $request->Product_Price;
    $product->pro_image = (string) $image;
    $product->save();

    return redirect()->back()->with('success', $product->pro_name_EN . ' added successfully to the database');
}
    ////////////////////////////////////////////////////////////////////////////////////////
    public function show($id){
        $image = Product::findOrFail($id);
        $image_file = Image::make($image -> pro_image);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        return $response;
    }
    ////////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////
    public function search(Request $request)
    {
        $search_val =  $request -> input('search_in_page');
        $data = Product::where('pro_name', 'LIKE', '%'.$search_val.'%')
                       ->orwhere('pro_description', 'LikE', '%'.$search_val.'%')
                       ->orwhere('pro_Price', 'LIKE', '%'.$search_val.'%')
                       ->orwhere('pro_number', 'LIKE', '%'.$search_val.'%')
                       ->orwhere('pro_brand', 'LikE', '%'.$search_val.'%')
                       ->orwhere('pro_category', 'LikE', '%'.$search_val.'%')
                       ->latest()->paginate(10);
        return view('result_search', compact('data'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        $data = Product::latest()->paginate();


        return view('welcome', compact('data'));
    }
    ///////////////////////////////////////////////////////////////////////////////
    public function show_details($id)
    {
        $details_id = Product::findOrFail($id);
        $data = Product::where('id', '=', $id)->latest()->paginate(1);

        return view('show_details', compact('data'));
    }
    ////////////////////////////////////admin//////////////////////////////////////////
    public function admin()
    {
        return view('Admin/admin');
    }



    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $productName = $product->pro_name_EN;
    $product->delete();

    return redirect()->back()->with('success', $productName . ' deleted successfully');
}
public function updateDescription(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $product->pro_description_EN = $request->pro_description_EN;
    $product->save();

    return redirect()->back()->with('success', 'Description updated successfully');
}

public function deleteproduct()
{
    $products = Product::all();
    return view('deleteproduct', compact('products'));
}
public function editProductPage()
{
    $products = Product::all();
    return view('updateproduct', compact('products'));
}

public function updateProductInfo(Request $request, $id)
{
    $request->validate([
        'product_name_en' => 'required|string|max:255',
        'productdescription_en' => 'required|string',
        'Product_Price' => 'required|numeric',
    ]);

    $product = Product::findOrFail($id);
    $product->pro_name_EN = $request->product_name_en;
    $product->pro_description_EN = $request->productdescription_en;
    $product->pro_price = $request->Product_Price;
    $product->save();

    return redirect()->back()->with('success', $product->pro_name_EN . ' updated successfully');
}

}
