<?php
/**
 * Created by PhpStorm.
 * User: ShinKenDo
 * Date: 14.09.14
 * Time: 01:24
 */

namespace Piece;


abstract Class Piece {
	protected $position;
	protected $color;
	protected $name;
	abstract function _construct($position,$color,$name);
	abstract function setPosition($position);
	abstract function getPosition();
	abstract function getName();
	abstract function getColor();
	abstract function showMove();
} 