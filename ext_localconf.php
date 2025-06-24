<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Typo3extension',
        'Typo3extensin',
        [
            \Typo3\Typo3extension\Controller\Typo3extensionController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Typo3\Typo3extension\Controller\Typo3extensionController::class => 'create, update, delete'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.ext-typo3extension {
                header = Typo3 Extension
                after = common
                elements {
                    typo3extensin {
                        iconIdentifier = typo3extension-plugin-typo3extensin
                        title = LLL:EXT:typo3extension/Resources/Private/Language/locallang_db.xlf:tx_typo3extension_typo3extensin.name
                        description = LLL:EXT:typo3extension/Resources/Private/Language/locallang_db.xlf:tx_typo3extension_typo3extensin.description
                        tt_content_defValues {
                            CType = typo3extension_typo3extensin
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
