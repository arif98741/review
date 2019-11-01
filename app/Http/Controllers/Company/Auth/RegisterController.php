<?php

namespace App\Http\Controllers\Company\Auth;

use App\Models\Company;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
 

    use RegistersUsers;

   
    //protected $redirectTo = '/company/login';

    
    // public function __construct()
    // {
    //     $this->middleware('company.guest');
    // }

   
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'description'   => 'required',
            'first_name'    => 'required|max:255',
            'last_name'     => 'max:255',
            'email'         => 'required|email|max:255|unique:companies',
            'password'      => 'required|min:6|confirmed',
            'website'       => 'required',
            'phone'         => 'required',
            'address'       => 'required'
        ]);
    }
    
    protected function create(array $data)
    {
        //dd($data);

        $data = [];
        if (array_key_exists('image', $data)) {

            $this->uploadImage($data['image']);
        }

       


        return Company::create([
            'company_name' => $data['company_name'],
            'description' => $data['description'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'website' => $data['website'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
            //'image' => bcrypt($data['image'])
        ]);

    }
    
    public function showRegistrationForm()
    {
        return view('company.auth.register');
    }

    private function uploadImage($image)
    {
        dd($image);


        $timestemp = time();
        $imageName = $timestemp . '.' . $image->getClientOriginalExtension();
        $path = public_path('storage/uploads/company/') . 'image_' . $imageName;
        Image::make($image)->fit(400,267)->save($path);
        return 'image_' . $imageName;
    }

    protected function guard()
    {
        return Auth::guard('company');
    }
}
