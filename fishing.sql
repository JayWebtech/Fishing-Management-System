-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2019 at 05:29 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `fishing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(500) NOT NULL,
  `tutors` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `title`, `tutors`) VALUES
(1, ' <font color="#fff"><h5>INTRODUCTION</h5> </font>', '  <font color="#fff">        Learning to fish can be as simple as tying your shoe. You may find yourself\r\nsitting on the bank of a river or pond using a cane pole and a can of worms,\r\nor using a fully-rigged boat with state-of-the-art equipment. Either way,\r\nwith some basic knowledge and a minimum of skill, a beginning angler can\r\nembark on a lifetime of fun, relaxation, and camaraderie with other anglers.\r\nIn the next few pages, we’ll discuss several styles of fishing, types of rods,\r\nreels, knots, baits, lures, fresh and saltwater fish, and aquatic habitats. You’ll\r\nfind tips to improve your skills and what you can use to have a fun, exciting,\r\nand successful fishing trip. You’ll also learn how you can help protect our\r\nstate’s precious aquatic resources.\r\nAnd don’t forget – fishing isn’t just about catching fish!As experienced\r\nanglers will tell you, fishing is one of the best ways families and friends relax\r\ntogether as they enjoy being outdoors and learning new skills.\r\nCane poles are simply a pole or straight rod with a fishing line tied on to\r\nit. Use cane poles mainly for shoreline fishing since you’re restricted to\r\ndepth and distance you can reach. Cane poles can be made of bamboo,\r\nfiberglass, graphite or even a straight tree branch. Cane poles work, are\r\neasy to use and are inexpensive.<br><br>\r\n<b>Spincasting and Baitcasting Rods</b>\r\n<br><br>\r\nCasting rods have “spincast” or “baitcast” reels and line guides mounted\r\non top. Spincasting rods are easy to handle and perfect for beginners.\r\nThese rods have straight handles and small line guides. Spincast tackle is\r\nthe most popular. Baitcasting rods have either a pistol-grip or straight\r\nhandle. The baitcast rod with its more complex reel is more difficult to\r\ncontrol and is better suited for an experienced angler.\r\n<br><br>\r\n<b>Saltwater Tackle</b>\r\n<br><br>\r\nGoing after saltwater fish involves a little change\r\nin the strength of the equipment. The rods,\r\nreels, hooks, line and lures or baits vary just as in\r\nfreshwater fishing, but they can be stronger and\r\nheavier, built to withstand larger fish and natural\r\nor artificial structures.\r\n\r\n</font>\r\n'),
(2, ' <font color="#fff"><h5>BASIC FISHING TACKLE</h5>', '  <font color="#fff">\r\n <h3>Hooks</h3>\r\nHooks come in an assortment of sizes and styles and must be kept sharp\r\nto be effective. If you plan to release your catch, bend down the barb\r\nto make it easier to remove the hook. Choose the size of hook for the\r\nspecies of fish you are trying to catch and the type of bait you are using.\r\nAsk a seasoned angler or a bait and tackle dealer for suggestions.\r\n<h3>Line</h3>\r\nFishing line comes in pound-test, (the line size or strength). The larger\r\nthe line size the stronger it is. Six-pound test line is more flexible but is\r\nnot as strong as 12-pound test line. Match your fishing line to your rod\r\nand reel capability and the species of fish you want to catch. Using\r\nheavier line or higher pound test than needed may reduce the number\r\nof hits or strikes you get because heavier line is more visible to fish.\r\n<h3>Sinkers</h3>\r\nSinkers are weights used to cast your bait, take bait to the bottom, hold\r\nbait in place, or keep your bobber upright. Sinkers are designed in several\r\ndifferent shapes and sizes and are used for various types of fishing techniques.\r\nThey range in size from BB split shot to five pounds, something\r\nshort of a cannon ball. In many cases, you will place your sinker 4 to\r\n8 inches above your hook to allow live bait to look natural to the fish.\r\n<h3>Bobbers</h3>\r\nBobbers, floats and corks are used for three reasons. They keep your\r\nbait where the fish are biting, keep bait off the bottom, and they tell you\r\nwhen you’re getting a bite or strike by bobbing up and down. Bobbers\r\ncome in various shapes from round, to pencil or quill, to popping, and\r\noblong. Most bobbers are spring-loaded and attach to your fishing line\r\nwith a clip. Some are tied directly to your line or allow the line to slip\r\nentirely through for slip-cork fishing.\r\n</font>'),
(3, '<font color="#fff"><h5>FISHING REELS</h5>', '  <font color="#fff">  <h3>Spincast</h3>\r\nThis popular reel is ideal for beginners.\r\nKnown as a “closed-faced reel,” it’s the\r\neasiest reel to use.\r\n<h3>Spinning</h3>\r\nThis “open-face reel” mounts under the\r\nrod. Fishing line spools off quickly allowing\r\nlonger casts. This reel is able to cast\r\nlighter baits and lures.\r\n<h3>Baitcast</h3>\r\nBaitcast tackle is suitable for all types of\r\nfish and fishing. The spool turns when\r\nyou cast, however, and can entangle the\r\nline if not properly adjusted. You’ll need\r\nto practice with this model.\r\n<h3>Fly reel</h3>\r\nThe fly reel is designed to allow fluid\r\nmovement of the fishing line. This reel is\r\nmounted on the bottom of the rod.\r\n<br>\r\n<img src="../images/Fish-at-Kainde.jpg" style="width: 20%">\r\n'),
(5, ' <font color="#fff"><h5>CASTING TIPS</h5>', ' <font color="#fff"> A spincasting reel has a button that you push with your thumb to release\r\nthe line.\r\n<br>\r\n1. Grasp the rod’s handle or pistol grip with one hand. Push the reel’s\r\nthumb button down and hold it in.\r\n<br>\r\n2. Face the target area with your body turned to a slight angle, about\r\na quarter turn. Aim the rod tip toward the target, about level with\r\nyour eyes.\r\n<br>\r\n3. Swiftly and smoothly bend your arm at the elbow, raising your hand\r\nwith the rod until it almost reaches eye level. When the rod is\r\nalmost straight up and down, it will be bent back by the weight of the\r\npractice plug. As the rod bends, move your forearm forward with a\r\nslight wrist movement.\r\n<br>\r\n4. When the rod reaches eye level, release the thumb button.\r\nIf the plug landed close in front of you, you released the thumb button too\r\nlate. If the plug went more or less straight up, you released the thumb button\r\ntoo soon.\r\n'),
(6, ' <font color="#fff"><h5>KNOT TYING</h5>', ' <font color="#fff"> <h3>Arbor Knot</h3>\r\n<br>\r\nQuick, easy connection for attaching\r\nline to the reel spool.\r\n<br>\r\n1. Pass the line around the reel\r\narbor (spool).\r\n<br>\r\n2. Tie an overhand knot around the\r\nmain line.\r\n<br>\r\n3. Tie a second overhand knot in\r\nthe tag (loose) end.\r\n<br>\r\n4. Pull the knot in the tag end tight\r\nand clip off the excess line.\r\nSnug down the first overhand knot on the reel.\r\n<h3>Palomar Knot</h3>\r\nThe easiest to tie and the strongest knot\r\nknown to hold terminal tackle.\r\n<br>\r\n1. Double 4 inches of line to form a\r\nloop and pass the loop through the\r\neye of the fishing hook. Let the hook\r\nhang loose.\r\n<br>\r\n2. Tie an overhand knot in the doubled\r\nline. Don’t twist or tighten line.\r\n<br>\r\n3. Pull the loop far enough to pass it\r\ncompletely over the hook.\r\n<br>\r\n4. Wet the line.\r\n<br>\r\n5. Hold the hook carefully, and pull\r\nthe loose end with the standing line\r\nslowly to tighten the loose end.\r\n'),
(7, ' <font color="#fff"><h5>NATURAL AND LIVE BAITS<h5>', ' <font color="#fff"> <h3>COMMON FRESHWATER BAITS</h3>\r\n<b>Crickets and Grasshoppers</b>\r\n<br>\r\nThese are excellent choices for sunfish, bass\r\nand catfish. Both of these insects can be\r\ncaught by hand or with an insect net. Look\r\nfor them in thick, tall grass or at night under\r\nlights. Laying a cloth, towel, cardboard or\r\nnewspaper on the grass will attract crickets.\r\nYou want to use small hooks for sunfish\r\n(#6-#10) and medium-sized hooks for\r\nbass and catfish (#1 or #2). Make sure the\r\npoint of the hook is completely covered to\r\nincrease bites.\r\n<h3>Worms</h3>\r\nWhether it’s an earthworm, red wiggler or\r\nnightcrawler, worms are a favored choice\r\nfor the majority of freshwater fish in Texas.\r\nYou can either raise your own in a compost pile, dig them from your\r\ngarden or purchase from bait shops and fishing tackle stores. Remember\r\nto cover the point of the hook when fishing for sunfish to keep them\r\nfrom pulling the worm off the hook. Store live, leftover worms in the\r\nrefrigerator for the next time you go fishing.\r\n<h3>Minnows</h3>\r\nVarieties of minnows are used to catch\r\nboth fresh and saltwater fish. Keep\r\nminnows in an aerated minnow bucket\r\nand don’t crowd them. Remember to\r\nchange the water often to keep the minnows lively. Hook them through\r\nthe lips or under the dorsal fin. Avoid hooking through the backbone\r\nbecause this will kill the minnow.\r\n<h3>Crayfish</h3>\r\nCrayfish, known as crawfish, crawdads\r\nor mudbugs, are used for catching largemouth\r\nand smallmouth bass, white bass,\r\ncatfish and freshwater drum. They can\r\nbe caught in small ponds, roadside ditches or where depressions hold\r\nwater frequently and usually after a rain. These can be fished either live,\r\ndead or using just the tail. Hook through the underside of the tail so\r\nthe point protrudes through the top. Catfish and freshwater drum don’t\r\nmind if it’s live or dead. Grasp the crayfish, and pull the tail away from\r\nthe head, threading the hook through its tail or both sides of body.\r\nFreshwater drum prefer crayfish to any other type of live or dead bait.\r\n<h3>PREPARED BAITS</h3>\r\nFrom homemade concoctions to commercially-made baits, these are\r\nprimarily used for catching bottom-feeding fish like catfish and carp. Your\r\nchoices include canned corn, stink bait, cottonseed cake, hot dogs, dough\r\nballs – the list goes on with this type of bait. Fishing with treble hooks\r\nworks best to keep the bait from being flung off during casting.\r\n<h3>COMMON SALTWATER BAITS</h3>\r\n<h4>Shrimp</h4>\r\nShrimp are widely-used bait for saltwater\r\nfishing. Shrimp can be either alive or dead.\r\nHook shrimp under the rostrum “horn”\r\non the head to fish with live shrimp. You\r\ncan either peel or leave the shell on fresh\r\ndead shrimp for fishing on the bottom.\r\nMany anglers fishing for freshwater catfish\r\nuse dead shrimp for bait.\r\n<h4>Crab</h4>\r\nDifferent species are used for saltwater fishing\r\nto catch sheepshead, black drum, cobia\r\nand snapper. Sheepshead and snapper go after\r\nhermit and fiddler crabs hooked through the\r\nbody. Black drum and cobia have a liking for\r\nblue crabs. Break in half or quarters for black\r\ndrum and hook through the body sections. Use small, whole, live blue\r\ncrab for cobia by removing the pinchers and hook through the body.\r\n<h4>Squid</h4>\r\nYou can purchase dead squid for saltwater bottom-fishing. Fish such as\r\ngafftopsail catfish, and snapper are good examples. Hook the squid two\r\nor three times in and out through body to avoid small fish stealing the bait.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `f_idea` varchar(10) NOT NULL,
  `password` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `dob`, `f_idea`, `password`) VALUES
(1, 'Adamu', 'Jethro', 'jethroadamzy@gmail.com', '2019-07-08', 'YES', '989810'),
(2, 'Jabir', 'Mohammed', 'umar@gmail.com', '2019-07-16', 'NO', '989810'),
(3, 'Suleiman', 'Abdullahi', 'sule@gmail.com', '2019-07-07', 'NO', 'sules'),
(4, 'Adamu', 'Yahaya', 'adamzy@yahoo.com', '2019-07-09', 'YES', 'adamuyaks'),
(5, 'Daniel ', 'Sule', 'hanielsule@gmail.com', '2019-07-02', 'NO', '0908342'),
(6, 'Zahila', 'Hannah', 'jamkie@yahoo.com', '1998-10-01', 'NO', 'samjakie'),
(7, 'Jude ', 'Samuel', 'judesam@gmail.com', '2019-07-16', 'YES', '989810');
