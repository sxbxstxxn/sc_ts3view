<?php
namespace Sc\Ts3view\Controller;
//require_once(PATH_site . 'typo3conf/ext/ts3view/Libraries/TeamSpeak3/TeamSpeak3.php');//OK
//use \TeamSpeak3;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Sebastian Christoph <mail@sebastian-christoph.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * RealmController
 */
class Ts3viewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action show
     *
     * @return void
     */
    public function showAction()
    {
        //var_dump($this->settings['server']);die;                    
        //$this->view->assign('server', $this->settings['server']);
        //include_once(PATH_site . 'typo3conf/ext/ts3view/Libraries/TeamSpeak3/TeamSpeak3.php');//OK
        $server = $this->settings['server'];
      
        try {
          $ts3_VirtualServer = TeamSpeak3::factory("serverquery://".$server["ts_query_admin"].":".$server["ts_query_password"]."@".$server["tsip"].":".$server["ts_query_port"]."/?server_port=".$server["tsport"]."&nickname=".$server["ts_query_user_nick"]."");
        //$resulthtml = $ts3_VirtualServer->getViewer(new TeamSpeak3_Viewer_Html("images/viewericons/", "images/countryflags/", "data:image"));
        }
      catch (Exception $e) {
        echo $e;die;
      }
        var_dump($server);die;
        $this->view->assign('resulthtml', $resulthtml);
    }    
}