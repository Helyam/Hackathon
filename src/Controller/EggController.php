<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class EggController extends AbstractController
{
    public function showEggRandom()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/']);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'eggs/random');
        $body = $response->getBody();
        $body = $body->getContents();
        $egg = json_decode($body);
        // or
        // Send request https://foo.com/api/test?key=maKey&name=toto

<<<<<<< HEAD
	public function loki()
	{
		$client = new \GuzzleHttp\Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/']	);
		$response = $client->request('GET', 'eggs/5cac51240d488f0da6151bce', [
       'loki'  => '1',
   		]);
   		$body = $response->getBody();
		$body = $body->getContents();
        $egg = json_decode($body);

        return $this->twig->render('Egg/egg.html.twig', ['tableau' => $egg]);
	}
=======
        return $this->twig->render('Egg/egg.html.twig', ['tableau' => $egg]);
    }
>>>>>>> f910d7943743997afa906b50bf0dce9d4a01c733
}