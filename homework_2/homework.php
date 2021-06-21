<?php

const ALL = 80;
const PENS = 23;
const PENCILS = 40;

const PAINTS = ALL - PENS - PENCILS;

echo ALL . " красок на выставке нужно отнять от " . PENS . " фломастеров и " . PENCILS . " карандашей = " . PAINTS . " красок <br/><br/>";
