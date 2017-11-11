<?php 
/*
Blacklist testing script 

Commandline tool
Coded in php 
Coder : Himel Rana
Date: 09-11-2017
Last Update: 10-11-2017
Github: https://github.com/Swe-HimelRana
Stackoverflow: https://stackoverflow.com/users/8780854/himel-rana
HackRank: https://www.hackerrank.com/himelrana
website: http://himel-rana.me
Facebook: https://www.facebook.com/Swe.HimelRana
Version: 0.9.2
*/
error_reporting(0);

$dnsbl=array("0spam.fusionzero.com",
"access.redhawk.org",
"all.rbl.jp",
"all.spamrats.com",
"anti-spam.org.cn",
"antispam.or.id",
"barracudacentral.org",
"bl.blocklist.de",
"bl.drmx.org",
"bl.fmb.la",
"bl.gweep.ca",
"bl.konstant.no",
"bl.kundenserver.de",
"bl.mailspike.net",
"bl.mcafee.com",
"bl.nosolicitado.org",
"bl.nszones.com",
"bl.scientificspam.net",
"bl.spamcannibal.org",
"bl.spamcop.net",
"bl.suomispam.net",
"bl.tiopan.com",
"black.junkemailfilter.com",
"blackholes.wirehub.net",
"blacklist.jippg.org",
"blacklist.woody.ch",
"block.ascams.com",
"blocked.hilli.dk",
"bogons.cymru.com",
"bsb.empty.us",
"bsb.spamlookup.net",
"calivent.com.pe",
"cart00ney.surriel.com",
"cbl.abuseat.org",
"dan.me.uk",
"db.wpbl.info",
"dev.null.dk",
"dialups.visi.com",
"dns-servicios.com",
"dnsbl-1.uceprotect.net",
"dnsbl-2.uceprotect.net",
"dnsbl-3.uceprotect.net",
"dnsbl.abuse.ch",
"dnsbl.abyan.es",
"dnsbl.anonmails.de",
"dnsbl.anticaptcha.net",
"dnsbl.cobion.com",
"dnsbl.dronebl.org",
"dnsbl.inps.de",
"dnsbl.justspam.org",
"dnsbl.kempt.net",
"dnsbl.manitu.net",
"dnsbl.net.ua",
"dnsbl.rymsho.ru",
"dnsbl.sectoor.de",
"dnsbl.sorbs.net",
"dnsbl.spfbl.net",
"dnsbl.tornevall.org",
"dnsbl.webequipped.com",
"dnsbl.zapbl.net",
"dnsrbl.org",
"dnsrbl.swinog.ch",
"docs.uu.se",
"drbl.caravan.ru",
"drbl.gremlin.ru",
"duinv.aupads.org",
"dul.pacifier.net",
"dul.ru",
"dyn.nszones.com",
"dyna.spamrats.com",
"ext.sorbs.net",
"fnrbl.fast.net",
"hil.habeas.com",
"hostkarma.junkemailfilter.com",
"icm.edu.pl",
"ips.backscatterer.org",
"korea.services.net",
"l2.apews.org",
"list.bbfh.org",
"list.quorum.to",
"mail-abuse.org",
"mav.com.br",
"multi.surbl.org",
"no-more-funn.moensted.dk",
"noptr.spamrats.com",
"opm.tornevall.org",
"pbl.spamhaus.org",
"pofon.foobar.hu",
"projecthoneypot.org",
"psbl.surriel.com",
"rbl.abuse.ro",
"rbl.blockedservers.com",
"rbl.efnet.org",
"rbl.efnetrbl.org",
"rbl.interserver.net",
"rbl.iprange.net",
"rbl.lugh.ch",
"rbl.megarbl.net",
"rbl.msrbl.net",
"rbl.polarcomm.net",
"rbl.rbldns.ru",
"rbl.schulte.org",
"rbl.snark.net",
"rbl.talkactive.net",
"rbl.webiron.net",
"rbl2.triumf.ca",
"realtimeblacklist.com",
"relays.nether.net",
"rep.mailspike.net",
"rsbl.aupads.org",
"rv-soft.info",
"s5h.net",
"sbl.nszones.com",
"sbl.spamhaus.org",
"sci.kun.nl",
"score.senderscore.com",
"scrolloutf1.com",
"short.rbl.jp",
"spam.olsentech.net",
"spam.pedantic.org",
"spam.spamrats.com",
"spambusters.org.ar",
"spameatingmonkey.net",
"spamguard.leadmon.net",
"spamlist.or.kr",
"spamrbl.imp.ch",
"spamsources.fabel.dk",
"srn.surgate.net",
"st.technovision.dk",
"superblock.ascams.com",
"truncate.gbudb.net",
"ubl.unsubscore.com",
"virus.rbl.jp",
"wormrbl.imp.ch",
"xbl.spamhaus.org",
"z.mailspike.net",
"zen.spamhaus.org",
"zeustracker.abuse.ch"
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
