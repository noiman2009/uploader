<?php
//thanks to me ;)

//msg
$lang['warning_msg'] = "Jene suis pas responsable de ces fichiers. T�l�chargez les � vos risques et p�rils.";
$lang['delete_confirm_msg'] = "S�r de supprimer ce fichier ?";
//upload form
$lang['upload'] = 'Envoyer';
$lang['file'] = 'fichier';
$lang['renameto'] = 'renommer';
$lang['filetypesallowed'] = 'types de fichier autoris�s';
$lang['filesizelimit'] = 'taille limite du fichier';
$lang['filedeleteafter'] = 'les fichiers seront automatiquement supprim�s {D} jours apr�s leur envoi.';
//listing heading
$lang['filename'] = 'nom de fichier';
$lang['date'] = 'date';
$lang['date_format'] = 'd-m-Y H:i';
$lang['type'] = 'type';
$lang['size'] = 'taille';
$lang['delete'] = 'supprimer';
$lang['download'] = 't�l�charger';
$lang['delete_link'] = 'Supprimer';
$lang['download_link'] = 'T�l�charger directement';
$lang['nofiles'] = 'le r�pertoire est vide...';
$lang['dir'] = 'r�pertoire';
$lang['make'] = 'Cr�er';


//logging
$lang['DELETE'] = 'DUPPRIMER';
$lang['UPLOAD'] = 'ENVOYER';
$lang['DOWNLOAD'] = 'TELECHARGER';
//delete error
$lang['delete_error_notfound'] = "Erreur : fichier introuvable.";
$lang['delete_error_cant'] = "Ereur : le fichier ne peut pas �tre suprrim�.";
$lang['delete_error_cant_dir'] = "Erreur :le r�pertoire n'est pas vide.";
//upload error
$lang['upload_error'] = array(1 => "Le fichier envoy� d�passe la directive upload_max_filesize de php.ini",
							  2 => "Le fichier envoy� d�passe la directive MAX_FILE_SIZE sp�cifi� dans le formulaire HTML.",
						 	  3 => "Le fichier n'a �t� que partiellement envoy�.",
						 	  4 => "Aucun fichier envoy�.",
						 	  6 => "Il manque le r�pertoire temporaire.");

						 	  
$lang['upload_error_sizelimit'] = "La taille du fichier d�passe la limite.";
$lang['upload_error_fileexist'] = "existe d�j� dans le r�pertoire.";
$lang['upload_error_nocopy'] = "Incapable de copier le fichier dans le r�pertoire.";
$lang['upload_error_sid'] = "Incapable de trouver le fichier sp�cifi�.";
$lang['upload_error_badext'] = "Type de fichier non autoris� !";
$lang['make_error_exist'] = "Ce r�pertoire existe d�j� !";
$lang['make_error_cant'] = "Incapable de cr�er un nouveau r�pertoire.";
$lang['make_error_maxdepth']= "Vous ne pouvez plus cr�er un nouveau r�pertoire � cette profondeur.";
?>