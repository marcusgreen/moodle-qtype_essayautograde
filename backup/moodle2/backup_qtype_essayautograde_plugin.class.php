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
 * @package    moodlecore
 * @subpackage backup-moodle2
 * @copyright  2010 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Provides the information to backup essayautograde questions
 *
 * @copyright  2010 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class backup_qtype_essayautograde_plugin extends backup_qtype_plugin {

    /**
     * Returns the qtype information to attach to question element
     */
    protected function define_question_plugin_structure() {

        // Define the virtual plugin element with the condition to fulfill.
        $plugin = $this->get_plugin_element(null, '../../qtype', 'essayautograde');

        // Create one standard named plugin element (the visible container).
        $pluginwrapper = new backup_nested_element($this->get_recommended_name());

        // Connect the visible container ASAP.
        $plugin->add_child($pluginwrapper);

        // This qtype uses standard question_answers, add them here
        // to the tree before any other information that will use them.
        $this->add_question_question_answers($pluginwrapper);



        // Now create the qtype own structures.
        $fields = array('responseformat', 'responserequired', 'responsefieldlines',
                        'attachments', 'attachmentsrequired',
                        'graderinfo', 'graderinfoformat',
                        'responsetemplate', 'responsetemplateformat',
                        'enableautograde', 'itemtype', 'itemcount',
                        'showcalculation', 'showtextstats', 'textstatitems',
                        'showgradebands', 'addpartialgrades', 'showtargetphrases',
                        'correctfeedback', 'correctfeedbackformat',
                        'incorrectfeedback', 'incorrectfeedbackformat',
                        'partiallycorrectfeedback', 'partiallycorrectfeedbackformat');
        $essayautograde = new backup_nested_element('essayautograde', array('id'), $fields);

        // Now the own qtype tree.
        $pluginwrapper->add_child($essayautograde);

        // Set source to populate the data.
        $params = array('questionid' => backup::VAR_PARENTID);
        $essayautograde->set_source_table('qtype_essayautograde_options', $params);

        // Don't need to annotate ids nor files.

        return $plugin;
    }

    /**
     * Returns one array with filearea => mappingname elements for the qtype
     *
     * Used by {@link get_components_and_fileareas} to know about all the qtype
     * files to be processed both in backup and restore.
     */
    public static function get_qtype_fileareas() {
        return array('graderinfo'        => 'question_created',
                     'responsetemplate'  => 'question_created',
                     'correctfeedback'   => 'question_created',
                     'incorrectfeedback' => 'question_created',
                     'partiallycorrectfeedback' => 'question_created');
    }
}
