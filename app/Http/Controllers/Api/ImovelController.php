<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ImovelService;
use App\Http\Requests\ImovelRequest;

class ImovelController extends Controller
{
    
    public function __construct(ImovelService $imovelService)
    {
        $this->imovelService = $imovelService;
    }
   
    public function index()
    { 
      return $this->imovelService->listar();
    }
   
    public function create()
    {
        //
    }
    
    public function store(ImovelRequest $request)
    {	
    	$imovel = $this->imovelService->inserir($request->all()); 
    	if($imovel){
    		return response()->json(["mensagem" => "Imóvel inserido com sucesso!"], 201);
    	} else{
    		return response()->json(["mensagem" => "Não foi possível inserir o imóvel."], 400);
    	} 	    	
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
   
    public function update(ImovelRequest $request, $id)
    {    	
    	$imovel = $this->imovelService->atualizar($request->all(),$id);
    	if($imovel){
    		return response()->json(["mensagem" => "Imóvel atualizado com sucesso!"], 200);
    	} else{
    		return response()->json(["mensagem" => "Não foi possível atualizar o imóvel."], 400);
    	}
    }
    
    public function destroy($id)
    {
        $imovel = $this->imovelService->excluir($id);
        if($imovel){
        	return response()->json(["mensagem" => "Imóvel excluído com sucesso!"], 200);
        } else{
        	return response()->json(["mensagem" => "Não foi possível excluir o imóvel."], 400);
        }
    }
    
    public function pesquisarPorBairro($bairro)
    {    	
    	$imovel = $this->imovelService->pesquisarPorBairro($bairro);
    	return response()->json($imovel, 200);
    }
    
    public function pesquisarPorMunicipio($municipio)
    {
    	$imovel = $this->imovelService->pesquisarPorMunicipio($municipio);
    	return response()->json($imovel, 200);
    }
    
    public function ordenar()
    {    	
    	$imovel = $this->imovelService->ordenar();
    	return response()->json($imovel, 200);
    }
}
