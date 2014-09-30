<?php
/**
 * Milkyway Multimedia
 * utilities.php
 *
 * @package relatewell.org.au
 * @author Mellisa Hankins <mell@milkywaymultimedia.com.au>
 */

namespace Milkyway\SS\GridFieldUtils;


class Utilities {
    public static function include_requirements() {
        \Requirements::css(SS_GRIDFIELD_UTILITIES . '/css/mwm.gridfield.utils.css');
        \Requirements::javascript(SS_GRIDFIELD_UTILITIES . '/javascript/mwm.gridfield.utils.js');
    }
} 