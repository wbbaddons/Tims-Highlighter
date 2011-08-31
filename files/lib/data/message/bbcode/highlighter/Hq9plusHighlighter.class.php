<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/highlighter/Highlighter.class.php');

/**
 * Highlights HQ9+
 *
 * @author	Tim Düsterhus
 * @copyright	2010 - 2011 Tim Düsterhus
 * @package	de.wbb3addons.timwolla.wcf.bbcode.highlighter
 * @license 	Creative Commons BY-NC-SA <http://creativecommons.org/licenses/by-nc-sa/3.0/de/>
 */
class Hq9plusHighlighter extends Highlighter {
	protected $separators = array('H', 'Q', '9', '+');
	protected $quotes = array();
	protected $singleLineComment = array();
	protected $commentStart = array();
	protected $commentEnd = array();
	protected $escapeSequence = array();
	
	protected $keywords1 = array(
		"H"
	);
	protected $keywords2 = array(
		"Q"
	);
	protected $keywords3 = array(
		"9"
	);
	protected $keywords4 = array(
		"+"
	);
	
	protected function highlightNumbers($string) {
		// we don't want to highlight numbers
		return $string;
	}
}
