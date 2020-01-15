<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200114_180832_migration_assetvolume_uploads extends Migration
{
    /**
    Migration manifest:
    
    ASSETVOLUME
        - uploads
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"assetVolumes":[{"name":"Uploads","handle":"uploads","type":"craft\\volumes\\Local","sortOrder":"1","typesettings":{"path":"@baseAssetPath/uploads"},"hasUrls":1,"url":"@rootUrl/assets/uploads"}]},"elements":{"assetVolumes":[{"name":"Uploads","handle":"uploads","type":"craft\\volumes\\Local","sortOrder":"1","typesettings":{"path":"@baseAssetPath/uploads"},"hasUrls":1,"url":"@rootUrl/assets/uploads","fieldLayout":[]}]}}}
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
        echo "m200114_180832_migration_assetvolume_uploads cannot be reverted.\n";
        return false;
    }
}
