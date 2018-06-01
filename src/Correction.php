<?php
declare(strict_types=1);

namespace fz54;

use Payment;

class Correction
{
    /** @var Company */
    private $company;

    /** @var CorrectionInfo */
    private $correctionInfo;

    /** @var Payment[] */
    private $payments;
    /** @var Vat[] */
    private $vats;
}
