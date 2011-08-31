<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/highlighter/Highlighter.class.php');

/**
 * Highlights diffs
 *
 * @author	Tim Düsterhus
 * @copyright	2010 - 2011 Tim Düsterhus
 * @package	de.wbb3addons.timwolla.wcf.bbcode.highlighter
 * @license 	Creative Commons BY-NC-SA <http://creativecommons.org/licenses/by-nc-sa/3.0/de/>
 */
class DiffHighlighter extends Highlighter {
	// keywords for an added line, the + is used in unified diff, the > in normal diff
	protected $add = array("+", ">");
	// keywords for an deleted line, the - is used in unified diff, the < in normal diff
	protected $delete = array("-", "<");
	// the "splitter" in changes for normal diff
	protected $splitter = array("---");
	// keywords for the line info, the @ is used in unified diff, the numbers in normal diff
	protected $info = array("@", '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

	/**
	 * Overwrite method, cause we don't need that overhead
	 *
	 * @see Highlighter::highlight();
	 */
	public function highlight($data) {
		$lines = explode("\n", $data);
		foreach ($lines as $key => $val) {
			if (in_array(StringUtil::substring($val, 0,1), $this->info) || in_array($val, $this->splitter)) {
				$lines[$key] = '<span style="'.$this->style['keywords3'].'">'.StringUtil::encodeHTML($val).'</span>';
			}
			else if (in_array(StringUtil::substring($val, 0,1), $this->add)) {
				$lines[$key] = '<span style="'.$this->style['comments'].'">'.StringUtil::encodeHTML($val).'</span>';
			}
			else if (in_array(StringUtil::substring($val, 0,1), $this->delete)) {
				$lines[$key] = '<span style="'.$this->style['keywords5'].'">'.StringUtil::encodeHTML($val).'</span>';
			}
			else {
				$lines[$key] = StringUtil::encodeHTML($val);
			}
		}

		$data = implode("\n", $lines);
		return $data;
	}
}
