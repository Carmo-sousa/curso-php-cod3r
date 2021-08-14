<h1 class="titulo">Boolean</h1>


<?php
echo true;
echo "<br>";
echo false;
echo "<br>";
echo TRUE;
echo "<br>";
echo FALSE;
echo "<br>";
echo var_dump(True);
echo "<br>";
echo var_dump(FALSE);
echo "<br>";
echo is_bool(TRUE);

// fazer as regras de conversões
echo "<p>Regras:</p>";
echo "<br>" . var_dump((bool) 0);
echo "<br>" . var_dump((bool) 1);
echo "<br>" . var_dump((bool) -20);
echo "<br>" . var_dump((bool) "");
echo "<br>" . var_dump((bool) " ");
echo "<br>" . var_dump((bool) "0");
echo "<br>" . var_dump((bool) "00");
?>
