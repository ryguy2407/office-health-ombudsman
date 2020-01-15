<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200114_180826_migration_section_pages extends Migration
{
    /**
    Migration manifest:
    
    SECTION
        - pages
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"sections":[{"name":"Pages","handle":"pages","type":"structure","enableVersioning":"1","propagateEntries":true,"maxLevels":null,"sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"{% if level == 1 %}{slug}{% else %}{parent.slug}/{slug}{% endif %}","enabledByDefault":"1","template":"pages/_entry"}},"entrytypes":[{"sectionHandle":"pages","hasTitleField":"1","titleLabel":"Title","titleFormat":"","name":"Pages","handle":"pages","fieldLayout":{"Page Builder":["pageBuilder"]},"requiredFields":[]}]}]},"elements":{"sections":[{"name":"Pages","handle":"pages","type":"structure","enableVersioning":"1","propagateEntries":true,"maxLevels":null,"sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"{% if level == 1 %}{slug}{% else %}{parent.slug}/{slug}{% endif %}","enabledByDefault":"1","template":"pages/_entry"}},"entrytypes":[{"sectionHandle":"pages","hasTitleField":"1","titleLabel":"Title","titleFormat":"","name":"Pages","handle":"pages","fieldLayout":{"Page Builder":["pageBuilder"]},"requiredFields":[]}]}]}}}
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
        echo "m200114_180826_migration_section_pages cannot be reverted.\n";
        return false;
    }
}
