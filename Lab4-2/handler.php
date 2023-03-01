<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$email = $_POST['email'];
$tomorrow_date = date('Y-m-d', strtotime('+1 day'));

$schedule = array(
    "English"=>"8:30",
    "Italian"=>"10:05",
    "Spanish"=>"11:40",
    "Portuguese"=>"13:30",
    "Norwegian"=>"15:05",
);

$teachers = array(
    "English"=>"Kyle Walker",
    "Italian"=>"Daniele De Rossi",
    "Spanish"=>"Sergio Ramos",
    "Portuguese"=>"João Cancelo",
    "Norwegian"=>"Erling Haaland",
);

if (isset($_POST['courses'])) {
    $courses = $_POST['courses'];
}
$message = "Hello dear " . $first_name . " " . $last_name . "!<br />";
$message .= "<br>We are pleased to inform you that ";
$event_message = "your chosen foreign language courses will take place $tomorrow_date <ul>";
$lecture .= "";

for ($index = 0; $index < count($courses); $index += 1) {
    $course = $courses[$index];
    $lecture = $lecture . "<li>Lecture on $course at $schedule[$course]</li>";
    $lecture .= "(Your teacher is $teachers[$course])";
}

$event_message = $event_message . $lecture . "</ul>";
$message .= "$event_message";
$message .= "<br>"."Sincerely, administration!";
echo $message;



