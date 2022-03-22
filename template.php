<!doctype html>
<html>
<head>
	<title>Jeopardy</title>
	<style>
		html, body, table {margin: 0; padding: 0; background-color: #0000ff; color: #ffffff;}
		td, th {text-align: center; vertical-align: middle; border: 1px #ccccff solid;}
		table {width: 100vw; height: 100vh; border-spacing: 0; border-collapse: collapse;}

		.game td {width: 20vw; height: 16.66vh; font-size: 10vh;}
		.game th {width: 20vw; height: 16.66vh; font-size: 6vh;}
		.game td.tile {cursor: pointer;}
		
        a:link{color: #FFFF00;}
        a:hover {background-color: #1144ff;}
        a:visited {color:#a0a0b0;
        background-color:#babacc;
        }


		.scores th {width: 33.33vw; height: 30vh; font-size: 10vh;}
		.scores td {width: 33.33vw; height: 20vh; font-size: 10vh;}


		.content-money {color: #ffff33; text-shadow: black 5px 5px; font-family: "Impact";}
		.content-name {color: #ffffee; text-shadow: black 3px 3px; font-family: "HelveticaNeue-CondensedBold";}
		.content-text {color: #ffffee; text-shadow: black 5px 5px; font-weight: bold; font-family: "Korinna";}
		.content-title {color: #ffffee; text-shadow: black 5px 5px; letter-spacing: 3pt; font-family: "Gyparody";}
	</style>
	
		
</head>
<body>
	
	<table class="game">
		<thead class="content-name">
			<tr>
				<td>category 1</td>
                <td>category 2</td>
                <td>category 3</td>
                <td>category 4</td>
                <td>category 5</td>
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
			<th><span class="player">Player 1</span></th>
			<th><span class="player">Player 2</span></th>
			
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
	
    
</body>
</html>