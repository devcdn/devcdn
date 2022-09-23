<?php
$url = 'https://devcdn.herokuapp.com/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>devcdn</title>
    <style>
        @import url('main.css');
        body {
            background: black;
            color: white;
        }
        input {
            outline: none;
            border: 0;
            display: block;
            font-size: 1em;
            background: #2B2B2B;
            padding: 10px 15px;
            color: white;
            width: 100%;
            border-radius: 5px;
        }
        select {
            outline: none;
            border: 0;
            display: block;
            font-size: 1em;
            background: #1E1E1E;
            margin-bottom: 5px;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>devcdn</h1>
    <p><b>libraries we offer:</b></p>
    <?php
    $catalog = json_decode(file_get_contents('dat/catalog.json'));
    asort($catalog);
    foreach($catalog as $row):
    $data = json_decode(file_get_contents('dat/' . $row), true);
    ?>
    <div class="card">
        <h3><?=htmlspecialchars($data['name'])?></h3>
        <p><b>By <?=htmlspecialchars($data['author'])?></b> - Latest version: v<?=htmlspecialchars($data['currentversion'])?></p>
        <p><?=htmlspecialchars($data['description'])?></p>
        <select onchange='this.parentElement.querySelector("input").value = <?=json_encode($url)?> + "lib/" + (this[selectedIndex].id)'>
            <?php
            foreach($data['versions'] as $version => $versions):
            ?>
            <optgroup label="<?=htmlspecialchars($version)?>">
                <?php
                foreach ($versions as $realversion => $newurl):
                ?>
                <option id="<?=htmlspecialchars($newurl)?>"><?=htmlspecialchars($realversion)?></option>
                <?php
                endforeach;
                ?>
            </optgroup>
            <?php
            endforeach;
            ?>
        </select>
        <input type="text" class="link" value="<?=htmlspecialchars($url)?>lib/<?=htmlspecialchars($data['versions'][$data['currentversion']][array_keys($data['versions'][$data['currentversion']])[0]])?>" readonly onclick="this.select();">
    </div>
    <?php
    endforeach;
    ?>
</body>
</html>