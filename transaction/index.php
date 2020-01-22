<?php

require_once('conn.php');

$link = connect(HOSTNAME, USERNAME, USERPASS, DBNAME);


function table($table, $attrs) {
    $link = connect(HOSTNAME, USERNAME, USERPASS, DBNAME);
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




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>The Brewery</title>
    <style>
        :root{
            --main-bg: #2d095c;
            --sec-color: #20366b;
            --border-color: #dd7777;
            --accent-color: #eae3e3;
        }


        html{
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            height: 100%;
            background: var(--main-bg);
            color: white;
        }
        table{
            height: auto;
            width: 400px;
            border: 1px solid var(--border-color);
            background: rgba(255, 255, 255, .3);
            color: black;
        }
        tr:nth-child(odd){
            background: rgba(255, 255, 255, .3);
        }
        tr{
            height: 35px;
            text-align: center;
        }
        .db__container{
            position: absolute;
            top:0;
            left: 0;
            padding: 20px;
            width: 500px;
            height: 1000px;
            border-right: 1px solid var(--border-color);
            background: var(--sec-color);
            overflow: hidden;
            overflow-y: auto;

        }

        .form__container{
            top: 90px;
            position: absolute;
            left: 600px;
            padding: 20px;
            width: 200px;
            height: 220px;
            background: var(--sec-color);
            border-radius: 10px;
            text-align: center;
            border: 1px solid var(--border-color);
            margin-bottom: 20px;

        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance:textfield;
        }

        input {
            margin-bottom: 20px;
            width: 150px;
            font-size: 14px;
            padding-left: 5px;
        }

        .register input[type="submit"] {
            border-radius: 8px;
            color: var(--main-bg);
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 1em;
            height: 2em;
            background-color: #f2f2f2;
        }

        #register__product{
            height: 310px;
            left: 900px;
        }

        #purchase{
            left: 1200px;
            height: 200px;
        }
    </style>
</head>
<body>
<?php
if ($_POST['submit'] === 'Register account') {
    $name = $_POST['name'];
    $balance = $_POST['balance'];
    $name = str_replace("'", '"', $name);
    $balance = str_replace("'", '"', $balance);
    $sql = "call registerAccount('$name', '$balance');";
    query($link, $sql);
}
if ($_POST['submit'] === 'Register product') {
    $name = $_POST['name'];
    $balance = $_POST['balance'];
    $stocks = $_POST['stocks'];
    $price = $_POST['price'];
    $name = str_replace("'", '"', $name);
    $balance = str_replace("'", '"', $balance);
    $stocks = str_replace("'", '"', $stocks);
    $price = str_replace("'", '"', $price);
    $sql = "call registerProduct('$name', '$price', '$stocks', '$balance');";
    query($link, $sql);
}
?>
<aside>

</aside>
<main>
    <div>
        <div>
            <div class='db__container'>
                <div class='' id='accounts'>
                    <h1>Accounts</h1>
                    <?php table('ACCOUNTS', ['id', 'balance', 'name']); ?>
                </div>
                <div class='' id='products'>
                    <h1>Products</h1>
                    <?php table('PRODUCTS', ['id', 'name', 'price', 'stocks', 'balance']); ?>
                </div>
                <div>
                    <h1>Purchases</h1>
                    <?php table('PURCHASES', ['id', 'product_id', 'account_id', 'time']); ?>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
</main>

    <div class="form__container register" id="register__account">
        <h2>Register Account</h2>
        <form method="POST">
            <input type='text' name='name' placeholder='name' />
            <input type='number' name='balance' placeholder='balance' />
            <input type='submit' name='submit' value='Register account' />
        </form>
    </div>

    <div class="form__container register" id="register__product">
        <h2>Register Product</h2>
        <form method="POST">
            <input type='text' name='name' placeholder='product name' />
            <input type='number' name='price' placeholder='price' />
            <input type='number' name='stocks' placeholder='stocks' />
            <input type='number' name='balance' placeholder='balance' />
            <input type='submit' name='submit' value='Register product' />
        </form>
    </div>

    <div class="form__container register" id="purchase">
        <h2>Purchase</h2>
        <form method="POST">
            <input type='number' name='acc_id' placeholder='account id' />
            <input type='number' name='pro_id' placeholder='product id' />
            <input type='submit' name='submit' value='Buy' />
        </form>
    </div>


</body>
</html>