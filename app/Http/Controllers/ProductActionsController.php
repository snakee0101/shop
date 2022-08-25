<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductActionsController extends Controller
{
    private function product_view(Product $product, $view, array $additional = [])
    {
        $product->visit();

        return view($view, array_merge([
            'product' => $product,
            'product_sets' => $product->product_sets,
            'breadcrumbs_menu' => app(\App\Actions\BreadcrumbsMenuAction::class)->execute($product->category)
        ], $additional));
    }

    public function description(Product $product)
    {
        return $this->product_view($product, 'product.description');
    }

    public function characteristics(Product $product)
    {
        return $this->product_view($product, 'product.characteristics');
    }

    public function reviews(Product $product)
    {
        return $this->product_view($product, 'product.reviews', [
            'reviews' => $product->reviews()->latest()->paginate(40),
        ]);
    }

    public function questions(Product $product)
    {
        return $this->product_view($product, 'product.questions', [
            'questions' => $product->questions()->latest()->paginate(40),
        ]);
    }

    public function videos(Product $product)
    {
        return $this->product_view($product, 'product.videos');
    }

    public function buy_together(Product $product)
    {
        return $this->product_view($product, 'product.buy_together', [
            'bought_together_data' => $product->getGroupedBoughtTogetherProducts()
        ]);
    }
}
