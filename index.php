<!DOCTYPE html>
<html>
<head>
	<title>index page</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- css stylesheet link -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"> </script>
</head>



<body>

	<!-- 1. (a); 2. (b); 3. (a); 4. (c); 5. (a); 6. (b); 7. (d); 8. (c); 9. (c); 10. (b); 11. (c); 12. (c); 13. 
				(d); 14. (b); 15. (a); 16. (b); 17. (c); 18. (c); 19. (d); 20. (a) -->
<center>
    <div class="container-sm">
        
        <h1 class="results">Renewable And Non-renewable Resources</h1>
    	<?php 

        $Questions = array(
            1 => array(
                'Question' => '1. Which one of the following is a non-renwable resource?',
                'Answers' => array(
                    'A' => 'Coal',
                    'B' => 'Forests',
                    'C' => 'Water',
                    'D' => 'Wildlife'
                ),
                'CorrectAnswer' => 'A'
            ),
            2 => array(
                'Question' => '2. Which among the following is not a renewable source of energy?',
                'Answers' => array(
                    'A' => 'Solar energy',
                    'B' => 'Biomass energy',
                    'C' => 'Hydro-power',
                    'D' => 'Geothermal energy'
                ),
                'CorrectAnswer' => 'B'
            ),
             3=> array(
                'Question' => '3. Identify the non-renewable energy source from the following:',
                'Answers' => array(
                    'A' => 'Coal',
                    'B' => 'Fuel cells',
                    'C' => 'Wind power',
                    'D' => 'Wave power'
                ),
                'CorrectAnswer' => 'A'
            ),
            4=> array(
                'Question' => '4. Which of the following is a disadvantage of most of the renewable energy sources?',
                'Answers' => array(
                    'A' => 'Highly polluting',
                    'B' => 'High waste disposal cost',
                    'C' => 'Unreliable supply',
                    'D' => 'High running cost'
                ),
                'CorrectAnswer' => 'C'
            ),
            5 => array(
                'Question' => '5. Photovoltaic energy is the conversion of sunlight into?',
                'Answers' => array(
                    'A' => 'Chemical energy',
                    'B' => 'Biogas',
                    'C' => 'Electricity',
                    'D' => 'Geothermal energy'
                ),
                'CorrectAnswer' => 'A'
            ),
            6 => array(
                'Question' => '6. Horizontal axis and vertical axis are the types of:',
                'Answers' => array(
                    'A' => 'Nuclear reactor',
                    'B' => 'Wind mills',
                    'C' => 'Biogas reactor',
                    'D' => 'Solar cell'
                ),
                'CorrectAnswer' => 'B'
            ),
            7 => array(
                'Question' => '7. Whish among the following is not an adverse enviromental impact tidal power generation?',
                'Answers' => array(
                    'A' => 'Interference with spawing and migration of fish',
                    'B' => 'Pollution and health hazard in the estuary due to blockage of flow of polluted water into the sea',
                    'C' => 'Navigational hazard',
                    'D' => 'None of the above'
                ),
                'CorrectAnswer' => 'D'
            ),
            8 => array(
                'Question' => '8. Steam reforming is currently the least expensive method of producing:',
                'Answers' => array(
                    'A' => 'Coal',
                    'B' => 'Biogas',
                    'C' => 'Hydrogen',
                    'D' => 'Natural Gas'
                ),
                'CorrectAnswer' => 'C'
            ),
            9 => array(
                'Question' => '9. A fuel cell, in order to produce electricity, burns:',
                'Answers' => array(
                    'A' => 'Helium',
                    'B' => 'Nitrogen',
                    'C' => 'Local Storage',
                    'D' => 'Hydrogen'
                ),
                'CorrectAnswer' => 'C'
            ),
            10 => array(
                'Question' => '10. A fuel cell, in order to produce electricity, burns:',
                'Answers' => array(
                    'A' => 'Carbon cell',
                    'B' => 'Hydrogen battery',
                    'C' => 'Biogas plants', 
                    'D' => 'Chromium cell'
                ),
                'CorrectAnswer' => 'B'
            ),
            11 => array(
                'Question' => '11. Both power and manure is provided by:',
                'Answers' => array(
                    'A' => 'Nuclear plants',
                    'B' => 'Thermal plants',
                    'C' => 'Nuclear cell',
                    'D' => 'Hydroelectric plant'
                ),
                'CorrectAnswer' => 'C'
            ),
            12 => array(
                'Question' => '12. The outermost layer of the earth is:',
                'Answers' => array(
                    'A' => 'Magma',
                    'B' => 'Mantle',
                    'C' => 'Crust',
                    'D' => 'Solid iron core'
                ),
                'CorrectAnswer' => 'C'
            ),
            13 => array(
                'Question' => '13. Common energy source in Indian villages is:',
                'Answers' => array(
                    'A' => 'Electricity',
                    'B' => 'Coal',
                    'C' => 'Sun',
                    'D' => 'Wood and animal dung'
                ),
                'CorrectAnswer' => 'D'
            ),
            14 => array(
                'Question' => '14. The one thing that is common to all fossil fuels is that they:',
                'Answers' => array(
                    'A' => 'Were originally formed in marine environment',
                    'B' => 'Contain carbon',
                    'C' => 'Have undergone the same set of geological processes during their formation',
                    'D' => 'Represent the remains of one living organisms'
                ),
                'CorrectAnswer' => 'B'
            ),
            15 => array(
                'Question' => '15. The process that converts solid coal into liquid hydrocarbon fuel is called:',
                'Answers' => array(
                    'A' => 'Liquefaction',
                    'B' => 'Carbonation',
                    'C' => 'Catalytic conversion',
                    'D' => 'Cracking'
                ),
                'CorrectAnswer' => 'A'
            ),
            16 => array(
                'Question' => '16. Lignite, bituminous and anthracite are different ranks of:',
                'Answers' => array(
                    'A' => 'Nuclear fuel',
                    'B' => 'Coals',
                    'C' => 'Natural gas',
                    'D' => 'Biogas'
                ),
                'CorrectAnswer' => 'B'
            ),
            17 => array(
                'Question' => '17. Cruid oil is:',
                'Answers' => array(
                    'A' => 'Colourless',
                    'B' => 'Odourless',
                    'C' => 'Smelly yellow to black liquid',
                    'D' => 'Odourless yellow to black liquid'
                ),
                'CorrectAnswer' => 'C'
            ),
            18 => array(
                'Question' => '18. Cruid oil is:',
                'Answers' => array(
                    'A' => 'Colourless',
                    'B' => 'Odourless',
                    'C' => 'Smelly yellow to black liquid',
                    'D' => 'Odourless yellow to black liquid'
                ),
                'CorrectAnswer' => 'C'
            ),
            19 => array(
                'Question' => '19. The first controlled fission of an atom was carried out in Germany in:',
                'Answers' => array(
                    'A' => '1920',
                    'B' => '1928',
                    'C' => '1925',
                    'D' => '1938'
            ),
                'CorrectAnswer' => 'D'
            ),
            20 => array(
                'Question' => '20. The first controlled fission of an atom was carried out in Germany in:',
                'Answers' => array(
                    'A' => 'Nuclear reactor',
                    'B' => 'Solar reactor',
                    'C' => 'OTEC',
                    'D' => 'Biogas reactor'
                ),
                'CorrectAnswer' => 'A'
            )
        );
        


        if (isset($_POST['answers']))
        {
            $Answers = $_POST['answers']; // Get submitted answers.

            // Now this is fun, automated question checking! ;)
            $counter = 0;


            foreach ($Questions as $QuestionNo => $Value)
            {
                // Echo the question
                echo $Value['Question'].'<br/>';

                if ($Answers[$QuestionNo] != $Value['CorrectAnswer'])
                {
                     echo 'You answered: <span style="color: red; text-decoration: line-through">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                     echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
                } 

                else 
                {
                    echo 'Correct answer:<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                    echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 
                    $counter++;

                }

                echo '<br/><hr>'; 

                    if ($counter == 0) 
                    { 
                        $results = "Your score: [$counter/20]"; 
                    }
                    else 
                    { 
                        $results = "Your score: [$counter/20] "; 
                    }
            }
            echo $results;

            if($counter < 10)
            {
                echo "Your score is very low, Please try again!";
            }

            if($counter >= 10 && $counter <= 15)
            {
                echo "Your score is average, try harder!";
            }

            if($counter >= 15)
            {
                echo "Well done, passed!";
            }

        } 
        
        else 
        {  
            ?>
                <div class="containerForm">
                   <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz"> -->
                        <form action="results.php" method="post">
                        <?php foreach ($Questions as $QuestionNo => $Value){ ?>

                            <h3><?php echo $Value['Question']; ?></h3>
                            <?php 
                                foreach ($Value['Answers'] as $Letter => $Answer){ 
                                $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
                            ?>
                                <div class="form">
                                    <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required/>
                                    <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                                </div>
                            
                            <br>
                            <?php } ?>

                        <?php } ?>
                        <input type="submit" class="btn-submit" value="Submit Quiz" /> <!-- wow lightSpeedIn -->
                    </form>
                </div>
            <?php 
            }
            ?>
    </div>

</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

<!-- *fix the total, 
        *add an if statement or an exception incase the user does not select an answer for a certain question,
-->
</html>



