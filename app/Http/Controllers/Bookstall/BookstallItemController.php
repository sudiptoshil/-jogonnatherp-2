<?php

namespace App\Http\Controllers\Bookstall;

use App\Http\Controllers\Controller;
use App\Models\BookItemsell;
use App\Models\BookstallItem;
use Illuminate\Http\Request;

class BookstallItemController extends Controller
{
    public function add_new_item()
    {
        return view('bookstall.newitem.add_new_item');
    }

    public function save_new_item(Request $request)
    {
        $newitem = new BookstallItem();
        $newitem->item_code = $request->item_code;
        $newitem->item_name = $request->item_name;
        $newitem->quantity = $request->quantity;
        $newitem->price = $request->price;
        $newitem->save();
        return redirect()->back()->with('message','New book item saved successfully!!');

    }

    public function manage_book_item()
    {
        $book = BookstallItem::all();
        return view('bookstall.newitem.manage_book_item',compact('book'));
    }

    public function edit_book_item($id)
    {
        $book   = BookstallItem::find($id);
        return view('bookstall.newitem.edit_new_item',compact('book'));
    }

    public function update_new_item(Request $request)
    {
        $book = BookstallItem::find($request->id);
        $book->item_code = $request->item_code;
        $book->item_name = $request->item_name;
        $book->quantity = $request->quantity;
        $book->price = $request->price;
        $book->save();
        return redirect('/bookstall/manage-item')->with('message','Book item updated successfully!!');
    }

    public function book_item_slaes_form()
    {
        return view('bookstall.newitem.book_item_sells_form');
    }

    public function save_book_item_slaes_form(Request $request)
    {
        $bookitem = new BookItemsell();
        $bookitem->item_name = $request->item_name;
        $bookitem->quantity = $request->quantity;
        $bookitem->price = $request->price;
        $bookitem->customer_name = $request->customer_name;
        $bookitem->mobile_number = $request->mobile_number;
        $bookitem->paid = $request->paid;
        $bookitem->due = $request->due;
        $bookitem->date = $request->date;
        $bookitem->save();
        return redirect()->back()->with('message','Bookitem form ready!!');


    }

    public function manage_all_book_item_sells()
    {
        $sells_book  = BookItemsell::all();
        return view('bookstall.newitem.manage_book_item_sells',compact('sells_book'));
    }

    public function book_sales_details($id)
    {
        // return $id;
        $sells_book = BookItemsell::find($id);
        return view('bookstall.newitem.book_sells_details',compact('sells_book'));
    }
}
