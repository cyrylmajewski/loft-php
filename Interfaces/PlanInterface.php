<?php

interface iPlan
{
	public function countPrice(): int;
	public function addServices(string ...$services);
	public function showPrice();
}
