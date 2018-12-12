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
        $description = "Freevo - Super Single Bed";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('single');
        return view('footer');
    }

    public function stories() {
        $title = "Freevo - Stories";
        $description = "Freevo - Stories";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('stories');
        return view('footer');
    }

    public function profile() {
        $section = strtolower(\Request::get('section'));
        if($section == '') {
            // Go to personal information page by default
            $section = 'info';
        }
        $sectionTitle = [
            'info'      => 'Personal Information',
            'giveaway'  => 'My Giveaway',
            'requested' => 'Requested Items',
            'wishlist'  => 'My Wishlist',
            'addresses' => 'Manage Address',
            'feedbacks' => 'Feedbacks',
            'help'      => 'Help Center',
            'faq'       => 'FAQs',
            'deactivate'=> 'Deactivate Account'

        ];
        $title = $sectionTitle[$section];
        echo view('header', ['title' => $title, 'description' => $title]);
        echo view('nav');
        echo view('profile.'.$section, ['section' => $section, 'sectionTitle' => $sectionTitle[$section]]);
        return view('footer');
    }

    public function userProfile() {
        $title = "Freevo - Ranjan's Profile";
        $description = "Freevo - Ranjan's Profile";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('userProfile');
        return view('footer');
    }

    public function giveaway() {
        $title = "Freevo - Giveaway Details";
        $description = "Freevo - Giveaway Details";
        echo view('header', ['title' => $title, 'description' => $description]);
        echo view('nav');
        echo view('giveaway');
        return view('footer');
    }

}