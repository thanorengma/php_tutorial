<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            class Student {
                var $name;
                var $major;
                Var $gpa;

                function __construct($name, $major, $gpa){
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors(){
                    if($this->gpa >=3.5){
                        return "true";
                    }
                    return "false";
                }
            }

            $student1 = new student("Jim", "computer science", 6.5);
            $student2 = new student("Tom", "Literature", 1.5);

            echo $student2->hasHonors();
        ?>
    </body>
</html>