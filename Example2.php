<?php
	include("CacheBlocks.php");
	$Cache = new CacheBlocks("cache/", 360);
	//$Cache->SetVerbose(true);
    $Cache->SetTtl(360);
    if(!$Cache->Start("cache2")){
?>
    <table>
        <?php for($i=0; $i < 20; $i++){
            echo "<tr><td>Item ".$i."</td></tr>";
        } ?>
    </table>
<?php 
} 
echo $Cache->Stop();
?>
