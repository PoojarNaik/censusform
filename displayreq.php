<?php
  if(isset($_REQUEST))
  $fmlnum=$_REQUEST['num'];
  $mnum=$_REQUEST['num2'];
  $fnum=$_REQUEST['num3'];
  $hname=$_REQUEST['name1'];
  $hname2=$_REQUEST['name2'];
  $hname3=$_REQUEST['name3'];
  $agge=$_REQUEST['age'];
  $educ=$_REQUEST['education'];
  $contact=$_REQUEST['mobile'];
  $address=$_REQUEST['addr'];
?>
<h2>Family Records<h2>
  <hr>
<br/><br/>
<center>
<table  style="width:100%;">
  <tr>
    <td>family number</td>
    <td><?php echo"$fmlnum"?></td>
  </tr>
  <tr>
    <td>male members</td>
    <td><?php echo"$mnum"?></td>
  </tr>
  <tr>
    <td>female members</td>
    <td><?php echo"$fnum"?></td>
  </tr>
  <tr>
    <tr>
      <td>head of family</td>
      <td><?php echo"$hname"?></td>
    </tr>
    <td>family member1</td>
    <td><?php echo"$hname2"?></td>
  </tr>

  <tr>
    <td>family member2</td>
    <td><?php echo"$hname3"?></td>
  </tr>

  <tr>
    <td>age</td>
    <td><?php echo"$agge"?></td>
  </tr>
  <tr>
    <td>education</td>
    <td><?php echo"$educ"?></td>
  </tr>
  <tr>
    <td>contact</td>
    <td><?php echo"$address"?></td>
  </tr>
  <tr>
</table>
</center>
<!--
echo "$fmlnum<br>";
echo "$mnum<br>";
echo "$fnum<br>";
echo "$hnum<br>";
echo "$hname2<br>";
echo "$hname3<br>";
echo "$agge<br>";
echo "$educ<br>";
echo "$contact<br>";
echo "$address<br>";
?>-->
