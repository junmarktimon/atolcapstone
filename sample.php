<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php

    for($i = 0; $i <= 10; $i++){

?>

            <div class="panel-body">
                <p><button type="button" class="btn btn-lg btn-default" id="parser" name="parser" onclick="hideShowTable(<?php echo $i; ?>);">Parser<?php echo $i; ?></button></p>
            </div>

            
            <table class="table table-striped table-bordered table-hover" id="matable<?php echo $i; ?>" style="display:none;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>ATM</th>
                        <th>Ligne</th>
                        <th>Event</th>
                        <th>Montant</th>
                        <th>Type</th>
                        <th>Retour trans</th>
                        <th>Retour carte</th>
                        <th>Carte insérée</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>10/10/22</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>                    
                    </tr>
                    <tr>
                                         
                </tbody>
            </table>




<?php

    }


?>



<br><br><br><br><br>


<script>
    function hideShowTable(i){


        var name = "matable"+i;

    let toggle = document.getElementById(name).style.display;
    if(toggle == "none"){
        document.getElementById(name).style.display = "block";
    } else {
        document.getElementById(name).style.display = "none";
    }

}
</script>
    
</body>
</html>