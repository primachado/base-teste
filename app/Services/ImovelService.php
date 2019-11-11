<?php

namespace App\Services;
use App\Repositories\ImovelRepository;

class ImovelService
{
    public function __construct(ImovelRepository $imovelRepository)
    {
        $this->imovelRepository = $imovelRepository;
    }

    public function listar()
    {
        return $this->imovelRepository->all();
    }
    
    public function inserir($data)
    {
    	try{
    		return $this->imovelRepository->create($data);
    	} catch (\Exception $e){
    		return false;
    	}
    }
    
    public function atualizar($data,$id)
    {
    	try{
    		$this->imovelRepository->find($id)->update($data);
    		return $this->imovelRepository->find($id);
    	} catch (\Exception $e){
    		return false;
    	}
	}
	
	public function excluir($id)
	{
		try{
			return $this->imovelRepository->delete($id);
		} catch (\Exception $e){
			return false;
		}
	}
	
	public function pesquisarPorBairro($bairro)
	{	
		return $this->imovelRepository->findWhere([			
				['bairro','like', "%{$bairro}%"]
		]);
	}
	
	public function pesquisarPorMunicipio($municipio)
	{
		return $this->imovelRepository->findWhere([
				['municipio','like', "%{$municipio}%"]
		]);
	}
	
	public function ordenar(){
		return $this->imovelRepository->orderBy('municipio','asc')
		->orderBy('bairro','asc')
		->paginate(5);
	}
}