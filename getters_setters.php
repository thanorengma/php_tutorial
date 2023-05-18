<html>
    <head><title></title></head>
    <body>
        
    <?php
         class Movie {
            public $title;
            //public $rating; any code outside the movie class is not accessable to variable rating.
            private $rating;

        function __construct($title, $rating){
            $this->title = $title;
            $this->setRating($rating);
            }
        function getRating(){
            return $this->rating;
            }
        function setRating($rating){
            //$this->rating = $rating;
            //check if the value to crossing the strict values 
            if ($rating == "G" || $rating == "PG" || $rating =="PG-13" || $rating == "R" || $rating == "NR"){
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }
            
        }
         
        $avenger = new Movie("Avenger", "PG-13");

        //$avenger->setRating("Dog");
        echo $avenger->getRating();

         //ratings are restricted only to G,PG,PG-13,R,NR

         //getter and setters are special classes inside of our classes which
         //will allow us to set the attribute and get the attribute.

         //it allow us to get the rating though it is a private and also set the
         //rating to our required value though it is private and not accessible outside the class.

    
    ?>
    </body>
</html>