<h2>Hello
<?php 
if(session()->get('firstname')){
    echo ", " . session()->get('firstname') . " " . session()->get('lastname');
    };
if(isset($_GET['id'])){
    echo "<br> mon id c'est le " . $_GET['id'];
}
?>
</h2>