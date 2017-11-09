<?php 
/*
Blacklist testing script 
Commandline tool
Coded in php 
Coder : Himel Rana
Date: 09-11-2017
Github: https://github.com/Swe-HimelRana
Stackoverflow: https://stackoverflow.com/users/8780854/himel-rana
HackRank: https://www.hackerrank.com/himelrana
website: http://himel-rana.me
Facebook: https://www.facebook.com/Swe.HimelRana
*/
error_reporting(0);

$dnsbl=array("dnsbl-1.uceprotect.net",
"dnsbl-2.uceprotect.net",
"dnsbl-3.uceprotect.net",
"dnsbl.dronebl.org",
"dnsbl.sorbs.net",
"zen.spamhaus.org",
"access.redhawk.org",
"b.barracudacentral.org",
"bl.shlink.org",
"bl.spamcannibal.org",
"bl.spamcop.net",
"bl.tiopan.com",
"blackholes.wirehub.net",
"blacklist.sci.kun.nl",
"block.dnsbl.sorbs.net",
"blocked.hilli.dk",
"bogons.cymru.com",
"cart00ney.surriel.com",
"cbl.abuseat.org",
"cblless.anti-spam.org.cn",
"dev.null.dk",
"dialup.blacklist.jippg.org",
"dialups.mail-abuse.org",
"dialups.visi.com",
"dnsbl.abuse.ch",
"dnsbl.anticaptcha.net",
"dnsbl.antispam.or.id",
"dnsbl.dronebl.org",
"dnsbl.justspam.org",
"dnsbl.kempt.net",
"dnsbl.sorbs.net",
"dnsbl.tornevall.org",
"duinv.aupads.org",
"dnsbl-2.uceprotect.net",
"dnsbl-3.uceprotect.net",
"dul.dnsbl.sorbs.net",
"dul.ru",
"escalations.dnsbl.sorbs.net",
"hil.habeas.com",
"black.junkemailfilter.com",
"intruders.docs.uu.se",
"ips.backscatterer.org",
"korea.services.net",
"l2.apews.org",
"mail-abuse.blacklist.jippg.org",
"misc.dnsbl.sorbs.net",
"msgid.bl.gweep.ca",
"new.dnsbl.sorbs.net",
"no-more-funn.moensted.dk",
"old.dnsbl.sorbs.net",
"opm.tornevall.org",
"pbl.spamhaus.org",
"proxy.bl.gweep.ca",
"psbl.surriel.com",
"pss.spambusters.org.ar",
"rbl.schulte.org",
"rbl.snark.net",
"recent.dnsbl.sorbs.net",
"relays.bl.gweep.ca",
"relays.bl.kundenserver.de",
"relays.mail-abuse.org",
"relays.nether.net",
"rsbl.aupads.org",
"sbl.spamhaus.org",
"smtp.dnsbl.sorbs.net",
"socks.dnsbl.sorbs.net",
"spam.dnsbl.sorbs.net",
"spam.olsentech.net",
"spamguard.leadmon.net",
"spamsources.fabel.dk",
"tor.dnsbl.sectoor.de",
"ubl.unsubscore.com",
"web.dnsbl.sorbs.net",
"xbl.spamhaus.org",
"zen.spamhaus.org",
"zombie.dnsbl.sorbs.net",
"dnsbl.inps.de",
"dyn.shlink.org",
"rbl.megarbl.net",
"bl.mailspike.net"
);

// Completed here
$listed = 0;
$ip = $argv[1];
$list = array();
 
if (!empty($ip)) {
	$reverse_ip=implode(".",array_reverse(explode(".",$ip)));
	  
	  

	 for ($i=0; $i <count($dnsbl); $i++){
	 	echo "Checking for :-> $dnsbl[$i]";
	 	if (checkdnsrr($reverse_ip.".".$dnsbl[$i].".","A")) {
	 		echo "  <----Listed ";
	 		$list[$listed] = $dnsbl[$i];
	 		$listed++;
	 	}
	 	echo "\r\n";

	 }

	 echo "======================================\r\n";
	 echo "===Total checkd:".count($dnsbl)." | Listed to: $listed ===\r\n\r\n";
	 echo "========Blackisted List Below=========\r\n\r\n";
	 echo "--------------------------------------\n";
	 for ($i=0; $i < count($list); $i++) { 
	 	$j = $i+1;
	 	echo "$j > $list[$i]\n";
	 }
	 echo "--------------------------------------\n";
}else{

	echo "What's Happen? First say me what I shoud do !!! :p\n\n";
	echo "Command Like this: me.php 127.0.0.1";
}
 
 

?>
