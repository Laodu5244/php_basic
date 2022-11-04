<?php

class Message {
  public $msg = "php is best on the world!";
}

$message = new Message;
for ($i=0;$i<4;$i++){
  echo '<h3>'.$message->msg.'</h3>';
}
?>

<style>
body{
  width:100%;
  height:100%;
  overflow: hidden;
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;
  background-color: aliceblue;
}
h3 {
  color:tomato;
  font-size: 42px;
}
</style>



