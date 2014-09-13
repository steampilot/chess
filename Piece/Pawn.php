<?php
/**
 * Created by PhpStorm.
 * User: ShinKenDo
 * Date: 14.09.14
 * Time: 01:34
 */

namespace Piece;


class Pawn extends Piece {
	protected $position;
	protected $color;
	protected $name;
	function _construct($position, $color, $name)
	{
		$this->position = $position;
		$this->name = $name;
		$this->color $color;
	}

	function setPosition($position)
	{
		$this->position = $position;
	}

	function getPosition()
	{
		return $this->position;
	}

	function getName()
	{
		return $this->name;
	}

	function getColor()
	{
		return $this->color;
	}

	function showMove()
	{
		if ($this->position < 8) {

		}
	}
}