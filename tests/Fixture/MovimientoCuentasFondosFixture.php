<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientoCuentasFondosFixture
 *
 */
class MovimientoCuentasFondosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_empresa' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_cuenta_fondo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_compra' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_venta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_cobro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_pago' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nro_cheque' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_banco' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nro_vaucher' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'debe' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'haber' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'estado' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_movimiento_cuentas_fondos_1_idx' => ['type' => 'index', 'columns' => ['id_cuenta_fondo'], 'length' => []],
            'fk_movimiento_cuentas_fondos_2_idx' => ['type' => 'index', 'columns' => ['id_empresa'], 'length' => []],
            'fk_movimiento_cuentas_fondos_3_idx' => ['type' => 'index', 'columns' => ['id_compra'], 'length' => []],
            'fk_movimiento_cuentas_fondos_4_idx' => ['type' => 'index', 'columns' => ['id_venta'], 'length' => []],
            'fk_movimiento_cuentas_fondos_5_idx' => ['type' => 'index', 'columns' => ['id_cobro'], 'length' => []],
            'fk_movimiento_cuentas_fondos_6_idx' => ['type' => 'index', 'columns' => ['id_pago'], 'length' => []],
            'fk_movimiento_cuentas_fondos_7_idx' => ['type' => 'index', 'columns' => ['id_banco'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_movimiento_cuentas_fondos_7' => ['type' => 'foreign', 'columns' => ['id_banco'], 'references' => ['bancos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimiento_cuentas_fondos_1' => ['type' => 'foreign', 'columns' => ['id_cuenta_fondo'], 'references' => ['cuentas_fondos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimiento_cuentas_fondos_2' => ['type' => 'foreign', 'columns' => ['id_empresa'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimiento_cuentas_fondos_3' => ['type' => 'foreign', 'columns' => ['id_compra'], 'references' => ['compras', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimiento_cuentas_fondos_4' => ['type' => 'foreign', 'columns' => ['id_venta'], 'references' => ['ventas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimiento_cuentas_fondos_5' => ['type' => 'foreign', 'columns' => ['id_cobro'], 'references' => ['cobros', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimiento_cuentas_fondos_6' => ['type' => 'foreign', 'columns' => ['id_pago'], 'references' => ['pagos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'id_empresa' => 1,
            'id_cuenta_fondo' => 1,
            'id_compra' => 1,
            'id_venta' => 1,
            'id_cobro' => 1,
            'id_pago' => 1,
            'nro_cheque' => 'Lorem ipsum dolor sit amet',
            'id_banco' => 1,
            'nro_vaucher' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2017-03-04',
            'debe' => 1.5,
            'haber' => 1.5,
            'estado' => 1
        ],
    ];
}
