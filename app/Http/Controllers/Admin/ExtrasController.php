<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class ExtrasController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        
        return view('admin.extras.dashboard');
    }
    public function contacts(){
    	$contacts = DB::table('contacts')->orderby('id', 'desc')->get();
    	return view('admin.extras.contacts', ['contacts' => $contacts]);
    }
    public function editContact(Request $request, $id){
    	if($request->isMethod('post')){
    		$post = $request->except('_token');
    		$update = DB::table('contacts')->where('id', $id)->update($post);
            
            if($update){
                $logo = URL::to('/').'/images/website/logo.png';
                Mail::send('emails.contact_to_user', ['data' => $post, 'url' => $logo], function ($message) use($post)
                {
                    $message->to($post['email'], $post['name'])->subject('Contact us query answered');
                    $message->from(env('ADMIN_EMAIL'), env('EMAIL_TITLE'));
                
                });
                return redirect('admin/contacts')->with('success', 'A query has been answered successfully.');
            }else{
                return redirect('admin/contacts/edit/'.$id)->with('error', 'Error in answering a query. Please try again');
            }
    	}
    	$contact = DB::table('contacts')->where('id', $id)->orderby('id', 'desc')->first();
    	return view('admin.extras.edit_contact', ['contact' => $contact]);
    }
    public function editEnterprise(Request $request, $id){
    	if($request->isMethod('post')){
    		$post = $request->except('_token');
    		$update = DB::table('contacts')->where('id', $id)->update($post);
            
            if($update){
                $logo = URL::to('/').'/images/website/logo.png';
                Mail::send('emails.contact_to_user', ['data' => $post, 'url' => $logo], function ($message) use($post)
                {
                    $message->to($post['email'], $post['name'])->subject('Contact us query answered');
                    $message->from(env('ADMIN_EMAIL'), env('EMAIL_TITLE'));
                
                });
                return redirect('admin/contacts')->with('success', 'A query has been answered successfully.');
            }else{
                return redirect('admin/enterprise/edit/'.$id)->with('error', 'Error in answering a query. Please try again');
            }
    	}
    	$contact = DB::table('contacts')->where('id', $id)->orderby('id', 'desc')->first();
    	return view('admin.extras.edit_enterprise', ['contact' => $contact]);
    }
}