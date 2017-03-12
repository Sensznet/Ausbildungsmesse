<?php


/**
 * Description of Index
 *
 * @author 14senszst1201
 */

require_once 'Login.php';
require_once 'Home.php';
require_once 'Betriebe.php';
require_once 'Impressum.php';
require_once 'Registration.php';
require_once 'Entities/DB.php';
require_once 'Entities/Teilnahme.php';
require_once 'Entities/Betrieb.php';
require_once 'Entities/Ansprechpartner.php';
require_once 'Repositories/BetriebRepository.php';
require_once 'Repositories/AnsprechpartnerRepository.php';
require_once 'Repositories/TeilnahmeRepository.php';

class Index {

    private function checkMethod() {
        $error = [];
        if (isset($_GET['method'])) {
            switch($_GET['method']) {
                case 'login':
                    if(isset($_POST['betriebsID']) && is_numeric($_POST['betriebsID'])) {
                        $login = new Login();
                        $login->anmeldung($_POST['betriebsID']);
                    }
                    break;
                case 'logout':
                    $login = new Login();
                    $login->abmeldung();
                    break;
                case 'registration':
                    $registration = new Registration();
                    $error = $registration->edit();
                    break;
            }
        }
        return $error;
    }

    /**
     * @return string
     */
    public function getView() {
        $error = $this->checkMethod();
        $content = '';
        switch($this->calculateView()) {
            case 'registration':
                $registration = new Registration();
                $registration->getDialog($error);
                break;
			case 'login':
				$login = new Login();
                $login->getDialog();
				break;
			case 'betriebe':
				$betriebe = new betriebe();
				$betriebe->getDialog();
				break;
      case 'impressum':
        $impressum = new Impressum();
        $impressum->getDialog();
        break;
      default:
        $home = new Home();
				$home->getDialog();
				break;
      }
      return $content;
    }

    private function calculateView() {
        $view = 'home';
    		if(isset($_GET['view'])) {
    			switch($_GET['view']) {
    				case 'panel':
    					if(isset($_SESSION['betriebsID']) && is_numeric($_SESSION['betriebsID'])) {
    					   $view = 'registration';
    					} else {
    						$view = 'login';
    					}
    					break;
    				case 'betriebe':
    					$view = 'betriebe';
    					break;
            case 'impressum':
              $view = 'impressum';
              break;
    			}
    		}
        return $view;
    }
}

session_start();
$index = new Index();
echo $index->getView();
