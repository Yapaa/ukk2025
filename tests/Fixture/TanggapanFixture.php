<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TanggapanFixture
 */
class TanggapanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'tanggapan';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_tanggapan' => 1,
                'tg_tanggapan' => '2025-03-18 09:54:06',
                'isi_tanggapan' => 'Lorem ipsum dolor sit amet',
                'petugas_id' => 1,
                'pengaduan_id' => 1,
            ],
        ];
        parent::init();
    }
}
