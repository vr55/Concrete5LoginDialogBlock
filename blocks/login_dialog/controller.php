<?php
namespace Concrete\Package\LoginDialog\Block\LoginDialog;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Authentication\AuthenticationType;
use User;
use Authentication;
use Loader;
use View;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{

    protected $btTable          = 'btLoginDialog';
    protected $btDescription    = "Add a jQuery login dialog to your page.";
    protected $btName           = "User Login Dialog";

    public function getBlockTypeName()
    {
        return t( $this->btName );
    }
 
    public function getBlockTypeDescription()
    {
        return t( $this->btDescription );
    }
    
	public function view()
	{	        
		$user = new User();
		$this->set( "user", $user );
        $this->set( 'loginAction', View::url( '/login', 'authenticate', 'concrete' ) );
       
	}

    public function save( $args ) 
    {       
        parent::save($args);
    } 
 	

    public function add()
    {
        $this->set( 'DialogTitle', 'Dialog' );
        $this->set( 'LoginButtonText', 'Login' );
        $this->set( 'RegisterButtonText', 'Register' );

    }
 
}

