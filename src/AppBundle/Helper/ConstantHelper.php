<?php

namespace AppBundle\Helper;

class ConstantHelper
{
    // in controller with leading $this->get('kernel')->getProjectDir();
    private static $documentPath = [
        'manager' => '/_uploads/manager/',
        'mandate' => [
            'projectDir' => true,
            'manager' => true,
            'userId' => true,
            'pathToDocument' => '/documents/custom/misc/',
            'fileName' => true
        ]
    ];
    
    private static $mailGeneral = [
        'sendMail' => true,
        'env' => [
            'prod' => [
                'loginLink' => 'https://nachhaltigkeit-versicherung.de/verification/'
            ],
            'dev' => [
                'loginLink' => 'http://localhost:82/verification/'
            ]
        ]
    
    ];
    
    
    private static $mail = [
    
    ];
    
    private static $mailCustomerGeneral = [
        'mail' => 'info@yourneeds.de',
        'sender' => 'Dein YOURneeds-Team',
        'host' => 'mail.your-server.de',
        'port' => '587',
        'security' => 'tls',
        'user' => 'info@nachhaltigkeit-versicherung.de',
        'pass' => '11Yn22.18'
    ];
    
    private static $mailCompanyGeneral = [
        'mail' => 'schaden@yourneeds.de',
        'sender' => 'YOURneeds Versicherungsmakler GmbH',
        'host' => 'mail.your-server.de',
        'port' => '587',
        'security' => null,
        'user' => 'schaden@yourneeds.de',
        'pass' => '11.Yn22.18'
    ];

    private static $mailContracts = [
        'mail' => 'info@yourneeds.de',
        'sender' => 'YOURneeds Versicherungsmakler GmbH',
        'host' => 'mail.your-server.de',
        'port' => '587',
        'security' => null,
        'user' => 'info@yourneeds.de',
        'pass' => '11.Yn22.18'
    ];

    private static $mailMessenger = [
        'sendMail' => true,
        'mail' => 'kontaktbox@yourneeds.de',
        'sender' => 'YOURneeds-Kontaktbox',
        'host' => 'mail.your-server.de',
        'port' => '587',
        'security' => 'tls',
        'user' => 'kontaktbox@yourneeds.de',
        'pass' => '11.Yn22.19'
    ];

    /**
     * @return array
     */
    public static function getDocumentPath()
    {
        return self::$documentPath;
    }

    /**
     * @return array
     */
    public static function getMailMessenger(): array
    {
        return self::$mailMessenger;
    }

    /**
     * @param array $mailMessenger
     */
    public static function setMailMessenger(array $mailMessenger): void
    {
        self::$mailMessenger = $mailMessenger;
    }

    /**
     * @return array
     */
    public static function getMailContracts()
    {
        return self::$mailContracts;
    }

    /**
     * @param array $mailGeneral
     */
    public static function setMailContracts($mailContracts)
    {
        self::$mailContracts = $mailContracts;
    }


    /**
     * @param array $documentPath
     */
    public static function setDocumentPath($documentPath)
    {
        self::$documentPath = $documentPath;
    }
    
    /**
     * @return array
     */
    public static function getMailGeneral()
    {
        return self::$mailGeneral;
    }
    
    /**
     * @param array $mailGeneral
     */
    public static function setMailGeneral($mailGeneral)
    {
        self::$mailGeneral = $mailGeneral;
    }
    
    /**
     * @return array
     */
    public static function getMailCustomerGeneral()
    {
        return self::$mailCustomerGeneral;
    }
    
    /**
     * @param array $mailCustomerGeneral
     */
    public static function setMailCustomerGeneral($mailCustomerGeneral)
    {
        self::$mailCustomerGeneral = $mailCustomerGeneral;
    }
    
    /**
     * @return array
     */
    public static function getMailCompanyGeneral()
    {
        return self::$mailCompanyGeneral;
    }
    
    /**
     * @param array $mailCompanyGeneral
     */
    public static function setMailCompanyGeneral($mailCompanyGeneral)
    {
        self::$mailCompanyGeneral = $mailCompanyGeneral;
    }
    
}