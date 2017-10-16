<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:13 PM
 */

namespace sonrac\i18n\models\search;

use sonrac\i18n\contracts\ProjectsRepositoryInterface;
use sonrac\i18n\models\Projects;
use Yii;
use yii\data\ActiveDataProvider;

/**
 * Class ProjectsRepository
 * Repository for grid search
 *
 * @package sonrac\i18n\models\search
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class ProjectsRepository extends Projects implements ProjectsRepositoryInterface
{
    public function rules() {
        return [
            ['domain', 'string', 'length' => 100],
        ];
    }

    /**
     * @inheritDoc
     */
    public function search($params)
    {
        $query = Yii::$container->get('sonrac\i18n\contracts\ProjectsInterface')->find();
        $query->orderBy(['created_at' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params)) && $this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id'               => $this->id,
            'domain'           => $this->domain,
            'is_enable'        => $this->is_enable,
            'is_www_redirect'  => $this->is_www_redirect,
            'is_maintain_mode' => $this->is_maintain_mode,
            'created_at'       => $this->created_at,
            'updated_at'       => $this->updated_at,
            'created_by'       => $this->created_by,
            'updated_by'       => $this->updated_by,
            'deleted_at'       => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'domain', $this->domain]);

        return $dataProvider;
    }

}