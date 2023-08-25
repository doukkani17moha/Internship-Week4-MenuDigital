<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'restaurant' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'restaurant' => $request->restaurant,
            'password' => Hash::make($request->password),
        ]);

        $data = [
            'contact_bigtitle' => 'Contact US',
            'contact_title' => 'Get in touch with us',
            'contact_description' => 'Your email address will not be published. Required fields are marked *',
            'contact_address' => 'Burger Bun, 208 Trainer Avenue street, Corner Market, NY - 62617.',
            'contact_email' => 'mdoukkani8@gmail.com',
            'contact_phone' => '+212696807732',
            'contact_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin',
            'about_bigtitle' => 'About US',
            'about_img' => 'about1.jpg',
            'about_title' => 'Hello and welcome to our restaurant! Right Ingredients for the Right Food',
            'about_description' => 'Lorem me viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.',
            'about_video' => 'https://www.youtube.com/embed/dCVEY88Fn1k',
            'home_title' => 'Delight your Best.',
            'home_description' => 'We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident. fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac cursus quis, leo.',
            'home_story_video' => 'https://www.youtube.com/embed/dCVEY88Fn1k',
            'home_story_title' => "Burgers! You won't Find Anywhere Else with Best Quality",
            'home_story_description' => 'Lorem meme viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, consequatur voluptatem ad.',
            'footer_description' => 'We are dedicated to the safety of our guests and employees and have updated our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive approched. Browse the amazing Features this template offers.',
            'restaurant' => $request->restaurant,
        ];

        DB::table('template')->insert($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::PLANS);
    }

}
