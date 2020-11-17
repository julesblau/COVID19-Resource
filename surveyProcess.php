<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $pastCOVID = $_POST["pastCOVID"];
    $diagnosed = $_POST["diagnosed"];
    $testing = $_POST["test"];
    $concerns = $_POST["concern"];
    $useful = $_POST["useful"];
    $feedback = $_POST["feedback"];
   // $target_dir = "images/";
   // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  //  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

$file = "data/surveyResponse.txt";
if (!is_file($file)){
    file_put_contents($file, " ");

}
$current = file_get_contents($file);
$current .= "$pastCOVID, $diagnosed, $testing, $concerns, $useful, $feedback\n";
file_put_contents($file, $current);
?>

<table>
    <caption> COVID-19 Survey </caption>

    <tr>
        <td>Do you know someone who has or has COVID?</td>
    <td><?php echo "$pastCOVID"; ?></td>
    </tr>
    
    <tr>
        <td>Have YOU ever been diagnosed with COVID?</td>
    <td><?php echo "$diagnosed"; ?></td>
    </tr>

    <tr>
        <td>When was the last time you got tested?</td>
    <td><?php echo "$testing"; ?></td>
    </tr>

    <tr>
        <td>On a scale of 1 to 10, how concerned are you about contracting COVID?</td>
    <td><?php echo "$concerns"; ?></td>
    </tr>

    <tr>
        <td>Do you think this website was useful?</td>
    <td><?php echo "$useful"; ?></td>
    </tr>

    <tr>
        <td>What can we add in order to make this website more useful?</td>
    <td><?php echo "$feedback"; ?></td>
    </tr>
</table>

<h3> Thank you! Your response has been submitted. <a href = "index.html">Back</href></h3>
<?php
}
?>
