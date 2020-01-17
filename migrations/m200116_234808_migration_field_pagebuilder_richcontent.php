<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200116_234808_migration_field_pagebuilder_richcontent extends Migration
{
    /**
    Migration manifest:
    
    FIELD
        - pageBuilder
        - richContent
            */

private $json = <<<'JSON'
{"settings":{"dependencies":[],"elements":{"fields":[{"group":"Page Builder","name":"Page Builder","handle":"pageBuilder","instructions":"","translationMethod":"site","translationKeyFormat":null,"required":null,"searchable":"1","type":"verbb\\supertable\\fields\\SuperTableField","typesettings":{"minRows":"","maxRows":"","contentTable":"{{%stc_pagebuilder}}","propagationMethod":"all","staticField":"","fieldLayout":"row","selectionLabel":"Add a section","blockTypes":{"new":{"fields":{"new1":{"name":"Background Colour","handle":"backgroundColour","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"none","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}},"new2":{"name":"Section Divider","handle":"sectionDivider","instructions":"","required":"0","type":"craft\\fields\\Lightswitch","translationMethod":"none","translationKeyFormat":null,"typesettings":{"default":""}},"new3":{"name":"Layout","handle":"layout","instructions":"","required":"0","type":"craft\\fields\\Matrix","translationMethod":"site","translationKeyFormat":null,"typesettings":{"minBlocks":"","maxBlocks":"","contentTable":"{{%matrixcontent_layout}}","propagationMethod":"all","blockTypes":{"new1":{"name":"Cards","handle":"cards","fields":{"new1":{"name":"Card Title","handle":"cardTitle","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"none","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}},"new2":{"name":"Card Content","handle":"cardContent","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"none","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"1","initialRows":"4","charLimit":"","columnType":"text"}},"new3":{"name":"Card Width","handle":"cardWidth","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"none","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}},"new4":{"name":"Related Entries","handle":"relatedEntries","instructions":"","required":"0","type":"craft\\fields\\Entries","translationMethod":"site","translationKeyFormat":null,"typesettings":{"sources":["mediaReleases"],"source":null,"targetSiteId":null,"viewMode":null,"limit":"","selectionLabel":"","localizeRelations":false,"validateRelatedElements":""}}}},"new2":{"name":"Rich Text","handle":"richText","fields":{"new1":{"name":"Rich Text","handle":"richText","instructions":"","required":"0","type":"craft\\redactor\\Field","translationMethod":"none","translationKeyFormat":null,"typesettings":{"redactorConfig":"Standard.json","purifierConfig":"","cleanupHtml":true,"removeInlineStyles":"1","removeEmptyTags":"1","removeNbsp":"1","purifyHtml":"1","columnType":"text","availableVolumes":"*","availableTransforms":"*"}}}},"new3":{"name":"Image","handle":"image","fields":{"new1":{"name":"Image","handle":"image","instructions":"","required":"0","type":"craft\\fields\\Assets","translationMethod":"site","translationKeyFormat":null,"typesettings":{"useSingleFolder":"1","defaultUploadLocationSource":"uploads","defaultUploadLocationSubpath":"","singleUploadLocationSource":"uploads","singleUploadLocationSubpath":"","restrictFiles":"1","allowedKinds":["image"],"sources":["uploads"],"source":null,"targetSiteId":null,"viewMode":"list","limit":"1","selectionLabel":"","localizeRelations":false,"validateRelatedElements":""}},"new2":{"name":"Caption","handle":"caption","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"none","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}}}}}}}}}}}},{"group":"Common","name":"Rich Content","handle":"richContent","instructions":"","translationMethod":"none","translationKeyFormat":null,"required":null,"searchable":"1","type":"craft\\redactor\\Field","typesettings":{"redactorConfig":"Standard.json","purifierConfig":"","cleanupHtml":true,"removeInlineStyles":"1","removeEmptyTags":"1","removeNbsp":"1","purifyHtml":"1","columnType":"text","availableVolumes":"*","availableTransforms":"*"}}]}}}
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
        echo "m200116_234808_migration_field_pagebuilder_richcontent cannot be reverted.\n";
        return false;
    }
}
