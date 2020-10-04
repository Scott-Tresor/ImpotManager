<?php

namespace App\Http\Controllers;

use App\Impot;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImpotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @return Application|Factory|Response
     */
    public function index()
    {
        $impots  = Impot::all();
        return view('app.impot.index', compact('impots'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $user = User::all();
        return view('app.impot.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store()
    {
        $impot = request()->validate([
            'revenuebrute' => ['required', 'integer'],
            'taux' => ['required', 'integer'],
            'importretenue' => ['required'],
            'solde' => ['required', 'integer'],
            'datedepot' => ['required', 'date'],
            'student_id' => ['required', 'integer'],
            'identiteamr' => ['required'],
            'reference' => ['required'],
            'datepaiement' => ['required', 'date'],
        ]);

        dd($impot);
        Impot::create($impot);
        return redirect()->route('app.impot.index');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return Response
     */
    public function destroy(int $id)
    {
        //
    }
}
