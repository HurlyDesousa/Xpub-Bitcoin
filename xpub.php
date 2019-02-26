<?php
$xpub = "xpub691NZyojewZQscY7Sos9NY1Gdh5e7xvLkW2LDmkfodoRzsPvb8oxmSoJ6d5u5LH1JvRfn1ZkYitbssMiHVAYkxcq6qTYxvE1Qu6VMwi6Cwn";
$url = "https://api.smartbit.com.au/v1/blockchain/address/".$xpub;
$fgc = json_decode(file_get_contents($url), true);
$next = $fgc["address"]["extkey_next_receiving_address"];
?>
<html>
<head>
<script>
</script>
<body>
<center>
<img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=<?php echo $next; ?>" alt="QR"><br>
<?php echo $next; ?>
</center>
</body>
</html>
