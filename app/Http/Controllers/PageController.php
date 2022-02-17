<?php

namespace App\Http\Controllers;

use App\Mail\MailBox;
use App\Models\Service;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        $data = [
            'sliders' => DB::table('slider')->where('is_active',1)->get(),
            'platform' => DB::table('platforms')->where('is_active',1)->take(4)->get(),
            'service_category' => DB::table('services_category')->where('is_active',1)->take(5)->get(),
            'client' => DB::table('works')->take(10)->get(),

            'platformsDetails' =>DB::table('services_category')
             ->join('service_detail','services_category.category_id', '=', 'service_detail.service_category_id')
            ->select('services_category.name', DB::raw('service_detail.featured_image as detail_image'))
            ->get(),
        ];
        return view('frontend.pages.home',compact('data'));
    }

    public function platform($id){
        $platform = Platform::findOrFail($id);
        $platformDetail = $platform->platformDetails;
        return view('frontend.pages.platform',compact('platform','platformDetail'));
    }

    public function services($id){
        $service = Service::where('category_id',$id)->first();
        $serviceDetail = $service->serviceDetails;
        $works = DB::table('work_image')->get();
        return view('frontend.pages.services',compact('service','serviceDetail','works'));
    }

    public function introduction(){
        $data = [
            'introduction' => DB::table('about_us')->where('is_active',1)->first(),
            'inspirations' => DB::table('inspirations')->where('is_active',1)->get(),
        ];
        return view('frontend.pages.introduction',compact('data'));
    }

    public function activities(){
        $activities = DB::table('our_activities')->where('is_active',1)->get();
        return view('frontend.pages.our_activity',compact('activities'));
    }

    public function work(){
      $works= DB::table('works')
        ->join('services_category', 'works.category_id', '=', 'services_category.category_id')
        ->join('work_image', 'works.work_id', '=', 'work_image.work_id')
        ->select('services_category.name','work_image.featured_image','works.category_id','work_image.featured_image')
        ->get();

        return view('frontend.pages.work',compact('works'));
    }


    public function show(){
        return view('frontend.pages.contact');
    }

    public function sendmail(Request $request) {


            $this->validate($request, [
             'name'     =>  'required',
             'email'  =>  'required|email',
             'message' =>  'required',

             'g-recaptcha-response'=>'recaptcha'
            ]);

            $data = [
                'name'      =>  $request->name,
                'email'      =>  $request->email,
                'contact'      =>  $request->contact,
                'message'   =>   $request->message
            ];

            Mail::to('utech@gmail.com')->send(new MailBox($data));

            DB::table('contact_us')->insert([
                'name' => $request->get('name'),
                'email'  => $request->get('email'),
                'contact' => $request->get('contact'),
                'message'   => $request->get('message')
            ]);


            return back()->with('success', 'Thanks for contacting us!');
    }

}


