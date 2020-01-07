<?php
class Burger
{
    public $nimetus = "Tavaburger";
    public $liha = 'Veiseliha';
    public $sai = 'Kukkel seesamiseemnetega';
    public $hind = 1.20;
    public $lisand1 = 'Tomat';
    public $lisand1Hind = 0.20;
    public $lisand2 = 'Kurk';
    public $lisand2Hind = 0.20;
    public $lisand3 = 'Muna';
    public $lisand3Hind = 0.30;
    public $lisand4 = 'Juust';
    public $lisand4Hind = 0.20;


    public function koostaBurger()
    {
        return 'Teie tellimus: '. $this -> nimetus.
            '<br> Liha: ' .$this -> liha.
            '<br> Sai: ' .$this -> sai.
            '<br> Lisand 1:' .$this -> lisand1.
            '<br> Lisand 2:' .$this -> lisand2.
            '<br> Lisand 3:' .$this -> lisand3.
            '<br> Lisand 4:' .$this -> lisand4 ;
    }

    public function BurgeriHind()
    {
        return
            $this->hind +
            $this->lisand1Hind +
            $this->lisand2Hind +
            $this->lisand3Hind +
            $this->lisand4Hind;
    }

}
    class TervislikBurger extends Burger
    {
        public $nimetus = 'Tervislik burger';
        public $sai = 'Must teraleib';
        public $tervislikLisand1 = 'Avokaado';
        public $tervislikLisand1Hind = 0.60;
        public $tervislikLisand2 = 'Salat';
        public $tervislikLisand2Hind = 0.30;


    public function koostaBurger()
    {
        return
            'Teie tellimus: '.$this -> nimetus.
            '<br> Liha: ' .$this -> liha.
            '<br> Sai: ' .$this -> sai.
            '<br> Lisand 1:' .$this -> lisand1.
            '<br> Lisand 2:' .$this -> lisand2.
            '<br> Lisand 3:' .$this -> lisand3.
            '<br> Lisand 4:' .$this -> lisand4.
            '<br> Tervislik lisand 1: '.$this -> tervislikLisand1.
            '<br> Tervislik lisand 2: '.$this -> tervislikLisand2
            ;
    }

    public function BurgeriHind()
    {
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind +
            $this -> tervislikLisand1Hind +
            $this -> tervislikLisand2Hind;
    }

}
class LuxBurger extends Burger {
    public $jook = 'Coca-cola';
    public $jookHind = 1.20;
    public $juurde = 'Friikartulid';
    public $juurdeHind = 0.80;

    public function koostaBurger()
    {
        return
            'Teie tellimus: '.$this -> nimetus.
            '<br> Liha: ' .$this -> liha.
            '<br> Sai: ' .$this -> sai.
            '<br> Lisand 1:' .$this -> lisand1.
            '<br> Lisand 2:' .$this -> lisand2.
            '<br> Lisand 3:' .$this -> lisand3.
            '<br> Lisand 4:' .$this -> lisand4.
            '<br> Juurde: '.$this -> juurde.
            '<br> Jook : '.$this -> jook
            ;
    }

    public function BurgeriHind()
    {
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind +
            $this -> juurdeHind +
            $this -> jookHind;
    }
}

$tavaburger = new Burger();
$luxburger = new LuxBurger();
$tervislikBurger = new TervislikBurger();

$luxburger -> nimetus = 'Luxburger';

$luxburger -> lisand1 = 'Sibularõngad';
$luxburger -> lisand1Hind = 0.80;
$luxburger -> lisand2 = 'Salat';
$luxburger -> lisand2Hind = 0.30;
$luxburger -> lisand3 = 'Tomat';
$luxburger -> lisand4Hind = 0.20;
$luxburger -> lisand4 = 'Kurk';
$luxburger -> lisand4Hind = 0.20;

echo $tavaburger -> koostaBurger();
echo '<br> Summa: ' . $tavaburger -> BurgeriHind() . ' EUR';
echo '<hr>';
echo $tervislikBurger -> koostaBurger();
echo '<br> Summa: ' . $tervislikBurger -> BurgeriHind() . ' EUR';
echo '<hr>';
echo $luxburger -> koostaBurger();
echo '<br>Summa: ' .$luxburger -> BurgeriHind() . ' EUR';

