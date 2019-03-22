<?php
	$files = glob("files/*", GLOB_BRACE);
	$rand = rand(0,count($files)-1);
	if (isset($_GET["debug"]))
	{
		echo 'Selected:';
		echo '<div><img style="max-width:16px;max-height:16px;" src="' . $files[$rand] . '"> ';
		echo $rand+1 . ' - <a href="' . $files[$rand] . '">' . $files[$rand] . '</a></div>';
		echo '<div><img style="max-width:100%" src="' . $files[$rand] . '"></div>';
		echo 'Files (' . count($files) . '):';
		for ($i = 0; $i < count($files); $i++)
		{
			echo '<div><img style="max-width:16px;max-height:16px;" src="' . $files[$i] . '"> ';
			echo $i+1 . ' - <a href="' . $files[$i] . '">' . $files[$i] . '</a></div>';
		}
	}
	else
	{
		header('Location: ' . $files[$rand]);
	}
?>
