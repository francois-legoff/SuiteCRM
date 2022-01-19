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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'enregistrement(s) non importés en raison d&#39;une erreur',
    'LBL_UPDATE_SUCCESSFULLY' => 'enregistrement(s) mis à jour avec succès',
    'LBL_SUCCESSFULLY_IMPORTED' => 'enregistrement(s) créé(s) avec succès',
    'LBL_STEP_4_TITLE' => 'Etape {0} : Import du fichier',
    'LBL_STEP_5_TITLE' => 'Etape {0} : Visualisation des résultats',
    'LBL_CUSTOM_ENCLOSURE' => 'Caractère de protection :',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Impossible de publier ce mapping. Un autre mapping publié existe déja avec ce nom.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Impossible de dépublier un mapping appartenant à un autre utilisateur. Vous possédez un mapping avec le même nom.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Les imports ne peuvent pas être mis en place pour ce type de module',
    'LBL_IMPORT_TYPE' => 'Que souhaitez vous faire avec les données importées ?',
    'LBL_IMPORT_BUTTON' => 'Créer des enregistrements',
    'LBL_UPDATE_BUTTON' => 'Créer et mettre à jour des enregistrements (ID obligatoire)',
    'LBL_CREATE_BUTTON_HELP' => 'Utiliser cette option pour créer de nouveaux enregistrements. Remarque : Les lignes dans le fichier importé qui contiennent des valeurs qui correspondent à des ID existants ne seront pas importées si le champ ID de votre fichier est mappé sur le champ ID de SuiteCRM.',
    'LBL_UPDATE_BUTTON_HELP' => 'Utiliser cette option pour mettre à jour des enregistrements existants. La correspondance entre les données dans le fichier d&#39;import et les données existantes sera réalisée sur le champ ID de SuiteCRM.',
    'LBL_ERROR_INVALID_BOOL' => 'Valeur invalide (doit être 1 ou 0)',
    'LBL_IMPORT_ERROR' => 'Erreurs survenues lors de l&#39;import',
    'LBL_ERROR' => 'Erreur',
    'LBL_FIELD_NAME' => 'Nom du champ',
    'LBL_VALUE' => 'Valeur',
    'LBL_NONE' => 'Aucun',
    'LBL_REQUIRED_VALUE' => 'Valeur obligatoire manquante',
    'LBL_ERROR_SYNC_USERS' => 'Valeur invalide pour synchroniser vers Outlook',
    'LBL_ID_EXISTS_ALREADY' => 'Cet ID existe déjà dans la base de données',
    'LBL_ASSIGNED_USER' => 'Si l&#39;utilisateur n&#39;existe pas, utiliser l&#39;utilisateur courant',
    'LBL_ERROR_DELETING_RECORD' => 'Erreur lors de la suppression des enregistrements :',
    'LBL_ERROR_INVALID_ID' => 'Le champ ID fourni est trop long (la longeur maximale est de 36 caractères)',
    'LBL_ERROR_INVALID_PHONE' => 'Numéro de téléphone invalide',
    'LBL_ERROR_INVALID_NAME' => 'La chaîne est trop longue',
    'LBL_ERROR_INVALID_VARCHAR' => 'La chaîne est trop longue',
    'LBL_ERROR_INVALID_DATE' => 'Date est invalide',
    'LBL_ERROR_INVALID_DATETIME' => 'Datetime invalide',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Datetime invalide',
    'LBL_ERROR_INVALID_TIME' => 'Temps invalide',
    'LBL_ERROR_INVALID_INT' => 'Entier invalide',
    'LBL_ERROR_INVALID_NUM' => 'Numérique invalide',
    'LBL_ERROR_INVALID_EMAIL' => 'Adresse E-mail invalide',
    'LBL_ERROR_INVALID_USER' => 'Nom ou ID utilisateur invalide',
    'LBL_ERROR_INVALID_TEAM' => 'Nom ou ID equipe invalide',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nom ou ID compte invalide',
    'LBL_ERROR_INVALID_RELATE' => 'Champ relatif invalide',
    'LBL_ERROR_INVALID_CURRENCY' => 'Montant ou Devise invalide',
    'LBL_ERROR_INVALID_FLOAT' => 'Séparateur décimal invalide',
    'LBL_ERROR_NOT_IN_ENUM' => 'Clé absente dans la liste. Les valeurs possibles sont : ',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Le fichier n&#39;a pas été envoyé correctement, veuillez réessayer et vérifiez bien que la variable "upload_max_filesize" du fichier php.ini est supérieure à la taille de votre fichier',
    'LBL_MODULE_NAME' => 'Import -',
    'LBL_TRY_AGAIN' => 'Nouvel import',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Le fichier importé contient {0} lignes. Le nombre optimum de lignes est {1}. Plus de lignes peut ralentir le process d&#39;import. Cliquer sur OK pour continuer cet import. Cliquer Annuler pour revoir le fichier et réimporter un fichier à importer.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Vous ne pouvez pas importer des utilisateurs de type administrateur',
    'ERR_MULTIPLE' => 'Plusieurs colonnes ont étés définies avec le même nom de champ en sortie.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) manquant :',
    'ERR_SELECT_FILE' => 'Vous devez sélectionner un fichier à importer.',
    'LBL_SELECT_FILE' => 'Sélectionnez un fichier :',
    'LBL_EXTERNAL_SOURCE' => 'une application externe ou un service',
    'LBL_CUSTOM_DELIMITER' => 'Délimiteur :',
    'LBL_DONT_MAP' => '-- Ne pas importer --',
    'LBL_STEP_MODULE' => 'Dans quel module souhaitez vous importer des données ?',
    'LBL_STEP_1_TITLE' => 'Etape 1: Sélection de la source de données',
    'LBL_CONFIRM_TITLE' => 'Etape {0} : Confirmer les paramètres d&#39;import de fichier',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Les mappings personnalisés pour Microsoft Outlook repose sur un format de fichier avec séparateur virgule (.csv). Si votre fichier d&#39;import est délimité par des tabulations, le mapping ne sera pas appliqué correctement.',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'Mapping Privé - Cliquez ici pour le rendre public',
    'LBL_DELETE' => 'Supprimer',
    'LBL_PUBLISHED_SOURCES' => 'Mapping(s) public(s):',
    'LBL_UNPUBLISH' => 'Mapping Public - Cliquez ici pour le rendre privé',
    'LBL_NEXT' => 'Suivant >',
    'LBL_BACK' => '< Retour',
    'LBL_STEP_2_TITLE' => 'Etape 2 : Upload du fichier à importer',
    'LBL_HAS_HEADER' => 'Lligne d&#39;en-tête :',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notes :',
    'LBL_STEP_3_TITLE' => 'Etape 3 : Mapping des champs et import',
    'LBL_STEP_DUP_TITLE' => 'Etape {0} : Vérification des doublons potentiels',
    'LBL_DATABASE_FIELD' => 'Champ du module',
    'LBL_HEADER_ROW' => 'Ligne d&#39;en-tête',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Cocher si la première ligne du fichier est une ligne d&#39;entête contenant les noms des champs.',
    'LBL_ROW' => 'Ligne',
    'LBL_CONTACTS_NOTE_1' => 'Le champ "Nom" ou le champ "Prénom" doivent être mappés.',
    'LBL_CONTACTS_NOTE_2' => 'Si le champ "Nom" est mappé, les champs "Nom" et "Prénom" seront ignorés.',
    'LBL_CONTACTS_NOTE_3' => 'Si le champ "Nom" est mappé, les informations du champ "Nom" seront réparties dans les champs "Nom" et "Prénom" lors de l&#39;insertion dans la base.',
    'LBL_CONTACTS_NOTE_4' => 'Les champs "Rue 1" à "Rue 3" seront concaténés lors de l&#39;insertion dans la base de données.',
    'LBL_ACCOUNTS_NOTE_1' => 'Pour les champs liés à des liste déroulantes simples, vous devez importer une clé de la liste et non pas un libellé.',
    'LBL_IMPORT_NOW' => 'Importer Maintenant',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Impossible d&#39;ouvrir le fichier importé en lecture.',
    'LBL_NO_LINES' => 'Aucune ligne dans votre fichier d\'import',
    'LBL_SUCCESS' => 'Succès :',
    'LBL_LAST_IMPORT_UNDONE' => 'Votre dernier import a été annulé.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Il n&#39;y a pas d&#39;import à annuler.',
    'LBL_CREATED_TAB' => 'Enregistrements créés',
    'LBL_DUPLICATE_TAB' => 'Doublons',
    'LBL_ERROR_TAB' => 'Erreurs',
    'LBL_IMPORT_MORE' => 'Nouvel import',
    'LBL_FINISHED' => 'Retouner au listing des',
    'LBL_UNDO_LAST_IMPORT' => 'Annuler le dernier import',
    'LBL_DUPLICATES' => 'doublon(s) trouvé(s)',
    'LNK_DUPLICATE_LIST' => 'Télécharger la liste des doublons',
    'LNK_ERROR_LIST' => 'Cliquez ici pour télécharger la liste des erreurs',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Cliquez ici pour télécharger les enregistrements que vous n&#39;avez pas pu importer.',
    'LBL_INDEX_USED' => 'Clé(s) utilisée(s)',
    'LBL_INDEX_NOT_USED' => 'Clé(s) non utilisée(s)',
    'LBL_IMPORT_FIELDDEF_ID' => 'Numéro ID unique',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nom ou ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Numéro de téléphone',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Nom ou ID Equipe',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Texte',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Texte',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Texte',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Heure',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Date',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nom ou ID Utilisateur',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; ou &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Liste déroulante',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Adresse électronique',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérique (Pas Décimal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérique (Pas Décimal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérique (Pas Décimal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérique (Décimal possible)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérique (Décimal possible)',
    'LBL_DATE_FORMAT' => 'Format de la date :',
    'LBL_TIME_FORMAT' => 'Format Heure :',
    'LBL_TIMEZONE' => 'Fuseau horaire :',
    'LBL_ADD_ROW' => 'Ajouter un Champ',
    'LBL_REMOVE_ROW' => 'Supprimer ce Champ',
    'LBL_DEFAULT_VALUE' => 'Valeur par défaut',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Voir les options avancées',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Masquer les options avancées',
    'LBL_SHOW_NOTES' => 'Voir les Notes',
    'LBL_HIDE_NOTES' => 'Masquer les Notes',
    'LBL_SAVE_MAPPING_AS' => 'Sauvegarder le mapping sous',
    'LBL_IMPORT_COMPLETE' => 'Import terminé',
    'LBL_IMPORT_COMPLETED' => 'Import terminé',
    'LBL_IMPORT_RECORDS' => 'Import des enregistrements',
    'LBL_IMPORT_RECORDS_OF' => 'sur',
    'LBL_IMPORT_RECORDS_TO' => 'à',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_CURRENCY_SIG_DIGITS' => 'Nom de chiffre significatif pour les devises',
    'LBL_NUMBER_GROUPING_SEP' => 'Séparateur des milliers :',
    'LBL_DECIMAL_SEP' => 'Symbole décimal :',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format d&#39;affichage du nom',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemple',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Salutation, "f" Prénom, "l" Nom</i>',
    'LBL_CHARSET' => 'Encodage du fichier',
    'LBL_MY_SAVED_HELP' => 'Un mapping sauvegardé représente une combinaison entre une jeu de donné source et certains champs de la base de donné défini dans un import précédent.<br>Cliquer sur <b>Publier</b> pour faire un mapping disponible pour les autres utilisateurs.<br>Cliquer sur <b>De-Publier</b> pour enlever l&#39;accès à votre mapping aux autres utilisateurs.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Utiliser cette option pour appliquer vos paramètres pré-définis d&#39;import, incluant les propriétés d&#39;import, les mappings, et toute vérification de doublons, à cet import.<br><br>Cliquez <b>Publier</b> pour rendre le mapping disponible aux autres utilisateurs.<br>Cliquez <b>Dé-publier</b> pour rendre le mapping indisponible aux autres utilisateurs.<br>Cliquez <b>Supprimer</b> pour supprimer le mapping pour tous les utilisateurs.',
    'LBL_ENCLOSURE_HELP' => '<p>Les <b>caractères de protection</b> sont utiliés pour encadrer les champs texte, incluant les caractères utilisés comme délimiteur.<br><br>Exemple: si le délimiteur est une virgule(,) et le caratère de protection est le guillement double ("),<br><br><b>"Cupertino, California"</b> sera importé dans un champ de l&#39;application comme <b>Cupertino, California</b>.<br>Si il n&#39;y a pas de caractère de protection ou si celui-ci est un autre caractère,<br><b>"Cupertino, California"</b> sera importé dans deux champs contenant l&#39;un <b>"Cupertino</b> et l&#39;autre <b>California"</b>.<br><br>Pour information : Le fichier à import peut ne pas contenir de caractère de protection.<br>Le caractère de protection par défaut pour un fichier créé par Excel et dont le délimiteur est la virgule ou la tabulaion est le guillement double.</p>',
    'LBL_DATABASE_FIELD_HELP' => 'Sélectionnez un champs parmi les champs existants (et importables) de ce module.',
    'LBL_HEADER_ROW_HELP' => 'Libellés des champs de la ligne d&#39;en-tête du fichier à importer.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indiquez une valeur à utiliser dans le champs lors de la création ou de la mise à jour de l&#39;enregistrement si le champs dans le fichier d&#39;import ne contient pas de donnée.',
    'LBL_ROW_HELP' => 'Données de la permière ligne après la ligne d&#39;en-têtes.',
    'LBL_SAVE_MAPPING_HELP' => 'Saisissez une valeur pour nommer le groupe de champs de la base de données utilisé dans le mapping avec les champs présent dans le fichier d&#39;import.<br>Le groupe de champs, incluant l&#39;ordre des champs ainsi que les données source sélectionnées dans l&#39;étape d&#39;import 1, sera sauvé à la fin de la procédure d&#39;import.<br>Ce mapping ainsi sauvegardée pourra être ainsi utilisé dans l&#39;étape 1 pour d&#39;autres imports.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Lors de la transmission de votre fichier, certaines propriétés ont été automatiquement détectées. Visualisez et gérez ces propriétés selon ce qui vous paraît approprié. Remarque : Les paramètres spécifiés ici sont valables uniquement pour l&#39;import en cours et ne mettront pas à jour vos paramètres d&#39;utilisateur.',
    'LBL_IMPORT_STARTED' => 'Début de l&#39;import à',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Vous ne pouvez pas mettre à jour cet enregistrement',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Etes-vous sûr de vouloir supprimer ce mapping ?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si le fichier d&#39;import a été exporté depuis une de ces sources veuillez la sélectionner.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Sélectionner la source afin d&#39;appliquer automatiquement des mappings personnalisés qui simplifieront le process de mapping (étape suivante).',
    'LBL_EXAMPLE_FILE' => 'Télécharger le modèle de fichier d&#39;import',
    'LBL_CONFIRM_IMPORT' => 'Vous avez sélectionné la mise à jour des données durant le process d import. Les mises à jour faites sur des enregistrements existants ne pourront pas être annulées. Cependant, les enregistrements créés durant ce process d import pourront être annulés (effacés), si vous le souhaitez. Cliquez Annuler si vous souhaitez seulement créer de nouveaux enregistrements ou cliquez sur OK pour continuer.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Attention : Vous avez déjà sélectionné un mapping personnalisé pour cet import, voulez vous continuer ?',
    'LBL_SAMPLE_URL_HELP' => 'Télécharger un exemple de fichier d&#39;import contenant une ligne d&#39;entête des champs du module. Ce fichier peut être utilisé comme modèle pour créer votre fichier d&#39;import contenant les données que vous souhaitez importer.',
    'LBL_AUTO_DETECT_ERROR' => 'Le délimiteur de champ n&#39;a pas pu être détecté dans le fichier à importer. Veuillez vérifier les paramètres dans les propriétés d&#39;import.',
    'LBL_MIME_TYPE_ERROR_1' => 'Le fichier transmis ne semble pas contenir un délimiteur de champ. Veuillez vérifier le type du fichier. Nous recommandons un fichier type CSV délimité par des points-virgules ou virgules.',
    'LBL_MIME_TYPE_ERROR_2' => 'Pour continuer à importer le fichier transmis, cliquer sur OK. Pour transmettre un nouveau fichier, cliquer sur Ré-essayer',
    'LBL_FIELD_DELIMETED_HELP' => 'Le délimiteur de champ est le caractère utilisé pour séparer les colonnes.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Transmettez un fichier contenant des données séparées par un délimiteur, comme des fichiers délimités type CSV séparés par des points-virgules, des virgules ou des tabulations.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Le répertoire de stockage temporaire des fichiers pour l&#39;import n&#39;est pas accéssible en écriture.',
    'LBL_ADD_FIELD_HELP' => 'Utiliser cette option pour définir une valeur pour tous les enregistrements créés ou mis à jour. Choisir le champ puis saisir ou sélectionner une valeur dans la colonne valeur par défaut.',
    'LBL_MISSING_HEADER_ROW' => 'Aucune ligne d&#39;entête trouvée',
    'LBL_CANCEL' => 'Annuler',
    'LBL_SELECT_DS_INSTRUCTION' => 'Prêt à importer ? Choisissez la source de données que vous voulez importer.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Choisissez un fichier sur votre ordinateur qui contient les données que vous souhaitez importer, ou téléchargez le modèle pour avoir un bon départ dans la création de votre fichier à importer.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Voici comment les premières lignes apparaissent avec les propriétés de fichier auto détectées. Si une ligne d entête a été détectée, elle est affichée en première ligne du tableau. Regardez les propriétés d import de fichier pour réaliser des modifications sur les propriétés auto-détectées et enregistrer d autres propriétés. Mettre à jour les propriétés mettra à jour les données qui apparaissent dans le tableau.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Le tableau ci-dessous contient tous les champs du module qui peuvent être mappés avec les données du fichier importé. Si le fichier contient une ligne d entête, les colonnes dans le fichier ont été automatiquement mappées avec les champs correspondant. Vérifiez les mappings pour être sûr qu ils sont ce à quoi vous vous attendez, et réalisez les modifications si nécessaire. Pour vous aider dans cette tâche Ligne1 affiche les données du fichier. Faites bien attention à mapper tous les champs obligatoire (identifiés par un astérisque).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Pour éviter de créer des doublons, sélectionnez un des champs du mapping pour réaliser le dédoublonnage lors de l import des données. Les valeurs existantes pour les champs sélectionnés seront confrontées aux données du fichier importé. Si des correspondances sont trouvées, les lignes du fichier d import contenant les données en cause seront affichées avec les résultats de l import (page suivante). Vous pourrez alors choisir quelles lignes vous souhaitez tout de même importer.',
    'LBL_DUP_HELP' => 'Voici les lignes du fichier importé qui n&#39;ont pas été importées parce qu&#39;elles contiennent des enregistrements qui correspondent à des données existantes dans votre SuiteCRM au regard de la vérification de doublons. Les données qui correspondantes ont été mises en avant. Pour réimporter ces lignes, téléchargez le fichier, réalisez les changements nécessaires et cliquez sur <b>Nouvel Import</b>.',
    'LBL_SUMMARY' => 'Résumé',
    'LBL_OK' => 'Ok',
    'LBL_ERROR_HELP' => 'Voici les lignes du fichier importé qui n&#39;ont pas été importées pour cause d&#39;erreurs. Pour réimporter ces lignes, téléchargez le fichier, réalisez les changements nécessaires et cliquez sur <b>Nouvel Import</b>',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Pour assigner les nouveaux enregistrement à un utilisateur différent de vous même, utilisez la colonne valeur par défaut pour sélectionner un autre utilisateur',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Pour assigner les enregistrements à des équipes autres que votre(vos) équipe(s) par défaut, utilisez la colonne valeur par défaut pour définir d&#39;autre(s) équipe(s).',
);

global $timedate;
