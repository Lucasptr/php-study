<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Http\Requests\SeriesFormRequest;

class SerieController extends Controller
{
	public function index(Request $request) 
	{
		$series = Serie::query()
			->orderBy('nome')
			->get();
		
		//Recuperando dados da sessão, passando no método get de session a chave
		$storeMessage = $request->session()->get('storeMessage');

		return view('series.index', compact('series', 'storeMessage'));
	}

	public function create() 
	{
		return view('series.create');
	}

	public function store(SeriesFormRequest $request) 
	{
		$serie = Serie::create([
			'name' => $request->serieName,
			'season' => intval($request->serieSeason)
		]);
		
		//Salvando dados na sessão: método put dentro de session, recebe a chave e o valor
		$request->session()->flash('storeMessage', "Serie {$serie->nome} created successfully");
		
		return redirect()->route('serie.index');
	}

	public function destroy(Request $request) 
	{
		//Salvando dados na sessão: método put dentro de session, recebe a chave e o valor
		
		Serie::destroy($request->id);
		$request->session()->flash('storeMessage', "Serie removed successfully");
		
		return redirect()->route('serie.index');
	}
} 