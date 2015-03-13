<?php

namespace Comja\Services\Validators\ArgumentValidators;

/**
 * バリデーション
 *
 * Allオプションと-Aは同時に指定できない
 */
class NoAllAndAValidator implements ArgumentsValidatorInterface
{

    public function validate( $param )
    {
        if( $param['all'] && $param['A'] ) return false;
    }

    public function getErrorMessage()
    {
        return '-aまたは--allオプションと-Aオプションは同時に指定できません。';
    }

}