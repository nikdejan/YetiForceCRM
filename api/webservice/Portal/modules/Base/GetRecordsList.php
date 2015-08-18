<?php

/**
 * Get record list class
 * @package YetiForce.WebserviceAction
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class API_Base_GetRecordsList extends BaseAction
{

	protected $requestMethod = 'GET';

	public function getRecordsList()
	{
		$moduleName = $this->api->getModuleName();
		$user = new Users();
		$currentUser = $user->retrieveCurrentUserInfoFromFile(Users::getActiveAdminId());
		
		$listQuery = '';
		$queryGenerator = new QueryGenerator($moduleName, $currentUser);
		$queryGenerator->initForDefaultCustomView();
		$listQuery = $queryGenerator->getQuery();
//

		return ['tttt', $listQuery];
	}
}