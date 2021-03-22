{extends file="main.tpl"}

{block name= content}

		<table>
				<tr>
					<th>Jesteś zalogowany jako: <?php echo "$role"?></th>
					<td><a href="logout.php"><button>Wyloguj</button></a></td>
				</tr>
		<form action="calc_proc.php" method="post">
				<tr>
					<th>Kwota (złotych)</th>
					<td><input id="id_kwota" type="text" name="kwota"/></td>
				</tr>
				<tr>
					<th>Okres (lata)</th>
					<td><input id="id_okres" type="text" name="okres"/></td>
				</tr>
				<tr>
					<th>Oprocentowanie (procent)</th>
					<td><input id="id_oproc" type="text" name="oproc"/></td>
				</tr>
				<tr>
					<th>Oblicz</th>
					<td><input type="submit" value="Klik" /></td>
				</tr>
		</table>
		</form>

{/block}