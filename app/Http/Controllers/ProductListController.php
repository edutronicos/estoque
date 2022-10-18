<?php

namespace App\Http\Controllers;

use App\Models\ProductList;
use App\Models\ExitList;
use App\Models\ProviderController;
use App\Models\Paper;
use App\Models\PaperDatabase;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    //Retorna a view INDEX
    public function index()
    {
        return view('index');
    }

    //Retorna a view para o formulário de cadastro dos itens.
    public function create()
    {
        return view('cad_item');
    }

    //Função pra gravar no banco de dados. Grava um novo produto já com a quantidade inicial.
    public function store(Request $request)
    {

        ProductList::create([
            'produto'   => $request->item,
            'quant'     => $request->quantidade
        ]);

        return view('cad_item');
    }

    //Retorna a view para adicionar quantidade aos produtos já cadastrados.
    public function return_entrada()
    {
        $produtos = ProductList::orderBy('produto', 'asc')->get();

        return view('entrada', compact('produtos'));
    }

    //Retorna a view com formulário de retirada de itens.
    public function return_saida()
    {
        $produtos = ProductList::orderBy('produto', 'asc')->get();

        return view('saida', compact('produtos'));
    }

    //Página para listar todos os itens e quantidade dos mesmos
    public function show()
    {
        $produtos = ProductList::orderBy('produto', 'asc')->get();

        return view('consulta', compact('produtos'));
    }

    public function listasaida()
    {
        $lista = ExitList::orderBy('created_at','asc')->get();

        return view('listasaida', compact('lista'));
    }

    //Pagina Editar Itens
    public function edit(ProductList $productList)
    {
        //
    }

    //Função para adicionar quantidade de items no banco de dados.
    public function update_mais(Request $request, ProductList $productList)
    {
        $quant_banco        = ProductList::find($request->produto);
        $quant_banco->quant = $quant_banco->quant + $request->inse_quant;
        $quant_banco->save();

        return redirect('/entrada');
    }

    //Função para diminuir a quantidade de items no banco de dados e popular o banco com dados de quem fez a retirada de itens.
    public function update_menos(Request $request, ProductList $productList)
    {
        
        $quant_banco        = ProductList::find($request->produto_s);
        // dd($quant_banco->produto);
        $quant_banco->quant = $quant_banco->quant - $request->saida_quant;
        $quant_banco->save();

        ExitList::create([
            'func_nome'     => $request->funcionario,
            'func_produto'  => $quant_banco->produto,
            'func_quant'    => $request->saida_quant
        ]);

        return redirect('/saida');
    }

    //Página apagar Itens
    public function cad_forne(Request $request)
    {
        ProviderController::create([
            'empresa'   => $request->forne_empresa,
            'contato'   => $request->forne_contato,
            'telefone'  => $request->forne_telefone,
            'email'     => $request->forne_email
        ]);

        return redirect('/contato');
    }

    //Página de contato
    public function contato(Request $request) 
    {
        $forne = ProviderController::all();
        
        return view('contato', compact('forne'));
    }

    //sobre a CRUD
    public function sobre(Request $request)
    {
        $papeis = Paper::all();
        $database = PaperDatabase::all();
        $mes_atual = Carbon::now()->format('m');
        $soma = PaperDatabase::where('data_setor', 'Financeiro')
                                ->whereMonth('created_at', date('10'))
                                ->sum('data_quant');
        
        //dd($soma);
        return view('sobre', compact('papeis', 'database'));
    }

    public function papeis(Request $request)
    {
        if ($request->papeis_quanti && $request->setores) {
            $setor = Paper::find($request->setores);
            $setor->papel_quant = $setor->papel_quant + $request->papeis_quanti;
            // dd($setor->papel_quant);
            $setor->save();

            $resma = ProductList::find(31);
            $resma->quant = $resma->quant - $request->papeis_quanti;
            $resma->save();

            PaperDatabase::create([
                'data_setor'    => $setor->papel_setor,
                'data_quant'    => $request->papeis_quanti
            ]);
            return redirect('/sobre');

        } else {
            return redirect('/sobre');
        }
    }

    //entrada de produtos
    public function entrada()
    {
        return view('entrada');
    }

    //saída de produtos
    public function saida()
    {
        return view('saida');
    }
}
