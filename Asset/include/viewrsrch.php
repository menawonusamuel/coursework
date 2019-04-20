TODAY
4/14/2019
You deleted this message
7:31 PM
You deleted this message
7:33 PM
You deleted this message
7:35 PM
You deleted this message
7:36 PM
7:47 PM
You deleted this message
7:58 PM
MONDAY
You deleted this message
1:51 PM
INSERT INTO `papers` (`rpid`, `Name`, `topic_id`, `file`, `date_of_upload`, `depositor`, `category`, `review`) VALUES
(15, 'Balaba', 11, 'content.php', '2019-04-16', 'Dare', 'Student', 'lanlaa'),
(14, 'Tonto', 11, 'content-single.php', '2019-04-24', 'Dare', 'Student', 'Babay'),
(13, 'Doroty', 10, 'content-search.php', '2019-04-24', 'Admin', 'Admin', 'Never say never'),
(16, 'Cosmic', 11, 'index.php', '2019-04-23', 'Dare', 'Student', 'Entity cosmetic drugs'),
(17, 'Kolewerk', 11, 'rtl.css', '2019-07-06', 'Dare', 'Student', 'It work didnt it?'),
(18, 'Ddi', 7, '', '2008-06-09', 'cjn', 'Team leader', 'Thouhtful'),
(19, 'Ddi', 7, '', '2008-06-09', 'cjn', 'Team leader', 'Thouhtful'),
(20, 'Loti', 7, 'declaration-of-love_23-2147517078.jpg', '2019-05-04', 'dmzkvnok', 'Student', 'Lala'),
(21, 'Tuty', 7, 'IMG-20170922-WA0036.jpg', '2019-04-15', 'dmzkvnok', 'Student', 'llklkjoi'),
(22, 'Dope', 1, 'escalation-cheat-sheet.pdf', '2019-04-16', 'Admin', 'Admin', 'vjvjkjv'),
(23, 'kolo', 1, 'escalation-cheat-sheet.pdf', '2019-04-02', 'Admin', 'Admin', 'ncbnn'),
(24, 'nm', 1, 'CYDC-LEADERSHIP-TRAINING-PROGRAM 2018-FEEDBACK-FORM.doc', '2019-04-09', 'Admin', 'Admin', 'bk'),
(32, '', 1, 'q2_question_image.jpg', '', 'Admin', 'Admin', ''),
(31, '', 1, '', '', 'Admin', 'Admin', ''),
(30, '', 1, '', '', 'Admin', 'Admin', ''),
(29, 'dongo', 1, 'Proposal for Universities.doc', '2019-04-24', 'Admin', 'Admin', 'jkbkjnjkjnj'),
(33, '', 1, 'Car-Accident.jpg', '2019-04-23', 'Admin', 'Admin', 'nffklln'),
(34, 'jcnv', 1, 'CYDC-LEADERSHIP-TRAINING-PROGRAM-2018-FEEDBACK-FORM.docx', '2019-04-17', 'Admin', 'Admin', 'nnkcc');
1:53 PM
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
`review_id` int(11) NOT NULL AUTO_INCREMENT,
`rpid` int(11) NOT NULL,
`review` longtext NOT NULL,
`student_id` int(3) NOT NULL,
`std_cat` text NOT NULL,
`group_id` int(3) NOT NULL,
`reply` longtext NOT NULL,
PRIMARY KEY (`review_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
2:42 PM
THURSDAY
You deleted this message
3:47 PM
You deleted this message
4:08 PM
You deleted this message
4:11 PM
You deleted this message
4:13 PM
You deleted this message
4:18 PM
You deleted this message
4:23 PM
You deleted this message
4:32 PM
You deleted this message
4:36 PM
You deleted this message
4:42 PM
You deleted this message
4:46 PM
You deleted this message
4:48 PM
You deleted this message
4:50 PM
You deleted this message
4:56 PM
You deleted this message
3:33 PM
You deleted this message
3:41 PM
You deleted this message
3:53 PM
You deleted this message
3:59 PM
You deleted this message
4:10 PM
You deleted this message
4:16 PM
You deleted this message
4:20 PM
You deleted this message
4:24 PM
You deleted this message
4:30 PM
You deleted this message
4:32 PM
You deleted this message
4:34 PM
You deleted this message
4:46 PM
You deleted this message
4:55 PM
You deleted this message
4:57 PM
You deleted this message
5:03 PM
You deleted this message
5:11 PM
You deleted this message
5:13 PM
You deleted this message
5:15 PM
You deleted this message
5:17 PM
You deleted this message
5:22 PM
You deleted this message
5:25 PM
You deleted this message
5:29 PM
You deleted this message
5:33 PM
You deleted this message
5:35 PM
You deleted this message
5:36 PM
You deleted this message
5:39 PM
You deleted this message
5:45 PM
You deleted this message
5:52 PM
You deleted this message
5:56 PM
You deleted this message
6:03 PM
You deleted this message
6:06 PM
You deleted this message
6:08 PM
You deleted this message
6:10 PM
You deleted this message
6:12 PM
You deleted this message
6:16 PM
You deleted this message
6:19 PM
You deleted this message
6:24 PM
You deleted this message
6:30 PM
You deleted this message
6:32 PM
You deleted this message
6:34 PM
You deleted this message
6:36 PM
You deleted this message
6:38 PM
You deleted this message
6:40 PM
You deleted this message
6:41 PM
You deleted this message
6:43 PM
You deleted this message
6:45 PM
You deleted this message
6:47 PM
<?php
session_start();?>
<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
<li> <div class="dropdown">
        <button class="dropbtn">Students</button>
        <div class="dropdown-content">
            <a href="adstud.php?stud=1">Add Student</a>
            <a href="adstud.php?stud=2">View Students</a>
            <a href="adstud.php?stud=3">Delete Student</a>
            <a href="adstud.php?stud=4">Update Student</a>
        </div>
    </div></li>
<li> <div class="dropdown">
        <button class="dropbtn">Groups</button>
        <div class="dropdown-content">
            <a href="adgrp.php?grp=1">Add Group</a>
            <a href="adgrp.php?grp=2">View Groups & Team Leaders</a>
            <a href="adgrp.php?grp=3">Delete Group & Tem leader</a>
            <a href="adgrp.php?grp=4">Update Group & Team leader</a>
        </div>
    </div></li>
<li> <div class="dropdown">
        <button class="dropbtn">Research papers</button>
        <div class="dropdown-content">
            <a href="adres.php?top=1">Add Topic</a>
            <a href="adres.php?top=2">View Topic </a>
            <a href="adres.php?top=3">Delete Topic </a>
            <a href="adres.php?top=4">Update Topic</a>
            <a href="adres.php?res=1">Add research paper</a>
            <a href="adres.php?res=2">View research papers</a>
            <a href="adres.php?res=3">Delete research papers</a>
            <a href="adres.php?res=4">Update research papers</a>
        </div>
    </div></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
</header>
<?php

$gn=$_POST['gn'];
$id=$_POST['id'];

if (isset($_POST['submit']) && (empty($gn) && (empty($id)))){
    $sq="SELECT * FROM `papers` ORDER BY rpid ASC ";
    $que=mysqli_query($db,$sq);?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of papers</h1>
    <ul id="services">

    <?php


    print("<h2 color=Blue>List of research papers</h2>");
    print" 
 <table >
 	<tr><b><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td><a href=download.php?file=" .$rows[3].">". $rows[3]  ."</a></td>" ."<td>" .$rows[2]."</td>"   . "</tr>";

    }}
else{
    $sql="Select * from papers Where(rpid='$id' OR Name='$gn')";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }if(mysqli_num_rows($query)==0){?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">List of researchpapers</h1>
        <ul id="services">
        <li><?php
        echo"Record not found<p>";
        echo "<a href=adres.php?res=2>Go back</a></li></p>";
    }else{?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">List of groups</h1>
                    <ul id="services">
                        <li>
        <?php
        print("<h2><font color=Blue>List of Research papers </font></h2>");
        print"
 <table >
 	<tr><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
        while ($row = mysqli_fetch_array($query)){

            print "<tr><td>" . $row[0]. "</td>" . "<td>" . $row[1] . "</td>" . "<td>" .$row[3] ."</td>" ."<td>" .$row[2]."</td>"   . "</tr>";

        }echo "<p><a href=adres.php?res=2>Go back</a></p>";
        echo "<p><a href=adres.php?top=2>View topic</a></p>";
    }
}?>