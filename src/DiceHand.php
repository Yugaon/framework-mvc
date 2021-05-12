<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class DiceHand
{
    private $dices;
    private $values;
    private $sides = 6;
    private $save;
    private $total;
    private $message;


    public function __construct(int $dices)
    {
        $this->dices  = [];
        $this->values = [];

        for ($i = 0; $i < $dices; $i++) {
            $this->dices[]  = new Dice($this->sides);
            $this->values[] = null;
        }

    }

    public function roll(Request $request)

    {

        for ($i = 0; $i < count($this ->dices); $i++) {
            $save = random_int(1, $this->sides);

            $this->values[$i] = $save;
        }
        $session = $request->getSession();
        $total = $session->get('total');
        $session->set('total', $total + array_sum($this->values));
        if ($session->get('total') == 21) {
          $this->message = 'Congratulations you won!';
          $historia = "Du";
          $nyrunda = $session->get('runda');
          $session->set('runda', $nyrunda + 1);
          $runda = $session->get('runda');
          $historik = array(
            'vinnare' => $historia,
            'runda' => $runda
          );
          $innanhistorik = $session->get('historik');
          $innanhistorik[$runda] = $historik;
          $session->set('historik', $innanhistorik);

          $this->reset($request);
          }
        elseif ($session->get('total') > 21) {
          $this->message = 'You lost play again!';
          $historia = "Computer";
          $nyrunda = $session->get('runda');
          $session->set('runda', $nyrunda + 1);
          $runda = $session->get('runda');
          $historik = array(
            'vinnare' => $historia,
            'runda' => $runda
          );
          $innanhistorik = $session->get('historik');
          $innanhistorik[$runda] = $historik;
          $session->set('historik', $innanhistorik);

          $this->reset($request);
          }
      }
    public function Message()
    {
        return $this->message;
    }
    public function Reset(Request $request)
    {
        $session = $request->getSession();
        $session->set('total', 0);
    }
    public function ResetScore($request)
    {
      $session = $request->getSession();
      $session->set('historik', []);
      $session->set('runda', 0);
    }
    public function values()
    {
        return $this->values;
    }
    public function sum($request)
    {
      $totalen = 0;
      $session = $request->getSession();

        return $session->get('total');
    }
    function stop($request)
    {
        return $this->computer($request);
    }
    function getHistorik($request)
    {
      $session = $request->getSession();
      return $session->get('historik');
    }
    public function Computer($request)
    {
      $session = $request->getSession();
      $computer_value = 0;
      while ($computer_value < 21 or $computer_value == $session->get('total')) {
          $this->lastrollcomputer = random_int(1, $this->sides);
          $computer_value = $computer_value + $this->lastrollcomputer;
          if ($computer_value == 21 or $computer_value == $session->get('total')) {
              $session->set('total', 0);
              $this->message = 'You lost play again!';
              $historia = "Computer";
              $nyrunda = $session->get('runda');
              $session->set('runda', $nyrunda + 1);
              $runda = $session->get('runda');
              $historik = array(
                'vinnare' => $historia,
                'runda' => $runda
              );
              $innanhistorik = $session->get('historik');
              $innanhistorik[$runda] = $historik;
              $session->set('historik', $innanhistorik);

              $this->reset($request);
              break;
          } else if ($computer_value > 22 and $computer_value != 21) {
                $session->set('total', 0);
                $this->message = 'Congratulations you won!';
                $historia = "Du";
                $nyrunda = $session->get('runda');
                $session->set('runda', $nyrunda + 1);
                $runda = $session->get('runda');
                $historik = array(
                  'vinnare' => $historia,
                  'runda' => $runda
                );
                $innanhistorik = $session->get('historik');
                $innanhistorik[$runda] = $historik;
                $session->set('historik', $innanhistorik);

                break;
          }
      }
    }
}
