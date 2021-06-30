<?php

class HourPlan extends Plan {
	protected $kmPrice = 0;
	protected $hourPrice = 250;

	public function countPrice(): int
	{
		$price = 0;
		$time = $this->minutes % 60 === 0 ? $this->minutes / 60 : ceil($this->minutes / 60);
		$price += $time * $this->hourPrice + $this->countServices();
		return $price;
	}
}
