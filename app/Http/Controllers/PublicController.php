<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index() {
        return view ('welcome');
    }

    public function about() {
        $persons = [
            ['id' => 1, 'name' => 'Dr.Distel', 'img' => '/img/austin-distel.jpg', 'specializzazione' => 'Igiene dentale'],
            ['id' => 2, 'name' => 'Dr.Rodrigues', 'img' => '/img/bruno-rodrigues.jpg', 'specializzazione' => 'Cura carie'],
            ['id' => 3, 'name' => 'Dr.Chavez', 'img' => '/img/humberto-chavez.jpg', 'specializzazione' => 'Igiene dentale'],
            ['id' => 4, 'name' => 'Dr.ssa Ramirez', 'img' => '/img/rian-ramirez.jpg', 'specializzazione' => 'Trattamento sbiancante'],
            ['id' => 5, 'name' => 'Dr Yousaf', 'img' => '/img/usman-yousaf.jpg', 'specializzazione' => 'Trattamenti dentali']
        ];
        return view('about', ['persons'=> $persons]);
    }

    public function aboutDetail($id) {
        $persons = [
            ['id' => 1, 'name' => 'Dr.Distel', 'img' => '/img/austin-distel.jpg', 'specializzazione' => 'Igiene dentale', 'studi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.'],
            ['id' => 2, 'name' => 'Dr.Rodrigues', 'img' => '/img/bruno-rodrigues.jpg', 'specializzazione' => 'Chirurgia dentale', 'studi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.'],
            ['id' => 3, 'name' => 'Dr.Chavez', 'img' => '/img/humberto-chavez.jpg', 'specializzazione' => 'Igiene dentale', 'studi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.'],
            ['id' => 4, 'name' => 'Dr.ssa Ramirez', 'img' => '/img/rian-ramirez.jpg', 'specializzazione' => 'Trattamento sbiancante', 'studi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.'],
            ['id' => 5, 'name' => 'Dr Yousaf', 'img' => '/img/usman-yousaf.jpg', 'specializzazione' => 'Trattamenti dentali', 'studi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.']
        ];
        foreach($persons as $person){
            if($id == $person['id']){
                //dd($person);
                return view('aboutDetail', ['person' => $person]);
            }
        }
    }

    public function contact() {
        return view ('contact');
    }

    public function contactSubmit(Request $request){
            //dd($request->all());
            $name = $request->input('name');
            $surname = $request->input('surname');
            $email = $request->input('email');
            $day = $request->input('day');
            $message = $request->input('message');

            //dd($user, $surname, $email, $message);
            $user_contact = compact('name', 'surname', 'email', 'day', 'message');
            //dd($user_contact);
            Mail::to($email)->send(new ThankYouMail($user_contact));
            return redirect(route('index'));
    }

    public function services(){
        $services = [
            ['id' => 1, 'name' => 'Sbiancamento', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.', 'price' => '200'],
            ['id' => 2, 'name' => 'Igiene dentale', 'description' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.', 'price' => '100'],
            ['id' => 3, 'name' => 'Sbiancamento', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.', 'price' => '200'],
            ['id' => 4, 'name' => 'Sbiancamento', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.', 'price' => '200'],
            ['id' => 5, 'name' => 'Igiene dentale', 'description' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum.', 'price' => '100']
        ];
        return view('services', ['services'=> $services]);
    }

    public function info() {
        return view ('info');
    }

    public function infoSubmit(Request $request){
        //dd($request->all());
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $message = $request->input('message');

        //dd($name, $surname, $email, $message);
        $user_contact = compact('name', 'surname', 'email', 'message');
        
        Mail::to('info@dentistfamily.it')->send(new InfoMail($user_contact));
            return redirect(route('index'));
    }

}
