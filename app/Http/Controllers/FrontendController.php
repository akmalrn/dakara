<?php

namespace App\Http\Controllers;

use App\Models\admin\Blog;
use App\Models\admin\Slider;
use App\Models\admin\Contact;
use App\Models\admin\AboutUs;
use App\Models\admin\CategoryBlog;
use App\Models\admin\Configuration;
use App\Models\admin\Gallery;
use App\Models\admin\nav\Calculation;
use App\Models\admin\nav\Certification;
use App\Models\admin\nav\Compiler;
use App\Models\admin\nav\Profile;
use App\Models\admin\nav\Registration;
use App\Models\admin\NearestSchedule;
use App\Models\admin\Partner;
use App\Models\admin\Superiority;
use App\Models\admin\Team;
use App\Models\admin\Video;
use App\Models\admin\WhyUs;
use Carbon\Carbon;
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
            'whyus' => WhyUs::first(),
        ];
    }

    public function index()
    {
        $commonData = $this->getCommonData();
        $sliders = Slider::all();
        $blogs = Blog::all();
        $mitras = Partner::all();
        $schedules = NearestSchedule::where('date', '>=', Carbon::today())
            ->orderBy('date', 'asc')
            ->get();
        return view('frontend.index', array_merge($commonData, compact('sliders', 'blogs', 'mitras', 'schedules')));
    }

    public function profile()
    {
        $commonData = $this->getCommonData();
        $profile = Profile::first();
        $superioritys = Superiority::all();
        return view('frontend.pages.profile', array_merge($commonData, compact('profile', 'superioritys')));
    }

    public function trainer()
    {
        $commonData = $this->getCommonData();
        $teams = Team::all();
        return view('frontend.pages.trainer', array_merge($commonData, compact('teams')));
    }

    public function schedule()
    {
        $commonData = $this->getCommonData();
        $schedules = NearestSchedule::where('date', '>=', Carbon::today())
        ->orderBy('date', 'asc')
        ->get();
        return view('frontend.pages.schedule', array_merge($commonData, compact('schedules')));
    }

    public function registrasi()
    {
        $commonData = $this->getCommonData();
        $regis = Registration::first();
        return view('frontend.pages.registrasi', array_merge($commonData, compact('regis')));
    }

    public function certificate()
    {
        $commonData = $this->getCommonData();
        $certi = Certification::first();
        return view('frontend.pages.certificate', array_merge($commonData, compact('certi')));
    }

    public function consultant()
    {
        $commonData = $this->getCommonData();
        $teams = Team::all();
        return view('frontend.pages.consultant', array_merge($commonData, compact('teams')));
    }

    public function pendampingan()
    {
        $commonData = $this->getCommonData();
        $calcu = Calculation::first();
        return view('frontend.pages.pendampingan', array_merge($commonData, compact('calcu')));
    }

    public function penyusun()
    {
        $commonData = $this->getCommonData();
        $compi = Compiler::first();
        return view('frontend.pages.penyusun', array_merge($commonData, compact('compi')));
    }

    public function galeri()
    {
        $commonData = $this->getCommonData();
        $gallerys = Gallery::where('category', 'LCA')->get();
        return view('frontend.pages.galeri', array_merge($commonData, compact('gallerys')));
    }

    public function contact()
    {
        $commonData = $this->getCommonData();
        return view('frontend.pages.contact', $commonData);
    }

    public function news()
    {
        $commonData = $this->getCommonData();
        $blogs = Blog::whereHas('category', function ($query) {
            $query->where('category', 'LCA');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(5);
                $categories = CategoryBlog::all();
        return view('frontend.pages.news', array_merge($commonData, compact('blogs', 'categories')));
    }

    public function gallery()
    {
        $commonData = $this->getCommonData();
        $gallerys = Gallery::where('category', 'Gallery')->get();
        return view('frontend.pages.gallery', array_merge($commonData, compact('gallerys')));
    }

    public function videos()
    {
        $commonData = $this->getCommonData();
        $videos = Video::all();
        return view('frontend.pages.videos', array_merge($commonData, compact('videos')));
    }

    public function blog()
    {
        $commonData = $this->getCommonData();
        $blogs = Blog::whereHas('category', function ($query) {
            $query->where('category', '!=', 'LCA');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(5);
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
