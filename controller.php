<?php 
namespace Concrete\Package\LoginDialog;

use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;
use Concrete\Core\Support\Facade\Database;

defined('C5_EXECUTE') or die("Access Denied.");
 

class Controller extends Package
{
	protected $pkgHandle 			= 'login_dialog';
	protected $appVersionRequired 	= '5.7.5';
	protected $pkgVersion 			= '0.9.8';
	 
	public function getPackageDescription()
	{
	    return t( "Add jQuery login dialog to your page" );
	}
	 
	public function getPackageName()
	{
		return t( "Login Dialog" );
	}

	public function install() 
	{	

		$pkg 	= parent::install();
	    $bt 	= BlockType::getByHandle( 'login_dialog' );

		if ( !is_object( $bt ) ) 
		{
	    	$bt = BlockType::installBlockType( 'login_dialog', $pkg );
	    } 
	}
	
	public function uninstall()
	{
		parent::uninstall();
		$db = Database::connection();
		$db->executeQuery( 'DROP TABLE IF EXISTS btLoginDialog' );
	}
}



?>