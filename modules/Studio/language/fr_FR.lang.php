<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page',
    'LBL_EDIT_FIELDS' => 'Modifier les champs personnalisés',
    'LBL_SELECT_FILE' => 'Sélectionner un fichier',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Boîte à outils',
    'LBL_SUITE_FIELDS_STAGE' => 'Champs SuiteCRM (cliquer sur les éléments à ajouter dans la zone de dépôt)',
    'LBL_VIEW_SUITE_FIELDS' => 'Voir les champs SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Echec de la sauvegarde',
    'LBL_CONFIRM_UNSAVE' => 'Toutes les modifications seront perdues. Etes-vous sûr(e) de vouloir continuer ?',
    'LBL_PUBLISHING' => 'Publication...',
    'LBL_PUBLISHED' => 'Publié',
    'LBL_FAILED_PUBLISHED' => 'Echec de publication',
    'LBL_DROP_HERE' => '[Glisser ici]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nom',
    'LBL_LABEL' => 'Libellé',
    'LBL_MASS_UPDATE' => 'Mise à jour de Masse',
    'LBL_DEFAULT_VALUE' => 'Valeur par défaut',
    'LBL_REQUIRED' => 'Obligatoire',
    'LBL_DATA_TYPE' => 'Type',


    'LBL_HISTORY' => 'Historique',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Bienvenue au Studio!</h2><br> Que souhaitez-vous faire ?<br><b> Merci de choisir une option ci-dessous.</b>',
    'LBL_SW_EDIT_MODULE' => 'Modifier un module',
    'LBL_SW_EDIT_DROPDOWNS' => 'Modifier les listes déroulantes',
    'LBL_SW_EDIT_TABS' => 'Configurer les onglets',
    'LBL_SW_RENAME_TABS' => 'Renommer les onglets',
    'LBL_SW_EDIT_GROUPTABS' => 'Configurer les Groupes d&#39;onglets',
    'LBL_SW_EDIT_PORTAL' => 'Editer le Portail',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Réparer les champs personnalisés',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrer les champs personnalisés',

//Manager Backups History
    'LBL_MB_DELETE' => 'Supprimer',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Créer une liste déroulante',
    'LBL_DROPDOWN_NAME' => 'Nom de la liste déroulante :',
    'LBL_DROPDOWN_LANGUAGE' => 'Langue de la liste déroulante :',
    'LBL_TABGROUP_LANGUAGE' => 'Langue :',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Valeur à afficher',
    'LBL_DD_DATABASEVALUE' => 'Valeur dans la base de données',
    'LBL_DD_ALL' => 'Tout',

//BUTTONS
    'LBL_BTN_SAVE' => 'Sauvegarder',
    'LBL_BTN_CANCEL' => 'Annuler',
    'LBL_BTN_SAVEPUBLISH' => 'Sauvegarder et publier',
    'LBL_BTN_HISTORY' => 'Historique',
    'LBL_BTN_ADDROWS' => 'Ajouter des lignes',
    'LBL_BTN_UNDO' => 'Annuler',
    'LBL_BTN_REDO' => 'Rétablir',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Nouveau champ personnalisé',
    'LBL_BTN_TABINDEX' => 'Modifier l’ordre des onglets',

//TABS
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_NAME' => 'Administration',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configurer les filtres du menu du module',
    'LBL_GROUP_TAB_WELCOME' => 'Les filtres ci-dessous seront affichés dans la liste Plus du menu du module que les utilisateurs pourront utiliser pour afficher des groupes de modules dans le menu. Faites glisser et déposez les modules vers et depuis les filtres. Remarque : les filtres vides ne seront pas affichés dans le menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Cliquez sur le nom de n\'importe quel onglet dans le tableau ci-dessous pour le renommer.',
    'LBL_DELETE_MODULE' => 'Supprimer&nbsp;le&nbsp;Module<br />depuis&nbsp;filtre',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Pour modifier la langue des libellés des Groupes d\'onglets, choisissez une langue puis cliquez sur "Sauvegarder et déployer".',
    'LBL_ADD_GROUP' => 'Ajouter un filtre',
    'LBL_NEW_GROUP' => 'Nouveau groupe',
    'LBL_RENAME_TABS' => 'Renommer les Onglets',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Erreur : valeur non valide : [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Sauvegarder' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Annuler' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Rétablir' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Edition à la volée' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Ajouter un champ' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximiser' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimiser' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Mettre en ligne' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Ajouter des lignes' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Ajouter un champ' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Modifier' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Sélectionnez la langue à modifier.',
    'LBL_SINGULAR' => 'Nom au singulier',
    'LBL_PLURAL' => 'Nom au pluriel',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Cliquer sur <b>Sauvegarder</b> pour enregistrer les modifications.'

);
