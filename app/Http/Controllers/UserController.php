<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Adresse;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;
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
     * @return Application|Factory|Response|View
     */
    public function  index()
    {
        $users = $this->user::all();
        return view('app.user.index', compact('users'));
    }

    /***
     * @param User $user
     * @return Application|Factory|Response|View
     */
    public function create(User $user)
    {
        return view('app.user.create', compact('user'));
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
            "phones" => ['required'],
            "national_identification" => ['required', 'integer'],
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

    /***
     * @param User $user
     * @return Application|Factory|View
     */
    public function edit(User $user)
    {
        return view('app.user.edit', compact('user'));
    }

    /**
     * @return RedirectResponse
     * @author  scotttresor@gmail.com
     */
    public function update(): RedirectResponse
    {
        $users = request()->validate([
            "name" => ['required', 'min:4'],
            "secondname" => ['required', 'min:5'],
            "firstname" => ['required'],
            "email" => ['required', 'email'],
            "phones" => ['required'],
            "national_identification" => ['required', 'integer'],
            'commune' => ['required'],
            'ville' => ['required'],
            'quartier' => ['required'],
            'number' => ['required', 'integer'],
        ]);
        if($users){
            (new \App\User)->update($users);
            return redirect()->route('users.index', '', 301);
        }
        return redirect()->route('users.edit');
    }

    /***
     * @param User $user
     * @return RedirectResponse
     * @author scotttresor@gmail.com
     */
    public function  destroy(User  $user)
    {
        $user->delete();
        return redirect()->route('users.edit');
    }
}
