<?php

use yii\db\Migration;

class m170924_112829_create_tables extends Migration
{
    protected $projects           = '{{%projects}}';
    protected $projectsGroup      = '{{%projects_group}}';
    protected $projectsGroupItems = '{{%projects_group_items}}';
    protected $i18n               = '{{%i18n}}';
    protected $i18nTranslates     = '{{%i18n_translates}}';
    protected $languages          = '{{%languages}}';

    public function safeUp()
    {
        $this->createTable($this->languages, [
            'id'         => $this->primaryKey()->comment('ID'),
            'name'       => $this->string(25)->notNull()->comment('Name'),
            'ascii_name' => $this->string(100)->notNull()->comment('ASCII Name'),
            'created_at' => $this->integer(20)->comment('Created At'),
            'updated_at' => $this->integer(20)->comment('Updated At'),
            'created_by' => $this->integer(20)->comment('Created By'),
            'updated_by' => $this->integer(20)->comment('Updated By'),
            'deleted_at' => $this->integer(20)->comment('Deleted At'),
        ]);

        $this->createTable($this->projects, [
            'id'                => $this->primaryKey()->comment('ID'),
            'domain'            => $this->string(100)->comment('Domain'),
            'is_enable'         => $this->smallInteger(1)->defaultValue(0)->comment('Is Enable'),
            'is_maintain_mode'  => $this->smallInteger(1)->defaultValue(0)->comment('Is Maintance Mode'),
            'is_www_redirect'   => $this->smallInteger(1)->defaultValue(0)->comment('Is www Redirect'),
            'created_at'        => $this->integer(20)->comment('Created At'),
            'updated_at'        => $this->integer(20)->comment('Updated At'),
            'created_by'        => $this->integer()->comment('Created By'),
            'updated_by'        => $this->integer()->comment('Updated By'),
            'deleted_at'        => $this->integer(20)->comment('Deleted At'),
        ]);

        $this->createTable($this->projectsGroup, [
            'id'         => $this->primaryKey()->comment('ID'),
            'group_name' => $this->string(100)->comment('Group Name'),
            'created_at' => $this->integer(20)->comment('Created At'),
            'updated_at' => $this->integer(20)->comment('Updated At'),
            'created_by' => $this->integer()->comment('Created By'),
            'updated_by' => $this->integer()->comment('Updated By'),
            'deleted_at' => $this->integer(20)->comment('Deleted At'),
        ]);

        $this->createTable($this->projectsGroupItems, [
            'project_id' => $this->integer()->notNull()->comment('Project ID'),
            'group_id'   => $this->integer()->notNull()->comment('Group ID'),
            'created_at' => $this->integer(20)->comment('Created At'),
            'updated_at' => $this->integer(20)->comment('Updated At'),
            'created_by' => $this->integer()->comment('Created By'),
            'updated_by' => $this->integer()->comment('Updated By'),
        ]);

        $this->addPrimaryKey('pk-project_id-group_id', $this->projectsGroupItems, ['project_id', 'group_id']);
        $this->addForeignKey('fk-project_id-id', $this->projectsGroupItems, 'project_id', $this->projects, 'id', 'CASCADE');
        $this->addForeignKey('fk-group_id-id', $this->projectsGroupItems, 'group_id', $this->projectsGroup, 'id', 'CASCADE');

        $this->createTable($this->i18n, [
            'id'               => $this->primaryKey()->comment('ID'),
            'token'            => $this->text()->notNull(),
            'project_id'       => $this->integer()->notNull()->comment('If null - globally token, if project_id set - token only for project'),
            'project_group_id' => $this->integer()->notNull()->comment('If null - globally token, if project_group_id set - token only for project group'),
            'created_at'       => $this->integer(20)->comment('Created At'),
            'updated_at'       => $this->integer(20)->comment('Updated At'),
            'created_by'       => $this->integer()->comment('Created By'),
            'updated_by'       => $this->integer()->comment('Updated By'),
        ]);

        $this->addForeignKey('fk-i18n-project_id-id', $this->i18n, 'project_id', $this->projects, 'id', 'CASCADE');
        $this->addForeignKey('fk-i18n-project_group_id-id', $this->i18n, 'project_group_id', $this->projectsGroup, 'id', 'CASCADE');
        $this->createIndex('idx-token-project_id', $this->i18n, ['token(500)', 'project_id'], true);

        $this->createTable($this->i18nTranslates, [
            'id'                  => $this->primaryKey()->comment('ID'),
            'token_id'            => $this->integer()->notNull(),
            'project_group_id'    => $this->integer()->comment('If null - globally token, if project_group_id set - token only for project group'),
            'translate'           => $this->text()->notNull(),
            'language_id'         => $this->integer()->notNull(),
            'project_id'          => $this->integer()->comment('If null - globally translate for language, if project_id set - translate only for project language'),
            'is_changed'          => $this->integer(),
            'changed_language_id' => $this->boolean(),
            'created_at'          => $this->integer(20)->comment('Created At'),
            'updated_at'          => $this->integer(20)->comment('Updated At'),
            'created_by'          => $this->integer()->comment('Created By'),
            'updated_by'          => $this->integer()->comment('Updated By'),
        ]);

        $this->addForeignKey('fk-i18n-tr-project_id-id', $this->i18nTranslates, 'project_id', $this->projects, 'id', 'CASCADE');
        $this->addForeignKey('fk-i18n-tr-project_group_id-id', $this->i18nTranslates, 'project_group_id', $this->projectsGroup, 'id', 'CASCADE');
        $this->addForeignKey('fk-language_id-id', $this->i18nTranslates, 'language_id', $this->languages, 'id', 'CASCADE');
        $this->addForeignKey('fk-token_id-id', $this->i18nTranslates, 'token_id', $this->i18n, 'id', 'CASCADE');
        $this->createIndex('idx-token-language-project', $this->i18nTranslates, ['token_id', 'language_id', 'project_id'], true);
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-project_id-id', $this->projectsGroupItems);
        $this->dropForeignKey('fk-group_id-id', $this->projectsGroupItems);
        $this->dropForeignKey('fk-i18n-project_id-id', $this->i18n);
        $this->dropForeignKey('fk-i18n-project_group_id-id', $this->i18n);
        $this->dropForeignKey('fk-i18n-tr-project_id-id', $this->i18nTranslates);
        $this->dropForeignKey('fk-i18n-tr-project_group_id-id', $this->i18nTranslates);
        $this->dropForeignKey('fk-language_id-id', $this->i18nTranslates);
        $this->dropForeignKey('fk-token_id-id', $this->i18nTranslates);

        $this->dropIndex('idx-token-project_id', $this->i18n);
        $this->dropIndex('idx-token-language-project', $this->i18nTranslates);

        $this->dropTable($this->languages);
        $this->dropTable($this->projects);
        $this->dropTable($this->projectsGroup);
        $this->dropTable($this->projectsGroupItems);
        $this->dropTable($this->i18n);
        $this->dropTable($this->i18nTranslates);
    }
}
