<?php

if (isset($_REQUEST["ot"], $_REQUEST["cliente"])){
	echo $_REQUEST["ot"].$_REQUEST["cliente"];
}else{
	echo "sin datos";
}

?>