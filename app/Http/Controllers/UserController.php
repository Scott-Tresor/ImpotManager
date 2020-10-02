<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Adresse;
use App\Http\Requests\AdressRequest;
use App\Http\Requests\UserRequest;
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
    private ?User $user;
    /**
     * @var Adresse
     */
    private Adresse $adresse;

    /***
     * UserController constructor.
     * @param User $user
     * @param Adresse $adresse
     */
    public function __construct(User $user, Adresse $adresse)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->adresse = $adresse;
    }

    /***
     * @return Factory|View
     */
    public function  index()
    {
        $users = $this->user::all();
        $adresse = $this->adresse::all();
        return view('app.user.index', compact('users', 'adresse'));
    }

    /***
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('app.user.create');
    }

    /****
     * @param UserRequest $userRequest
     * @param AdressRequest $adressRequest
     * @return RedirectResponse
     */
    public function store(UserRequest $userRequest, AdressRequest $adressRequest)
    {
        $users = $userRequest->validated();
        $adresse = $adressRequest->validated();
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

}
