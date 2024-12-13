<?php

namespace App\Http\Controllers;

use App\Models\admin\Blog;
use App\Models\admin\Slider;
use App\Models\admin\Contact;
use App\Models\admin\AboutUs;
use App\Models\admin\CategoryBlog;
use App\Models\admin\Configuration;
use App\Models\admin\NearestSchedule;
use App\Models\admin\Partner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Method untuk mendapatkan data umum
    private function getCommonData()
    {
        return [
            'configuration' => Configuration::first(),
            'contact' => Contact::first(),
            'about' => AboutUs::first(),
        ];
    }

    public function index()
    {
        $commonData = $this->getCommonData();
        $sliders = Slider::all();
        $blogs = Blog::all();
        $mitras = Partner::all();
        $schedules = NearestSchedule::orderBy('date', 'asc')->get();
        return view('frontend.index', array_merge($commonData, compact('sliders', 'blogs', 'mitras', 'schedules')));
    }

    public function profile()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.profile', $commonData);
    }

    public function trainer()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.trainer', $commonData);
    }

    public function schedule()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.schedule', $commonData);
    }

    public function registrasi()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.registrasi', $commonData);
    }

    public function certificate()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.certificate', $commonData);
    }

    public function consultant()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.consultant', $commonData);
    }

    public function pendampingan()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.pendampingan', $commonData);
    }

    public function penyusun()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.penyusun', $commonData);
    }

    public function galeri()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.galeri', $commonData);
    }

    public function contact()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.contact', $commonData);
    }

    public function news()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.news', $commonData);
    }

    public function blog()
    {
        $commonData = $this->getCommonData();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        $categories = CategoryBlog::all();
        return view('frontend.pages.blog', array_merge($commonData, compact('blogs', 'categories')));
    }

    public function detail_blog($id)
    {
        $commonData = $this->getCommonData();
        $blogs = Blog::all();
        $blog = Blog::findOrFail($id);
        $categories = CategoryBlog::all();
        return view('frontend.pages.blog-detail', array_merge($commonData, compact('blogs', 'blog', 'categories')));
    }

    public function blog_category($category_id)
    {
        $commonData = $this->getCommonData();
        $category = CategoryBlog::findOrFail($category_id);
        $blogs = Blog::where('category_id', $category_id)->latest()->get();
        $categories = CategoryBlog::all();
        return view('frontend.pages.blog', array_merge($commonData, compact('blogs', 'categories', 'category')));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $commonData = $this->getCommonData();
        $categories = CategoryBlog::all();

        $blogs = Blog::where('title', 'LIKE', "%$query%")
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('frontend.pages.blog', array_merge($commonData, compact('blogs', 'categories')));
    }
}
