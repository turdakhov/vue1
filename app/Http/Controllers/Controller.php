<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $assignments = [
            [ 'name' => 'Finish prject', 'complete' => false, 'id' => 1, 'tag' => 'math' ],
            [ 'name' => 'Read chapter 4', 'complete' => false, 'id' => 2, 'tag' => 'science' ],
            [ 'name' => 'Turn in homework', 'complete' => false, 'id' => 3 , 'tag' => 'math'],
        ];
        // $assignments = 'asdf';
        return view('welcome', compact('assignments'));
    }
}
