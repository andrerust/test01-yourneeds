<?php
namespace Main\UserBundle\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\BankAccountRepository;
use Main\UserBundle\Repository\UserRepository;

class BankAccountHelper extends AbstractARCustomHelper
{
    private $bankAccountRepository = null;
    private $primaryBankAccount = null;
    private $bankAccountParameterList = [];

    public function __construct(
        UserRepository $userRepository = null,
        BankAccountRepository $bankAccountRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->bankAccountRepository = $bankAccountRepository;
    }

    public function getPrimaryBankParameterList()
    {
        $this->bankAccountParameterList['iban'] = 'IBAN nicht angegeben';
        $this->bankAccountParameterList['bic'] = 'BIC nicht angegeben';
        $this->bankAccountParameterList['bank'] = 'Bank nicht angegeben';

        if (null != $this->primaryBankAccount) {
            $bankAccountIban = (null != $this->primaryBankAccount->getIban())
                ? $this->primaryBankAccount->getIban() : 'IBAN nicht angegeben';
            $bankAccountBic = (null != $this->primaryBankAccount->getBic())
                ? $this->primaryBankAccount->getBic() : 'BIC nicht angegeben';
            $bankAccountBank = (null != $this->primaryBankAccount->getBank())
                ? $this->primaryBankAccount->getBank() : 'Bank nicht angegeben';

            $this->bankAccountParameterList['iban'] = $bankAccountIban;
            $this->bankAccountParameterList['bic'] = $bankAccountBic;
            $this->bankAccountParameterList['bank'] = $bankAccountBank;
        }

        return $this->bankAccountParameterList;
    }

    public function setPrimaryBankAccount()
    {
        print_r($this->user->getId());
        $tmpAddress = $this->bankAccountRepository->findOneBy(
            [
                'user' => $this->user
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        $this->primaryBankAccount = $tmpAddress;
    }
}