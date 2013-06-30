<?php
/* 
  w2box: web 2.0 File Repository v4.0 Beta5
  
  (c) 2005-2007, Cl�ment Beffa
  http://labs.beffa.org/w2box/
 
  TRADUSIDO PARA O PORTUGU�S BRASIL POR �DER F�BIO
  MSN: konago_nippon@hotmail.com
  Websites: 
  http://www.geralgames.com.br
  http://www.forum-playstation.com
  

  Licence:
  w2box is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0
  http://creativecommons.org/licenses/by-nc-sa/3.0/
 
  You are free:
    * to Share � to copy, distribute and transmit the work
    * to Remix � to adapt the work

  Under the following conditions:
    * Attribution. You must attribute the work in the manner specified by the author or
      licensor (but not in any way that suggests that they endorse you or your use of the work).
    * Noncommercial. You may not use this work for commercial purposes.
    * Share Alike. If you alter, transform, or build upon this work, you may distribute
      the resulting work only under the same or similar license to this one.

  For any reuse or distribution, you must make clear to others the license terms of this work.
  Any of the above conditions can be waived if you get permission from the copyright holder.
  Nothing in this license impairs or restricts the author's moral rights.
*/
$lang['warning_msg'] = "N�o nos responsabilizamos pelo upload e download dos arquivos.";
$lang['delete_confirm_msg'] = "Voc� realmente deseja deletar este arquivo?";
//upload form
$lang['upload'] = 'Enviar';
$lang['file'] = 'arquivo';
$lang['renameto'] = 'renomear';
$lang['filetypesallowed'] = 'extens�es permitidas';
$lang['filesizelimit'] = 'limite de tamanho m�ximo do arquivo para envio';
$lang['filedeleteafter'] = 'Os arquivos ser�o elimidados em {D} depois de serem enviados';
$lang['filename'] = 'nome do arquivo';
$lang['date'] = 'Data e Hora';
$lang['date_format'] = 'd-m-Y H:i';
$lang['type'] = 'tipo';
$lang['size'] = 'tamanho';
$lang['delete'] = 'eliminar';
$lang['download'] = 'baixar';
$lang['delete_link'] = 'Eliminar';
$lang['download_link'] = 'baixar agora!';
$lang['nofiles'] = 'Est� pasta est� vazia';
$lang['dir'] = 'diret�rio';
$lang['make'] = 'Criar';

//logging
$lang['DELETE'] = 'ELIMINAR';
$lang['UPLOAD'] = 'ENVIAR';
$lang['DOWNLOAD'] = 'Baixar';
//delete error
$lang['delete_error_notfound'] = "Erro: Arquivo n�o encontrado.";
$lang['delete_error_cant'] = "Erro: Voc� n�o pode deletar este arquivo.";
$lang['delete_error_cant_dir'] = "Erro: A pasta n�o est� vazia, voc� dever� deletar todos os arquivos antes de deletar a pasta.";
//upload error
$lang['upload_error'] = array(1 => "O arquivo que voc� est� tentando enviar excede o tamanho m�ximo permitido de upload_max_filesize no php.ini",
	2 => "O arquivo enviado excedeu o tamanho m�ximo permitido de MAX_FILE_SIZE especificado no formul�rio HTML.",
	3 => "O arquivo foi enviado com sucesso.",
	4 => "N�o foi poss�vel enviar o arquivo.",
	6 => "Falta uma pasta tempor�ria.");

                               
$lang['upload_error_sizelimit'] = "O tamanho do arquivo � maior que o tamanho permitido";
$lang['upload_error_fileexist'] = "este arquivo j� est� na pasta.";
$lang['upload_error_nocopy'] = "N�o foi poss�vel enviar o arquivo para a pasta.";
$lang['upload_error_sid'] = "Este arquivo n�o existe.";
$lang['make_error_exist'] = "Este diret�rio j� existe!";
$lang['make_error_cant'] = "Voc� n�o pode criar pastas!.";
$lang['make_error_maxdepth']= "O n�mero de subcategorias foi ultrapassado.";
?>
