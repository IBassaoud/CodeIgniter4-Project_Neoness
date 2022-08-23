<h2>Hello
<?php 
if(session()->get('firstname')){
    echo ", " . session()->get('firstname') . " " . session()->get('lastname');
    };
if(isset($id)){
    echo "<br> mon id c'est le " . $id;
}
if (isset($catch_phrase)){
    echo $catch_phrase;
}
?>
</h2>