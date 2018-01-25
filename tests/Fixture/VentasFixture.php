<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentasFixture
 *
 */
class VentasFixture extends TestFixture
{

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
        'documento' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'dec8_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_moneda' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_cliente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_local' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_deposito' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'timbrado' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'dec8_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo_cambio' => ['type' => 'decimal', 'length' => 16, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '1.00', 'comment' => ''],
        'condicion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'dec8_swedish_ci', 'comment' => '', 'precision' => null],
        'clasificacion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'dec8_swedish_ci', 'comment' => '', 'precision' => null],
        'pago' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'dec8_swedish_ci', 'comment' => '', 'precision' => null],
        'tipo_compra' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'dec8_swedish_ci', 'comment' => '', 'precision' => null],
        'estado' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_compras_1_idx' => ['type' => 'index', 'columns' => ['id_moneda'], 'length' => []],
            'fk_compras_3_idx' => ['type' => 'index', 'columns' => ['id_local'], 'length' => []],
            'fk_compras_4_idx' => ['type' => 'index', 'columns' => ['id_deposito'], 'length' => []],
            'fk_compras_5_idx' => ['type' => 'index', 'columns' => ['id_empresa'], 'length' => []],
            'fk_ventas_1_idx' => ['type' => 'index', 'columns' => ['id_cliente'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_compras_10' => ['type' => 'foreign', 'columns' => ['id_moneda'], 'references' => ['monedas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_compras_30' => ['type' => 'foreign', 'columns' => ['id_local'], 'references' => ['locales', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_compras_40' => ['type' => 'foreign', 'columns' => ['id_deposito'], 'references' => ['depositos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_compras_50' => ['type' => 'foreign', 'columns' => ['id_empresa'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ventas_1' => ['type' => 'foreign', 'columns' => ['id_cliente'], 'references' => ['clientes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'dec8_swedish_ci'
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
            'fecha' => '2017-03-25',
            'id_empresa' => 1,
            'documento' => 'Lorem ipsum dolor sit amet',
            'id_moneda' => 1,
            'id_cliente' => 1,
            'id_local' => 1,
            'id_deposito' => 1,
            'timbrado' => 'Lorem ipsum dolor sit amet',
            'tipo_cambio' => 1.5,
            'condicion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'clasificacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'pago' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tipo_compra' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'estado' => 1,
            'created' => '2017-03-25 08:59:30',
            'modified' => 1490443170
        ],
    ];
}
