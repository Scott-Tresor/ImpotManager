<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    private $user;

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
        if($users){
            return view('app.user.index', compact('users'));
        }
        return view('app.user.index');
    }

    /****
     * @return Factory|View
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
        $request = request()->validate([
            "name" => ['required', 'min:4'],
            "secondname" => ['required', 'min:5'],
            "firstname" => ['required', 'min:6'],
            "email" => ['required', 'email'],
            "phones" => ['required', 'integer'],
            "national_identification" => ['required', 'integer']
        ]);

        User::created($request);
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
