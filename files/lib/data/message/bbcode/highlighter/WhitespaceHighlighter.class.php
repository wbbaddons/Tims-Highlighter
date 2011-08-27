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
		'comments' => "color:green",
		'keywords1' => "background-color:blue",
		'keywords2' => "background-color:darkred",
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
	
	protected function encodeHTML($string) {
		// please don't encode our comments :(
		return $string;
	}
	
	public function highlight($string) {
		// remove the noTrim bit
		$string = StringUtil::substring($string, 6, -6);
		
		// everything except the known chars is a comment
		$string = preg_replace('~([^	 ]+)~', "<spanstyle=\"".$this->style['comments']."\">\\1</span>", $string);
		
		// spanstyle -> span style
		// The space would have been highlighted otherwise
		return StringUtil::replace('<spanstyle', '<span style', parent::highlight($string));
	}
}
