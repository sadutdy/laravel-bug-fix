<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Post;
use App\leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        $title = "school of business london | coaching and mentoring";
        $description = "The School of Business London allows you to learn and achieve a British Degree at your own pace without boundaries. We offer CMI courses including Coaching And Mentoring.";
        $keywords = "school of business london, coaching and mentoring, School, uk education, online learning uk,online education uk, Business Schools In London, Uk Schools, Schools In Uk,CMI Courses,Business London";
     
        $new_courses_old = Course::publish()->with('maincategory')->orderBy('created_at', 'desc')->take(8)->get();
      
        $new_courses = Course::publish()->with('maincategory')->whereIsFeatured(1)->orderBy('featured_at', 'desc')->get();
     //print_R($new_courses);die;
        $popular_courses = $featured_courses =  Course::publish()->whereIsPopular(1)->orderBy('popular_added_at', 'desc')->take(8)->get();
      
        $categories = Category::parent()->with('sub_categories')->get();
     
     
       
        $posts = Post::post()->publish()->take(3)->get();
       // print_R($posts);die;

        return view(theme('index'), compact('title', 'new_courses', 'featured_courses', 'popular_courses', 'posts','categories','description','keywords'));
    }
    public function courses_list(Request $r){
    $title = "Our Courses - Uk courses | CMI First Line Management| Level 5 Health & Social Care";
    $description = "We offer a range of courses of various renowned awarding bodies like CMI, QUALIFI etc. We deliver Business Management Courses, Engineering Courses, Project Management Courses and many more.";
    $keywords = "Uk Courses,Online Courses Uk,Online Business Courses Uk, Study Business In London,Online Management  Courses Uk,cmi level 3 diploma in first line management,level 5 health & social care,cmi level 7 courses";
    $categories = Category::parent()->with('sub_categories')->get();
    $topics = Category::whereCategoryId($r->category)->get();
    $details[] ='';
    $courses = Course::query();
    $courses = $courses->publish();


    if ($r->path() === 'featured-courses'){
        $title = __t('featured_courses');
        $courses = $courses->where('is_featured', 1);
    }elseif ($r->path() === 'popular-courses'){
        $title = __t('popular_courses');
        $courses = $courses->where('is_popular', 1);
    }

    if ($r->q){
        $courses = $courses->where('title', 'LIKE', "%{$r->q}%");
    }
    if ($r->category){
        $courses = $courses->where('second_category_id', $r->category);
        $category_details = Category::findOrFail($r->category);
        $details['category']=$category_details->category_name;       
    }
    if ($r->topic){
        $courses = $courses->where('category_id', $r->topic);
        $details['topic']=$r->topic;
    }
    if ($r->level && ! in_array(0, $r->level)){

        $courses = $courses->whereIn('level', $r->level);
       // $details['level']=$r->level;
        $i=0;
        foreach($r->level as $level){
            if($level==1){
                $level_name = "Beginner";
            }else if($level==2){
                $level_name = "Intermediate";
            }else if($level==3){
                $level_name = "Expert";
            }else{
                $level_name = __t('all_level');
            }
        $details['level'.$i] = $level_name;
        $i++;
        }
       
       
    }
    if ($r->awarding_body ){
        $courses = $courses->where('awarding_body', $r->awarding_body);
        if($r->awarding_body==1){
            $awarding_name = "CMI";
        }else if($r->awarding_body==2){
            $awarding_name = "QUALIFY";
        }else if($r->awarding_body==3){
            $awarding_name = "IBT";
        } else if($r->awarding_body==4){
            $awarding_name = "NCC";
        } else if($r->awarding_body==5){
            $awarding_name = "Anglia Ruskin University";
        } else if($r->awarding_body==6){
            $awarding_name = "UCLAN";
        }else if($r->awarding_body==7){
            $awarding_name = "Sage Qualifications";
        }else if($r->awarding_body==8){
            $awarding_name = "University of Chichester";
        }else if($r->awarding_body==9){
            $awarding_name = "Open University of Switzerland";
        }
       
        $details['awarding_body']=$awarding_name;
    }
    if ($r->price){
        $courses = $courses->whereIn('price_plan', $r->price);
    }
    if ($r->rating){
        $courses = $courses->where('rating_value','>=', $r->rating);
    }


    /**
     * Find by Video Duration
     */
    if ($r->video_duration === '0_2'){
        $durationEnd = (60 * 60 * 3) - 1; //02:59:59
        $courses = $courses->where('total_video_time','<=', $durationEnd);
    }elseif ($r->video_duration === '3_5'){
        $durationStart = (60 * 60 * 3) ;
        $durationEnd = (60 * 60 * 6) -1;
        $courses = $courses->whereBetween('total_video_time',[$durationStart, $durationEnd]);
    }elseif ($r->video_duration === '6_10'){
        $durationStart = (60 * 60 * 6) ;
        $durationEnd = (60 * 60 * 11) -1;
        $courses = $courses->whereBetween('total_video_time',[$durationStart, $durationEnd]);
    }elseif ($r->video_duration === '11_20'){
        $durationStart = (60 * 60 * 11) ;
        $durationEnd = (60 * 60 * 21) -1;
        $courses = $courses->whereBetween('total_video_time',[$durationStart, $durationEnd]);
    }elseif ($r->video_duration === '21'){
        $durationStart = (60 * 60 * 21) ;
        $courses = $courses->where('total_video_time', '>=', $durationStart);
    }

    switch ($r->sort){
        case 'most-reviewed' :
            $courses = $courses->orderBy('rating_count', 'desc');
            break;
        case 'highest-rated' :
            $courses = $courses->orderBy('rating_value', 'desc');
            break;
        case 'newest' :
            $courses = $courses->orderBy('published_at', 'desc');
            break;
        case 'price-low-to-high' :
            $courses = $courses->orderBy('price', 'asc');
            break;
        case 'price-high-to-low' :
            $courses = $courses->orderBy('price', 'desc');
            break;
        default:

            if ($r->path() === 'featured-courses'){
                $courses = $courses->orderBy('featured_at', 'desc');
            }elseif ($r->path() === 'popular-courses'){
                $courses = $courses->orderBy('popular_added_at', 'desc');
            }
            else{
                $courses = $courses->orderBy('created_at', 'desc');
            }
    }

    $per_page = $r->perpage ? $r->perpage : 150;
    $courses = $courses->with('maincategory')->with('subcategory')->paginate($per_page);

    return view(theme('courses_list'), compact('title', 'courses', 'categories', 'topics','details','description','keywords'));
}
    public function courses(Request $r){
       
        $title = "Our Courses - Uk courses | CMI First Line Management| Level 5 Health & Social Care";
    $description = "We offer a range of courses of various renowned awarding bodies like CMI, QUALIFI etc. We deliver Business Management Courses, Engineering Courses, Project Management Courses and many more.";
    $keywords = "Uk Courses,Online Courses Uk,Online Business Courses Uk, Study Business In London,Online Management  Courses Uk,cmi level 3 diploma in first line management,level 5 health & social care,cmi level 7 courses";
    
        $categories = Category::parent()->with('sub_categories')->get();
        $topics = Category::whereCategoryId($r->category)->get();
        $details[] ='';
        $courses = Course::query();
        $courses = $courses->publish();

        if ($r->path() === 'featured-courses'){
            $title = __t('featured_courses');
            $courses = $courses->where('is_featured', 1);
        }elseif ($r->path() === 'popular-courses'){
            $title = __t('popular_courses');
            $courses = $courses->where('is_popular', 1);
        }

        if ($r->q){
            $courses = $courses->where('title', 'LIKE', "%{$r->q}%");
        }
        if ($r->category){
            $courses = $courses->where('second_category_id', $r->category);
            $category_details = Category::findOrFail($r->category);
            $details['category']=$category_details->category_name;       
        }
        if ($r->topic){
            $courses = $courses->where('category_id', $r->topic);
            $details['topic']=$r->topic;
        }
        if ($r->level && ! in_array(0, $r->level)){
    
            $courses = $courses->whereIn('level', $r->level);
           // $details['level']=$r->level;
            $i=0;
            foreach($r->level as $level){
                if($level==1){
                    $level_name = "Beginner";
                }else if($level==2){
                    $level_name = "Intermediate";
                }else if($level==3){
                    $level_name = "Expert";
                }else{
                    $level_name = __t('all_level');
                }
            $details['level'.$i] = $level_name;
            $i++;
            }
           
        }
        if ($r->awarding_body ){
            $courses = $courses->where('awarding_body', $r->awarding_body);
            if($r->awarding_body==1){
                $awarding_name = "CMI";
            }else if($r->awarding_body==2){
                $awarding_name = "QUALIFY";
            }else if($r->awarding_body==3){
                $awarding_name = "IBT";
            } else if($r->awarding_body==4){
                $awarding_name = "NCC";
            } else if($r->awarding_body==5){
                $awarding_name = "Anglia Ruskin University";
            } else if($r->awarding_body==6){
                $awarding_name = "UCLAN";
            }else if($r->awarding_body==7){
                $awarding_name = "Sage Qualifications";
            }else if($r->awarding_body==8){
                $awarding_name = "University of Chichester";
            }else if($r->awarding_body==9){
                $awarding_name = "Open University of Switzerland";
            }
            $details['awarding_body']=$awarding_name;
        }
        if ($r->price){
            $courses = $courses->whereIn('price_plan', $r->price);
        }
        if ($r->rating){
            $courses = $courses->where('rating_value','>=', $r->rating);
        }


        /**
         * Find by Video Duration
         */
        if ($r->video_duration === '0_2'){
            $durationEnd = (60 * 60 * 3) - 1; //02:59:59
            $courses = $courses->where('total_video_time','<=', $durationEnd);
        }elseif ($r->video_duration === '3_5'){
            $durationStart = (60 * 60 * 3) ;
            $durationEnd = (60 * 60 * 6) -1;
            $courses = $courses->whereBetween('total_video_time',[$durationStart, $durationEnd]);
        }elseif ($r->video_duration === '6_10'){
            $durationStart = (60 * 60 * 6) ;
            $durationEnd = (60 * 60 * 11) -1;
            $courses = $courses->whereBetween('total_video_time',[$durationStart, $durationEnd]);
        }elseif ($r->video_duration === '11_20'){
            $durationStart = (60 * 60 * 11) ;
            $durationEnd = (60 * 60 * 21) -1;
            $courses = $courses->whereBetween('total_video_time',[$durationStart, $durationEnd]);
        }elseif ($r->video_duration === '21'){
            $durationStart = (60 * 60 * 21) ;
            $courses = $courses->where('total_video_time', '>=', $durationStart);
        }

        switch ($r->sort){
            case 'most-reviewed' :
                $courses = $courses->orderBy('rating_count', 'desc');
                break;
            case 'highest-rated' :
                $courses = $courses->orderBy('rating_value', 'desc');
                break;
            case 'newest' :
                $courses = $courses->orderBy('published_at', 'desc');
                break;
            case 'price-low-to-high' :
                $courses = $courses->orderBy('price', 'asc');
                break;
            case 'price-high-to-low' :
                $courses = $courses->orderBy('price', 'desc');
                break;
            default:

                if ($r->path() === 'featured-courses'){
                    $courses = $courses->orderBy('featured_at', 'desc');
                }elseif ($r->path() === 'popular-courses'){
                    $courses = $courses->orderBy('popular_added_at', 'desc');
                }
                else{
                    $courses = $courses->orderBy('created_at', 'desc');
                }
        }
       
        $per_page = $r->perpage ? $r->perpage : 150;
        $courses = $courses->with('maincategory')->with('subcategory')->paginate($per_page);
        //$courses = $courses->with('maincategory')->with('subcategory')->paginate($per_page);

        return view(theme('courses'), compact('title', 'courses', 'categories', 'topics','details','description','keywords'));
    }

    public function clearCache(){
        Artisan::call('debugbar:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('optimize:clear');
        if (function_exists('exec')){
            exec('rm ' . storage_path('logs/*'));
        }
        $this->rrmdir(storage_path('logs/'));

        return redirect(route('home'));
    }

    public function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object))
                        $this->rrmdir($dir."/".$object);
                    else
                        unlink($dir."/".$object);
                }
            }
            //rmdir($dir);
        }
    }

    public function accreditations(){
        $title="Accreditations | CMI | Qualifi |MBA Degree | CMI MBA | CMI Leadership";
        $description = "We are dedicated to offering qualifications students can trust. Our courses include Social Care Courses, Computing Courses and Management and Leadership Courses from recognized awarding bodies and are fully accredited.";
        $keywords = "Accreditations, CMI , Qualifi, CMI Uk,CMI Certification, CMI Leadership,CMI MBA, Management and Leadership Courses,Universities,Universities with distance learning";
        return view(theme('accreditations'), compact('title','description','keywords'));
        
    }
    public function blended(){
        $title="Blended Learning - Courses | Diploma in Health and Social Care | CMI Level 4";
        $description = "Blended Learning Program is a style of education where web-based learning using hybrid-teaching technology modifying a portion of the traditional face-to-face instruction.";
        $keywords = "Blended Learning Program,Diploma in Health and Social Care,CMI Level 4,Blended Learning Online Course,Leadership And Management Courses London,Health And Social Care Degree";
        return view(theme('blended'), compact('title','description','keywords'));
    }
    public function online(){
        $title="Distance Learning Courses | Health And Social Care Courses Online | CMI Level";
        $description = "Our innovative approach to distance learning makes us unique from other institutions. Continuous Tutor support is available and you can complete your qualifications at your own pace.";
        $keywords = "Distance Learning,Health And Social Care Courses Online,CMI Level,CMI Distance Learning,Online Learning, Distance Learning Courses, Online MBA Courses,CMI level 7 Distance Learning";
        return view(theme('online'), compact('title','description','keywords'));
    }
    public function about(){
        $title="About SBL | Business Management Diploma | MBA Top Up Online";
        $description = "School of Business London is dedicated to offering  professional  courses worldwide via blended, distance and online learning. 
        SBL is an accredited learning center for offering CMI Qualifications and Training.";
        $keywords = "About SBL, Business Management Diploma, MBA Top Up Online, CMI Courses Online,Top London Business Schools, Management And Leadership Level 5";
        return view(theme('about'), compact('title','description','keywords'));
    }
    public function sbl(){
        $title="Why Choose SBL - Business Management Courses Uk |Top MBA London";
        $description = "SBL provides high-quality education to transform the skills, knowledge and understanding of our students to enhance their employ-ability and ever-changing business world.";
        $keywords = "Business Management Courses Uk, Top MBA London, Mentoring Courses, Masters In Business Management London, Best Business School London";
        return view(theme('sbl'), compact('title','description','keywords'));
    }
    public function faq(){
        $title="FAQ - SBL | Diploma In Business Management | MBA Top Up In London";
        $description="Suppose You want to answer your questions. Please check our FAQ page. If we haven’t answered your question, please &hellip";
        $keywords = "FAQ - SBL, Diploma In Business Management, MBA Top Up In London, London MBA, SBL Education,London School Of Commerce DBA";
       // $courses = Course::get();
        $courses = Course::publish()->orderBy('created_at', 'desc')->get();
        return view(theme('faq'), compact('courses','title','description','keywords'));
        // return view(theme('faq'));
    }
    public function contact_us(){
        $title="Contact Us - CMI Level 5 | Health and Social Care Level 3";
        $description="If you would like to contact us to discuss our courses in such subjects as Management and Leadership or our Business Administration Courses, please get in touch today.";
        $keywords = "CMI Level 5,Health and Social Care Level 3,Top MBA Schools In London, London School Of Business";
      //  $courses = Course::get();
        $courses = Course::publish()->orderBy('created_at', 'desc')->get();
        return view(theme('contact'), compact('courses','title','description','keywords'));

    }
    public function rap(){
        $title="Regional Access Points - Online Courses Business Management | sbusinesslondon.com";
        $description="Regional Access Partners (RAP) network globally removes boundaries to education and enables us to provide our qualifications across the world.";
        $keywords = "Online Courses Business Management, Level 6 Management And Leadership, Business University London, SBL Schools";
        return view(theme('raq'), compact('title','description','keywords'));
    }
    public function articles(){
        $title="Articles - CMI Level 6 | HRM Courses | Level 7 Diploma in Accounting";
        $description="Read our latest articles on such topics as our CMI Level 7 Strategic Management and Leadership courses, our Diploma in Management and Leadership and our Level 5 Diploma in Health and Social Care.";
        $keywords = "Articles - CMI Level 6, HRM Courses, Level 7 Diploma in Accounting,London Business Courses";
        $courses = Course::get();
        return view(theme('articles'), compact('courses','title','description','keywords'));
    }
    public function onlinelibrary(){
        $title="Online Library - Online Business Administration Courses Uk| sbusinesslondon.ac.uk";
        $description="E-libraries have the same principle of work: there are several cost-effective monthly membership-based online libraries available for students to sign up. Look for a necessary source, download it or use online.";
        $keywords = "Online Library, Online Business Administration Courses Uk, london ac uk,level 5 leadership courses,";
        return view(theme('onlinelibrary'), compact('title','description','keywords'));
    }
    public function individuallearning(){
        $title="Individual Learning Plan - Sbusinesslondon | Management Courses London";
        $description="";
        $keywords = "Individual Learning Plan,Sbusinesslondon,Management Courses London,School Of Business";
        return view(theme('individual'), compact('title','description','keywords'));
    }
    public function terms(){
        $title="Terms And Conditions - SBL London";
        $description="Our Terms and Conditions - By ordering from and the general use of School of Business London , you agree to the following terms and conditions";
        $keywords = "SBL London, London Leadership Programme, terms and conditions of service, Online Business & Management certification,London";
        return view(theme('terms'), compact('title','description','keywords'));
    }
    public function privacy_policy(){
        $title="Privacy Policy - CMI Leadership And Management level 3 |sbusinesslondon.ac.uk";
        $description="Privacy Policy - Our privacy policy describes how we will collect and use the info you give us.";
        $keywords = "CMI Leadership And Management level 3 ,Top up course, MBA In London School Of Business, Computer Courses Diploma,Business";
        return view(theme('privacy'), compact('title','description','keywords'));
    }
    public function cookies_policy(){
        $title="Cookie Policy - School Of Business, London | Level 3 Courses London";
        $description="School of Business London Cookie Information - Our cookie policy page lets you know what cookies we use.";
        $keywords = "School Of Business, London , Level 3 Courses London, Diploma In Management Studies,Study Business";
        return view(theme('cookies'), compact('title','description','keywords'));
    }
    public function compliant_policy(){
        $title="Complaint Policy - SBL Uk | Best Management Courses London";
        $description="If a student feels dissatisfied with their dealings with the Centre, he or she enables Protest to make their concerns known to our staff members.";
        $keywords = "SBL Uk , Best Management Courses London, SBL Online,Diploma In Business And Accounting,Top Up Business Degree,";
        return view(theme('complaint'), compact('title','description','keywords'));
    }
    public function download(){
        //echo "hihih";die;
        $title="Complaint Policy - SBL Uk | Best Management Courses London";
        $description="If a student feels dissatisfied with their dealings with the Centre, he or she enables Protest to make their concerns known to our staff members.";
        $keywords = "SBL Uk , Best Management Courses London, SBL Online,Diploma In Business And Accounting,Top Up Business Degree,";
  
        return view(theme('download_cmplaint'), compact('title','description','keywords'));
    }
    public function downloadpdf(){
        $path = "https://www.sbusinesslondon.ac.uk/images/course_banner/Management_Leadership.jpg";
       
        return response()->download(storage_path($path));
    }
    public function add_request(Request $request){
       
        $first_name = $request->fname;
        $last_name = $request->lname;
        $phone = $request->phone;
        $email = $request->email;
        $course = $request->course;
        $msg = $request->msg;


        $data = [
            'fname'         =>  $first_name,
            // 'lname'           => $last_name,
            'email'            => $email,
            'phone'          => $phone,
            'course'          => $course,
            'source'          => "Request Info",
            'message'          => $msg,
        ];
      
        Leads::create($data);
    //   Mail::to('aiswaryapulloor@gmail.com')->send();
       Mail::send(['text'=>'courses'], $data, function($message) {
        $message->to('aiswaryapulloor@gmail.com', 'Tutorials Point')->subject
           ('Laravel Basic Testing Mail');
        $message->from('aiswaryapulloor@gmail.com','Virat Gandhi');
     });
    //  echo "Basic Email Sent. Check your inbox.";
      //  Mail::to('aiswaryapulloor@gmail.com')->queue(new MessageFromContactForm($data));
       // Mail::to('aiswaryapulloor@gmail.com')->queue(new MessageFromContactForm($content));
        return back()->with('success', trans('Successfully Added'));


    }
    
public function set_session(Request $request){
    $first_name = $request->f_name;
    $last_name = $request->l_name;
    $address1 = $request->address1;
    $address2 = $request->address2;
    $zip_code = $request->zip_code;
    $country = $request->country;
    $city = $request->city;
    $phone = $request->phone;
    $email = $request->email;
    Session::put([
        'first_name' => $first_name,
        'last_name' => $last_name,
        'address1' => $address1,
        'address2' => $address2,
        'zip_code' => $zip_code,
        'county' => $country,
        'city' => $city,
        'phone' => $phone,
        'email' =>  $email,
    ]);
}
}
