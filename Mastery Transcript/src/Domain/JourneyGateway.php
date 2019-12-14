<?php
/*
Gibbon, Flexible & Open School System
Copyright (C) 2010, Ross Parker

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

namespace Gibbon\Module\MasteryTranscript\Domain;

use Gibbon\Domain\Traits\TableAware;
use Gibbon\Domain\QueryCriteria;
use Gibbon\Domain\QueryableGateway;

class JourneyGateway extends QueryableGateway
{
    use TableAware;

    private static $tableName = 'masteryTranscriptJourney';
    private static $primaryKey = 'masteryTranscriptJourneyID';
    private static $searchableColumns = ['name'];

    /**
     * @param QueryCriteria $criteria
     * @param int $gibbonPersonID
     * @return DataSet
     */
    public function selectJourneyByStudent(QueryCriteria $criteria, $gibbonPersonID)
    {
        $query = $this
            ->newQuery()
            ->cols(['masteryTranscriptJourney.*', '\'Credit\' AS type', 'masteryTranscriptCredit.name AS name', 'logo'])
            ->from($this->getTableName())
            ->innerJoin('gibbonPerson', 'masteryTranscriptJourney.gibbonPersonIDStudent=gibbonPerson.gibbonPersonID')
            ->innerJoin('masteryTranscriptCredit','masteryTranscriptJourney.masteryTranscriptCreditID=masteryTranscriptCredit.masteryTranscriptCreditID AND type=\'Credit\'')
            ->where('masteryTranscriptJourney.gibbonPersonIDStudent = :gibbonPersonID')
            ->bindValue('gibbonPersonID', $gibbonPersonID);

        $query->unionAll()
            ->cols(['masteryTranscriptJourney.*', '\'Opportunity\' AS type', 'masteryTranscriptOpportunity.name AS name', 'logo'])
            ->from($this->getTableName())
            ->innerJoin('gibbonPerson', 'masteryTranscriptJourney.gibbonPersonIDStudent=gibbonPerson.gibbonPersonID')
            ->innerJoin('masteryTranscriptOpportunity','masteryTranscriptJourney.masteryTranscriptOpportunityID=masteryTranscriptOpportunity.masteryTranscriptOpportunityID AND type=\'Opportunity\'')
            ->where('masteryTranscriptJourney.gibbonPersonIDStudent = :gibbonPersonID')
            ->bindValue('gibbonPersonID', $gibbonPersonID);

        return $this->runQuery($query, $criteria);
    }
}