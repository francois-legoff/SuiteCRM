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
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'LBL_ACCOUNT_ID' => 'Compte (ID) :',
    'LBL_CASE_ID' => 'Ticket (ID) :',
    'LBL_CLOSE' => 'Clos :',
    'LBL_CONTACT_ID' => 'Contact (ID) :',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notes',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_EMAIL_ADDRESS' => 'Adresse électronique :',
    'LBL_EMAIL_ATTACHMENT' => 'Pièces jointes',
    'LBL_FILE_MIME_TYPE' => 'Type Mime ',
    'LBL_FILE_URL' => 'URL Fichier',
    'LBL_FILENAME' => 'Pièce jointe :',
    'LBL_LEAD_ID' => 'Prospect (ID) :',
    'LBL_LIST_CONTACT_NAME' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
    'LBL_LIST_FILENAME' => 'Pièce jointe',
    'LBL_LIST_FORM_TITLE' => 'Listing des Notes',
    'LBL_LIST_RELATED_TO' => 'Relatif à',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_MODULE_NAME' => 'Notes',
    'LBL_MODULE_TITLE' => 'Notes',
    'LBL_NEW_FORM_TITLE' => 'Créer une note ou une pièce jointe',
    'LBL_NOTE_STATUS' => 'Notes',
    'LBL_NOTE_SUBJECT' => 'Sujet :',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Pièce(s) jointe(s)',
    'LBL_NOTE' => 'Remarque :',
    'LBL_OPPORTUNITY_ID' => 'Affaire (ID) :',
    'LBL_PARENT_ID' => 'Parent (ID) :',
    'LBL_PARENT_TYPE' => 'Type Parentée',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_PORTAL_FLAG' => 'Afficher dans le Portail?',
    'LBL_EMBED_FLAG' => 'Joindre à l\'E-mail ?',
    'LBL_PRODUCT_ID' => 'Produit ID :',
    'LBL_QUOTE_ID' => 'Devis (ID) :',
    'LBL_RELATED_TO' => 'Relatif à :',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Note',
    'LBL_STATUS' => 'Statut',
    'LBL_SUBJECT' => 'Sujet :',
    'LNK_IMPORT_NOTES' => 'Importation de notes',
    'LNK_NEW_NOTE' => 'Créer une note ou une pièce jointe',
    'LNK_NOTE_LIST' => 'Notes',
    'LBL_MEMBER_OF' => 'Membre de :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribué',
    'LBL_REMOVING_ATTACHMENT' => 'Suppression de la pièce jointe...',
    'ERR_REMOVING_ATTACHMENT' => 'Echec lors de la suppression de la pièce jointe...',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_SEND_ANYWAYS' => 'Le sujet de votre e-mail est vide. Enregistrer/envoyer tout de même ?',
    'LBL_NOTE_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mes notes',
    'LBL_EDITLAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Prénom',
    'LBL_LAST_NAME' => 'Nom de Famille',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_DELETED' => 'Supprimé',
    'LBL_FILE_CONTENTS' => 'Contenu du fichier',
);
