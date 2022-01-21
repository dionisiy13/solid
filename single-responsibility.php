<?php
// Принцип единой отвественности гласит о том, для внесения изменений в класс требуется только одна причина
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
class CalculateAreas {
	private array $shapes;
	private double $sumTotal = 0;
	public function __construct(array $shapes)
	{
		$this->shapes = $shapes;
	}
	public function sumAreas() {
		/** @var Shape $shape */
		foreach ($this->shapes as $shape) {
			$this->sumTotal += $shape->calcArea();
		}
		return $this->sumTotal;
	}
}

class Output {
	private double $sumTotal;

	public function __construct(double $sumTotal)
	{
		$this->sumTotal = $sumTotal;
	}
	public function outputString()
	{
		echo "Total of all areas = " + $this->sumTotal;
	}
	public function outputJson()
	{
		echo "Total of all areas = " + $this->sumTotal;
	}
}

$circle = new Circle(10);
$shapeArr = [$circle];
$calculator = new CalculateAreas($shapeArr);
$calculator->sumAreas();
(new Output($calculator->sumAreas()))->outputJson();




