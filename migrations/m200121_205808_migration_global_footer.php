<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200121_205808_migration_global_footer extends Migration
{
    /**
    Migration manifest:
    
    GLOBAL
        - footer
            */

private $json = <<<'JSON'
{"content":{"globals":[{"handle":"footer","locales":[],"sites":{"default":{"slug":"footer","fields":{"footerNavigation":[]}}}}]}}
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
        echo "m200121_205808_migration_global_footer cannot be reverted.\n";
        return false;
    }
}
