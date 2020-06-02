<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Item;


class SpecialsController extends Controller
{

    /**
     * Shows detail on the specials presented on the home page
     */

     public function showTopRated() {

        $data = ItemController::top_rated(TRUE);
        $items = $data['items'];

        if (Input::has('category')) {
            $filterCategories = Input::get('category');
            $items = $items->whereIn('id_category', $filterCategories);
        }

        if (Input::has('brand')) {
            $filterBrands = Input::get('brand');
            $items = $items->whereIn('brand', $filterBrands);
        }

        if (Input::has('inStock')) {
            $items = $items->where('stock', '>', 0);
        }

        if (Input::has('minPrice')) {
            $minPrice = Input::get('minPrice');
            $items = $items->where('item.price', '>=', $minPrice);
        }

        if (Input::has('maxPrice')) {
            $maxPrice = Input::get('maxPrice');
            $items = $items->where('item.price', '<=', $maxPrice);
        }

        $items = $items->take(24)->get();
        $finalItems = array();
        $prices = array();
        $pictures = array();

        foreach($items as $i) {
            $item = Item::findOrFail($i->id);
            array_push($finalItems, $item);

            $sales = $item->sales;
            $currentSale = 0;
            $price = $item->price;
            foreach ($sales as $sale) {
                $new_sale = 0;
                if ($sale->type == 'percentage') {
                    $new_sale = 0.01 * $sale->percentage_amount * $price;
                } else if ($sale->type == 'fixed') {
                    $new_sale = $sale->fixed_amount;
                }
                if ($new_sale > $currentSale) {
                    $currentSale = $new_sale;
                }
            }
            $price = round($price - $currentSale, 2);
            array_push($prices, $price);

            array_push($pictures, $item->images->first());
        }

        return view('pages.specials', [
            'name' => $data['title'],
            'url' => $data['slug'],
            'items' => $finalItems,
            'prices' => $data['prices'],
            'pictures' => $data['pictures'],
            'categories' => $data['categories'],
            'brands' => $data['brands'],
        ]);
    
    }

    public function showFeaturedDeals() {

        $data = ItemController::featured_deals(TRUE);
        $items = $data['items'];

        if (Input::has('category')) {
            $filterCategories = Input::get('category');
            $items = $items->whereIn('id_category', $filterCategories);
        }

        if (Input::has('brand')) {
            $filterBrands = Input::get('brand');
            $items = $items->whereIn('brand', $filterBrands);
        }

        if (Input::has('inStock')) {
            $items = $items->where('stock', '>', 0);
        }

        if (Input::has('minPrice')) {
            $minPrice = Input::get('minPrice');
            $items = $items->where('item.price', '>=', $minPrice);
        }

        if (Input::has('maxPrice')) {
            $maxPrice = Input::get('maxPrice');
            $items = $items->where('item.price', '<=', $maxPrice);
        }

        $items = $items->get();
        $finalItems = array();
        $prices = array();
        $pictures = array();

        foreach ($items as $i) {
            $item = Item::findOrFail($i->id);
            array_push($finalItems, $item);

            $sales = $item->sales;
            $currentSale = 0;
            $price = $item->price;
            foreach ($sales as $sale) {
                $new_sale = 0;
                if ($sale->type == 'percentage') {
                    $new_sale = 0.01 * $sale->percentage_amount * $price;
                } else if ($sale->type == 'fixed') {
                    $new_sale = $sale->fixed_amount;
                }
                if ($new_sale > $currentSale) {
                    $currentSale = $new_sale;
                }
            }
            $price = round($price - $currentSale, 2);
            array_push($prices, $price);

            array_push($pictures, $item->images->first());
        }

        return view('pages.specials', [
            'name' => $data['title'],
            'url' => $data['slug'],
            'items' => $finalItems,
            'prices' => $data['prices'],
            'pictures' => $data['pictures'],
            'categories' => $data['categories'],
            'brands' => $data['brands'],
        ]);
    
    }

    public function showBestSellers() {

        $data = ItemController::best_sellers(TRUE);
        $items = $data['items'];

        if (Input::has('category')) {
            $filterCategories = Input::get('category');
            $items = $items->whereIn('id_category', $filterCategories);
        }

        if (Input::has('brand')) {
            $filterBrands = Input::get('brand');
            $items = $items->whereIn('brand', $filterBrands);
        }

        if (Input::has('inStock')) {
            $items = $items->where('stock', '>', 0);
        }

        if (Input::has('minPrice')) {
            $minPrice = Input::get('minPrice');
            $items = $items->where('item.price', '>=', $minPrice);
        }

        if (Input::has('maxPrice')) {
            $maxPrice = Input::get('maxPrice');
            $items = $items->where('item.price', '<=', $maxPrice);
        }

        $items = $items->take(24)->get();
        $finalItems = array();
        $prices = array();
        $pictures = array();

        foreach ($items as $i) {
            $item = Item::findOrFail($i->id);
            array_push($finalItems, $item);

            $sales = $item->sales;
            $currentSale = 0;
            $price = $item->price;
            foreach ($sales as $sale) {
                $new_sale = 0;
                if ($sale->type == 'percentage') {
                    $new_sale = 0.01 * $sale->percentage_amount * $price;
                } else if ($sale->type == 'fixed') {
                    $new_sale = $sale->fixed_amount;
                }
                if ($new_sale > $currentSale) {
                    $currentSale = $new_sale;
                }
            }
            $price = round($price - $currentSale, 2);
            array_push($prices, $price);

            array_push($pictures, $item->images->first());
        }

        return view('pages.specials', [
            'name' => $data['title'],
            'url' => $data['slug'],
            'items' => $finalItems,
            'prices' => $data['prices'],
            'pictures' => $data['pictures'],
            'categories' => $data['categories'],
            'brands' => $data['brands'],
        ]);
    
    }
    
}