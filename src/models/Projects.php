<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:09 PM
 */

namespace sonrac\i18n\models;


use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use sonrac\i18n\contracts\ProjectsInterface;

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
class Projects extends ActiveRecord implements ProjectsInterface
{
    const PROJECT_ENABLE = 1;
    const PROJECT_DISABLE = 0;

    const WWW_REDIRECT_ENABLE = 1;
    const WWW_REDIRECT_DISABLE = 0;

    const MAINTAIN_MODE_ENABLE = 1;
    const MAINTAIN_MODE_DISABLE = 0;

    const ENABLE = 1;
    const DISABLE = 0;

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ]
        ];
    }

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
            ['domain', 'url'],
            [['is_enable', 'is_www_redirect', 'is_maintain_mode'], 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'domain' => 'Domain',
            'is_enable' => 'Enable Project',
            'is_maintain_mode' => 'Enable Maintain Mode',
            'is_www_redirect' => 'Enable WWW Redirect',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function getLabels($value)
    {
        $label = null;

        switch ($value) {
            case self::ENABLE:
                $label = '<span class="label label-success">Yes</span>';
                break;
            case self::DISABLE:
                $label = '<span class="label label-danger">No</span>';
                break;
        }

        return $label;
    }
}