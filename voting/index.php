<?php
require_once('db.php');
$link = conn(HOSTNAME, USERNAME, PASSWORD, DATABASE);
function table($table, $attrs) {
    $link = conn(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $res = query($link, "select * from $table;");
    if (mysqli_num_rows($res) > 0) {
        $header = '<tr>';
        foreach ($attrs as $att) $header = "$header<th>$att</th>";
        $header = "$header</tr>";
        print("<table>$header");
        while ($row = mysqli_fetch_assoc($res)) {
            $doc = '<tr>';
            foreach ($attrs as $att) {
                $val = $row[$att];
                $doc = "$doc<td>$val</td>";
            }
            $doc = "$doc</tr>";
            print($doc);
        }
        print('</table>');
    } else {
        print('<p><i>0 results</i></p>');
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Hääletamine</title>
    <style>
        body {
            background-color: #3aafa9;
            font-family: "Segoe UI";
        }
        html {
            --color: #feffff;
        }
        table th {
            border-bottom: 1px solid #000;
        }
        table th, td {
            text-align: left;
            padding: 0 .2rem;
            border-left: 1px solid #000;
        }
        input, select {
            display: block;
            max-width: 30ex;
            width: 100%;
            margin-bottom: .2rem;
        }
        .box {
            padding: .5rem 1rem;
            background: var(--color);
            border-radius: 5px;
            overflow: auto;
        }
        form { margin-bottom: 0; }
        h1 { margin-top: 0; }
        hr { margin: 0; color: var(--color); }
        body {
            display: grid;
            grid-gap: .5rem;
            grid-template: 'logi haaletus' 20rem
            'logi tulemused' 9rem
            'separator separator' auto
            'haaletaja-vorm uus-haaletus' auto / minmax(50ex, auto) 1fr;
        }
        #haaletus { grid-area: haaletus; }
        #logi { grid-area: logi; }
        #tulemused { grid-area: tulemused; }
        #haaletaja-vorm { grid-area: haaletaja-vorm; }
        #uus-haaletus { grid-area: uus-haaletus; }
        #separator { grid-area: separator; }
    </style>
</head>
<body>
<?php
if ($_POST['submit'] === 'SAADA') {
    $eesnimi = $_POST['eesnimi'];
    $perenimi = $_POST['perenimi'];
    $otsus = $_POST['otsus'];
    $eesnimi = str_replace("'", '"', $eesnimi);
    $perenimi = str_replace("'", '"', $perenimi);
    $otsus = str_replace("'", '"', $otsus);
    $sql = "call haaleta('$eesnimi', '$perenimi', '$otsus');";
    query($link, $sql);
}
if ($_POST['submit'] === 'UUS') {
    query($link, "call uusHaaletus(null, null);");
}
?>
<div class='box' id='haaletus'>
    <h1>HAALETUS</h1>
    <?php table('HAALETUS', ['id', 'eesnimi', 'perenimi', 'haaletuse_aeg', 'otsus']); ?>
</div>
<div class='box' id='logi'>
    <h1>LOGI</h1>
    <?php table('LOGI', ['haaletaja_id', 'aeg', 'otsus']); ?>
</div>
<div class='box' id='tulemused'>
    <h1>TULEMUSED</h1>
    <?php table('TULEMUSED', ['haaletanute_arv', 'h_alguse_aeg', 'h_lopu_aeg', 'poolt', 'vastu']); ?>
</div>
<div id='separator'><hr></div>
<div class='box' id='haaletaja-vorm'>
    <h1>HÄÄLETA</h1>
    <form method='POST'>
        <input type='text' name='eesnimi' placeholder='eesnimi' />
        <input type='text' name='perenimi' placeholder='perenimi' />
        <select name='otsus'>
            <option value='otsuseta' selected>otsuseta</option>
            <option value='vastu'>vastu</option>
            <option value='poolt'>poolt</option>
        </select>
        <input type='submit' name='submit' value='SAADA' />
    </form>
</div>
<div class='box' id='uus-haaletus'>
    <h1>UUS HÄÄLETUS</h1>
    <form method='POST'>
        <input type='submit' name='submit' value='UUS' />
    </form>
</div>
</body>
</html>
