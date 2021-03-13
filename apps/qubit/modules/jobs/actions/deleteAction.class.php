<?php

/*
 * This file is part of the Access to Memory (AtoM) software.
 *
 * Access to Memory (AtoM) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Access to Memory (AtoM) is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Access to Memory (AtoM).  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @author     Mike G <mikeg@artefactual.com>
 */
class JobsDeleteAction extends sfAction
{
  /**
   * Display a paginated hitlist of information objects (top-level only).
   *
   * @param sfRequest $request
   */
  public function execute($request)
  {
    if (!$this->context->user)
    {
      QubitAcl::forwardUnauthorized();
    }

    $token = $request->getParameter('token');

    if (!$this->context->user->isAuthenticated() && $token)
    {
      // Handle deletion of unauthenticated user job
      $job = QubitJob::getByUserTokenProperty($token);

      if (isset($job))
      {
        $this->deleteJobsNotInProgress([$job]);
      }

      $this->redirect($request->getReferer());
    }
    elseif ($this->context->user->isAuthenticated() && !$token)
    {
      // Handle bulk deletion of jobs associated with an authenticated user
      $jobs = QubitJob::getJobsByUser($this->context->user);
      $this->deleteJobsNotInProgress($jobs);

      // Handle bulk deletion of CLI-created job, if user is an administrator
      if ($this->context->user->isAdministrator())
      {
        $criteria = new Criteria();
        $criteria->add(QubitJob::USER_ID, null, Criteria::ISNULL);

        $jobs = QubitJob::get($criteria);
        $this->deleteJobsNotInProgress($jobs);
      }

      $this->redirect(['module' => 'jobs', 'action' => 'browse']);
    }
    else
    {
      QubitAcl::forwardUnauthorized();
    }
  }

  private function deleteJobsNotInProgress($jobs)
  {
    foreach ($jobs as $job)
    {
      if (QubitTerm::JOB_STATUS_IN_PROGRESS_ID != $job->statusId)
      {
        $job->delete();
      }
    }
  }
}
