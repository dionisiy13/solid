<?php
// Принцип открытости/закрытости гласит, что разширить поведения класса без внесения изменений
abstract class Shape
{
	protected string $name;
	protected double $area;
	public abstract function calcArea(): double;
}

class Circle extends Shape {
	private double $radius;
	public function __construct(double $radius)
	{
		$this->radius = $radius;
	}
	public function calcArea(): double
	{
		return 3.14 * ($this->radius * $this->radius);
	}
}

class Square extends Shape
{
	private double $side;

	public function calcArea(): double
	{
		return $this->side * $this->side;
	}
}

class CalculateArea {
	public function calcArea(Circle $shape) {
		return $shape->calcArea();
	}
}

class Rectangle extends Shape
{
	private double $side1;
	private double $side2;

	public function calcArea(): double
	{
		return $this->side1 * $this->side2;
	}
}


$circle = new Square(10);

$calculator = new CalculateArea();
$calculator->calcArea($circle);





