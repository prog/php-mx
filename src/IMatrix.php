<?php

namespace com\peterbodnar\mx;



/**
 * Matrix Interface
 */
interface IMatrix {


	/**
	 * Return number of rows.
	 *
	 * @return int
	 */
	public function getRows();


	/**
	 * Return number of columns.
	 *
	 * @return int
	 */
	public function getColumns();


	/**
	 * Get value at specified position.
	 *
	 * @param int $rowIndex
	 * @param int $columnIndex
	 * @return mixed
	 */
	public function getValue($rowIndex, $columnIndex);

}
