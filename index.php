
<link rel="stylesheet" href="style.css">
<textarea name="monic" cols="69" rows="5">

</textarea>
<table>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<tr>
			<td><input type="button" value="1" name="1"></td>
			<td><input type="button" value="2" name="2"></td>
			<td><input type="button" value="3" name="3"></td>
			<td><input type="button" value="+" name="+"></td>
		</tr>
		<tr>
			<td><input type="button" value="4" name="4"></td>
			<td><input type="button" value="5" name="5"></td>
			<td><input type="button" value="6" name="6"></td>
			<td><input type="button" value="-" name="-"></td>
		</tr>
		<tr>
			<td><input type="button" value="7" name="7"></td>
			<td><input type="button" value="8" name="8"></td>
			<td><input type="button" value="9" name="9"></td>
			<td><input type="button" value="*" name="*"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="button" value="0" name="0"></td>
			<td><input type="button" value="." name="."></td>
			<td><input type="button" value="/" name="/"></td>
		</tr>
		<tr>
			<td colspan="4"><input type="button" value="count" name="count"></td>
		</tr>
	</form>
</table>