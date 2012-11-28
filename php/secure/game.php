<?php
require_once 'sql.php';
require_once 'paths.php';

function getGameList() {
    $html="<ul>\n";
    $games = getAllGames();
    foreach ($games as &$game) {
	$html=$html.'<li><a href="'.$LOCATION.$HOME.'?id='.$game["id"].'">'.$game["display_name"].'</a></li>';
    }
    $html=$html."\n</ul>";
    echo $html;
}

function getGameTabs($id) {
    $html="<table><tr>";
    $html=$html.'<th><a href="'.$LOCATION.$HOME.'?id='.$id.'&tab=game">Game</a></th>';
    $html=$html.'<th><a href="'.$LOCATION.$HOME.'?id='.$id.'&tab=all">All Scores</a></th>';
    $html=$html.'<th><a href="'.$LOCATION.$HOME.'?id='.$id.'&tab=own">Own Scores</a></th>';
    $html=$html.'<th><a href="'.$LOCATION.$HOME.'?id='.$id.'&tab=hight">Hightscores</a></th>';
    $html=$html.'</tr></table>';
    echo $html;
}

function formatAllScores($id) {
    $scores = getAllScores($id);
    $html="<table>\n\t\t\t<tr><th>Player</th><th>Date</th><th>Score</th></tr>\n";
    foreach ($scores as &$score) {
	$html=$html."\t\t\t<tr><th>".$score["alias"]."</th><th>".$score["created"]."</th><th>\n".$score["points"]."</th></tr>";
    }
    $html=$html."\t\t</table>\n";
    echo $html;
}

function formatOwnScores($id, $session_id) {
    $scores = getOwnScores($id, getUser($session_id));
    $html="<table>\n\t\t\t<tr><th>Date</th><th>Score</th></tr>\n";
    foreach ($scores as &$score) {
	$html=$html."\t\t\t<tr><th>".$score["created"]."</th><th>".$score["points"]."</th></tr>\n";
    }
    $html=$html."\t\t</table>\n";
    echo $html;
}

function formatHightScores($id) {
    $scores = getAllHighScores($id);
    $html="<table>\n\t\t\t<tr><th>Player</th><th>Date</th><th>Score</th></tr>\n";
    foreach ($scores as &$score) {
	$html=$html."<tr>\t\t\t<th>".$score["alias"]."</th><th>".$score["created"]."</th><th>\n".$score["points"]."</th></tr>";
    }
    $html=$html."\t\t</table>\n";
    echo $html;
}

?>