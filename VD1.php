<?php
// Nap thu vien cache
include("CacheBlocks.php");

// Goi clas cache voi cac thong so nhu sau
// cache/ = ten thu muc luu file cache
// 10 = thoi gian luu
// luu y tao thu muc cache/ ngang hang voi file CacheBlocks.php truoc
$Cache = new CacheBlocks("cache/", 10);

if (!$string = $Cache->Load("ten-file-cache-se-duoc-luu")) {
	$string = "";
	for ($i = 0; $i < 10000; $i++) {
		$string .= "Item" . $i . "<br />";
	}
	$Cache->Save($string, "ten-file-cache-se-duoc-luu");
}
echo $string;
