--TEST--
Bug #65510 (5.5.2 crashes in _get_zval_ptr_ptr_var)
--INI--
allow_url_include=1
bcgen.enable=1
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
function parseQuery() {
    $m = array("l", "a", "r", "u", "e", "n", "c", "e");
    foreach($m as $n) {
        @list($a, $b) = $n;
    }
}
parseQuery();
echo "ok\n";
--EXPECT--
ok
