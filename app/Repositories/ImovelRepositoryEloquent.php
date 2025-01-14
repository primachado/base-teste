<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ImovelRepository;
use App\Entities\Imovel;
use App\Validators\ImovelValidator;

/**
 * Class ImovelRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ImovelRepositoryEloquent extends BaseRepository implements ImovelRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Imovel::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
