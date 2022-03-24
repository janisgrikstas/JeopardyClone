<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Jeopardy</title>
		<link href="../stylesheets/formstyle.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
        <div class ="submitbox">
		
		    <?php
                //NEED TO DO FOR EVERY PAGE: change to the correct answer
                $correctAns = "Canada";
                
                $turnCounter;
                $playerOneScore;
                $playerTwoScore;

		        if($_SERVER['REQUEST_METHOD'] == 'POST')
		        {

		            $_answer = $_POST['ans'];
                    //file methods to get current turn counter and player scores
                    $fp = fopen('../scores.txt', 'r');
                    
                        while ($line = fgets($fp)){
                            $linearray = explode(":", $line);
                            if($linearray[0]=="counter"){
                                $string_turnCounter = $linearray[1];
                                $turnCounter=intval($string_turnCounter);
                            }
                            if($linearray[0]=="player1"){
                                $string_playerOneScore = $linearray[1];
                                $playerOneScore = intval($string_playerOneScore);
                            }
                            if($linearray[0]=="player2"){
                                $string_playerTwoScore = $linearray[1];
                                $playerTwoScore = intval($string_playerTwoScore);
                            }
                        
                        }
                        fclose($fp);

		            if(strcasecmp($correctAns, $_answer) == 0) {
			            echo "<h2>Correct!</h2>";
                        echo "<h3> Points for you! </h3>";
                        //NEED TO DO FOR EVERY PAGE: make sure points are correct amount 
                        //adding the points into the respective player's scores variables,
                        // based on the turn counter
                        if($turnCounter%2==0){
                            $playerTwoScore =$playerTwoScore + 400;
                            $turnCounter = $turnCounter + 1;
                        }
                        else{
                            $playerOneScore= $playerOneScore + 400;
                            $turnCounter = $turnCounter + 1;
                        }
                           
			            
		            }
                    
		            
                    //else statement for if the user's input is incorrect
                    else{
                        
                        $turnCounter = $turnCounter + 1;
                        echo '<h2>Sorry, incorrect.</h2>';
                        
		            }
                   
                    //writing new turn counter and scores into file
                    $rewritingfile = fopen('../scores.txt', 'w');
		            fwrite($rewritingfile, "counter:".$turnCounter."\n");
                    fwrite($rewritingfile, "player1:".$playerOneScore."\n");
                    fwrite($rewritingfile, "player2:".$playerTwoScore);
                    fclose($rewritingfile);

                    echo "<a href = '../template.php'> next round-> </a>";

		        }
		    ?>
	    
        </div>
	</body>
</html> 