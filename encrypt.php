<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Apprendre le PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			function encrypt($lettre, $Cle) {
				switch ($Cle) {
					case 'a':
						$lettre = ord($lettre) + 1;
						$lettre = chr($lettre);
						break;
					case 'A':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'b':
						$lettre = ord($lettre) - 12;
						$lettre = chr($lettre);
						break;
					case 'B':
						$lettre = ord($lettre) - 4;
						$lettre = chr($lettre);
						break;
					case 'c':
						$lettre = ord($lettre) + 1;
						$lettre = chr($lettre);
						break;
					case 'C':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 'd':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'D':
						$lettre = ord($lettre) - 4;
						$lettre = chr($lettre);
						break;
					case 'e':
						$lettre = ord($lettre) - 5;
						$lettre = chr($lettre);
						break;
					case 'E':
						$lettre = ord($lettre) - 12;
						$lettre = chr($lettre);
						break;
					case 'f':
						$lettre = ord($lettre) - 6;
						$lettre = chr($lettre);
						break;
					case 'F':
						$lettre = ord($lettre) - 14;
						$lettre = chr($lettre);
						break;
					case 'g':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'G':
						$lettre = ord($lettre) - 6;
						$lettre = chr($lettre);
						break;
					case 'h':
						$lettre = ord($lettre) + 1;
						$lettre = chr($lettre);
						break;
					case 'H':
						$lettre = ord($lettre) - 12;
						$lettre = chr($lettre);
						break;
					case 'i':
						$lettre = ord($lettre) - 7;
						$lettre = chr($lettre);
						break;
					case 'I':
						$lettre = ord($lettre) - 8;
						$lettre = chr($lettre);
						break;
					case 'j':
						$lettre = ord($lettre) + 1;
						$lettre = chr($lettre);
						break;
					case 'J':
						$lettre = ord($lettre) - 16;
						$lettre = chr($lettre);
						break;
					case 'k':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'K':
						$lettre = ord($lettre) - 9;
						$lettre = chr($lettre);
						break;
					case 'l':
						$lettre = ord($lettre) + 1;
						$lettre = chr($lettre);
						break;
					case 'L':
						$lettre = ord($lettre) - 5;
						$lettre = chr($lettre);
						break;
					case 'm':
						$lettre = ord($lettre) - 19;
						$lettre = chr($lettre);
						break;
					case 'M':
						$lettre = ord($lettre) - 10;
						$lettre = chr($lettre);
						break;
					case 'n':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'N':
						$lettre = ord($lettre) - 8;
						$lettre = chr($lettre);
						break;
					case 'o':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 'O':
						$lettre = ord($lettre) - 18;
						$lettre = chr($lettre);
						break;
					case 'p':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 'P':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'q':
						$lettre = ord($lettre) - 7;
						$lettre = chr($lettre);
						break;
					case 'Q':
						$lettre = ord($lettre) - 11;
						$lettre = chr($lettre);
						break;
					case 'r':
						$lettre = ord($lettre) - 4;
						$lettre = chr($lettre);
						break;
					case 'R':
						$lettre = ord($lettre) - 15;
						$lettre = chr($lettre);
						break;
					case 's':
						$lettre = ord($lettre) - 3;
						$lettre = chr($lettre);
						break;
					case 'S':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 't':
						$lettre = ord($lettre) - 13;
						$lettre = chr($lettre);
						break;
					case 'T':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'u':
						$lettre = ord($lettre) - 6;
						$lettre = chr($lettre);
						break;
					case 'U':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 'v':
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					case 'V':
						$lettre = ord($lettre) - 12;
						$lettre = chr($lettre);
						break;
					case 'w':
						$lettre = ord($lettre) - 6;
						$lettre = chr($lettre);
						break;
					case 'W':
						$lettre = ord($lettre) - 24;
						$lettre = chr($lettre);
						break;
					case 'x':
						$lettre = ord($lettre) - 9;
						$lettre = chr($lettre);
						break;
					case 'X':
						$lettre = ord($lettre) - 10;
						$lettre = chr($lettre);
						break;
					case 'y':
						$lettre = ord($lettre) - 5;
						$lettre = chr($lettre);
						break;
					case 'Y':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 'z':
						$lettre = ord($lettre) - 7;
						$lettre = chr($lettre);
						break;
					case 'Z':
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
					case 1:
						$lettre = ord($lettre) - 13;
						$lettre = chr($lettre);
						break;
					case 2:
						$lettre = ord($lettre) - 4;
						$lettre = chr($lettre);
						break;
					case 3:
						$lettre = ord($lettre) - 5;
						$lettre = chr($lettre);
						break;
					case 4:
						$lettre = ord($lettre) - 6;
						$lettre = chr($lettre);
						break;
					case 5:
						$lettre = ord($lettre) - 17;
						$lettre = chr($lettre);
						break;
					case 6:
						$lettre = ord($lettre) - 7;
						$lettre = chr($lettre);
						break;
					case 7:
						$lettre = ord($lettre) - 6;
						$lettre = chr($lettre);
						break;
					case 8:
						$lettre = ord($lettre) - 15;
						$lettre = chr($lettre);
						break;
					case 9:
						$lettre = ord($lettre) - 4;
						$lettre = chr($lettre);
						break;
					case 0:
						$lettre = ord($lettre) + 3;
						$lettre = chr($lettre);
						break;
					default:
						$lettre = ord($lettre) + 2;
						$lettre = chr($lettre);
						break;
				}
				return($lettre);
			}
			if(empty($_POST['cle']) || empty($_POST['msg']))
			{
				echo "<p>Mauvaise saisie, les deux champs doivent être remplis.</p>";
				echo "<a href=\"crypt.html\">Retour</a>";
			}
			else
			{
				$i = 0;
				$n = 0;
				echo $_POST['cle'];
				$lengthCle = strlen($_POST['cle']);
				$lengthMsg = strlen($_POST['msg']);
				$Cle = $_POST['cle'];
				$Msg = $_POST['msg'];
				//echo $Msg;
				while($i < $lengthMsg)
				{
					
					$Msg[$i] = encrypt($Msg[$i], $Cle[$n]);
					$i++;
					$n++;
					if($n >= $lengthCle)
						$n = 0;
				}
				$n -= 1;
				if($n < 0)
					$n = $lengthCle - 1;
				//echo '<p>$n = '.$n.'</p>';
				if($n % 2 == 0)
				{
					//echo '<p>$n est pair</p>';
					$n = chr(($n + 16) * 2);
				}
				else
				{
					//echo '<p>$n est impair</p>';
					$n = chr(($n + 12) * 3);
				}
				// echo '<p>$n = '.$n.'</p>';
				// echo '<p>$n = '.ord($n).'</p>';
				$Msg[$i] = $n;
				//echo '$n = '.$n.' && $i = '.$i.' && $Msg[$i] = '.$Msg[$i];
				echo '<p>Voici votre Clé de chiffrement:</p>';
				echo '<p style="padding: 5px; background-color: lightgrey; border: solid black 2px">' . $Cle . '</p><br/>';
				echo '<p>Votre message crypté:</p>';
				echo '<p style="padding: 5px; background-color: lightgrey; border: solid black 2px">' . $Msg . '</p>';
				echo "<a href=\"crypt.html\">Retour</a>";
			}
		?>
	</body>
</html>