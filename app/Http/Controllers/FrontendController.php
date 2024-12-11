<?php

namespace App\Http\Controllers;

use App\Models\admin\Blog;
use App\Models\admin\Slider;
use App\Models\admin\Contact;
use App\Models\admin\AboutUs;
use App\Models\admin\Configuration;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $sliders = Slider::all();
        $blogs = Blog::all();
        return view('frontend.index', compact('sliders', 'blogs', 'configuration', 'contact', 'about'));
    }

    public function profile()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        return view('frontend.pages.profile', compact('configuration', 'contact', 'about'));
    }

    public function trainer()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.trainer', compact('configuration'));
    }

    public function schedule()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.schedule', compact('configuration'));
    }

    public function registrasi()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.registrasi', compact('configuration'));
    }

    public function certificate()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.certificate', compact('configuration'));
    }

    public function consultant()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.consultant', compact('configuration'));
    }

    public function pendampingan()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.pendampingan', compact('configuration'));
    }

    public function penyusun()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.penyusun', compact('configuration'));
    }

    public function galeri()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.galeri', compact('configuration'));
    }

    public function news()
    {
        $configuration = Configuration::first();
        return view('frontend.pages.news', compact('configuration'));
    }

    public function blog() {}

    public function detail_blog($id)
    {
        $blog = Blog::findOrFail($id);
    }
}
