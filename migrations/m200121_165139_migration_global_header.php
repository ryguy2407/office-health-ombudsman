<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200121_165139_migration_global_header extends Migration
{
    /**
    Migration manifest:
    
    GLOBAL
        - header
            */

private $json = <<<'JSON'
{"content":{"globals":[{"handle":"header","locales":[],"sites":{"default":{"slug":"header","fields":{"primaryMenu":"headerPrimaryNavigation","secondaryMenu":"headerPrimaryNavigation","mobileMenu":"headerPrimaryNavigation"}}}}]}}
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
        echo "m200121_165139_migration_global_header cannot be reverted.\n";
        return false;
    }
}
