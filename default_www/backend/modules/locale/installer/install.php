<?php

class LocaleInstall extends ModuleInstaller
{
	public function __construct(SpoonDatabase $db, array $languages)
	{
		// set database instance
		$this->db = $db;

		// load install.sql
		$this->importSQL(PATH_WWW .'/backend/modules/locale/installer/install.sql');

		// add 'locale' as a module
		$this->addModule('locale', 'The module to manage your website/cms locale.');

		// general settings
		$this->setSetting('locale', 'languages', array('de', 'en', 'es', 'fr', 'nl'));
		$this->setSetting('locale', 'requires_akismet', false);
		$this->setSetting('locale', 'requires_google_maps', false);

		// module rights
		$this->setModuleRights(1, 'locale');

		// action rights
		$this->setActionRights(1, 'locale', 'add');
		$this->setActionRights(1, 'locale', 'analyse');
		$this->setActionRights(1, 'locale', 'edit');
		$this->setActionRights(1, 'locale', 'index');
		$this->setActionRights(1, 'locale', 'mass_action');
	}
}

?>