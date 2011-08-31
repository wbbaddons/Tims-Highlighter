<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/highlighter/Highlighter.class.php');

/**
 * Highlights lolcode sourcecode
 *
 * @author	Tim Düsterhus
 * @copyright	2010 Tim Düsterhus
 * @package	de.wbb3addons.timwolla.wcf.bbcode.highlighter
 * @license 	Creative Commons BY-NC-SA <http://creativecommons.org/licenses/by-nc-sa/3.0/de/>
 */
class LolcodeHighlighter extends Highlighter {
	// highlighter syntax
	protected $quotes = array("\"");
	protected $separators = array(" ");
	protected $singleLineComment = array("BTW");
	protected $commentStart = array("OBTW");
	protected $commentEnd = array("TLDR");
	protected $operators = array("SUM OF", "DIFF OF", "PRODUKT OF", "QUOSHUNT OF", "MOD OF", "BIGGR OF", "SMALLR OF", "BOTH OF", "WON OF", "EITHER OF", "NOT", "BOTH SAEM", "DIFFRINT", " AN");
	
	protected $keywords1 = array(
		"HAI",
		"KTHXBAI",
		"CAN HAZ",
		"MUST HAZ",
		"?"
	);
	
	protected $keywords2 = array(
		"VISIBLE",
		"INVISIBLE",
		"I HAZ A",
		"IZ",
		"ITZ",
		"R",
		"UPPIN",
		"NERFIN",
		"GIMMEH"
	);
	
	protected $keywords3 = array(
		"IM IN",
		"IM OUTTA",
		"WILE",
		"TIL",
		"O RLY?",
		"YA RLY!",
		"NO WAI",
		"OIC",
		"MEBBE",
		"WTF?",
		"OMG",
		"HOW DUZ I",
		"IF U SAY SO",
		"YR"
	);
	
	protected $keywords4 = array(
		"WIN",
		"FAIL"
	);

}
