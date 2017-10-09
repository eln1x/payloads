<?php
error_reporting(0);
?>
<body>
<div id="test"></div>
<?php
for($i=0; $i <=65535; $i++) {
$character = html_entity_decode('&#'.$i.';', ENT_QUOTES, 'UTF- 8');
# Right after the tag name
echo '<div><iframe'.$character.$character.' onload="document. getElementById(\'test\')'
. '.innerHTML+=\''.$i.', \'"></iframe></div>';
echo $character.$character.$i;
}
?>
