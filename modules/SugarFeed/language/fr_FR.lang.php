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
    'LBL_ASSIGNED_TO_ID' => 'ID de l\'utilisateur assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ID' => 'Identifiant',
    'LBL_DATE_ENTERED' => 'Date de Création',
    'LBL_DATE_MODIFIED' => 'Date de Modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_SAVING' => 'Sauvegarde...',
    'LBL_SAVED' => 'Sauvegardé',
    'LBL_CREATED_USER' => 'Créé par l&#39;Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par l&#39;Utilisateur',
    'LBL_LIST_FORM_TITLE' => 'Liste des Flux d&#39;activités internes',
    'LBL_MODULE_NAME' => 'Flux d&#39;activités internes',
    'LBL_MODULE_TITLE' => 'Flux d&#39;activités internes',
    'LBL_DASHLET_DISABLED' => 'Attention : Le Flux d&#39;activtés internes est désactivé, aucun nouveau flux ne peut être ajouté tant que celui-ci n&#39;a pas été réactivé',
    'LBL_RECORDS_DELETED' => 'Toutes les entrées du Flux d&#39;activités internes ont été supprimées, si le Flux d&#39;activités interne est activé, de nouvelles entrées seront ajoutées automatiquement.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Etes-vous sur de vouloir supprimer toutes les entrées du Flux d&#39;activités internes ?',
    'LBL_FLUSH_RECORDS' => 'Vider les entrées du Flux d&#39;activités internes',
    'LBL_ENABLE_FEED' => 'Activer les Flux d&#39;activités internes',
    'LBL_ENABLE_MODULE_LIST' => 'Flux d&#39;activités internes pour',
    'LBL_HOMEPAGE_TITLE' => 'Mon Flux d&#39;activités internes',
    'LNK_NEW_RECORD' => 'Créer un Flux d&#39;activités internes',
    'LNK_LIST' => 'Flux d&#39;activités internes',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher dans les Flux d&#39;activés internes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Flux d&#39;activités internes',
    'LBL_ALL' => 'Tous',
    'LBL_USER_FEED' => 'Flux Utilisateur',
    'LBL_ENABLE_USER_FEED' => 'Activer le Flux Utilisateur',
    'LBL_TO' => 'Envoyer à l&#39;équipe',
    'LBL_IS' => 'est',
    'LBL_DONE' => 'Terminé',
    'LBL_TITLE' => 'Titre',
    'LBL_ROWS' => 'Enregistrements',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Dernière Semaine',
    'LBL_TIME_WEEKS' => 'semaines',
    'LBL_TIME_DAY' => 'jour', // PR 6080
    'LBL_TIME_DAYS' => 'jours',
    'LBL_TIME_YESTERDAY' => 'Hier',
    'LBL_TIME_HOURS' => 'Heures',
    'LBL_TIME_HOUR' => 'Heure',
    'LBL_TIME_MINUTES' => 'Minutes',
    'LBL_TIME_MINUTE' => 'Minute',
    'LBL_TIME_SECONDS' => 'Secondes',
    'LBL_TIME_SECOND' => 'Seconde',
    'LBL_TIME_AND' => 'et',
    'LBL_TIME_AGO' => 'plus tôt',
// Activity stream
    'CREATED_CONTACT' => 'a créé un <b>NOUVEAU</b> {0}',
    'CREATED_OPPORTUNITY' => 'a créé un <b>NOUVEAU</b> {0}',
    'CREATED_CASE' => 'a créé un <b>NOUVEAU</b> {0}',
    'CREATED_LEAD' => 'a créé un <b>NOUVEAU</b> {0}',
    'FOR' => 'pour', // Activity stream for cases
    'FOR_AMOUNT' => 'pour le montant de', // Activity stream for opportunity
    'CLOSED_CASE' => 'a <b>CLÔTURÉ</b> un {0} ',
    'CONVERTED_LEAD' => 'a <b>CONVERTI</b> {0}',
    'WON_OPPORTUNITY' => 'a <b>GAGNÉ</b> un {0}',
    'WITH' => 'lié à',

    'LBL_LINK_TYPE_Link' => 'Lien',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Sélectionner',
    'LBL_POST' => 'Poster',
    'LBL_AUTHENTICATE' => 'Authentifier',
    'LBL_AUTHENTICATION_PENDING' => 'Certains des liens externes que vous avez sélectionné n&#39;ont pas été authentifiés. Cliquez sur \'Annuler\' pour revenir à la fenêtre Options afin d&#39;authentifier ces liens externes, ou cliquez sur \'OK\' pour continuer sans authentification.',
    'LBL_ADVANCED_SEARCH' => 'Filtre avancé' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Voir plus d&#39;options',
    'LBL_HIDE_OPTIONS' => 'Masquer options',
    'LBL_VIEW' => 'Voir',
    'LBL_POST_TITLE' => 'Poster les mises à jour de statut pour',
    'LBL_URL_LINK_TITLE' => 'Lien URL à utiliser',
);
