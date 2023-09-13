<?php
// $conn=SQLiteDatabase('../db/traductor.db');
$connect=sqlite_open('../db/traductor.db');

//exactly match
$query="SELECT * FROM espanolaleman WHERE espanol='".$_POST['word']."' LIMIT 1";
$res=sqlite_query($connect,$query);
while ($row=sqlite_fetch_array($res)) {
  echo '<div class="line">
    <span class="frst">
      '.$row['espanol'].'
    </span>
    <span class="scond">
      '.$row['aleman'].'
    </span>
  </div>';
  // echo $row['espanol']."  -  ".$row['aleman'];
}
//aproximed
$query="SELECT * FROM espanolaleman WHERE espanol LIKE '%".$_POST['word']."%' LIMIT 5";
$res=sqlite_query($connect,$query);
while ($row=sqlite_fetch_array($res)) {
  echo '<div class="line">
    <span class="frst">
      '.$row['espanol'].'
    </span>
    <span class="scond">
      '.$row['aleman'].'
    </span>
  </div>';
  // echo $row['espanol']."  -  ".$row['aleman'];
}
sqlite_close($connect);
 ?>
