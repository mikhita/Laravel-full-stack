<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use App\Models\User;
use App\Models\Address;
use App\Models\Category;
use App\Models\Tag;



class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        
        // Storage::delete('images/new_image2.webp');
        // File::delete(storage_path('app/public/storage/images/new_image2.webp'));

      
        return view('home');


    }
    
}
