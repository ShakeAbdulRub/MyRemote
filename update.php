<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = $_POST['message'];
  $file = 'file1.txt';
  file_put_contents($file, $message);
 //include('index.html');
// echo 'updateVideoPlayer("' . $message . '");';
 header('Location: msg.html'); // redirect to view page

  exit();
}
?>
