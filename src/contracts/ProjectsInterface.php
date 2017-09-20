<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:05 PM
 */

namespace sonrac\i18n\contracts;

use yii\db\ActiveRecordInterface;

/**
 * Interface Project
 * Project model contract
 *
 * @package sonrac\i18n\contracts
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
interface ProjectsInterface extends ActiveRecordInterface
{
    /**
     * Get project by domain
     *
     * @return mixed
     *
     * @author Donii Sergii <doniysa@gmail.com>
     */
    public static function getProjectByDomain();

    /**
     * Get all projects with languages
     *
     * @return mixed
     *
     * @author Donii Sergii <doniysa@gmail.com>
     */
    public static function getProjectsByLanguage();
}