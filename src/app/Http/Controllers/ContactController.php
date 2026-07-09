<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();

        $genderText = [
            '1' => '男性',
            '2' => '女性',
            '3' => 'その他',
        ];

    $category = Category::findOrFail($request->category_id);

        return view('confirm', compact('contact', 'genderText', 'category'));
    }

    public function store(Request $request)
    {
        Contact::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'tel' => $request->tel,
            'address' => $request->address,
            'building' => $request->building,
            'category_id' => $request->category_id,
            'detail' => $request->detail,
        ]);

        return view('thanks');
    }
}