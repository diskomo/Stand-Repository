<?php
$packages = [
	"lua/natives-1676318796" => [
		"priority" => 7,
		"files" => [
			"lib/natives-1676318796.lua" => "stand.gg/dl/lua/lib/natives-1676318796.lua",
		],
	],
	"lua/natives-1676318796-uno" => [
		"priority" => 7,
		"files" => [
			"lib/natives-1676318796-uno.lua" => "stand.gg/dl/lua/lib/natives-1676318796-uno.lua",
		],
	],
	"lua/natives-1672190175" => [
		"priority" => 6,
		"files" => [
			"lib/natives-1672190175.lua" => "stand.gg/dl/lua/lib/natives-1672190175.lua",
		],
	],
	"lua/natives-1672190175-uno" => [
		"priority" => 6,
		"files" => [
			"lib/natives-1672190175-uno.lua" => "stand.gg/dl/lua/lib/natives-1672190175-uno.lua",
		],
	],
	"lua/natives-1663599433" => [
		"priority" => 5,
		"files" => [
			"lib/natives-1663599433.lua" => "stand.gg/dl/lua/lib/natives-1663599433.lua",
		],
	],
	"lua/natives-1663599433-uno" => [
		"priority" => 5,
		"files" => [
			"lib/natives-1663599433-uno.lua" => "stand.gg/dl/lua/lib/natives-1663599433-uno.lua",
		],
	],
	"lua/natives-1660775568" => [
		"priority" => 4,
		"files" => [
			"lib/natives-1660775568.lua" => "stand.gg/dl/lua/lib/natives-1660775568.lua",
		],
	],
	"lua/natives-1660775568-uno" => [
		"priority" => 4,
		"files" => [
			"lib/natives-1660775568-uno.lua" => "stand.gg/dl/lua/lib/natives-1660775568-uno.lua",
		],
	],
	"lua/natives-1651208000" => [
		"priority" => 3,
		"files" => [
			"lib/natives-1651208000.lua" => "stand.gg/dl/lua/lib/natives-1651208000.lua",
		],
	],
	"lua/natives-1640181023" => [
		"priority" => 2,
		"files" => [
			"lib/natives-1640181023.lua" => "stand.gg/dl/lua/lib/natives-1640181023.lua",
		],
	],
	"lua/natives-1627063482" => [
		"priority" => 1,
		"files" => [
			"lib/natives-1627063482.lua" => "stand.gg/dl/lua/lib/natives-1627063482.lua",
		],
	],
	"lua/lunajson" => [
		"files" => [
			"lib/lunajson.lua" => "stand.gg/dl/lua/lib/lunajson.lua",
			"lib/lunajson/decoder.lua" => "stand.gg/dl/lua/lib/lunajson/decoder.lua",
			"lib/lunajson/encoder.lua" => "stand.gg/dl/lua/lib/lunajson/encoder.lua",
			"lib/lunajson/sax.lua" => "stand.gg/dl/lua/lib/lunajson/sax.lua",
		],
	],
	"lua/json" => [
		"files" => [
			"lib/json.lua" => "stand.gg/dl/lua/lib/json.lua",
		],
	],
	"lua/pretty.json" => [
		"version" => "r2",
		"is_dependency" => true,
		"files" => [
			"lib/pretty/json.lua" => "stand.gg/dl/lua/lib/pretty/json.lua",
			"lib/pretty/json/constant.lua" => "stand.gg/dl/lua/lib/pretty/json/constant.lua",
			"lib/pretty/json/parser.lua" => "stand.gg/dl/lua/lib/pretty/json/parser.lua",
			"lib/pretty/json/serializer.lua" => "stand.gg/dl/lua/lib/pretty/json/serializer.lua",
		],
	],
	"lua/imGUI-V2.1.2" => [
		"author" => "Murten",
		"depends" => [
			"lua/natives-1640181023",
		],
		"files" => [
			"resources/ImGUI_checkmark.png" => "stand.gg/dl/lua/resources/ImGUI_checkmark.png",
			"resources/ImGUI_cursor.png" => "stand.gg/dl/lua/resources/ImGUI_cursor.png",
			"lib/lua_imGUI V2-1.lua" => "stand.gg/dl/lua/lib/lua_imGUI V2.1.2.lua",
		],
	],
	"lua/SLAXML" => [
		"author" => "Phrogz",
		"files" => [
			"lib/slaxml.lua" => "stand.gg/dl/lua/lib/slaxml.lua",
			"lib/slaxdom.lua" => "stand.gg/dl/lua/lib/slaxdom.lua",
		]
	],
	"lua/iniparser" => [
		"author" => "well-in-that-case",
		"files" => [
			"lib/iniparser.lua" => "stand.gg/dl/lua/lib/iniparser.lua",
		],
	],
	"lua/WiriScript" => [
		"priority" => 3,
		"version" => "29",
		"author" => "Nowiry",
		"depends" => [
			"lua/natives-1660775568-uno",
			"lua/pretty.json",
		],
		"files" => [
			"WiriScript.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/WiriScript.lua",
			"lib/wiriscript/functions.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/lib/wiriscript/functions.lua",
			"lib/wiriscript/guided_missile.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/lib/wiriscript/guided_missile.lua",
			"lib/wiriscript/homing_missiles.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/lib/wiriscript/homing_missiles.lua",
			"lib/wiriscript/orbital_cannon.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/lib/wiriscript/orbital_cannon.lua",
			"lib/wiriscript/ped_list.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/lib/wiriscript/ped_list.lua",
			"lib/wiriscript/ufo.lua" => "raw.githubusercontent.com/nowiry/WiriScript/v29/lib/wiriscript/ufo.lua",
		],
		"resources" => [
			"resources/WiriTextures.ytd" => "raw.githubusercontent.com/nowiry/WiriScript/v18/resources/WiriTextures.ytd"
		]
	],
	"lua/Keramis Sounds" => [
		"priority" => 1,
		"version" => "01-25-repo",
		"author" => "scriptcat",
		"depends" => [
			"lua/natives-1640181023"
		],
		"files" => [
			"Keramis Sounds.lua" => "stand.gg/dl/lua/Keramis Sounds 01-25-repo.lua"
		]
	],
	"lua/Example Scripts" => [
		"priority" => -1,
		"version" => "100.10",
		"author" => "Stand Development Team",
		"depends" => [
			"lua/natives-1663599433",
		],
		"files" => [
			"Example Scripts/Chat.pluto" => "stand.gg/dl/lua/Example Scripts/Chat.pluto",
			"Example Scripts/Countdown.pluto" => "stand.gg/dl/lua/Example Scripts/Countdown.pluto",
			"Example Scripts/DirectX.pluto" => "stand.gg/dl/lua/Example Scripts/DirectX.pluto",
			"Example Scripts/Draw Loop.pluto" => "stand.gg/dl/lua/Example Scripts/Draw Loop.pluto",
			"Example Scripts/Dump Runtime.pluto" => "stand.gg/dl/lua/Example Scripts/Dump Runtime.pluto",
			"Example Scripts/Explosive Hits.pluto" => "stand.gg/dl/lua/Example Scripts/Explosive Hits.pluto",
			"Example Scripts/Notification Colours.pluto" => "stand.gg/dl/lua/Example Scripts/Notification Colours.pluto",
			"Example Scripts/Online Version.pluto" => "stand.gg/dl/lua/Example Scripts/Online Version.pluto",
			"Example Scripts/UI3D.pluto" => "stand.gg/dl/lua/Example Scripts/UI3D.pluto",
			"Example Scripts/Vehicle No Decals.pluto" => "stand.gg/dl/lua/Example Scripts/Vehicle No Decals.pluto",
			"Example Scripts/Vehicle Spawn.pluto" => "stand.gg/dl/lua/Example Scripts/Vehicle Spawn.pluto",
		],
		"resources" => [
			"resources/Example Scripts/Heart.png" => "stand.gg/dl/lua/resources/Example Scripts/Heart.png",
		]
	],
	"lua/Crosshair" => [
		"version" => "0.1",
		"author" => "CocoW",
		"files" => [
			"Crosshair.lua" => "stand.gg/dl/lua/Crosshair 0.1.lua",
		],
		"resources" => [
			"cr1.png" => "stand.gg/dl/lua/resources/cr1.png",
			"cr2.png" => "stand.gg/dl/lua/resources/cr2.png",
		]
	],
	"lua/Chat Interface" => [
		"version" => "1.0.2",
		"description" => "A simple interface for the in-game chat which allows you to read and write via the web interface.",
		"files" => [
			"Chat Interface.lua" => "stand.gg/dl/lua/Chat Interface 1.0.2.lua",
		]
	],
	"lua/FlappyStand" => [
		"version" => "0.1",
		"author" => "CocoW",
		"depends" => [
			"lua/natives-1627063482",
		],
		"files" => [
			"FlappyStand.lua" => "stand.gg/dl/lua/FlappyStand 0.1.lua",
		],
		"resources" => [
			"resources/FlappyStand/flappy.png" => "stand.gg/dl/lua/resources/FlappyStand/flappy.png",
			"resources/FlappyStand/flappy_y.png" => "stand.gg/dl/lua/resources/FlappyStand/flappy_y.png",
			"resources/FlappyStand/gameover.png" => "stand.gg/dl/lua/resources/FlappyStand/gameover.png",
			"resources/FlappyStand/logo.png" => "stand.gg/dl/lua/resources/FlappyStand/logo.png",
			"resources/FlappyStand/stand.png" => "stand.gg/dl/lua/resources/FlappyStand/stand.png",
			"resources/FlappyStand/tube.png" => "stand.gg/dl/lua/resources/FlappyStand/tube.png",
			"resources/FlappyStand/tube_g.png" => "stand.gg/dl/lua/resources/FlappyStand/tube_g.png",
			"resources/FlappyStand/tube_pain.png" => "stand.gg/dl/lua/resources/FlappyStand/tube_pain.png",
		]
	],
	"lua/No Police Helicopters" => [
		"version" => "1.0",
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
		],
		"files" => [
			"No Police Helicopters.lua" => "stand.gg/dl/lua/No Police Helicopters 1.0.lua",
		],
	],
	"lua/JerryScript" => [
		"priority" => 2,
		"author" => "jerry123",
		"version" => "1.14.6",
		"depends" => [
			"lua/natives-1660775568-uno",
			"lua/JSkeyLib",
			"lua/JSlangLib",
			"lua/ScaleformLib",
		],
		"files" => [
			"JerryScript.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/JerryScript.lua",
			"store/JerryScript/Language/Dutch.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Dutch.lua",
			"store/JerryScript/Language/Simplified_Chinese.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Simplified_Chinese.lua",
			"store/JerryScript/Language/French.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/French.lua",
			"store/JerryScript/Language/German.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/German.lua",
			"store/JerryScript/Language/Korean.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Korean.lua",
			"store/JerryScript/Language/Lithuanian.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Lithuanian.lua",
			"store/JerryScript/Language/Polish.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Polish.lua",
			"store/JerryScript/Language/Portugese.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Portugese.lua",
			"store/JerryScript/Language/Russian.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Russian.lua",
			"store/JerryScript/Language/Spanish.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Spanish.lua",
			"store/JerryScript/Language/Turkish.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/store/JerryScript/Language/Turkish.lua",
		],
		"resources" => [
			"resources/JS.png" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.13.4/resources/JS.png"
		],
		"resources_version" => "r2",
	],
	"lua/JSlangLib" => [
		"is_dependency" => true,
		"version" => "1.14.6",
		"author" => "jerry123",
		"files" => [
			"lib/JSlangLib.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.6/lib/JSlangLib.lua",
		],
	],
	"lua/JSkeyLib" => [
		"is_dependency" => true,
		"version" => "1.14.5",
		"author" => "jerry123",
		"files" => [
			"lib/JSkeyLib.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.5/lib/JSkeyLib.lua",
		],
	],
	"lua/ScaleformLib" => [
		"author" => "aaronlink127",
		"files" => [
			"lib/ScaleformLib.lua" => "stand.gg/dl/lua/lib/ScaleformLib.lua"
		]
	],
	"lua/LazScript" => [
		"priority" => 1,
		"author" => "Leandro Zazzi",
		"version" => "1.1",
		"depends" => [
			"lua/natives-1640181023"
		],
		"files" => [
			"LazScript.lua" => "raw.githubusercontent.com/leandrocoding/lazscript/v1.1/LAZScript.lua"
		]
	],
	"lua/MusinessBanager" => [
		"priority" => 3,
		"author" => "Stand Development Team; formerly ICYPhoenix & Ren",
		"version" => "403f783",
		"files" => [
			"MusinessBanager.lua" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/403f78382e08dc0ab2cab5047e7b73ecd7a42fab/MusinessBanagersource.lua",
		],
		"resources_version" => "r4",
		"resources" => [
			"resources/Musiness Banager/Translations/de.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/ce02262fcbef5544e401189dccc8f863e7bd1957/resources/Musiness Banager/Translations/de.txt",
			"resources/Musiness Banager/Translations/es.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/ce02262fcbef5544e401189dccc8f863e7bd1957/resources/Musiness Banager/Translations/es.txt",
			"resources/Musiness Banager/Translations/fr.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/ce02262fcbef5544e401189dccc8f863e7bd1957/resources/Musiness Banager/Translations/fr.txt",
			"resources/Musiness Banager/Translations/ko.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/ce02262fcbef5544e401189dccc8f863e7bd1957/resources/Musiness Banager/Translations/ko.txt",
			"resources/Musiness Banager/Translations/pl.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/ce02262fcbef5544e401189dccc8f863e7bd1957/resources/Musiness Banager/Translations/pl.txt",
			"resources/Musiness Banager/Translations/zh.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/ce02262fcbef5544e401189dccc8f863e7bd1957/resources/Musiness Banager/Translations/zh.txt",
		]
	],
	"lua/Heist Control" => [
		"priority" => 3,
		"author" => "IceDoomfist",
		"version" => "3.2.6",
		"depends" => [
			"lua/natives-1676318796",
		],
		"files" => [
			"Heist Control.lua" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/Heist Control.lua",
			"store/Heist Control/Language/Chinese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Chinese.txt",
			"store/Heist Control/Language/Custom.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Custom.txt",
			"store/Heist Control/Language/English.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/English.txt",
			"store/Heist Control/Language/French.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/French.txt",
			"store/Heist Control/Language/German.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/German.txt",
			"store/Heist Control/Language/Japanese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Japanese.txt",
			"store/Heist Control/Language/Korean.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Korean.txt",
			"store/Heist Control/Language/Polish.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Polish.txt",
			"store/Heist Control/Language/Portuguese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Portuguese.txt",
			"store/Heist Control/Language/Russian.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Russian.txt",
			"store/Heist Control/Language/Spanish.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.6/store/Heist Control/Language/Spanish.txt",
		],
		"resources_version" => "r2",
		"resources" => [
			"store/Heist Control/GTAHaXUI/stat.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.0/store/Heist Control/GTAHaXUI/stat.txt",
			"store/Heist Control/Image/HC Banner.png" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.0.7/store/Heist Control/Image/HC Banner.png",
			"store/Heist Control/Image/Logo.ytd" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.0.7/store/Heist Control/Image/Logo.ytd",
		],
	],
	"lua/AcjokerScript" => [
		"priority" => 2,
		"author" => "acjoker8818",
		"version" => "0.26.2",
		"depends" => [
			"lua/natives-1663599433"
		],
		"files" => [
			"AcjokerScript.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.26.2/AcjokerScript.pluto",
			"resources/AcjokerScript/ACJSTables.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.26.2/resources/AcjokerScript/ACJSTables.pluto",
			"resources/AcjokerScript/translations.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.26.2/resources/AcjokerScript/translations.pluto",
		],
	],
	"lua/xml2lua" => [
		"is_dependency" => true,
		"author" => "Paul Chakravarti",
		"version" => "1.5-2",
		"files" => [
			"lib/xml2lua.lua" => "stand.gg/dl/lua/lib/xml2lua.lua"
		]
	],
	"lua/inspect.lua" => [
		"is_dependency" => true,
		"author" => "Enrique García Cota",
		"version" => "3.1.0",
		"files" => [
			"lib/inspect.lua" => "stand.gg/dl/lua/lib/inspect.lua"
		]
	],
	"lua/quaternionLib" => [
		"is_dependency" => true,
		"author" => "Murten",
		"files" => [
			"lib/quaternionLib.lua" => "stand.gg/dl/lua/lib/quaternionLib.lua"
		]
	],
	"lua/Constructor" => [
		"priority" => 2,
		"author" => "hexarobi",
		"version" => "0.35.2r",
		"depends" => [
			"lua/natives-1672190175",
			"lua/iniparser",
			"lua/xml2lua",
			"lua/inspect.lua",
			"lua/quaternionLib",
		],
		"files" => [
			"Constructor.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/b60449fb78410ef2d4f3c6ab8ece729f138849d8/Constructor.lua",
			"lib/auto-updater.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/ba50e5934b86da618a9a60107bec02a9ac15c6c9/lib/auto-updater.lua",
			"lib/constructor/constants.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/541836538704add4bc389a9556da1f91a64f6f47/lib/constructor/constants.lua",
			"lib/constructor/constructor_lib.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/541836538704add4bc389a9556da1f91a64f6f47/lib/constructor/constructor_lib.lua",
			"lib/constructor/convertors.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/541836538704add4bc389a9556da1f91a64f6f47/lib/constructor/convertors.lua",
			"lib/constructor/translations.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/541836538704add4bc389a9556da1f91a64f6f47/lib/constructor/translations.lua",
		],
		"resources" => [
			"lib/constructor/constructor_logo.png" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/91d07cd1c8a647254b8da770d34c7c6670d8404e/lib/constructor/constructor_logo.png",
			"lib/constructor/curated_attachments.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/91d07cd1c8a647254b8da770d34c7c6670d8404e/lib/constructor/curated_attachments.lua",
			"lib/constructor/objects_complete.txt" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/91d07cd1c8a647254b8da770d34c7c6670d8404e/lib/constructor/objects_complete.txt",
		],
		"trash" => [
			"Constructs Installer.lua",
			"../Constructs/Curated",
			"../Constructs",
		],
	],
];

foreach($packages as $name => &$package)
{
	if(array_key_exists("resources", $package))
	{
		$arr = explode("/", $name);
		$resources_package_name = $arr[0]."/Resources for ".$arr[1];
		if(array_key_exists("depends", $package))
		{
			array_push($package["depends"], $resources_package_name);
		}
		else
		{
			$package["depends"] = [$resources_package_name];
		}
		$packages[$resources_package_name] = [
			"is_dependency" => true,
			"files" => $package["resources"]
		];
		if(array_key_exists("resources_version", $package))
		{
			$packages[$resources_package_name]["version"] = $package["resources_version"];
		}
		if(array_key_exists("author", $package))
		{
			$packages[$resources_package_name]["author"] = $package["author"];
		}
		unset($package["resources"]);
		unset($package["resources_version"]);
	}
}

header("Content-Type: application/json");
echo json_encode($packages);
