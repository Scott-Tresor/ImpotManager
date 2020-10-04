<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Adresse;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/***
 * Class UserController
 * @package App\Http\Controllers
 * @author scotttresor scotttresor@gmail.com
 */
class UserController extends Controller
{
    /**
     * @var User
     * @author scotttresor scotttresor@gmail.com
     */
    private User $user;

    /***
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

    /***
     * @return Factory|View
     */
    public function  index()
    {
        $users = $this->user::all();
        return view('app.user.index', compact('users'));
    }

    /***
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('app.user.create');
    }

    /****
     * @return RedirectResponse
     */
    public function store()
    {
        $users = request()->validate([
            "name" => ['required', 'min:4'],
            "secondname" => ['required', 'min:5'],
            "firstname" => ['required'],
            "email" => ['required', 'email'],
            "phones" => ['required', 'integer'],
            'password' => ['required'],
            "national_identification" => ['required', 'integer'],
            'province' => ['required'],
            'commune' => ['required'],
            'ville' => ['required'],
            'quartier' => ['required'],
            'number' => ['required', 'integer'],
        ]);

        User::create($users);
        return redirect()->route('users.index');
    }

    /***
     * @param User $user
     * @return Factory|View
     */
    public function show(User $user)
    {
        return view('app.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('app.user.edit', compact('user'));
    }

    public function update(User $user)
    {
        $users = request()->validate([
            "name" => ['required', 'min:4'],
            "secondname" => ['required', 'min:5'],
            "firstname" => ['required'],
            "email" => ['required', 'email'],
            "phones" => ['required', 'integer'],
            'password' => ['required'],
            "national_identification" => ['required', 'integer'],
            'province' => ['required'],
            'commune' => ['required'],
            'ville' => ['required'],
            'quartier' => ['required'],
            'number' => ['required', 'integer'],
        ]);

        User::update($users);
        return redirect()->route('users.index');
    }

    public function  destroy()
    {

    }
}
