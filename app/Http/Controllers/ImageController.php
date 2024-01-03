<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image'=>['required', 'mimes:png,jpg,webp,avif', 'image'],
        ]);

        $request->image->storeAs('/images', 'new_image2.webp');
        
        return redirect('/success');
    }
}
