<?php
namespace app\forms;

use std, gui, framework, app;


class helloworld extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('testpage');

        
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->shutdown();

        
    }

    /**
     * @event link.action 
     */
    function doLinkAction(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		browse('https://github.com/ll1ness/puzzle-source');

        
    }

    /**
     * @event link3.action 
     */
    function doLink3Action(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		browse('https://github.com/ll1ness/puzzle-source/wiki');

        
    }

}
