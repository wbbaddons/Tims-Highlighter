<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/highlighter/Highlighter.class.php');

/**
 * Highlights brainfuck sourcecode
 *
 * @author	Tim Düsterhus
 * @copyright	2010 Tim Düsterhus
 * @package	timwolla.wcf.bbcode.highlighter
 * @license 	Creative Commons BY-NC-SA <http://creativecommons.org/licenses/by-nc-sa/3.0/de/>
 */
class BrainfuckHighlighter extends Highlighter {
	// highlighter syntax
	protected $quotes = array();
	protected $separators = array("[", "]", "+", "-", ".", ",");
	protected $singleLineComment = array();
	protected $commentStart = array();
	protected $commentEnd = array();
	protected $operators = array(">", "<");

	protected $keywords1 = array(
		"+",
		"-"
	);
	protected $keywords2 = array(
		".",
		","
	);
	protected $keywords3 = array(
		"[",
		"]"
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
		// everything except the known chars is a comment
		$string = preg_replace('~([^'.preg_quote(implode('', $this->separators), '~').']+)~', "<span style=\"".$this->style['comments']."\">\\1</span>", $string);
		return parent::highlight($string);
	}
}
