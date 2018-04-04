<?php
namespace App\Api\V1\Repositories;

use App\Models\Admin;
use Prettus\Repository\Eloquent\BaseRepository;

class AdminRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Admin::class;
    }
}