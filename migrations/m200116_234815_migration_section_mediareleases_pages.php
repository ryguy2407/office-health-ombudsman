<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m200116_234815_migration_section_mediareleases_pages extends Migration
{
    /**
    Migration manifest:
    
    SECTION
        - mediaReleases
        - pages
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"sections":[{"name":"Media Releases","handle":"mediaReleases","type":"channel","enableVersioning":"1","propagateEntries":true,"sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"media-releases/{slug}","enabledByDefault":"1","template":""}},"entrytypes":[{"sectionHandle":"mediaReleases","hasTitleField":"1","titleLabel":"Title","titleFormat":"","name":"Media Releases","handle":"mediaReleases","fieldLayout":{"Common":["richContent"]},"requiredFields":[]}]},{"name":"Pages","handle":"pages","type":"structure","enableVersioning":"1","propagateEntries":true,"maxLevels":null,"sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"{% if level == 1 %}{slug}{% else %}{parent.slug}/{slug}{% endif %}","enabledByDefault":"1","template":"pages/_entry"}},"entrytypes":[{"sectionHandle":"pages","hasTitleField":"1","titleLabel":"Title","titleFormat":"","name":"Pages","handle":"pages","fieldLayout":{"Page Builder":["pageBuilder"]},"requiredFields":[]}]}]},"elements":{"sections":[{"name":"Media Releases","handle":"mediaReleases","type":"channel","enableVersioning":"1","propagateEntries":true,"sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"media-releases/{slug}","enabledByDefault":"1","template":""}},"entrytypes":[{"sectionHandle":"mediaReleases","hasTitleField":"1","titleLabel":"Title","titleFormat":"","name":"Media Releases","handle":"mediaReleases","fieldLayout":{"Common":["richContent"]},"requiredFields":[]}]},{"name":"Pages","handle":"pages","type":"structure","enableVersioning":"1","propagateEntries":true,"maxLevels":null,"sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"{% if level == 1 %}{slug}{% else %}{parent.slug}/{slug}{% endif %}","enabledByDefault":"1","template":"pages/_entry"}},"entrytypes":[{"sectionHandle":"pages","hasTitleField":"1","titleLabel":"Title","titleFormat":"","name":"Pages","handle":"pages","fieldLayout":{"Page Builder":["pageBuilder"]},"requiredFields":[]}]}]}}}
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
        echo "m200116_234815_migration_section_mediareleases_pages cannot be reverted.\n";
        return false;
    }
}
