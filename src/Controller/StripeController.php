<?php
 
 namespace App\Controller;

 use Stripe;
 use App\Entity\Commande;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
 class StripeController extends AbstractController
 {
     private EntityManagerInterface $em;
 
     // Injection de dépendances pour initialiser l'EntityManager
     public function __construct(EntityManagerInterface $entityManager)
     {
         $this->em = $entityManager;
     }
 

     #[Route('/stripe/create-charge/{reference}', name: 'app_stripe_charge', methods: ['POST'])]
     public function createCharge(Request $request, string $reference)
     {
        
        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);
 
        // Vérifier si le montant total de la commande est supérieur ou égal à 1
        if ($commande && $commande->getTotal() >= 1) {
            Stripe\Stripe::setApiKey("sk_test_51N0iZNFPaCkpFiEQttCloECeEN4D0G0JTO4KQgQuyGRFYWmqvRxMIFWepPVZaQnIklKcYIeqW6k61mDCvqgZomwl00wEVu0pyy");
            Stripe\Charge::create([
                "amount" => $commande->getTotal() * 100,
                "currency" => "eur",
                "source" => $request->request->get('stripeToken'),
                "description" => "Binaryboxtuts Payment Test"
            ]);
             return $this->redirectToRoute('app_cart');

         }
     
         return $this->redirectToRoute('app_stripe', ["reference" => $commande->getReference()], Response::HTTP_SEE_OTHER);
     }
     
     #[Route('/stripe/{reference}', name: 'app_stripe')]
     public function index(string $reference, CartService $cartService): Response
     {
         $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);
 
         return $this->render('stripe/index.html.twig', [
             'stripe_key' => "pk_test_51N0iZNFPaCkpFiEQIRkmwkEx6UCjr8m8s0LcjS3EcmQgFWKtdAz1oPVQMe8WutgffPIDLBQGRszwqnsmDvqZqZKY00Yub5vCGv",
             'commande' => $commande,
             'recapCart' => $cartService->getTotal(),

         ]);
     }
 }
 