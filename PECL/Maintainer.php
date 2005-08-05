<?php
/**
 * PECL specific Maintainer extensions
 *
 * PHP versions 5
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Tools and Utilities
 * @package    CodeGen
 * @author     Hartmut Holzgraefe <hartmut@php.net>
 * @copyright  2005 Hartmut Holzgraefe
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id$
 * @link       http://pear.php.net/package/CodeGen
 */

/**
 * includes
 */
require_once "CodeGen/Maintainer.php";


/**
 * PECL specific Maintainer extensions
 *
 * @category   Tools and Utilities
 * @package    CodeGen
 * @author     Hartmut Holzgraefe <hartmut@php.net>
 * @copyright  2005 Hartmut Holzgraefe
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/CodeGen
 */
class CodeGen_PECL_Maintainer 
    extends CodeGen_Maintainer
{
     /**
      * Generate a phpinfo line for this author
      *
      * @access public
      * @return string phpinfo() line
      */
     function phpinfoCode()
     {
         return "  php_printf(\"<p>{$this->name} &lt;{$this->email}&gt; ({$this->role})</p>\\n\");\n";
     }

     

     /**
      * Generate a package.xml <maintainer> entry for this author
      *
      * @access public
      * @return string phpinfo() line
      */
     function packageXml()
     {
         $code = "    <maintainer>\n";
         $code.= "      <user>{$this->user}</user>\n";
         $code.= "      <name>{$this->name}</name>\n";
         $code.= "      <email>{$this->email}</email>\n";
         $code.= "      <role>{$this->role}</role>\n";
         $code.= "    </maintainer>\n";
         
         return $code;
     }
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * indent-tabs-mode:nil
 * End:
 */

?>