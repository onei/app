<?php
/**
 * AsAble
 *
 * <insert description here>
 *
 * @author Nelson Monterroso <nelson@wikia-inc.com>
 */

namespace FluentSql;

trait AsAble {
	protected $as;

	public function as_($as=null) {
		if ($as !== null) {
			$this->as = $as;
		}

		return $this->as;
	}
}