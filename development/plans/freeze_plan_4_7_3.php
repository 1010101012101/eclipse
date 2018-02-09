<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2018-02-09
	#
	# Description: Eclipse project 4.7.3 release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Oxygen Update 3 (4.7.3) Endgame Plan";
	$pageKeywords	= "eclipse, 4.7.3, Update 3, milestone, schedule, endgame";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!
ob_start();
?>		
	<style type="text/css">
		table.schedule td {font-weight:bold; padding-left:10px;}
		table.schedule td.date {font-weight:normal; }
		table.schedule td.spacer {padding-top:10px; padding-bottom:10px; }
		table.schedule tr.current td {
			background-color: #F4EEFF;
		}
	</style>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Status</h3>
			<p><b>Working towards RC2</b></p>
      	</div>
		<div class="homeitem3col">
			<h3>Detailed Timeline</h3>
	        <table class="schedule" border="0" cellspacing="0" align="center" width=100%>
	          <tr>
	            <td>December 2017</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td>Weekly maintenance builds</td>
	            <td></td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td>January 2018</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td>Weekly maintenance builds</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td>February 2018</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">6</td>
	            <td class="date">Tue</td>
	            <td></td>
	            <td>Feature and API Freeze</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">7</td>
	            <td class="date">Wed 17:00 EST</td>
	            <td></td>
	            <td>Release Candidate 1 build (warmup)</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">9</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Submit to release train</td>
	            <td></td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr class="current">
	            <td></td>
	            <td class="date">14</td>
	            <td class="date">Wed 17:00 EST</td>
	            <td></td>
	            <td>Release Candidate 2 build</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">15</td>
	            <td class="date">Thu</td>
	            <td></td>
	            <td>1-day test pass against RC2 and sign-off</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">16</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Submit to release train</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">21</td>
	            <td class="date">Wed 17:00 EST</td>
	            <td></td>
	            <td>Release Candidate 3 build</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">22</td>
	            <td class="date">Thu</td>
	            <td></td>
	            <td>1-day test pass against RC3 and sign-off</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">23</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Submit to release train</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">28</td>
	            <td class="date">Wed 04:00 EST</td>
	            <td></td>
	            <td>Release Candidate 4 build [if required]</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td>March 2018</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">2</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Submit to release train [if required]</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">9</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Simultaneous release train complete with RC4</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">10 to 20</td>
	            <td class="date"></td>
	            <td></td>
	            <td>Quiet week/buffer</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">21</td>
	            <td class="date">Wed</td>
	            <td></td>
	            <td>Simultaneous release train GA Oxygen.3</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	        </table>
			<p>
			Here are some holidays during the freeze period to keep in mind:
			</p>
			<ul>
				<li>January 26 - Bangalore, India</li>
			</ul>
      	</div>
		<div class="homeitem3col">
			<h3>Useful Links</h3>
			<ul>
			<li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">Build Schedule</a> - details on build times.</li>
			<li><a href="http://wiki.eclipse.org/Eclipse/Release_checklist">Eclipse Release Checklist</a> - lists various things that need to be checked before each release.</li>
			<li><a href="https://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_7.xml">Eclipse Project Oxygen Plan</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/Oxygen">Oxygen Simultaneous Release</a></li>
			</ul>
      	</div>
		<div class="homeitem3col">
			<h3>What is the game plan?</h3>
			<p> 
	 		The Eclipse Oxygen Update Release 3 ("Oxygen Update 3 (4.7.3)") endgame involves building 
	        a series of release candidates leading to the Eclipse project's contribution to the
	        Oxygen Update 3 (4.7.3) release. The Eclipse project version number for this release is 4.7.3.
	        By its nature, this update release contains fixes to a small number 
	        of serious problems found in the June 2017 Oxygen (4.7) release, , as well as carefully selected
	        feature and API additions. The new feature and API additions must be low-risk by nature, as well
	        as tested and proven in master before they can be backported.
	        We make and verify each changes carefully, so that we do not need to tie up the entire development 
	        team in time-consuming test passes. As always, we welcome help from the 
	        community with testing the release candidates. By default, Oxygen Update 3 (4.7.3)
	        is supposed to work exactly like the initial Oxygen (4.7) release except for the problems we intended 
	        to fix. All problems fixed in Oxygen Update 3 (4.7.3) are in the Eclipse bugzilla database 
	        and flagged with Target Milestone &quot;4.7.3&quot; (query bugzilla for 
	        the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=Eclipse&list_id=17133736&product=Equinox&product=JDT&product=PDE&product=Platform&query_format=advanced&resolution=FIXED&target_milestone=4.7.3&target_milestone=Oxygen.3">complete 
	        list of bugs fixed in Oxygen Update 3 (4.7.3)</a>). So we're most interested in identifying 
	        regressions where we've changed something that we did not intend to.
	        </p> 

	        <p>General announcements during the Oxygen Update 3 (4.7.3) endgame are posted to the 
	        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a> 
		    developer mailing list. Anyone participating in the endgame should be subscribed 
			to this list, and should direct any general questions and comments about the process 
			there as well.</p>
			
			<strong>API change approval</strong>
	        <p>
			No API changes are expected during a update release. Any exception must be
			approved by the PMC. No changes are to be released without prior approval
			and associated bug report. Please send the request for approval to the eclipse-pmc
			mailing list. If a change is made to API to make it binary compatible with
			a previous release, technically this is still an API change, and thus it should be treated
			in the same way as any other API change requests.
			</p>

			<strong>Feature work approval</strong>
	        <p>
			Any feature work must be approved by the PMC. No changes are to be released without prior approval
			and associated bug report. Please send the request for approval to the eclipse-pmc
			mailing list.
			</p>


		   <strong>RC1 - Feature and API Freeze</strong>
		   <p>
		   Release candidate 1 is a warm-up build to ensure the release train build
		   process is in place and all projects are making contributions. All fixes submitted 
		   to update stream builds must have a component lead or PMC vote on the bug report,
		   and the fix must be reviewed by an additional committer (any committer other than
		   the one who made the fix).
		   <br>
		   No new features or APIs are allowed after RC1.
		   </p>

		   <strong>RC2</strong>
		   <p>
	        Release candidate containing fixes for the majority of known outstanding 
	        defects that we intend to fix for Oxygen Update 3 (4.7.3). At the end of RC2 build, 
	        there should not be any open defects tagged 4.7.3. All fixes submitted 
	        to the maintenance stream builds must have a component lead or PMC vote on the bug report,
	        and the fix must be reviewed by an additional committer (any committer other than
	        the one who made the fix).
	        </p>      
	
	        <strong>Test pass using RC2</strong>
	        <p>Concerted 1-day testing effort using RC2 involving entire community including 
	        all component teams. The goal is to verify all the fixes and check for any regressions.
			</p>
	
	        <strong>RC3</strong>
	        <p>Release candidate containing fixes for all known outstanding defects
	        that we intend to fix for Oxygen Update 3 (4.7.3). All fixes submitted to RC3 must have a PMC vote on the bug report,
	        and the fix must be reviewed by an additional committer (any committer other than
	        the one who made the fix).
	        Ensure that all feature/plugin versions have been consistently incremented when needed.
	        </p>
	
	        <strong>Test pass using RC3</strong>
	        <p>Concerted 1-day testing effort using RC3 involving entire community 
	           including all component teams. The goal is to verify all the fixes, check 
	           for any regressions and sanity check our RC3 candidate.
	         </p>
	
	         <strong>RC4</strong>
	         <p>Release candidate 4, if required, to fix problems detected during the test pass.
	         We expect NO CHANGE at this point. If you find a show stopper, please notify ASAP the 
	         <a href="http://dev.eclipse.org/mailman/listinfo/eclipse-pmc">eclipse-pmc@eclipse.org</a> mailing list.
	         All fixes submitted to RC4 must have a PMC vote on the bug report and be reviewed
	         by an additional committer (any committer other than the one who made the fix).
	         </p>
	         <p>No test pass is scheduled unless significant contributions occurred. If so, 
	         then Thursday would be elected for a one day test pass</p>
	
			<strong>Oxygen Update 3 (4.7.3) Release</strong>
			<p>The Oxygen Update 3 (4.7.3) release should be complete and available for download by 
	              Wednesday, March 21, 2018 as part of the <a href="https://wiki.eclipse.org/Oxygen/Simultaneous_Release_Plan#Oxygen.3">Oxygen 
	              coordinated Update release</a> . If product teams intending 
	              to ship on Oxygen Update 3 (4.7.3) uncover further serious defects during the endgame, 
	              we may schedule additional release candidate builds to incorporate fixes.
			</p>    
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
