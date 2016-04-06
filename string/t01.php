<?php 
$pattern = '/([a-z]{3})(\.[a-z]{2})?@([a-z]{4}\.)([a-z]{2}\.)?([a-z]{2,3})/';

$text = '555.123.4567	+1-(800)-555-2468
foo@demo.net	bar.ba@test.co.uk
gtgt-lp@demo.com	
gT18@abv.bg http://foo.co.uk/
www.siteoi.com
http://regexr.com/foo.html?q=bar';

$res = preg_match_all($pattern, $text, $matches);

var_dump($matches[0]);
