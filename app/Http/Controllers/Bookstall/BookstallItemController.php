<?php

namespace App\Http\Controllers\Bookstall;

use App\Http\Controllers\Controller;
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
}
