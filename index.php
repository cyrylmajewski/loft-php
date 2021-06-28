<?php
require_once('Interfaces/PlanInterface.php');
require_once('Classes/Plan.php');
require_once('Classes/BasePlan.php');
require_once('Classes/StudentPlan.php');
require_once('Classes/HourPlan.php');

echo "<pre>";

$base = new BasePlan(3, 130);
$base->addServices('gps');
$student = new StudentPlan(4, 224);
$student->addServices('driver', 'gps');
$hour = new HourPlan(3, 60);
$hour->addServices('driver');
$base->showPrice();
$student->showPrice();
$hour->showPrice();

