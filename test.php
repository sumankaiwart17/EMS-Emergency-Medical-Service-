<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.remove.bg/v1.0/removebg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'image_url' => 'https://www.ien.eu/uploads/tx_etim/IEN31788.jpg',
    'size' => 'auto'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$headers = array();
$headers[] = 'X-Api-Key: Q7LG2uKA4dzzRFPTszdmm9Ch';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;die;
$fp=fopen('res.png',"wb");
	fwrite($fp,$result);
	fclose($fp);
curl_close($ch);?>
<!-- <form method="post" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<input type="submit" name="submit"/>
</form> -->