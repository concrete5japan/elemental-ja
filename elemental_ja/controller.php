<?php 
namespace Concrete\Package\ElementalJa;

use \Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

    protected $pkgHandle = 'elemental_ja';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '2.0';
	protected $pkgAllowsFullContentSwap = true;

    public function getPackageDescription()
    {
        return t("elemental 日本語サンプル付きテーマ");
    }

    public function getPackageName()
    {
        return t("elemental テーマ日本語サンプル版");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('theme_elemental_ja', $pkg);
    }


}