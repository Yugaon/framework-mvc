<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;


class GameTwentyOne
{
    private $save;
    public $lastroll;
    public $lastrollcomputer;
    private $sides;
    private $total;
    private $message;
    private $historik;
    private $total1;


    public function __construct(int $sides)
    {
        $this->sides = $sides;
    }

    public function roll(Request $request)
    {
        $session = $request->getSession();
        $this->lastroll = random_int(1, $this->sides);
        $total = $session->get('total');
        $session->set('total', $total + $this->lastroll);
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
        return $this->lastroll;
    }
    public function getLastRoll()
    {
        return $this->lastroll;
    }
    public function getTotal($request)
    {
        $session = $request->getSession();
        return $session->get('total');
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
    public function Message()
    {
        return $this->message;
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
    function stop($request)
    {
        return $this->computer($request);
    }
    function getHistorik($request)
    {
      $session = $request->getSession();
      return $session->get('historik');
    }

}
