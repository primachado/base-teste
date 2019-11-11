<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProprietarioRepository;
use App\Entities\Proprietario;
use App\Validators\ProprietarioValidator;

/**
 * Class ProprietarioRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProprietarioRepositoryEloquent extends BaseRepository implements ProprietarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Proprietario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
