<?php
function getcategories() {
        $cats = file('db/categories.csv');
        foreach($cats as $cat) {
            $tempcat = (str_getcsv($cat)[0]);
            $newcats[] = $tempcat;
        }
        return($newcats);
    }
    function getdatcheddar(){
        $cheeses = array_slice(file('db/cheese.csv'), 1);
        if(isset($_GET['category'])) {
            $cats = file('db/categories.csv');
            foreach($cats as $cat) {
                $tempcat = str_getcsv($cat);
                if ($tempcat[0] === $_GET['category']) {
                    $tempcat = array_slice($tempcat, 1);
                    foreach($tempcat as $chid) {
                        foreach($cheeses as $cheese) {
                            if ($chid === str_getcsv($cheese)[0]) {
                                $newcheeses[] = $cheese;
                            }
                        }
                    }
                }
            }
        }
        else
            $newcheeses = $cheeses;
        return($newcheeses);
    }
?>
