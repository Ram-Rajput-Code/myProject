<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card; // Import the Card model if you're using database

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the card data (either from a model or hard-coded)
        $cards = [
            ['icon' => 'fas fa-laptop', 'title' => 'Frontend', 'content' => 'This is the frontend development section.'],
            ['icon' => 'fas fa-server', 'title' => 'Backend', 'content' => 'This is the backend development section.'],
            ['icon' => 'fas fa-code', 'title' => 'Full-stack', 'content' => 'This is the full-stack development section.'],
            ['icon' => 'fas fa-cloud', 'title' => 'Cloud Computing', 'content' => 'Learn about cloud computing technologies.'],
            ['icon' => 'fas fa-database', 'title' => 'Database', 'content' => 'This section covers database management.'],
            ['icon' => 'fas fa-mobile-alt', 'title' => 'Mobile Development', 'content' => 'Learn mobile application development here.'],
            ['icon' => 'fas fa-users', 'title' => 'Teamwork', 'content' => 'This section covers teamwork and collaboration.'],
            ['icon' => 'fas fa-cogs', 'title' => 'DevOps', 'content' => 'Learn about DevOps practices and tools.']
        ];

        // Return the view and pass the cards data
        return view('pages.home', compact('cards'));
    }
}
