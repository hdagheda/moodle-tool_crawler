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
 * url class
 * defines the model for a url record, for CRUD operations on the url table
 *
 * @package    tool_crawler
 * @author     Kristian Ringer <kristianringer@catalyst-au.net>
 * @copyright  2020 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_crawler\local;

defined('MOODLE_INTERNAL') || die();

/**
 * url class.
 *
 * @package    tool_crawler
 * @author     Kristian Ringer <kristianringer@catalyst-au.net>
 * @copyright  2020 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class url extends \core\persistent {
    /** Table name for the persistent. */
    const TABLE = 'tool_crawler_url';
    /**
     * Return the definition of the properties of this model.
     *
     * @return array
     */
    protected static function define_properties() {
        return array(
            'url' => array(
                'type' => PARAM_TEXT,
            ),
            'externalurl' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'lastcrawled' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'needscrawl' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'httpcode' => array(
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED,
            ),
            'mimetype' => array(
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED,
            ),
            'title' => array(
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED,
            ),
            'downloadduration' => array(
                'type' => PARAM_FLOAT,
                'null' => NULL_ALLOWED,
            ),
            'filesize' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'filesizestatus' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'redirect' => array(
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED,
                'default' => null,
            ),
            'courseid' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'contextid' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
            ),
            'cmid' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
                'default' => null,
            ),
            'ignoreduserid' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
                'default' => null,
            ),
            'ignoredtime' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
                'default' => null,
            ),
            'httpmsg' => array(
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED,
            ),
            'errormsg' => array(
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED,
                'default' => null,
            ),
            'priority' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
                'default' => '0',
            ),
            'urllevel' => array(
                'type' => PARAM_INT,
                'null' => NULL_ALLOWED,
                'default' => '2',
            ),
        );
    }
}
