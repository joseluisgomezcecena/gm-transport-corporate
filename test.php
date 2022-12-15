<?php
$x= $_POST['x'];
if($x== 1) {
    echo 'x is 1';
} else {
    echo 'x is not 1';
}


if($x == TRUE)
{
  echo "x is true";
}
else
{
  echo "x is false";
}


if($x == FALSE)
  {
    echo "x is false";
  }
  else
  {
    echo "x is true";
  }

  if($x == NULL)
  {
  echo "x is null";
  }

  ?>

<?php for($x=1; $x<10; $x++): ?>

  <p>Number <?php echo $x ?></p>

<?php endfor; ?>
686 1501086
carolina rivera diaz
