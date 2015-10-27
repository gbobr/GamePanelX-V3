<?php
/*
 * GamePanelX
 * 
 * Spanish Language file
 * Written by Marco Lerma
 * 
 * To translate to another language, copy this to a new PHP file named "yourlanguage.php", and translate all the english words on the right (to the right of the = sign).
 * Try and keep the structure of the file the same, and make sure you close all '';
 * 
*/
$lang = array();

########################################################################

// Common Words/Phrases
$lang['yes']                = 'Si';
$lang['no']                 = 'No';
$lang['active']             = 'Activo';
$lang['inactive']           = 'Inactivo';
$lang['setup']              = 'Configurar';
$lang['settings']           = 'Ajustes';
$lang['language']           = 'Lenguaje';
$lang['default_language']   = 'Lenguaje por defecto';
$lang['email_address']      = 'Direcci�n email';
$lang['company']            = 'Compa��a';
$lang['theme']              = 'Tema';
$lang['save']               = 'Salvar';
$lang['game']               = 'Juego';
$lang['voice']              = 'Voz';
$lang['desc']               = 'Descripci�n';
$lang['status']             = 'Estado';
$lang['manage']             = 'Gestiona';
$lang['info']               = 'Info';
$lang['owner']              = 'Propietario';
$lang['date_added']         = 'Fecha adici�n';
$lang['last_updated']       = '�ltima subida';
$lang['default']            = 'Por defecto';
$lang['delete']             = 'Borrar';
$lang['create']             = 'Crear';
$lang['add']                = 'A�adir';
$lang['edit']               = 'Editar';
$lang['failed']             = 'Fall�';
$lang['name']               = 'Nombre';
$lang['first_name']         = 'Nombre';
$lang['last_name']          = 'Apellido';
$lang['type']               = 'Tipo';
$lang['none']               = 'Nada';
$lang['optional']           = 'Opcional';
$lang['complete']           = 'Completo';
$lang['go_back']            = 'Volver';
$lang['saved']              = 'Salvado';

// Tech Words
$lang['server']             = 'Servidor';
$lang['username']           = 'Nombre usuario';
$lang['password']           = 'Contrase�a';
$lang['newpassword']        = 'Nueva Contrase�a';
$lang['newpassword_conf']   = '<b>Nueva Contrase�a</b> (confirmar)';
$lang['chpassword']         = 'Cambiar Contrase�a';
$lang['cur_password']       = 'Contrase�a Actual';
$lang['network']            = 'Network';
$lang['online']             = 'Conectado';
$lang['offline']            = 'Desconectado';
$lang['connect']            = 'Connect';
$lang['startup']            = 'Inicio';
$lang['files']              = 'Ficheros';
$lang['command']            = 'Comando';
$lang['local_dir']          = 'Directorio Local';
$lang['working_dir']        = 'Directorio de Trabajo';
$lang['pid_file']           = 'Fichero PID';
$lang['ip']                 = 'Direcci�n IP';
$lang['ips']                = 'Direcciones IP';
$lang['port']               = 'Puerto';
$lang['login']              = 'Conectar';
$lang['logout']             = 'Desconectar';
$lang['logged_out']         = 'Desconectado con �xito';
$lang['install']            = 'Instalar';
$lang['reinstall']          = 'Reinstalar';
$lang['installing']         = 'Instalando';
$lang['not_installed']      = 'No Instalado';

$lang['unknown']            = 'Desconocido';
$lang['click_here']         = 'Pulsa Aqu�';
$lang['documentation']      = 'Documentaci�n GamePanelX';
$lang['update_cmd']         = 'Actualizar CMD';
$lang['banned_start']       = 'Valores de Inicio Prohibidos';
$lang['banned_start_desc']  = '<b>Nota:</b> Pon todos los caracteres que no quieres que los clientes puedan cambiar en el apartado de "valor" en su editor personal.';
$lang['plugin']             = 'Plugin';
$lang['plugins']            = 'Plugins';
$lang['del_install']        = 'Por favor elimina el directorio "install" antes de continuar!';
$lang['version']            = 'Versi�n';
$lang['system_update']      = 'Una actualizaci�n del sistema est� disponible!';
$lang['invalid_login']      = 'Acceso incorrecto!  Por favor int�ntelo de nuevo.';
$lang['permissions']        = 'Permisos';

// Error messages
$lang['err_query']          = 'Fallo en consulta de Base de Datos';
$lang['err_sql_update']     = 'Fallo al actualizar la Base de Datos';

// Left Panel
$lang['home']               = 'Inicio';
$lang['setup']              = 'Configurar';
$lang['settings']           = 'Ajustes';
$lang['game_setups']        = 'Configuraci�n de Juegos';
$lang['cloud_games']        = 'Juegos Cloud';
$lang['server_templates']   = 'Plantillas de Servidor';
$lang['template']           = 'Plantilla';
$lang['templates']          = 'Plantillas';
$lang['servers']            = 'Servidores';
$lang['all_servers']        = 'Todos los Servidores';
$lang['game_servers']       = 'Servidores de Juego';
$lang['voice_servers']      = 'Servidores de Voz';
$lang['create_server']      = 'Crear un Servidor';
$lang['accounts']           = 'Cuentas';
$lang['admins']             = 'Administradores';
$lang['resellers']          = 'Revendedores';
$lang['list_users']         = 'Listar Usuarios';
$lang['add_user']           = 'A�adir Usuario';
$lang['list_admins']        = 'Listar Admins';
$lang['add_admin']          = 'A�adir Admin';
$lang['list_resellers']     = 'Listar Revendedores';
$lang['add_reseller']       = 'A�adir Revendedor';
$lang['welcome_msg']        = 'Bienvenido a GamePanelX';
$lang['int_name']           = 'Nombre Interno';
$lang['int_name_desc']      = 'El nombre interno debe contener s�lo letras, n�meros y guiones bajos, por ejemplo "red_1"';
$lang['query_engine']       = 'Motor de Consulta';
$lang['create_network']     = 'Crear Servidor de Red';

// Templates
$lang['delete_tp']          = 'Borrar esta plantilla';
$lang['create_tp']          = 'Crear Plantilla';
$lang['file_path']          = 'Ruta de Archivos';
$lang['browse']             = 'Buscar';

// Network
$lang['network_server']     = 'Servidor de Red';
$lang['os']                 = 'Sistema Operativo';
$lang['location']           = 'Localizaci�n';
$lang['datacenter']         = 'Centro de Datos';
$lang['local']              = 'Local';
$lang['local_server']       = 'Servidor Local';
$lang['remote_server']      = 'Servidor Remoto';
$lang['no_enc_key']         = 'No se encontr� clave encriptada!  Comprueba "/configuration.php".';
$lang['login_user']         = 'Usuario';
$lang['login_pass']         = 'Contrase�a';
$lang['login_port']         = 'Puerto de acceso';
$lang['login_homedir']      = 'Directorio Principal';
$lang['net_showing_ips']    = 'Mostrando Direcciones IP en Servidor de Red';
$lang['srv_using_net']      = 'Hay servidores usando este Servidor de Red! Borre los servidores primero y pruebe nuevamente.';
$lang['add_ip']             = 'A�adir Direcci�n IP';
$lang['new_ip']             = 'Nueva Direcci�n IP';
$lang['ip_exists']          = 'Perd�n, esta Direcci�n IP ya existe!';
$lang['ip_port_used']       = 'Perd�n, esta combinaci�n de IP/Puerto ya est� en uso!';
$lang['srv_using_ip']       = 'Hay servidores de juegos usando esta direcci�n IP! Borre los servidores primero y pruebe nuevamente.';
$lang['invalid_ip']         = 'Direcci�n IP Inv�lida!  Por favor, compruebe e int�ntelo otra vez.';

// Servers
$lang['create_sv']          = 'Crear Servidor';
$lang['invalid_port']       = 'Puerto inv�lido!  Por favor int�ntelo de nuevo.';
$lang['invalid_intname']    = 'Nombre Interno inv�lido! S�lamente letras, n�meros, - y _ son aceptados. Por favor int�ntelo de nuevo.';
$lang['item']               = 'Art�culo';
$lang['value']              = 'Valor';
$lang['user_editable']      = 'Editor de Usuario';
$lang['restart']            = 'Reiniciar';
$lang['stop']               = 'Detener';
$lang['update']             = 'Actualizar';
$lang['map']                = 'Mapa';
$lang['hostname']           = 'Nombre servidor';
$lang['players']            = 'Jugadores';
$lang['show_options']       = 'Mostrar todas las opciones';
$lang['simple']             = 'Sencillo';
$lang['advanced']           = 'Avanzado';

// Cloud
$lang['cloud_avail']        = 'Juegos Disponibles v�a <i>gpx cloud</i>';
$lang['cloud_topmsg']       = 'A medida que m�s juegos se a�aden a la Nube de GamePanelX, ellos estar�n disponibles aqu�.';

// Games
$lang['games_add_desc']     = 'Usa este formulario para a�adir nuevo soporte de juegos. Entonces podr�s proceder con la creaci�n de una plantilla para este juego.';
$lang['games_up_icon']      = '<b>Nota:</b> Sube tu icono PNG de 64x64';
$lang['note_steam_auto']    = '<b>Nota:</b> Para juegos Steam, deja la Ruta de Fichero vac�a para usar el auto-instalador de Steam';

// File Manager
$lang['new_filename']       = 'Nuevo Nombre de Fichero';
$lang['new_dirname']        = 'Nuevo Nombre de Directorio';

// User perms
$lang['access_ftp']         = 'Acceso FTP';
$lang['update_usr_det']     = 'Actualizar Detalles de Usuario';
$lang['user_exists']        = 'Perd�n, ese usuario ya existe!';

// Home Page hints
$lang['def_adm_step']       = 'Paso';
$lang['def_adm_tip_docs']   = 'Por favor, mira la documentaci�n completa';
$lang['def_adm_tip_accts']  = 'Nada encontrado! Debes crear una cuenta de usuario para crear servidores.';
$lang['def_adm_tip_net']    = 'No se encontr� Servidores de Red! Debes crear uno ahora.';
$lang['def_adm_tip_tpl']    = 'No se encontr� plantillas completadas! Para crear servidores, debe escoger un juego y';
$lang['def_adm_tip_srv1']   = 'Ya est�s preparado para crear un servidor!';
$lang['def_adm_tip_srv2']   = 'Complete los pasos anteriores para crear un servidor de juegos/voz.';

// Other
$lang['api_key']            = 'API Key';

##############################################################################################################

// 3.0.8
$lang['install_mirrors']    = 'Instalar Espejos';
$lang['game_panel']         = 'Panel de Control de Juego';
$lang['show_console_out']   = 'Pulsa para mostrar la consola de salida';
$lang['config_file']        = 'Config File';
$lang['modified']           = 'Modificado';
$lang['accessed']           = 'Accedido';
$lang['size']               = 'Tama�o';
$lang['maxplayers']         = 'Max Players';
$lang['hostname']           = 'Hostname';

?>
