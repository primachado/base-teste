<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TipoImovelRepository;
use App\Entities\TipoImovel;
use App\Validators\TipoImovelValidator;

/**
 * Class TipoImovelRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TipoImovelRepositoryEloquent extends BaseRepository implements TipoImovelRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TipoImovel::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
