<?php 
//Create class "Boy"
Class Boy 
{	
	//Print name
	public function disp ($name)
	{
		echo "$name: ";
	}
	
	//function show what the object should to do now
	public function toDo($nowTime)
	{
		if($nowTime[hours] >= 12)
		{
			echo "Plays.<br/>";
		}
		else 
		{
			echo "Sleep.<br/>";
		}
	}
}

//Create class "Girl"
Class Girl 
{	
	//print name
	public function disp ($name)
	{
		echo "$name: ";
	}
	// function counts the number of letters in name
	public function nameStrlen($name)
	{
		echo $nameStr = mb_strlen($name)." letters in name.<br/>";
	}	
}

//Open files with names
$boysNamesArray = file("Boys.txt");
$girlsNamesArray = file("Girls.txt");

//Check there are necessary files in the directory
if ($boysNamesArray==null || $girlsNamesArray==null)
{
	exit ("File Boys.txt or Girls.txt not found! Please create file and try again!");
}

//Get date
$time = getdate();

echo "<b>Boys:</b><br/>";

//Create objects and use all functions in class Boy
foreach ($boysNamesArray as $nameBoy)
{
	$boy = new Boy();
	$boy->disp($nameBoy);
	$boy->toDo($time);
}

echo "<b>Girls:</b><br/>";

//Create objects and use all functions in class Girl
foreach ($girlsNamesArray as $nameGirl)
{
	$girl = new Girl();
	$girl->disp($nameGirl);
	$girl->nameStrlen(trim($nameGirl));
}
