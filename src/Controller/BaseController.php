<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\GameTwentyOne;
use App\DiceHand;




class BaseController extends AbstractController
{
  /**
   * @Route("/")
  */
  public function index(): Response
  {
    return $this->render('dice.html.twig', [
        'message' => "Hello World in view",
    ]);
  }

    public function DiceGames(): Response
    {
        $request = Request::createFromGlobals();
        $session = new session();
        $session->set('total', 0 );
        return $this->render('dice.html.twig', [
            'message' => "Hello World in view",
        ]);
    }

    public function DiceTry(): Response
    {
        return $this->render('try.html.twig', [
            'message' => "Hello World in view",
        ]);
    }

    public function DiceOneGame(Request $request): Response
    {
        $session = $request->getSession();
        $session->set('runda', 0 );
        $session->set('historik', []);
        $session->set('total', 0 );
        return $this->render('21_1.html.twig', [
            'message' => null,
            'totale' => null,
            'realmessage' => null,
            'historik' => null,
        ]);
    }

    public function RollDice(Request $request): Response
    {
        $session = $request->getSession();
        $object = new GameTwentyOne(6);
        return $this->render('21_1.html.twig', [
        'message' => $object->roll($request),
        'totale' => $object->getTotal($request) ?? $object->roll(),
        'realmessage' => $object->Message($request),
        'historik' => $object->getHistorik($request),
        ]);
    }
    public function Reset(Request $request): Response
    {
      $object = new GameTwentyOne(6);
      $object->reset($request);
      return $this->render('21_1.html.twig', [
          'message' => null,
          'totale' => null,
          'realmessage' => null,
          'historik' => $object->getHistorik($request),
      ]);
    }
    public function Stop(Request $request): Response
    {
      $session = $request->getSession();
      $object = new GameTwentyOne(6);
      $object->computer($request);
      return $this->render('21_1.html.twig', [
        'message' => null,
        'totale' => null,
        'realmessage' => $object->Message(),
        'historik' => $object->getHistorik($request),
      ]);
    }
    public function ResetScore(Request $request): Response
    {
      $session = $request->getSession();
      $object = new GameTwentyOne(6);
      $object->ResetScore($request);
      return $this->render('21_1.html.twig', [
        'message' => null,
        'totale' => $object->getTotal($request) ?? $object->roll(),
        'realmessage' => $object->Message(),
        'historik' => $object->getHistorik($request),
      ]);
    }

    public function DiceTwoGame(Request $request): Response
    {
      $session = $request->getSession();
      $session->set('runda', 0 );

      $session->set('historik', []);
        return $this->render('21_2.html.twig', [
            'message' => null,
            'message2' => null,
            'totale' => null,
            'realmessage' => null,
            'historik' => [],
        ]);
    }

    public function RollTwoDice(Request $request): Response
    {
        $session = $request->getSession();
        $object = new DiceHand(2);
        $object->roll($request);
        $varde = $object->values();

        return $this->render('21_2.html.twig', [
        'message' => $varde[0],
        'message2' => $varde[1],
        'totale' => $object->sum($request),
        'realmessage' => $object->Message(),
        'historik' => $object->getHistorik($request),
        ]);
    }

    public function ResetTwo(Request $request): Response
    {
      $session = $request->getSession();
      $object = new DiceHand(2);
      $object->reset($request);
      return $this->render('21_2.html.twig', [
          'message' => null,
          'message2' => null,
          'totale' => null,
          'realmessage' => null,
          'historik' => $object->getHistorik($request),
      ]);
    }
    public function StopTwo(Request $request): Response
    {
      $session = $request->getSession();
      $object = new DiceHand(2);
      $object->computer($request);
      return $this->render('21_2.html.twig', [
        'message' => null,
        'message2' => null,
        'totale' => null,
        'realmessage' => $object->Message(),
        'historik' => $object->getHistorik($request),
      ]);
    }
    public function ResetScoreTwo(Request $request): Response
    {
      $session = $request->getSession();
      $object = new DiceHand(2);
      $object->ResetScore($request);
      return $this->render('21_2.html.twig', [
        'message' => null,
        'message2' => null,
        'totale' => $object->sum($request),
        'realmessage' => $object->Message(),
        'historik' => $object->getHistorik($request),
      ]);
    }

}
