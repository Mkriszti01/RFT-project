<div id="content">

<h1>Új könyv felvitele</h1>


<form method="post">
        
    <table>
    <tr>
        <td><label for="szerzo">Szerző neve:</label>        </td>
        <td><input type="text" id="szerzo" name="szerzo" /> </td>
    </tr>
    <tr>
        <td><label for="cim">Könyv címe:</label>            </td>
        <td><input type="text" id="cim" name="cim" />       </td>

    </tr>
    <tr>
        <td><label for="mufaj">Könyv műfaja:</label>        </td>
        <td>
	<select name='mufaj'>
		<option value='Mese'>Mese</option>
		<option value='Ifjúsági regény'>Ifjúsági regény</option>
		<option value='Regény'>Regény</option>
		<option value='Krimi'>Krimi</option>
	</select>
	</td>

    </tr>
    <tr>
        <td><label for="textarea">Könyv leírása:</label>      </td>
        <td><textarea name="leiras" id="textarea" rows="4" cols="30"></textarea> </td>

    </tr>
    <tr>
    <td>                                                     </td>
    <td><button type="submit">Új felvitel</button>           </td>
    </tr>
    </table>
	
</form>
</div> 
