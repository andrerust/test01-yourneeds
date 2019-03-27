<?php
namespace Main\AdminBundle\Helper\MM;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;

class TariffImportHelper extends ApiImportHelper
{
    protected $apiUrl = null;
    protected $tariffList = [];
    protected $updateParams = [
        'dataUser' => [
            'user' => '00206868',
            'pass' => 'muharuze687'
        ],
        'content' => [
            'find' => [
                []
            ]
        ]
    ];

    public function __construct(
        UserRepository $userRepository = null,
        String $url = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->apiUrl = $url;
    }


    public function showMissing()
    {
        if (isset($this->tariffList['daten'][0]['nichtanzeige'])) {
            return $this->tariffList['daten'][0]['nichtanzeige'];
        }
        return null;
    }

    protected function isResponseValid($response = null)
    {
        return (isset($response['daten'])) ? true : false;
    }

    private function verifyIfExist($value = null)
    {
    }

    public function importList()
    {
        $response = $this->curlSend(json_encode($this->updateParams), $this->apiUrl);
        $data = json_decode($response, true);
        if ($this->isResponseValid($data)) {
            $this->tariffList = $data;
            return $data;
        }
        return [];
    }

    protected function addDefault()
    {
    }

    public function __toString()
    {
        $response = '';
        if (!empty($this->tariffList)) {
            echo "Entries count: ";
            $response .= "Entries count: " . count($this->tariffList);
            $response .= "<br>";
            foreach ($this->tariffList as $key => $value) {
                $response .= "Pair: " . $key . print_r($value) . "<br>";
            }
        }
        echo "<br><br>";
        return $response;
    }
}