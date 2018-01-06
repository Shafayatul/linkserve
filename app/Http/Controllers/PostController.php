<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }    

    public function adminHome()
    {
        return view("admin.home.index");
    }

    public function adminAddMedia()
    {
        return view("admin.media.create");
    }
    public function adminAddHomeBlock()
    {
        return view("admin.home.block.create");
    }    
    public function adminAddHomeSocialLinks()
    {
        return view("admin.home.social.create");
    }



    
    public function adminAddPost($type)
    {
        return view("admin.post.create")->with(['type'=>$type]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate request
        $this->validate($request,array(
            'post_type' => 'required|max:25',
            'post_title' => 'max:191'
        ));



        // upload post file and get the link
        if ( $request->hasFile('file') ) {
            $url = Storage::disk('public')->put('', $request->file('file'));
            // $post_file_url = Storage::url($url);
        }else{
            $url = "";
        }            


        // this is only for update
        if(($request->post_type == "about") || ($request->post_type == "service") || ($request->post_type == "solution") || ($request->post_type == "partners") || ($request->post_type == "clients") || ($request->post_type == "male_shop") || ($request->post_type == "Hulhumale") || ($request->post_type == "Kulhudhuffushi") || ($request->post_type == "addu_city") || ($request->post_type == "corporate_brand") || ($request->post_type == "product_brands") || ($request->post_type == "about_us") || ($request->post_type == "mission") || ($request->post_type == "vision") || ($request->post_type == "values") || ($request->post_type == "our_team") || ($request->post_type == "f__sla") || ($request->post_type == "f__island") || ($request->post_type == "f__hotel_resort_customer") || ($request->post_type == "f__government_customer") || ($request->post_type == "f__wholesale") || ($request->post_type == "f__retail") || ($request->post_type == "f__guarantees_warranties") || ($request->post_type == "f__goods_return_policy") || ($request->post_type == "f__career") || ($request->post_type == "f__job_opportunities")  || ($request->post_type == "privacy_policy")  || ($request->post_type == "contact") ){
            
            // delete old image
            self::deleteOldFiles($request->post_type);


            Post::updateOrCreate(
                ['post_type' => $request->post_type],
                [
                    'post_title' => $request->post_title,
                    'post_content' => $request->post_content,
                    'post_type' => $request->post_type,
                    'preview_image' => $url
                ]
            );  

            Session::flash('success','Data successfully added!');  
        }else{

            
            if( ($request->post_type == "Downloads")  || ($request->post_type == "Gallery") ){
                $cnt = $request->cnt;
                $files = "";
                for ($i=1; $i <= $cnt; $i++){
                    if ( $request->hasFile('multiple_file_'.$i) ) {
                        $url = Storage::disk('public')->put('', $request->file('multiple_file_'.$i));
                        $files .= $url.",";
                    }
                }
                $files = rtrim($files, ",");
            }

            // store in database - else
            $post = new Post;
            $post->post_title = $request->post_title;
            $post->post_content = $request->post_content;
            $post->post_type = $request->post_type;
            $post->preview_image = $url;    
            $post->files = $files;           
            $post->save();
            Session::flash('success','Data successfully added!');            
        }
    





        // redirect someone to another page
        if($request->post_type == "White_Papers" || $request->post_type == "News" || $request->post_type == "Downloads" || $request->post_type == "Gallery" || $request->post_type == "Events"){
            return redirect(url('admin/addMedia'));
        }else{
            return redirect(url('admin/addPost/'.$request->post_type));
        }
        
    }    

    public function storeHomeBlock(Request $request)
    {

        // block 1
        Post::updateOrCreate(
            ['post_type' => 'home_block_1'],
            [
                'post_title' => $request->post_title_1,
                'post_content' => $request->post_content_1,
                'post_type' => 'home_block_1',
                'preview_image' => ''
            ]
        );  
        // block 2
        Post::updateOrCreate(
            ['post_type' => 'home_block_2'],
            [
                'post_title' => $request->post_title_2,
                'post_content' => $request->post_content_2,
                'post_type' => 'home_block_2',
                'preview_image' => ''
            ]
        );  
        // block 3
        Post::updateOrCreate(
            ['post_type' => 'home_block_3'],
            [
                'post_title' => $request->post_title_3,
                'post_content' => $request->post_content_3,
                'post_type' => 'home_block_3',
                'preview_image' => ''
            ]
        );  
        // block 4
        Post::updateOrCreate(
            ['post_type' => 'home_block_4'],
            [
                'post_title' => $request->post_title_4,
                'post_content' => $request->post_content_4,
                'post_type' => 'home_block_4',
                'preview_image' => ''
            ]
        );                  


        Session::flash('success','Data successfully added!');  
        

        // redirect someone to another page
        return redirect(url('admin/addHomeBlock'));
        
    }



    // admin
    public function storeHomeSocialLinks(Request $request)
    {

        $socialLink = array();

        $socialLink['facebook'] = $request->facebook;
        $socialLink['twitter'] = $request->twitter;
        $socialLink['instagram'] = $request->instagram;
        
        $socialLink = json_encode($socialLink);

        Post::updateOrCreate(
            ['post_type' => 'socialLink'],
            [
                'post_title' => '',
                'post_content' => $socialLink,
                'post_type' => 'socialLink',
                'preview_image' => ''
            ]
        );                  


        Session::flash('success','Data successfully added!');  
        

        // redirect someone to another page
        return redirect(url('admin/addSocialLink'));
        
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    //web
    public function showMedia($type)
    {
        $posts = Post::orderBy('id','desc')->where('post_type', $type)->paginate(12);
        return view('web.media.index')->with(['posts'=>$posts, 'type'=>$type]);        
    }
    //web
    public function showAllGallery()
    {
        $posts = Post::orderBy('id','desc')->where('post_type', "Gallery")->paginate(12);
        return view('web.media.gallery')->with(['posts'=>$posts, 'type'=>'Gallery']);        
    }
    //web
    public function showAllDownload()
    {
        $posts = Post::orderBy('id','desc')->where('post_type', "Downloads")->paginate(12);
        return view('web.media.download')->with(['posts'=>$posts, 'type'=>'Downloads']);        
    }


    //admin
    public function adminShowSinglePostType($type)
    {
        $posts = Post::orderBy('id','desc')->where('post_type', $type)->paginate(20);
        return view('admin.post.index')->with(['posts'=>$posts, 'type'=>$type]);        
    }

    //web
    public function showSearchResult($search)
    {
        // return "haha";
        $posts = Post::where('post_title','LIKE','%'.$search.'%')
                ->orWhere('post_content','LIKE','%'.$search.'%')
                ->orWhere('post_type','LIKE','%'.$search.'%')
                ->paginate(12);
        return view('web.media.index')->with(['posts'=>$posts, 'type'=>$search]);        
    }

    //web
    public function showPartnersClients($id)
    {
        $partners = Post::where('post_type', 'partners')->first();
        $clients = Post::where('post_type', 'clients')->first();
        return view('web.single-page.template-partner-client')->with(['partners'=>$partners, 'clients'=>$clients, 'id'=>$id]);        
    }
    
    //web
    public function showBrand($id)
    {
        $corporate_brand = Post::where('post_type', 'corporate_brand')->first();
        $product_brands = Post::where('post_type', 'product_brands')->first();
        return view('web.single-page.template-brand')->with(['corporate_brand'=>$corporate_brand, 'product_brands'=>$product_brands, 'id'=>$id]);        
    }

    
    //web
    public function showStory($id)
    {
        $male_shop = Post::where('post_type', 'male_shop')->first();
        $Hulhumale = Post::where('post_type', 'Hulhumale')->first();
        $Kulhudhuffushi = Post::where('post_type', 'Kulhudhuffushi')->first();
        $addu_city = Post::where('post_type', 'addu_city')->first();
        return view('web.single-page.template-story')->with(['male_shop'=>$male_shop, 'Hulhumale'=>$Hulhumale, 'Kulhudhuffushi'=>$Kulhudhuffushi, 'addu_city'=>$addu_city, 'id'=>$id]);        
    }

    // admin
    public function deleteOldFiles($type){
        $post = Post::where('post_type', $type)->first();
        if($post->preview_image != ""){
            Storage::disk('public')->delete($post->preview_image);
        }
    }

    public function showContact($id)
    {
        $contact = Post::where('post_type', 'contact')->first();
        return view('web.contact.index')->with(['contact'=>$contact, 'id'=>$id]);        
    }


    
    //web
    public function showProfile($id)
    {
        $about_us = Post::where('post_type', 'about_us')->first();
        $mission = Post::where('post_type', 'mission')->first();
        $vision = Post::where('post_type', 'vision')->first();
        $values = Post::where('post_type', 'values')->first();
        $our_team = Post::where('post_type', 'our_team')->first();
        return view('web.single-page.template-profile')->with(['about_us'=>$about_us, 'mission'=>$mission, 'vision'=>$vision, 'values'=>$values, 'our_team'=>$our_team, 'id'=>$id]);        
    }


    
    

    //web
    public function showLinkserve($id)
    {
        $f__guarantees_warranties = Post::where('post_type', 'f__guarantees_warranties')->first();
        $f__goods_return_policy = Post::where('post_type', 'f__goods_return_policy')->first();
        $f__career = Post::where('post_type', 'f__career')->first();
        $f__job_opportunities = Post::where('post_type', 'f__job_opportunities')->first();
        return view('web.single-page.template-linkserve')->with(['f__guarantees_warranties'=>$f__guarantees_warranties, 'f__goods_return_policy'=>$f__goods_return_policy, 'f__career'=>$f__career, 'f__job_opportunities'=>$f__job_opportunities, 'id'=>$id]);        
    }





    
    //web
    public function showService($id)
    {
        $f__sla = Post::where('post_type', 'f__sla')->first();
        $f__island = Post::where('post_type', 'f__island')->first();
        $f__hotel_resort_customer = Post::where('post_type', 'f__hotel_resort_customer')->first();
        $f__government_customer = Post::where('post_type', 'f__government_customer')->first();
        $f__wholesale = Post::where('post_type', 'f__wholesale')->first();
        $f__retail = Post::where('post_type', 'f__retail')->first();
        return view('web.single-page.template-service')->with(['f__sla'=>$f__sla, 'f__island'=>$f__island, 'f__hotel_resort_customer'=>$f__hotel_resort_customer, 'f__government_customer'=>$f__government_customer, 'f__wholesale'=>$f__wholesale, 'f__retail'=>$f__retail, 'id'=>$id]);        
    }





    //web
    public function showSinglePage($type)
    {
        // $post = Post::where('post_type', 'solution')->first();
        $post = Post::where('post_type', $type)->first();
        return view('web.single-page.index')->with(['post'=>$post]);        
    }

    //web
    public function showSinglePageUsingID($post_id)
    {
        // $post = Post::where('post_type', 'solution')->first();
        $post = Post::where('id', $post_id)->first();
        return view('web.single-page.index')->with(['post'=>$post]);        
    }

    //web
    public function showSingleGalleryUsingID($post_id)
    {
        // $post = Post::where('post_type', 'solution')->first();
        $post = Post::where('id', $post_id)->first();
        return view('web.single-page.template-gallery')->with(['post'=>$post]);        
    }


    //web
    public function showSingleDownloadUsingID($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        return view('web.single-page.template-download')->with(['post'=>$post]);        
    }





    //web
    public function showHome()
    {
        $sliders = Post::where('post_type', 'slider')->get();
        $testimonials = Post::where('post_type', 'testimonial')->get();
        $team_members = Post::where('post_type', 'team_member')->get();
        $about = Post::where('post_type', 'about')->first();
        $service = Post::where('post_type', 'service')->first();

        $home_block_1 = Post::where('post_type', 'home_block_1')->first();
        $home_block_2 = Post::where('post_type', 'home_block_2')->first();
        $home_block_3 = Post::where('post_type', 'home_block_3')->first();
        $home_block_4 = Post::where('post_type', 'home_block_4')->first();

        return view('web.home.index')->with(['sliders'=>$sliders, 'testimonials'=>$testimonials, 'team_members'=>$team_members, 'about'=>$about, 'service'=>$service, 'home_block_1' => $home_block_1, 'home_block_2' => $home_block_2, 'home_block_3' => $home_block_3, 'home_block_4' => $home_block_4]);       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }    

    //admin
    public function destroyById(Request $request)
    {
        $validator = $this->validate($request, [
            'id' => 'required|integer'
        ]);

        // delete old files
        $post = Post::where('id', $request->id)->first();
        if($post->preview_image != ""){
            Storage::disk('public')->delete($post->preview_image);
        }

        Post::where('id', $request->id)->delete();

        return response()->json([ 'success'=> 'success' ]);
    }


}
