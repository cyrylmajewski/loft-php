<?php

abstract class Plan implements iPlan {
	protected $name;
	protected $kmPrice;
	protected $minutePrice;
	protected $priceGPS = 15;
	protected $priceDriver = 100;
	public $services = [];
	public $km;
	public $minutes;

	public function __construct($km, $minutes) {
		$this->km = $km;
		$this->minutes = $minutes;
	}

	public function countPrice(): int {
		$price = 0;

		$price += $this->km * $this->kmPrice + $this->minutes * $this->minutePrice + $this->countServices();
		return $price;
	}

	public function addServices(...$services) {
		foreach ($services as $service) {
			array_push($this->services, $service);
		}
	}

	protected function countServices(): int {
		$price = 0;

		if(!empty($this->services)) {
			foreach ($this->services as $service) {

				switch ($service) {
					case 'gps':
						$time = $this->minutes % 60 === 0 ? $this->minutes / 60 : ceil($this->minutes / 60);
						$price += $time * $this->priceGPS;
						break;
					case 'driver':
						$price += $this->priceDriver;
						break;
					default:
						echo "Услуги " . $service . " не существует";
				}
			}
		}

		return $price;
	}

	public function showPrice() {
		echo "Тариф " . $this->name . "<br>";

		foreach ($this->services as $service) {
			if($service === 'gps') {
				echo "- Добавлена услуга GPS<br>";
			}

			if($service === 'driver') {
				echo "- Добавлена услуга дополнительного водителя<br>";
			}
		}

		echo "Итоговая цена: " . $this->countPrice() . " рублей" . "<br><br>";
	}
}
