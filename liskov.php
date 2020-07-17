<?php

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        $summedData = '';
        return $summedData;
    }
}

class SumCalculatorOutputter {

    protected $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function toJson()
    {
        $data = array (
          'sum' => $this->calculator->sum()
        );

        return json_encode($data);
    }

    public function toHtml()
    {
        return implode('', array(
            '<h1>',
                'Suma de las áreas de las figuras: ',
                $this->calculator->sum(),
            '</h1>'
        ));
    }
}

?>