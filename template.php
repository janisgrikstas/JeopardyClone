<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title>Jeopardy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./stylesheets/gridstyle.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php 

        $fp = fopen('scores.txt', 'r');
                    
        while ($line = fgets($fp)){
            $linearray = explode(":", $line);
            if($linearray[0]=="counter"){
                $string_turnCounter = $linearray[1];
                $turnCounter=intval($string_turnCounter);
            }
        }    
            
        if($turnCounter%2==0){
            echo '<h2>Player 2 Pick a Question:</h2>';
        }
        else{
            echo '<h2>Player 1 Pick a Question:</h2>';
        }

        fclose($fp);

    ?>
	<table class="game">
		<thead class="content-name">
			<tr>
				<td>Entert-<br>ainment</td>
                <td>Celebrity's Countries</td>
                <td>Capital Cities</td>
                <td>Geography</td>
                <td>Music</td>
			</tr>
		</thead>
		<tbody class="content-money">
			<tr>
                <td><a href="./category1/1_100.php">$100</a></td>
                <td><a href="./category2/2_100.php">$100</a></td>
                <td><a href="./category3/3_100.php">$100</a></td>
                <td><a href="./category4/4_100.php">$100</a></td>
                <td><a href="./category5/5_100.php">$100</a></td>
            </tr>

            <tr>
                <td><a href="./category1/1_200.php">$200</a></td>
                <td><a href="./category2/2_200.php">$200</a></td>
                <td><a href="./category3/3_200.php">$200</a></td>
                <td><a href="./category4/4_200.php">$200</a></td>
                <td><a href="./category5/5_200.php">$200</a></td>
            </tr>

            <tr>
                <td><a href="./category1/1_300.php">$300</a></td>
                <td><a href="./category2/2_300.php">$300</a></td>
                <td><a href="./category3/3_300.php">$300</a></td>
                <td><a href="./category4/4_300.php">$300</a></td>
                <td><a href="./category5/5_300.php">$300</a></td>
            </tr>
            <tr>
                <td><a href="./category1/1_400.php">$400</a></td>
                <td><a href="./category2/2_400.php">$400</a></td>
                <td><a href="./category3/3_400.php">$400</a></td>
                <td><a href="./category4/4_400.php">$400</a></td>
                <td><a href="./category5/5_400.php">$400</a></td>
            </tr>
            <tr>
                <td><a href="./category1/1_500.php">$500</a></td>
                <td><a href="./category2/2_500.php">$500</a></td>
                <td><a href="./category3/3_500.php">$500</a></td>
                <td><a href="./category4/4_500.php">$500</a></td>
                <td><a href="./category5/5_500.php">$500</a></td>
            </tr>
			
		</tbody>
	</table>
	
    <?php
    $fp = fopen('scores.txt', 'r');
    while ($line = fgets($fp)){
        $linearray = explode(":", $line);
        if($linearray[0]=="counter"){
            $string_turnCounter = $linearray[1];
        }
        if($linearray[0]=="player1"){
            $string_playerOneScore = $linearray[1];
        }
        if($linearray[0]=="player2"){
            $string_playerTwoScore = $linearray[1];
        }
    
    }
    fclose($fp);
    ?>

	
	<table class="scores">
		<tr class="content-name">
			<th><span class="content-money">Player 1</span></th>
			<th><span class="content-money">Player 2</span></th>
			
		</tr>
		<tr class="content-money">
			<td class="p1-score" >
                <?php 
                echo $string_playerOneScore;
                ?>
            </td>
			
            <td class="p2-score" >
            <?php 
                echo $string_playerTwoScore;
                ?>
            </td>
			
		</tr>
	</table>
    <div class="center">
    <a class="logout" href="logout.php">Logout</a>
</div>
</body>
</html>