<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200114_180822_migration_field_pagebuilder extends Migration
{
    /**
    Migration manifest:
    
    FIELD
        - pageBuilder
            */

private $json = <<<'JSON'
{"settings":{"dependencies":[],"elements":{"fields":[{"group":"Page Builder","name":"Page Builder","handle":"pageBuilder","instructions":"","translationMethod":"site","translationKeyFormat":null,"required":null,"searchable":"1","type":"verbb\\supertable\\fields\\SuperTableField","typesettings":{"minRows":"","maxRows":"","contentTable":"{{%stc_pagebuilder}}","propagationMethod":"all","staticField":"","fieldLayout":"matrix","selectionLabel":"Add a section","blockTypes":{"new":{"fields":{"new1":{"name":"Section","handle":"pageSection","instructions":"","required":"0","type":"craft\\fields\\Matrix","translationMethod":"site","translationKeyFormat":null,"typesettings":{"minBlocks":"","maxBlocks":"","contentTable":"{{%matrixcontent_pagesection}}","propagationMethod":"all","blockTypes":{"new1":{"name":"Rich Text","handle":"richText","fields":{"new1":{"name":"Rich Text","handle":"richText","instructions":"","required":"0","type":"craft\\redactor\\Field","translationMethod":"none","translationKeyFormat":null,"typesettings":{"redactorConfig":"Standard.json","purifierConfig":"","cleanupHtml":true,"removeInlineStyles":"1","removeEmptyTags":"1","removeNbsp":"1","purifyHtml":"1","columnType":"text","availableVolumes":"*","availableTransforms":"*"}}}},"new2":{"name":"Image","handle":"image","fields":{"new1":{"name":"Image","handle":"image","instructions":"","required":"0","type":"craft\\fields\\Assets","translationMethod":"site","translationKeyFormat":null,"typesettings":{"useSingleFolder":"1","defaultUploadLocationSource":"uploads","defaultUploadLocationSubpath":"","singleUploadLocationSource":"uploads","singleUploadLocationSubpath":"","restrictFiles":"1","allowedKinds":["image"],"sources":[],"source":null,"targetSiteId":null,"viewMode":"list","limit":"1","selectionLabel":"Add an image","localizeRelations":false,"validateRelatedElements":""}},"new2":{"name":"Caption","handle":"caption","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"none","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}}}}}}}}}}}}]}}}
JSON;

	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    return MigrationAssistant::getInstance()->migrations->import($this->json);    }

    public function safeDown()
    {
        echo "m200114_180822_migration_field_pagebuilder cannot be reverted.\n";
        return false;
    }
}
