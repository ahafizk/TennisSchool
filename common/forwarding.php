<?php  
function forward( $url) 
{
	if (headers_sent( )) {
	echo "<script>document. location. href='$url' ;</script> \n";
	} 
	else 
	{
		@ob_end_clean( ); // clear output buffer
//                echo $url;
		header( 'HTTP/1.1 301 Moved Permanently' );
		header( "Location: ". $url );
	}
exit();
} 
?>