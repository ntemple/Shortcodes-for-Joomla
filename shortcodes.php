<?php
  /* SVN FILE: $Id: shortcodes.php 437 2012-02-06 19:25:28Z nick@intellispire.com $*/
  /**
  *
  * Copyright (c)2010-2012 Nick Temple, Intellispire
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License
  * as published by the Free Software Foundation; version 2
  * of the License, and no other version.
  *
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  * GNU General Public License for more details.
  *
  * You should have received a copy of the GNU General Public License
  * along with this program; if not, write to the Free Software
  * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
  *
  * @author       Nick Temple <nickt@nicktemple.com>
  * @license      GNU/GPL 2.0 http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
  * @copyright    2012 Intellispire/Nick Temple
  * @version SVN: $Id: shortcodes.php 437 2012-02-06 19:25:28Z nick@intellispire.com $
  *
  */

  defined('_JEXEC') or die('Restricted access');
  define('JOM_SHORTCODES', '2.0.0'); // We exist

  jimport('joomla.plugin.plugin');

  // Be able to escape shortcodes  
  add_shortcode('scescape', 'shortcode_scescape');
  function shortcode_scescape($atts, $content = '') {
    return $content;
  }
  // Load and register shortcodes.
  JPluginHelper::importPlugin( 'shortcode' );


  class plgSystemShortcodes extends JPlugin {

    function onAfterRender()
    {
      $runmode = $this->params->get('runmode');
      if ($runmode != 1) return;

      //    $user =& JFactory::getUser();
      $app = JFactory::getApplication();

      if ($app->isSite()) {
        $page = JResponse::GetBody();
        $page = do_shortcode($page);
        JResponse::SetBody($page);
      }
    }


    function onPrepareContent( &$article, &$params, $limitstart )
    {
      $runmode = $this->params->get('runmode');
      if ($runmode != 0) return;

      $article->text = do_shortcode($article->text);
      return true;
    }

    // For J2.5
    function onContentPrepare( $context, &$article, &$params, $page=0 ){
      return $this->onPrepareContent($article, $params, $page);
    }

  }
?>
#!shortcodes##

