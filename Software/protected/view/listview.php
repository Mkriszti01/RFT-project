<div id="content">
	
<h1>Könyv lista</h1>
<form method="post">
	
	<label for="KonyvRendezes">Rendezés:</label>
	<select name='KonyvRendezes'  onchange=' { this.form.submit(); }'>
		<option value='0' <?php if ($KonyvRendezes=='0') echo 'selected'; ?>>...nincs rendezés</option>
		<option value='1' <?php if ($KonyvRendezes=='1') echo 'selected'; ?>>Cím szerinti</option>
		<option value='2' <?php if ($KonyvRendezes=='2') echo 'selected'; ?>>Szerző szerint</option>
	</select>

	<label for="KonyvMufaja">Könyv műfaja:</label>
	<select name='KonyvMufaja' onchange='{ this.form.submit(); }'>
		<option value='0' <?php if ($KonyvMufaja=='0') echo 'selected'; ?>>Mindegyik</option>
		<option value='1' <?php if ($KonyvMufaja=='1') echo 'selected'; ?>>Mese</option>
		<option value='2' <?php if ($KonyvMufaja=='2') echo 'selected'; ?>>Ifjúsági regény</option>
		<option value='3' <?php if ($KonyvMufaja=='3') echo 'selected'; ?>>Regény</option>
		<option value='4' <?php if ($KonyvMufaja=='4') echo 'selected'; ?>>Krimi</option>
	</select>
	
	<label for="KonyvMegjelenites">Megjelenítés:</label>
	<select name='KonyvMegjelenites' onchange='{ this.form.submit(); }'>
		<option value='0' <?php if ($KonyvMegjelenites=='0') echo 'selected'; ?>>Kis ikon</option>
		<option value='1' <?php if ($KonyvMegjelenites=='1') echo 'selected'; ?>>Nagy ikon</option>
		<option value='2' <?php if ($KonyvMegjelenites=='2') echo 'selected'; ?>>Széles nézet</option>
	</select>

	
</form><br>

 <?php 
	foreach ($lista as $x) { ?>
	<div class="konyv<?php echo $KonyvMegjelenites ?>">
		<span class="kep"><?php echo '<img src="' . $x['kep'] . '">'; ?></span>
		<span class="szerzo"><?php echo $x['szerzo'] ?></span><br>
		<span class="cim"><?php echo $x['cim'] ?></span><br><br>
		<span class="mufaj"><?php echo $x['mufaj'] ?></span><br>
		<span class="leiras"><?php echo $x['leiras'] ?></span>

	</div>
<?php } ?>

    
</div> 


