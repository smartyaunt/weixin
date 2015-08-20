<?php

/*抛出一个异常*/
try{
	throw new Exception('THIS IS A ERROR MESSAGE');
}catch(Exception $e) {
	echo $e->getMessage();
}

?>