<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// Include static template for jm_gallery importer
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', '[yag_importer_jmgallery] YAG jm_gallery Importer');

?>