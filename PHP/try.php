<?php 
echo "選択された値 ：";
if(isset($_POST['places'])) {  
  //$_POST['places']がすでに定義されている（値が送信されている）場合
  echo htmlspecialchars($_POST['places'], ENT_QUOTES, 'UTF-8');
}
?>
 <!-- country -->
<form method="post" action="" class="form_sample">
<select name="places" size="1">
  <option value=North_america"">North Amrica</option>
  <option value="South_america">South Amrica</option>
  <option value="Asia">Asia</option>
  <option value="Oceania">Oceania</option>
  <option value="Europe">Europe</option>Africa
  <option value="Africa">Africa</option>
</select>
<input type="submit" value="送信">
</form>

  <!-- exsperience -->
  <?php 
echo "選択された値 <br>";
if(isset($_POST['exsperience'])) {  
  //$_POST['drink']がすでに定義されている（値が送信されている）場合
  foreach($_POST['exsperience'] as  $key => $value) {
    echo $key . ": " .htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "<br>";
  }
}
?>

<h2>好きな食べものは？</h2>
<form method="post" action="try_back.php">
    <input type="checkbox" name="food[]" value="寿司"> 寿司　
    <input type="checkbox" name="food[]" value="天ぷら"> 天ぷら　
    <input type="checkbox" name="food[]" value="芸者"> 芸者　
<input type="submit" value="送信">
</form>

<!-- gender -->
<?php 
echo "選択された値 ：";
if(isset($_POST['gender'])) {  
  //$_POST['gender']がすでに定義されている（値が送信されている）場合
  echo htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8');
}
?>
 
<form method="post" action="" class="form_sample">
<input type="radio" name="gender" value="male">男
<input type="radio" name="gender" value="female">女
<input type="submit" value="送信">
</form>



<form method="post" action="">
<?php
echo '<select name="year">'. "\n";
$start = date('Y') + 30;  //30年後の年
$end = date('Y') - 30;  //30年前の年
for($i = $start; $i >= $end; $i--) {
  echo '<option value="' .$i . '">' . $i .'</option>'. "\n";
}
echo '</select>年' . "\n";
echo '<select name="month">' . "\n";
for ($i = 1; $i <= 12; $i++) {
  echo '<option value="' .$i . '">' . $i .'</option>'. "\n";
}
echo '</select>月' . "\n";
echo '<select name="day">' . "\n";
for ($i = 1; $i <= 31; $i++) {
  echo '<option value="' .$i . '">' . $i .'</option>'. "\n";
}
echo '</select>' . "\n";
?>
<input type="submit" value="送信">
</form>
 
<?php
if(isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])) {
  $year = @$_POST['year'];
  $month = @$_POST['month'];
  $day = @$_POST['day'];
    
  if(checkdate($month, $day, $year)) {    
    echo '<p>'. h($year). '年'. h($month). '月'. h($day). '日は有効な日付です。 </p>';
  }else{
    echo '<p>'. h($year). '年'. h($month). '月'. h($day). '日は無効な日付です。 </p>';
  }
}
 
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?> 