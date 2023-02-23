<?php

define('PLUGIN_WORKORDERPRINT_VERSION','1.0.0');
if(!defined("PLUGIN_WORKORDERPRINT_DIR")){
    define("PLUGIN_WORKORDERPRINT_DIR", GLPI_ROOT . "/plugins/workorderprint");
}


/**
* inicializando los plugins que necesitra el plugin
*
* @return void
*/

/**

class PluginWorkOrderPrintConfig extends WorkOrderPrint {
    static protected $notable = true;
    static function getMenuName(){
        return __('Orden de trabajo');
    }

    static function showForTicket(){
        global $CFG_GLPI, $DB;
        $id = $_REQUEST['id'];
        $ticketOpen = new WorkOrderPrint();
        $ticketOpen->printWoTicketOpen($id, 2);
    }
	

    function getTabNameForItem(CommonGLPI $item, $withtemplate = 0){
        if($item->getType() == 'Ticket'
            && $_SESSION['glpiactiveprofile']['interface'] == 'central'){
            return __('Imprimir Reporte', 'workorderprint');
        }		
        return '';
    }
	
    static function displayTabContentForItem(CommonGLPI $item, $tabnum = 0, $withtemplate = 0){
        if($item->getType() == 'Ticket'){
            self::showForTicket($item,);
        }
        return true;
    }
}   **/


function plugin_init_workorderprint(){
	global $PLUGIN_HOOKS, $LANG;
	//REQUERIDO
	$PLUGIN_HOOKS['menu_entry']['workorderprint'] = true;
    $PLUGIN_HOOKS['csrf_compliant']['workorderprint'] = true;
/**
$PLUGIN::registerClass('PluginWorkOrderPrintConfig', 
                           ['addtabon' => ['Ticket']]);

 $PLUGIN_HOOKS["menu_toadd"]['workorderprint'] = array('plugins' => 'PluginWorkOrderPrintConfig');
    $PLUGIN_HOOKS['config_page']['workorderprint'] = 'front/config.form.php';
    $PLUGIN_HOOKS['add_javascript']['workorderprint'] = 'assets/js/jquery.min.js';
    $PLUGIN_HOOKS['add_javascript']['workorderprint'] = 'assets/js/jquery.maskedinput.js';
    $PLUGIN_HOOKS['add_javascript']['workorderprint'] = 'assets/js/functions.js';
    $PLUGIN_HOOKS['add_css']['workorderprint']        = 'assets/css/style.css';

**/
}
function plugin_version_workorderprint() {
   global $DB, $LANG;
   return array(
      'name'             =>__('Work Order Print','workorderprint'),
      'version'          => PLUGIN_WORKORDERPRINT_VERSION,
      'author'           => 'ANGEL MARTINEZ',
      'license'          => 'GLPv3',
      'homepage'         => 'http://perdu.com',
      'minGlpiVersion'   => '9.5.7'
   );
}
function plugin_workorderprint_check_config($verbose = false) {

   if($verbose):
        echo 'Installed / not configured';
    else:
        return true;
    endif;     
       
}
