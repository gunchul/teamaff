<?php
include 'data-jp.php';
?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <title>Teamaff Ranking</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
for ($x = 0; $x < count($ranking); $x++)
{
	$fish = $ranking[$x];
	$fish_attr = $fish[0];
    echo "<h1>".$fish_attr[0]."</h1>\n";
    echo "<table width=\"400px\" border=\"0\" height=\"40\" cellspacing=\"1\" cellpadding=\"1\" bgcolor=\"#B7BBB5\">\n";
    echo "<tr bgcolor=\"#FFFFFF\">\n";
    echo "  <th>ランク</th>\n";
    echo "  <th>名前</th>\n";
    echo "  <th>記録</th>\n";
    echo "  <th>リンク</th>\n";
    echo "</tr>\n";
	for ($y = 1; $y < count($fish); $y++)
	{
	    $rank = $fish[$y];
	    $rank_count = count($rank);
		echo "<tr bgcolor=\"#FFFFFF\">\n";
		echo "  <td>".$y."</td>\n";
		echo "  <td>".$rank[0]."</td>\n";
		echo "  <td>".$rank[1]."cm</td>\n";
		echo "  <td>";
		    for ($z = 2; $z < $rank_count; $z++)
		    {
				if (stripos($rank[$z], ".jpg") === false)
				{
					echo "";//<a href=\"".$uri.$rank[$z]."\"  target=\"_blank\">釣行記</a>, ";
				}
				else
				{
					echo "<a href=\"".$image_uri.$fish_attr[1].$rank[$z]."\"  target=\"_blank\">画像</a>, ";
				}
			}
		echo "  </td>\n";
	    echo "</tr>\n";
	}
	echo "</table>\n";
	echo "<br>\n";
}

for ($x = 0; $x < count($etc); $x++)
{
	$fish = $etc[$x];
	$fish_attr = $fish[0];
    echo "<h1>".$fish_attr[0]."</h1>\n";
    echo "<table width=\"400px\" border=\"0\" height=\"40\" cellspacing=\"1\" cellpadding=\"1\" bgcolor=\"#B7BBB5\">\n";
    echo "<tr bgcolor=\"#FFFFFF\">\n";
    echo "  <th>名前</th>\n";
    echo "  <th>タイトル</th>\n";
    echo "  <th>リンク</th>\n";
    echo "</tr>\n";
	for ($y = 1; $y < count($fish); $y++)
	{
	    $rank = $fish[$y];
	    $rank_count = count($rank);
		echo "<tr bgcolor=\"#FFFFFF\">\n";
		echo "  <td>".$rank[0]."</td>\n";
		echo "  <td>".$rank[1]."</td>\n";
		echo "  <td>";
		    for ($z = 2; $z < $rank_count; $z++)
		    {
				if (stripos($rank[$z], ".jpg") === false)
				{
					echo "";//"<a href=\"".$uri.$rank[$z]."\"  target=\"_blank\">釣行記</a>, ";
				}
				else
				{
					echo "<a href=\"".$image_uri.$fish_attr[1].$rank[$z]."\"  target=\"_blank\">画像</a>, ";
				}
			}
		echo "  </td>\n";
	    echo "</tr>\n";
	}
	echo "</table>\n";
}
?>
</body>
</html>