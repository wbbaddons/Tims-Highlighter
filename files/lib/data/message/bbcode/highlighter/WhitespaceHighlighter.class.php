<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/highlighter/Highlighter.class.php');

/**
 * Highlights whitespace
 *
 * @author	Tim Düsterhus
 * @copyright	2010 - 2011 Tim Düsterhus
 * @package	timwolla.wcf.bbcode.highlighter
 * @license 	Creative Commons BY-NC-SA <http://creativecommons.org/licenses/by-nc-sa/3.0/de/>
 */
class WhitespaceHighlighter extends Highlighter {
	protected $style = array(
		'quotes' => "color:red",
		'comments' => "color:green",
		'operators' => "color:green",
		'keywords1' => "background-color:blue",
		'keywords2' => "background-color:darkred",
		'keywords3' => "color:darkviolet",
		'keywords4' => "color:darkgoldenrod",
		'keywords5' => "color:crimson",
		'numbers' => "color:darkorange"
	);
	protected $quotes = array();
	protected $singleLineComment = array();
	protected $commentStart = array();
	protected $commentEnd = array();
	protected $escapeSequence = array();
	
	protected $keywords1 = array(
		" "
	);
	protected $keywords2 = array(
		"	"
	);
	
	protected function highlightNumbers($string) {
		// we don't want to highlight numbers
		return $string;
	}
}
