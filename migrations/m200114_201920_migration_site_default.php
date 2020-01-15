<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200114_201920_migration_site_default extends Migration
{
    /**
    Migration manifest:
    
    SITE
        - default
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"sites":[{"name":"Office of the Health Obudsman","handle":"default","group":"Office of the Health Obudsman","language":"en-US","hasUrls":"1","baseUrl":"$DEFAULT_SITE_URL","primary":"1","sortOrder":"1"}]},"elements":{"sites":[{"name":"Office of the Health Obudsman","handle":"default","group":"Office of the Health Obudsman","language":"en-US","hasUrls":"1","baseUrl":"$DEFAULT_SITE_URL","primary":"1","sortOrder":"1"}]}}}
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
        echo "m200114_201920_migration_site_default cannot be reverted.\n";
        return false;
    }
}
