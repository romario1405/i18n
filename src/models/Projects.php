<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:09 PM
 */

namespace sonrac\i18n\models;

/**
 * Class ProjectsInterface
 * ProjectsInterface model
 *
 * @property int id
 * @property string domain
 * @property bool is_enable
 * @property bool is_www_redirect
 * @property bool is_maintain_mode
 * @property int $created_at
 * @property int $updated_at
 * @property int $updated_by
 * @property int $created_by
 * @property int $deleted_at
 *
 * @package sonrac\i18n\models
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class Projects extends \yii\db\ActiveRecord implements \sonrac\i18n\contracts\ProjectsInterface
{
    public static function tableName()
    {
        return '{{%projects}}';
    }

    /**
     * {@inheritDoc}
     */
    public static function getProjectByDomain()
    {
        // TODO: Implement getProjectByDomain() method.
    }

    /**
     * {@inheritDoc}
     */
    public static function getProjectsByLanguage()
    {
        // TODO: Implement getProjectsByLanguage() method.
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            ['domain', 'required'],
            ['domain', 'string', 'length' => 100],
            [['is_enable', 'is_www_redirect', 'is_maintain_mode'], 'boolean']
        ];
    }
}