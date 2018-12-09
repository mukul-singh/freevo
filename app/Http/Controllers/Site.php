<?php

namespace App\Http\Controllers;
define('BASE_URL', 'http://myprojects/freevo/public/');

class Site extends Controller
{
    public function home() {
        $title = "Freevo - Home";
        $description = "Freevo - Home";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('home');
        return view('footer');
    }

    public function listing() {
        $title = "Freevo - Listings";
        $description = "Freevo - Listings";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('listing');
        return view('footer');
    }

    public function single() {
        $title = "Freevo - Super Single Bed";
        $description = "Freev0 - Super Single Bed";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('single');
        return view('footer');
    }

    public function stories() {
        $title = "Freevo - Stories";
        $description = "Freev0 - Stories";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('stories');
        return view('footer');
    }

    public function profile() {
        $title = "Freevo - Profile";
        $description = "Freev0 - Profile";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('profile');
        return view('footer');
    }

    public function userProfile() {
        $title = "Freevo - Ranjan's Profile";
        $description = "Freev0 - Ranjan's Profile";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('userProfile');
        return view('footer');
    }

    public function giveaway() {
        $title = "Freevo - Giveaway Details";
        $description = "Freev0 - Giveaway Details";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('giveaway');
        return view('footer');
    }

}