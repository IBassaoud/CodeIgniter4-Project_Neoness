<h2>Hello, <?php 
if(session()->get('firstname')){
    echo session()->get('firstname') . " " . session()->get('lastname');
    };
    ?></h2>