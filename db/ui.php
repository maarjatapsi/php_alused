<?php
// h01 tabeli väljund
function table01($dbResult){
    echo '<table>';
        echo '<thead>';
            echo '<tr>
                <th>Kooli nimi</th>
                <th>2012</th>
                </tr>';
        echo '</thead>';
        echo '<body>';
            foreach ($dbResult as $row => $schoolData){
            echo '<tr>';
                foreach ($schoolData as $name => $value) {
                    echo '<td>' . $value . '</td>';
                }
                    echo '</tr>';
            }
        echo '</body>';
    echo '</table>';
}

//h03 otsingu vorm
function otsing() {
    echo '<form action="" method="get">
    <label for="otsi">Kool</label>
		<input type="text" name="otsi" id="otsi">
		<input type="submit" value="Otsi"> 
	    </form>';
}

// h05 andmete lisamise jaoks
function lisaKlient(){
    echo '<form action="" method="get">
        <label for="enimi">Eesnimi</label> <input type="text" name="enimi" id="enimi"><br>
        <label for="pnimi">Perenimi</label> <input type="text" name="pnimi" id="pnimi"><br>
        <label for="kontakt">Kontakt</label> <input type="text" name="kontakt" id="kontakt"><br>
        <input type="submit" value="Salvesta">
    </form>';
}

// h06 tabeli väljund
function table06($dbResult, $heading){
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach ($heading as $th){
        echo '<th>'.$th.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($dbResult as $row => $klient){
        echo '<tr>';
        echo '<td>'.$klient['enimi'].'</td>';
        echo '<td>'.$klient['pnimi'].'</td>';
        echo '<td>'.$klient['kontakt'].'</td>';
        echo '<td><a href="?kustutaID='.$klient['id'].'">kustuta</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

// h10 tabeli väljund
function table10($dbResult, $heading){
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach ($heading as $th) {
        echo '<th>'.$th.'</th>';
    }
    echo '</tr>';
    echo '</head>';
    echo '<tbody>';
    foreach ($dbResult as $row => $klient){
        echo '<tr>';
        echo '<td>'.$klient['enimi'].'</td>';
        echo '<td>'.$klient['pnimi'].'</td>';
        echo '<td>'.$klient['kontakt'].'</td>';
        echo '<td><a href="?kustutaID='.$klient['id'].'">kustuta</a></td>';
        echo '<td><a href="?muudaID='.$klient['id'].'">muuda</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

function changeClient($data)
{
    echo '
    <form action ="" method="post">
        <input type="text" name="id" value="' . $data['id'] . '" hidden><br>
        <label for="enimi">Eesnimi</label> <input type="text" name="enimi" id="enimi" value="' . $data['enimi'] . '"><br>
        <label for="pnimi">Perenimi</label> <input type="text" name="pnimi" id="pnimi" value="' . $data['pnimi'] . '"><br>
        <label for="kontakt">Kontakt</label> <input type="text" name="kontakt" id="kontakt" value="' . $data['kontakt'] . '"><br>
        <input type="submit" value="Muuda" name="muudanyyd">
    </form>
    <hr>
    ';

}