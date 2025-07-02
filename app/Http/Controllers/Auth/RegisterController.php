<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Hobbie;
use App\Models\Profile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        $messages = [
            'firstname.required' => 'Trường bắt buộc',
            'lastname.required' => 'Trường bắt buộc',
            'registerEmail.required' => 'Email là trường bắt buộc',
            'registerEmail.email' => 'Email không đúng định dạng',
            'registerPassword.required' => 'Mật khẩu là trường bắt buộc',
            'registerPassword.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];

        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'registerEmail' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'registerPassword' => ['required', 'string', 'min:6'],
        ], $messages);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['firstname'],
            'last_name' => $data['lastname'],
            'email' => $data['registerEmail'],
            'password' => Hash::make($data['registerPassword']),
            'profile_id' => $this->generateProfileID($data),
            'hobbies_id' => $this->generateHobbiesID($data),
            'remember_token' => Str::random(60),
        ]);
    }

    protected function generateProfileID($data)
    {
        $gender = $data['gender'] === "MA" ? 0 : 1;

        $profile = Profile::create([
            'about_me' => null,
            'birth_date' => Carbon::parse($data['datetimepicker']),
            'address' => null,
            'gender' => $gender,
            'phone' => null,
            'status' => 0,
            'avatar_path' => 'img/author-main1.jpg',
            'header_path' => 'img/top-header3.png'
        ]);

        return $profile->id;
    }

    protected function generateHobbiesID($data)
    {
        $hobbies = Hobbie::create([
            'hobbie' => '',
            'movies' => '',
            'books' => '',
            'other' => '',
        ]);

        return $hobbies->id;
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = $this->create($request->all());

        if (Auth::attempt([
            'email' => $request->input('registerEmail'),
            'password' => $request->input('registerPassword')
        ], true)) {
            return redirect()->route('home');
        } else {
            $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }
}
