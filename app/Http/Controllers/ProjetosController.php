<?php  namespace mambo\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use mambo\Projeto;
use mambo\Categoria;
use mambo\Http\Requests\ProjetoRequest;
use Auth;

class	ProjetosController	extends	Controller	{

		public function __construct() {
				$this->middleware('autorizador');
			}
	
		public	function	lista(){

				$projetos = Projeto::all();
						return view('listagem')->with('projetos', $projetos);
				}
			
			public function mostra($id){
				$projetos = Projeto::find($id);
				return view('detalhes')->with('projetos', $projetos);
			}

			public function remove($id){
				$projeto = Projeto::find($id);
				$projeto->delete();
				return redirect('/projetos');
			}

			public function novo(){
				return view('formulario')->with('categorias', Categoria::all());
			}

			public function adiciona(ProjetoRequest $request){
				Projeto::create($request->all());
				return redirect('/projetos')->withInput();
			}
	}