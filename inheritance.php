<html>
    <head>
        <title></title>
    </head>
    <body>
            <?php
                class Chef {
                    function makeChicken(){
                        echo "The Chef makes chicken <br>";
                    }
                    function makeSalad() {
                        echo "The chef makes salad <br>";
                    }
                    function makeSpecialDish() {
                        echo "The chef makes bbq ribs <br>";
                    }
                }

                $chef = new Chef();
                $chef->makeChicken();
            
            ?>
    </body>
</html>