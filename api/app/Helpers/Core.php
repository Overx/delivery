<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 05/05/2016
 * Time: 10:49
 */

namespace LineXTI\Helpers;


class Core
{
    /**
     * @param $role
     * @return string
     */
    public static function roleText($role)
    {
        switch ($role) {
            case 'client':
                return 'Cliente';
                break;
            case 'admin':
                return 'Administrador';
                break;
            case 'deliveryman':
                return 'Entregador';
                break;
        }
    }

    /**
     * @param $url
     * @param $valor
     * @return string
     */
    public static function Ativate($valor, $url) {
        $ativate = '';
        if (is_array($url)):
            $ativate = (in_array(\Request::path(), $url)  ? $valor : '');
        else:
            $ativate = (\Request::path() == $url ? $valor : '');
        endif;
        return $ativate;
    }

    /**
     * @param $status
     */
    public static function renderStatus($status)
    {
        switch ($status) {
            case '1':
                return '<label class="label label-primary">Solicitado</label>';
                break;
            case '2':
                return '<label class="label label-warning">Em transito</label>';
                break;
            case '3':
                return '<label class="label label-success">Entregue</label>';
                break;
        }
    }

}