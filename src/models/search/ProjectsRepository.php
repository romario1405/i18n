<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:13 PM
 */

namespace sonrac\i18n\models\search;

use sonrac\i18n\contracts\ProjectsRepositoryInterface;
use sonrac\i18n\models\ProjectsInterface;

/**
 * Class ProjectsRepository
 * Repository for grid search
 *
 * @package sonrac\i18n\models\search
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class ProjectsRepository extends ProjectsInterface implements ProjectsRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function find($params)
    {

    }

}