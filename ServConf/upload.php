<?php
	$target_url = 'http://54.144.23.166/btwoone/receive.php';
	$file_name_with_full_path = realpath('./data.json');
	$post = array('file_contents' => curl_file_create($file_name_with_full_path, 'text/plain' /* MIME-Type */, 'data.json'));

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$target_url);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$result=curl_exec ($ch);
	curl_close ($ch);
	
	unlink('data.json');
?>
