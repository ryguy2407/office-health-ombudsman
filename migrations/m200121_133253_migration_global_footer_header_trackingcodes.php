<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200121_133253_migration_global_footer_header_trackingcodes extends Migration
{
    /**
    Migration manifest:
    
    GLOBAL
        - footer
        - header
        - trackingCodes
            */

private $json = <<<'JSON'
{"settings":{"dependencies":[],"elements":{"globals":[{"name":"Footer","handle":"footer","fieldLayout":{"Acknowledgement":["acknowledgement","acknowledgementBackground"],"Social":["socialHeading","socialIcon","facebookUrl","instagramUrl","linkedinUrl","twitterUrl","youtubeUrl"],"Footer navigation":["footerNavigation"]},"requiredFields":[]},{"name":"Header","handle":"header","fieldLayout":{"Navigation":["primaryMenu","secondaryMenu","mobileMenu"]},"requiredFields":[]},{"name":"Tracking codes","handle":"trackingCodes","fieldLayout":{"Tracking codes":["headerCodes","bodyCodes","footerCodes"]},"requiredFields":[]}]}}}
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
        echo "m200121_133253_migration_global_footer_header_trackingcodes cannot be reverted.\n";
        return false;
    }
}
