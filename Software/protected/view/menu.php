
<div id="menu">
<ul>

<?php for ($i = 0; $i < count($menu); $i++) { ?>  	
	<li <?php if ($menu[$i][0]==$menupont) echo 'class="active"'; ?>>
	<a href="index.php?d=<?php echo $menu[$i][0]; ?>">
		<?php echo $menu[$i][1]; ?>
	</a></li>

<?php } ?>
</ul>
</div>


