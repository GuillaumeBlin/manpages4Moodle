<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
 
/**
 * Manpages local plugin. 
 * Adds support for man pages.
 *
 * @package   local_manpages
 * @copyright 2016 Universite de Bordeaux
 * @author    Guillaume Blin <guillaume.blin@labri.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();
 
$plugin->version   = 2016030700;
$plugin->requires  = 2011070100; //requires Moodle 2.1+
$plugin->component = 'local_manpages';
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = '1.0';

