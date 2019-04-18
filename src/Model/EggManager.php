<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

/**
 *
 */
class EggManager extends AbstractManager
{
	public function showEgg 
	{
		$client = new \GuzzleHttp\Client([
       'base_uri' => 'https://easteregg.wildcodeschool.fr/api',
		   ]
		);
		// Send a request to https://foo.com/api/test
		$response = $client->request('GET', 'eggs');
		// or
		// Send request https://foo.com/api/test?key=maKey&name=toto


	}
}