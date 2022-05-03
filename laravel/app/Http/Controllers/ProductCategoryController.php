<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use App\Services\ProductCategoryService;
use Illuminate\Database\QueryException;

class ProductCategoryController extends Controller
{
    public function __construct(private ProductCategoryService $_productCategoryService)
    {
        //
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     //mostra un elenco di risorse
    {
        return view('product-category.index', [
            'categories' => ProductCategory::with('productCategory')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()        //mostra il form con cui creare una categoria
    {
        return view('product-category.create', [
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)     //salva una categoria
    {
        // Per recuperare il valore di un campo: $request->input('nomeCampoInputDelForm');
        // Per recuperare tutti i campi: $request->all()

        // $category = new ProductCategory();
        // $category->name = $request->input('name');
        // $category->category_id = $request->input('product-category', null);

        // $category->save();

        $category = $this->_productCategoryService->create($request);

        return redirect('/product-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)      //mostra la singola categoria
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)  //mostra il form per la modifica
    {
        return view('product-category.edit', [
            'categories' => ProductCategory::all(),
            'productCategory' => $productCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryRequest  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory) //
    {
        $this->_productCategoryService->update($request, $productCategory);
        return redirect('/product-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)       //distrugge una categoria
    {
        $hasError = false;

        try {
            $productCategory->delete();
        } catch(QueryException $e) {
            $hasError = true;
        }

        return redirect('/product-categories')->with([
            'action' => 'destroy',
            'hasError' => $hasError
        ]);
    }
}
