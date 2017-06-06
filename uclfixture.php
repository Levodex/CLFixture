<!--
#   UCLFixtures - uclfixture.php - Main php algorithm
#

#   CL Fixture,
#   An alorithm prototype to generate UCL(r) fixtures
#   Copyright (c) Ashutosh Verma 2017
#       (https://levodex.com/, https://github.com/levodex/)
#   All rights reserved
#   
#
#
#   CL, UCL, UEFA etc., their logos, images & soundtracks are all intellectual properties owned by UEFA and have been included for aesthetic/demonstration purposes ONLY.
#   Please check additional licensing info by UEFA before using these digital resources
#   
#
#
#
#


#
#	Main php algorithm
#
-->

<style>
		html
		{
			background:url('bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
			opacity: 0.5;
			color:white;
		}
		#tm
		{
			position:fixed;
			width:60%;
			height:80%;
			top:10%;
			left:20%;
			border:none;
			background:rgba(0, 0, 0, 1);
		}
		td
		{
			border:none;
		}
		.hd
		{
			top:10%;
		}
		.txtl
		{
			font-size:22px;
			font-color:rgba(255, 255, 255, 1);
			text-align:left;
		}
		.txtr
		{
			font-size:22px;
			font-color:rgba(255, 255, 255, 1);
			text-align:right;
		}
	</style>
	<audio autoplay>
		<source src="theme.mp3" type="audio/mpeg">
	</audio> 
<?php
		try
		{
			if
			(
				(isset($_GET['a1']))&&
				(isset($_GET['a2']))&&
				(isset($_GET['a3']))&&
				(isset($_GET['a4']))&&
				(isset($_GET['a5']))&&
				(isset($_GET['a6']))&&
				(isset($_GET['a7']))&&
				(isset($_GET['a8']))&&
				(isset($_GET['a9']))&&
				(isset($_GET['a10']))&&
				(isset($_GET['a11']))&&
				(isset($_GET['a12']))&&
				(isset($_GET['a13']))&&
				(isset($_GET['a14']))&&
				(isset($_GET['a15']))&&
				(isset($_GET['a16']))			
			)
			{
				$a=array();
				$a[0]=$_GET['a1'];
				$a[1]=$_GET['a2'];
				$a[2]=$_GET['a3'];
				$a[3]=$_GET['a4'];
				$a[4]=$_GET['a5'];
				$a[5]=$_GET['a6'];
				$a[6]=$_GET['a7'];
				$a[7]=$_GET['a8'];
				$a[8]=$_GET['a9'];
				$a[9]=$_GET['a10'];
				$a[10]=$_GET['a11'];
				$a[11]=$_GET['a12'];
				$a[12]=$_GET['a13'];
				$a[13]=$_GET['a14'];
				$a[14]=$_GET['a15'];
				$a[15]=$_GET['a16'];
				$b=array();
				$b[0]=$_GET['b1'];
				$b[1]=$_GET['b2'];
				$b[2]=$_GET['b3'];
				$b[3]=$_GET['b4'];
				$b[4]=$_GET['b5'];
				$b[5]=$_GET['b6'];
				$b[6]=$_GET['b7'];
				$b[7]=$_GET['b8'];
				$b[8]=$_GET['b9'];
				$b[9]=$_GET['b10'];
				$b[10]=$_GET['b11'];
				$b[11]=$_GET['b12'];
				$b[12]=$_GET['b13'];
				$b[13]=$_GET['b14'];
				$b[14]=$_GET['b15'];
				$b[15]=$_GET['b16'];
				$i=0;
				$j=0;
				for($i=0;$i<16;$i+=2)
				{
					for($j=($i+3)%16;($b[$j]!=null)&&($b[$i]==$b[$j]);$j=($j+2)%16)
					{
						;
					}
					$c[]=array($a[$i], $a[$j]);
					$b[$j]=null;
				}
				$teams=array
				(
					'muntd'=>"Manchester United",
					'chel'=>"Chelsea",
					'ars'=>"Arsenal",
					'leic'=>"Leciester City",
					'mancity'=>"Manchester City",
					'liv'=>"Liverpool",
					'spurs'=>"Tottenham Hotspurs",
					'bar'=>"Barcelona",
					'rma'=>"Real Madrid",
					'atm'=>"Athletico Madrid",
					'sev'=>"Sevilla",
					'dpr'=>"Deportivo",
					'val'=>"Valencia",
					'juv'=>"Juventus",
					'acm'=>"AC Milan",
					'itm'=>"Inter Milan",
					'npl'=>"Napoli",
					'dor'=>"Borussia Dortmund",
					'fcb'=>"FC Bayern Munich",
					'fcb'=>"FC Bayern Munich",
					'sch'=>"FC Schalke 04",
					'lev'=>"Bayer Leverkusen",
					'gld'=>"Borussia MonchenGladbach",
					'psg'=>"Paris Saint Germain",
					'wol'=>"Wolfsburg",
					'lyn'=>"Lyon",
					'fcznit'=>"FC Zenit",
					'ajfx'=>"Ajax FC",
					'mrs'=>"Marseille",
					'glt'=>"Galatasaray",
					'ben'=>"Benfica",
					'psv'=>"PSV Eidenhoven",
					'cel'=>"Celtic",
					'mon'=>"Monaco",
					'roma'=>"AS Roma",
					'fcp'=>"FC Porto",
					
				);
				echo '<table id="tm" cellpadding="4px">';
				for($i=0;$i<8;$i++)
				{
					echo '<tr>';
					echo '<td class="txtl">', $teams[$c[$i][0]], '</td>';
					echo '<td class="txtr">', $teams[$c[$i][1]], '</td>';
					echo '</tr>';
				}
				echo '</table>';
			}
		}
		catch(Exception $e)
		{
			;
		}
	?>