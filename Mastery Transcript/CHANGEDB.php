<?php
//USE ;end TO SEPERATE SQL STATEMENTS. DON'T USE ;end IN ANY OTHER PLACES!

$sql = array();
$count = 0;

//v0.1.00
$sql[$count][0] = '0.1.00';
$sql[$count][1] = '-- First version, nothing to update';


//v0.2.00
$sql[$count][0] = '0.2.00';
$sql[$count][1] = "
INSERT INTO `gibbonAction` (`gibbonModuleID`, `name`, `precedence`, `category`, `description`, `URLList`, `entryURL`, `defaultPermissionAdmin`, `defaultPermissionTeacher`, `defaultPermissionStudent`, `defaultPermissionParent`, `defaultPermissionSupport`, `categoryPermissionStaff`, `categoryPermissionStudent`, `categoryPermissionParent`, `categoryPermissionOther`) VALUES ((SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript'), 'Browse Credits', 0, 'Journey', 'Allows users to view a grid of available mastery credits.', 'credits.php', 'credits.php', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('001', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Credits'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('002', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Credits'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('003', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Credits'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('004', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Credits'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('006', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Credits'));end
INSERT INTO `gibbonAction` (`gibbonModuleID`, `name`, `precedence`, `category`, `description`, `URLList`, `entryURL`, `defaultPermissionAdmin`, `defaultPermissionTeacher`, `defaultPermissionStudent`, `defaultPermissionParent`, `defaultPermissionSupport`, `categoryPermissionStaff`, `categoryPermissionStudent`, `categoryPermissionParent`, `categoryPermissionOther`) VALUES ((SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript'), 'Browse Opportunities', 0, 'Journey', 'Allows users to view a grid of available learning opportunties.', 'opportunities.php', 'opportunities.php', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('001', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Opportunities'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('002', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Opportunities'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('003', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Opportunities'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('004', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Opportunities'));end
INSERT INTO `gibbonPermission` (`gibbonRoleID` ,`gibbonActionID`) VALUES ('006', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Browse Opportunities'));end
";

//v0.2.01
$sql[$count][0] = '0.2.01';
$sql[$count][1] = "
INSERT INTO `gibbonAction` (`gibbonModuleID`, `name`, `precedence`, `category`, `description`, `URLList`, `entryURL`, `defaultPermissionAdmin`, `defaultPermissionTeacher`, `defaultPermissionStudent`, `defaultPermissionParent`, `defaultPermissionSupport`, `categoryPermissionStaff`, `categoryPermissionStudent`, `categoryPermissionParent`, `categoryPermissionOther`) VALUES ((SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript'), 'Credits & Licensing', 0, 'Other', 'Allows a user to view image credits for licensed images.', 'logo_credits.php', 'logo_credits.php', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y') ;end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '1', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Credits & Licensing'));end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '2', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Credits & Licensing'));end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '3', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Credits & Licensing'));end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '4', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Credits & Licensing'));end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '6', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Credits & Licensing'));end
ALTER TABLE `masteryTranscriptDomain` ADD `creditLicensing` text NOT NULL;end
ALTER TABLE `masteryTranscriptCredit` ADD `creditLicensing` text NOT NULL;end
ALTER TABLE `masteryTranscriptOpportunity` ADD `creditLicensing` text NOT NULL;end
";

//v0.2.02
$sql[$count][0] = '0.2.02';
$sql[$count][1] = "";

//v0.5.00
$sql[$count][0] = '0.5.00';
$sql[$count][1] = "
INSERT INTO `gibbonAction` (`gibbonModuleID`, `name`, `precedence`, `category`, `description`, `URLList`, `entryURL`, `defaultPermissionAdmin`, `defaultPermissionTeacher`, `defaultPermissionStudent`, `defaultPermissionParent`, `defaultPermissionSupport`, `categoryPermissionStaff`, `categoryPermissionStudent`, `categoryPermissionParent`, `categoryPermissionOther`) VALUES ((SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript'), 'Record Journey', 0, 'Journey', 'Allows a student to record steps in their journey to mastery.', 'journey_record.php,journey_record_add.php,journey_record_edit.php,journey_record_delete.php', 'journey_record.php', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y', 'N', 'N') ;end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '3', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Record Journey'));end
CREATE TABLE `masteryTranscriptJourney` (`masteryTranscriptJourneyID` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT, `gibbonPersonIDStudent` int(10) unsigned zerofill NULL DEFAULT NULL, `gibbonSchoolYearID` INT(3) UNSIGNED ZEROFILL NULL DEFAULT NULL, `type` enum('Credit','Opportunity') NOT NULL DEFAULT 'Credit', `masteryTranscriptOpportunityID` int(4) unsigned zerofill NULL DEFAULT NULL, `masteryTranscriptCreditID` int(4) unsigned zerofill NULL DEFAULT NULL, `gibbonPersonIDSchoolMentor` int(10) unsigned zerofill NULL DEFAULT NULL, `status` enum('Current','Current - Pending','Complete - Pending','Complete - Approved','Exempt','Evidence Not Yet Approved') NOT NULL DEFAULT 'Current', `timestampJoined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, `timestampCompletePending` timestamp NULL DEFAULT NULL, `timestampCompleteApproved` timestamp NULL DEFAULT NULL, `gibbonPersonIDApproval` int(10) unsigned zerofill NULL DEFAULT NULL, `evidenceType` enum('File','Link') NULL DEFAULT NULL, `evidenceLocation` text NULL DEFAULT NULL, PRIMARY KEY (`masteryTranscriptJourneyID`), INDEX(`gibbonPersonIDStudent`), INDEX(`status`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `gibbonAction` (`gibbonModuleID`, `name`, `precedence`, `category`, `description`, `URLList`, `entryURL`, `defaultPermissionAdmin`, `defaultPermissionTeacher`, `defaultPermissionStudent`, `defaultPermissionParent`, `defaultPermissionSupport`, `categoryPermissionStaff`, `categoryPermissionStudent`, `categoryPermissionParent`, `categoryPermissionOther`) VALUES ((SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript'), 'Manage Journey_all', 1, 'Journey', 'Allows a member of staff to interact with all student journey records.', 'journey_manage.php,journey_manage_edit.php,journey_manage_delete.php,journey_manage_commit.php', 'journey_manage.php', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N') ;end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '1', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Manage Journey_all'));end
INSERT INTO `gibbonAction` (`gibbonModuleID`, `name`, `precedence`, `category`, `description`, `URLList`, `entryURL`, `defaultPermissionAdmin`, `defaultPermissionTeacher`, `defaultPermissionStudent`, `defaultPermissionParent`, `defaultPermissionSupport`, `categoryPermissionStaff`, `categoryPermissionStudent`, `categoryPermissionParent`, `categoryPermissionOther`) VALUES ((SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript'), 'Manage Journey_my', 0, 'Journey', 'Allows a member of staff to interact with journey records of students they mentor.', 'journey_manage.php,journey_manage_edit.php,journey_manage_delete.php,journey_manage_commit.php', 'journey_manage.php', 'N', 'Y', 'N', 'N', 'N', 'Y', 'N', 'N', 'N') ;end
INSERT INTO `gibbonPermission` (`permissionID` ,`gibbonRoleID` ,`gibbonActionID`) VALUES (NULL , '2', (SELECT gibbonActionID FROM gibbonAction JOIN gibbonModule ON (gibbonAction.gibbonModuleID=gibbonModule.gibbonModuleID) WHERE gibbonModule.name='Mastery Transcript' AND gibbonAction.name='Manage Journey_my'));end
ALTER TABLE `masteryTranscriptCredit` ADD `outcomes` text NOT NULL AFTER `description`;end
ALTER TABLE `masteryTranscriptOpportunity` ADD `outcomes` text NOT NULL AFTER `description`;end
UPDATE gibbonAction SET URLList='credits.php,credits_detail.php' WHERE name='Browse Credits' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript');end
UPDATE gibbonAction SET URLList='opportunities.php,opportunities_detail.php' WHERE name='Browse Opportunities' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Mastery Transcript');end
CREATE TABLE `masteryTranscriptJourneyLog` (`masteryTranscriptJourneyLogID` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT, `masteryTranscriptJourneyID` int(10) unsigned zerofill DEFAULT NULL, `gibbonPersonID` int(10) unsigned zerofill NOT NULL, `type` enum('Comment','Evidence','Complete - Approved','Evidence Not Yet Approved') NOT NULL DEFAULT 'Comment', `comment` text NULL DEFAULT NULL, `evidenceType` enum('File','Link') NULL DEFAULT NULL, `evidenceLocation` text NULL DEFAULT NULL, `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`masteryTranscriptJourneyLogID`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;end
";

//v0.5.01
$sql[$count][0] = '0.5.01';
$sql[$count][1] = "";
