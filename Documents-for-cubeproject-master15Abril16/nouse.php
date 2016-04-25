<?php

    $connection = mysql_connect('localhost', 'username', 'password');

    $sql = mysql_select_db('db1', $connection);

    $userid = "Snib";

    $query = "SELECT * FROM `table1` WHERE userid='$userid'";

    $result = mysql_query($query);

    $data = mysql_fetch_assoc($result);

    $usernum = $data['usernum'];

?>



<script language="javascript" type="text/javascript">

    var userid = "<?php echo $userid; ?>";

    var usernum = "<?php echo $usernum; ?>";

    //if usernum is less than or equal to 50
    if (usernum <= 50) { 

        alert("You are not allowed on this page, " + userid);
        setTimeout('window.location = "otherpage.php"', 3000); // user leaves in 3 seconds

    } else {

        alert('Welcome to this page, ' + userid);

    }

</script>

<?php mysql_close($connection); ?>