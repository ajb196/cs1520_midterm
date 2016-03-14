<!-- list component -->

<!-- contains all information for the list in an array -->
<?php 
    $types = ["Proffesional","Habit","Skill","Fun","Travel","Life"];

    $goals = array(
        "Proffesional" => array(
            "Launch a personal web site" => "October 2015",
            "Pay off all of my student loans" => null,
            "Launch an android app" => null
        ),
        "Habit" => array(
            "Read for at least 15 minutes 100 days in a row" => null,
            "Write 500 words 100 days in a row" => null,
            "Do my morning workout 100 days in a row" => null
        ),
        "Skill" => array(
            "Become fluent in another language" => null,
            "Able to perform all maintenance on my motorcycle" => null
        ),
        "Fun" => array(
            "Skydive" => null,
            "Bungee Jump" => null,
            "CN Tower Edge Walk" => null,
            "Be on TV" => null
        ),
        "Travel" => array(
            "France" => "July 2012",
            "Monaco" => "July 2012",
            "Italy" => "July 2014",
            "Japan" => null,
            "England" => null,
            "Germany" => null,
            "Australia" => null,
            "Spain" => null,
            "Ireland" => null
        ),
        "Life" => array(
            "Graduate college" => null,
            "Leave a 100$ tip" => null
        )
    );
?>

<div class="container-fluid" >

    <div class="row">
        
        <div class="col-sm-2"></div>

        <div class="col-sm-8 listContent shadow">

            <h2 class="secHead"> The Imossible List</h2>

            <p>
                The Impossible List is a sort of bucket list. It contains a variety of goals that I have for myself whether they be proffesional
                or personal. I like to always have something to look forward to, and hope for, so I have added this list here as a reminder to myself.
                It is a reminder that even though I've experienced a lot there are always new things to come.
            </p>

        </div>

        <div class="col-sm-2"></div>

    </div>

    <!-- prints each section and its goals -->
    <?php foreach($goals as $type => $typeGoals) {?>
         <div class="row">
            
            <div class="col-xs-3"></div>

            <div class="col-xs-6 listContent shadow">

            <h2 class="secHead"> <?php echo $type; ?> Goals</h2>

            <ul>

            <?php 
                foreach($typeGoals as $goal => $date) {
                    if ($date == null) {
             ?>

                <li> <?php echo "$goal"; ?> </li>

            <?php } else { ?>

                <li> <?php echo "<span class='complete'>$goal</span> <span class='red'>($date)</span>" ?> </li>

            <?php } } ?>

            </ul>

            </div>

            <div class="col-xs-3"></div>

        </div>
    <?php } ?>

</div>