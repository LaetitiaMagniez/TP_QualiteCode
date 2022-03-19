<?php

namespace UPJV\Validator;

class ValidatorEngine
{
    protected array $setOfValidator;

    public function __construct($json)
    {
        $json = json_decode($json, true);
        foreach ($json as $name => $contraintes) {
            foreach ($contraintes as $class => $param) {
                include_once __DIR__ . "/ValidatorInterface.php";
                include_once __DIR__ . "/$class.php";
                $className = '\UPJV\Validator\\' . $class;
                /** @var ValidatorInterface $validator */
                $validator = new $className();
                $this->setOfValidator[$name][] = $validator->build($param);
            }
        }
    }

    public function run(array $inputs): bool
    {
        foreach ($inputs as $name => $val) {
            if (!array_key_exists($name, $this->setOfValidator)) {
                return false;
            }
            foreach ($this->setOfValidator[$name] as $validator) {
                if (!$validator->check($val)) {
                    return false;
                }
            }
        }
        return true;
    }
}
