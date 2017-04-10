<?php
namespace SpareParts\Pillar\Mapper\Dibi;


class ColumnInfo
{
	/**
	 * @var string
	 */
	private $columnName;

	/**
	 * @var string
	 */
	private $propertyName;

	/**
	 * @var TableInfo
	 */
	private $tableInfo;

	/**
	 * @var bool
	 */
	private $isPrimaryKey;

	/**
	 * @var bool
	 */
	private $enabledForSelect = true;

	/**
	 * @param string $columnName
	 * @param string $propertyName
	 * @param TableInfo $tableInfo
	 * @param bool $isPrimaryKey
	 * @param bool $enabledForSelect
	 */
	public function __construct($columnName, $propertyName, TableInfo $tableInfo, $isPrimaryKey, $enabledForSelect)
	{
		$this->columnName = $columnName;
		$this->propertyName = $propertyName;
		$this->tableInfo = $tableInfo;
		$this->isPrimaryKey = $isPrimaryKey;
		$this->enabledForSelect = $enabledForSelect;
	}

	/**
	 * @return string
	 */
	public function getColumnName()
	{
		return $this->columnName;
	}

	/**
	 * @return string
	 */
	public function getPropertyName()
	{
		return $this->propertyName;
	}

	/**
	 * @return TableInfo
	 */
	public function getTableInfo()
	{
		return $this->tableInfo;
	}

	/**
	 * @return bool
	 */
	public function isPrimaryKey()
	{
		return $this->isPrimaryKey;
	}

	/**
	 * @return bool
	 */
	public function isEnabledForSelect()
	{
		return $this->enabledForSelect;
	}
}
