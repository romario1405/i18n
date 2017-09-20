<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:04 PM
 */

namespace sonrac\i18n\contracts;

/**
 * Interface ProjectModelInterface
 * Search project model contract
 *
 * @package sonrac\i18n\contracts
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
interface ProjectsRepositoryInterface
{
    /**
     * Search data
     *
     * @param array $params
     *
     * @return mixed
     *
     * @author Donii Sergii <doniysa@gmail.com>
     */
    public function find($params);
}