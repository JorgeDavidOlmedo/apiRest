<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StockFixture
 *
 */
class StockFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'stock';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'id_empresa' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_compra' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_venta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'precio_compra' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'precio_venta' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'id_proveedor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_cliente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_producto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_deposito' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_local' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_moneda' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_cambio' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'entrada' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'salida' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'estado' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_stock_1_idx' => ['type' => 'index', 'columns' => ['id_compra'], 'length' => []],
            'fk_stock_2_idx' => ['type' => 'index', 'columns' => ['id_proveedor'], 'length' => []],
            'fk_stock_3_idx' => ['type' => 'index', 'columns' => ['id_producto'], 'length' => []],
            'fk_stock_4_idx' => ['type' => 'index', 'columns' => ['id_deposito'], 'length' => []],
            'fk_stock_5_idx' => ['type' => 'index', 'columns' => ['id_local'], 'length' => []],
            'fk_stock_6_idx' => ['type' => 'index', 'columns' => ['id_moneda'], 'length' => []],
            'fk_stock_7_idx' => ['type' => 'index', 'columns' => ['id_empresa'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_stock_1' => ['type' => 'foreign', 'columns' => ['id_compra'], 'references' => ['compras', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_stock_2' => ['type' => 'foreign', 'columns' => ['id_proveedor'], 'references' => ['proveedores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_stock_3' => ['type' => 'foreign', 'columns' => ['id_producto'], 'references' => ['productos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_stock_4' => ['type' => 'foreign', 'columns' => ['id_deposito'], 'references' => ['depositos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_stock_5' => ['type' => 'foreign', 'columns' => ['id_local'], 'references' => ['locales', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_stock_6' => ['type' => 'foreign', 'columns' => ['id_moneda'], 'references' => ['monedas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_stock_7' => ['type' => 'foreign', 'columns' => ['id_empresa'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'fecha' => '2017-02-12',
            'id_empresa' => 1,
            'id_compra' => 1,
            'id_venta' => 1,
            'precio_compra' => 1.5,
            'precio_venta' => 1.5,
            'id_proveedor' => 1,
            'id_cliente' => 1,
            'id_producto' => 1,
            'id_deposito' => 1,
            'id_local' => 1,
            'id_moneda' => 1,
            'tipo_cambio' => 1.5,
            'entrada' => 1.5,
            'salida' => 1.5,
            'estado' => 1
        ],
    ];
}
