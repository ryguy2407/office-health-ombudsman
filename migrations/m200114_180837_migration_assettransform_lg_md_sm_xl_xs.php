<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200114_180837_migration_assettransform_lg_md_sm_xl_xs extends Migration
{
    /**
    Migration manifest:
    
    ASSETTRANSFORM
        - lg
        - md
        - sm
        - xl
        - xs
            */

private $json = <<<'JSON'
{"settings":{"dependencies":[],"elements":{"assetTransforms":[{"name":"lg","handle":"lg","width":"1000","height":null,"format":"jpg","mode":"crop","position":"center-center","quality":"82","interlace":"none"},{"name":"md","handle":"md","width":"700","height":null,"format":"jpg","mode":"crop","position":"center-center","quality":"82","interlace":"none"},{"name":"sm","handle":"sm","width":"500","height":null,"format":"jpg","mode":"crop","position":"center-center","quality":"82","interlace":"none"},{"name":"xl","handle":"xl","width":"2000","height":null,"format":"jpg","mode":"crop","position":"center-center","quality":"82","interlace":"none"},{"name":"xs","handle":"xs","width":"250","height":null,"format":"jpg","mode":"crop","position":"center-center","quality":"82","interlace":"none"}]}}}
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
        echo "m200114_180837_migration_assettransform_lg_md_sm_xl_xs cannot be reverted.\n";
        return false;
    }
}
