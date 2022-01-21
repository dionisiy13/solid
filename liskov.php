<?php
// Согласно принципу подстановки Лисков, проектирование должно предусматривать возможность замены любого экземпляра родительського класса
// экземпляром одного из дочерних класснов. Если родительский класс может выполнять какую-либо задачу, дочерний класс тоже должен мочь.
abstract class Shape
{
	protected string $name;
	protected double $area;
	public abstract function calcArea(): double;
}

class Rectanlge extends Shape {
	private double $w;
	private double $h;
	public function __construct(double $w, double $h)
	{
		$this->h = $h;
		$this->w = $w;
	}
	public function calcArea(): double
	{
		return $this->w * $this->h;
	}
}

class Square extends Shape
{
	private double $side;
	public function __construct(double $side)
	{
		$this->side = $side;
	}

	public function calcArea(): double
	{
		return $this->side * $this->side;
	}
}





