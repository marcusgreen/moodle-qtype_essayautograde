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
 * Strings for component 'qtype_essayautograde', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage essayautograde
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Essay (auto-grade)';
$string['pluginname_help'] = 'In response to a question that may include an image, the respondent writes an answer of one or more paragraphs. Initially, a grade is awarded automatically based on the number of chars, words, sentences or paragarphs, and the presence of certain target phrases. The automatic grade may be overridden later by the teacher.';
$string['pluginname_link'] = 'question/type/essayautograde';
$string['pluginnameadding'] = 'Adding an Essay (auto-grade) question';
$string['pluginnameediting'] = 'Editing an Essay (auto-grade) question';
$string['pluginnamesummary'] = 'Allows an essay of several sentences or paragraphs to be submitted as a question response. The essay is graded automatically. The grade may be overridden later.';

$string['addanotherband'] = 'Add another grade band';
$string['addanotherphrase'] = 'Add another target phrase';
$string['addmorebands'] = 'Add {$a} more grade bands';
$string['addmorephrases'] = 'Add {$a} more target phrase';
$string['addpartialgrades_help'] = 'If this option is enabled, grades will be added for partially completed grade bands.';
$string['addpartialgrades'] = 'Award partial grades?';
$string['autograding'] = 'Auto-grading';
$string['bandcount'] = 'For';
$string['bandpercent'] = 'or more items, award';
$string['chars'] = 'Characters';
$string['charspersentence'] = 'Characters per sentence';
$string['correctresponse'] = 'To get full marks for this question, you must satisfy the following criteria:';
$string['enableautograde_help'] = 'Enable, or disable, automatic grading';
$string['enableautograde'] = 'Enable automatic grading';
$string['explanationcompleteband'] = '{$a->percent}% for completing Grade band [{$a->gradeband}]';
$string['explanationseecomment'] = '(see comment below)';
$string['explanationdatetime'] = 'on %Y %b %d (%a) at %H:%M';
$string['explanationfirstitems'] = '{$a->percent}% for the first {$a->count} {$a->itemtype}';
$string['explanationgrade'] = 'Therefore, the computer-generated grade for this essay was set to {$a->finalgrade} = ({$a->finalpercent}% of {$a->maxgrade}).';
$string['explanationitems'] = '{$a->percent}% for {$a->count} {$a->itemtype}';
$string['explanationmaxgrade'] = 'The maximum grade for this question is {$a->maxgrade}.';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype} is less than the minimum amount required to be given a grade.';
$string['explanationoverride'] = 'Later, {$a->datetime}, the grade for this essay was manually set to {$a->manualgrade}.';
$string['explanationpartialband'] = '{$a->percent}% for partially completing Grade band [{$a->gradeband}]';
$string['explanationpenalty'] = 'However, {$a->penaltytext} was deducted for checking the response before submission.';
$string['explanationrawpercent'] = 'The raw percentage grade for this essay is {$a->rawpercent}% <br /> = ({$a->details}).';
$string['explanationautopercent'] = 'This is outside the normal percentage range, so it was adjusted to {$a->autopercent}%.';
$string['explanationremainingitems'] = '{$a->percent}% for the remaining {$a->count} {$a->itemtype}';
$string['explanationtargetphrase'] = '{$a->percent}% for including the phrase "{$a->phrase}"';
$string['fogindex_help'] = 'The Gunning fog index is a measure of readability. It is calculated using the following formula.

* ((words per sentence) + (long words per sentence)) x 0.4

For more information see: <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['fogindex'] = 'Fog index';
$string['gradeband_help'] = 'Specify the minimum number of countable items for this band to be applied, and the grade that is to be awarded if this band is applied.';
$string['gradeband'] = 'Grade band [{no}]';
$string['gradebands'] = 'Grade bands';
$string['gradecalculation'] = 'Grade calculation';
$string['itemcount_help'] = 'The minimum number of countable items that must be in the essay text in order to achieve the maximum grade for this question.

Note, that this value may be rendered ineffective by the grade bands, if any, defined below.';
$string['itemcount'] = 'Expected number of items';
$string['itemtype_help'] = 'Select the type of items in the essay text that will contribute to the auto-grade.';
$string['itemtype'] = 'Type of countable items';
$string['lexicaldensity_help'] = 'The lexical density is a percentage calculated using the following formula.

* 100 x (number of unique words) / (total number of words)

Thus, an essay in which many words are repeated has a low lexical density, while a essay with many unique words has a high lexical density.';
$string['lexicaldensity'] = 'Lexical density';
$string['longwords_help'] = '"Long words" are words that have three or more syllables. Note that the algorithm for determining the number of syllables is very simple and yields only approximate results.';
$string['longwords'] = 'Long words';
$string['longwordspersentence'] = 'Long words per sentence';
$string['paragraphs'] = 'Paragraphs';
$string['percentofquestiongrade'] = '{$a}% of the question grade.';
$string['phrasematch'] = 'If';
$string['phrasepercent'] = 'is used, award';
$string['pleaseenterananswer'] = 'Please enter your response in the text box.';
$string['sentences'] = 'Sentences';
$string['sentencesperparagraph'] = 'Sentences per paragraph';
$string['showcalculation_help'] = 'If this option is enabled, an explanation of the calculation of the automatically generated grade will be shown on the grading and review pages.';
$string['showcalculation'] = 'Show grade calculation?';
$string['showgradebands_help'] = 'If this option is enabled, details of the grade bands will be shown on the grading and review pages.';
$string['showgradebands'] = 'Show grade bands?';
$string['showtargetphrases_help'] = 'If this option is enabled, details of the target phrases will be shown on the grading and review pages.';
$string['showtargetphrases'] = 'Show target phrases?';
$string['showtextstats_help'] = 'If this option is enabled, statistics about the text will be shown.';
$string['showtextstats'] = 'Show text statistics?';
$string['showtoteachersonly'] = 'Yes, show to teachers only';
$string['showtoteachersandstudents'] = 'Yes, show to teachers and students';
$string['targetphrase_help'] = 'Specify the grade that will be added if this target phrase appears in the essay.

> **e.g.** If [Finally] is used, award [10% of the question grade.]

The target phrase can be a single phrase or a list phrases separated by either a comma "," or the word "OR" (upper case).

> **e.g.** If [Finally OR Lastly] is used, award [10% of the question grade.]

A question mark "?" in a phrase matches any single character, while an asterisk "*" matches an arbitrary number of chars (including zero chars).

> **e.g.** If [First\*Then\*Finally] is used, award [50% of the question grade.]';
$string['targetphrase'] = 'Target phrase [{no}]';
$string['targetphrases'] = 'Target phrases';
$string['textstatistics'] = 'Text statistics';
$string['textstatitems_help'] = 'Select any items here that you wish to appear in the text statistics that are show on grading and review pages.';
$string['textstatitems'] = 'Statistical items';
$string['uniquewords'] = 'Unique words';
$string['words'] = 'Words';
$string['wordspersentence'] = 'Words per sentence';
