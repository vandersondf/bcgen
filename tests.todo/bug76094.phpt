--TEST--
Bug #76094 (Access violation when using opcache)
--INI--
bcgen.enable=1
bcgen.optimization_level=-1
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
function MetaType($t)
{

	switch (strtoupper($t)) {
	case PHP_INT_MAX :
		return 1;
	case 0:
	default:
		return 0;
	}
}

var_dump(MetaType("aa"));
?>
--EXPECT--
int(0)
