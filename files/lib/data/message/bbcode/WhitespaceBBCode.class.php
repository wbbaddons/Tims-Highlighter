<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/BBCodeParser.class.php');
require_once(WCF_DIR.'lib/data/message/bbcode/CodeHighlightingBBCode.class.php');

/**
 * Trimming is evil!
 *
 * @author	Tim Düsterhus
 * @copyright	2010 - 2011 Tim Düsterhus
 * @package	timwolla.wcf.bbcode.highlighter
 * @license 	Creative Commons BY-NC-SA <http://creativecommons.org/licenses/by-nc-sa/3.0/de/>
 */
class WhitespaceBBCode extends CodeHighlightingBBCode {
	/**
	 * @see BBCode::getParsedTag()
	 */
	public function getParsedTag($openingTag, $content, $closingTag, BBCodeParser $parser) {
		$content = 'noTrim'.$content.'noTrim';

		return StringUtil::replace(array('<pre>noTrim', 'noTrim</pre>'), array('<pre>', '</pre>'), parent::getParsedTag($openingTag, $content, $closingTag, $parser));
	}
}
?>