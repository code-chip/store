<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\{User, Address, Order};

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        $name = 'Lwcyano Will';
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $order = $this->getDoctrine()->getRepository(Order::class)->find(1);
        //dump($user->getOrder()->toArray());
        $user->removeOrder($order);

        $this->getDoctrine()->getManager()->flush();

        //Produto e Categoria
        //$category = $this->getDoctrine()->getRepository(Category::class)->find(1);
        //dump($category->getProducts()->toArray());

//        $category = new Category();
//        $category->setName('Notebooks');
//        //$category->setDescription('Notebooks e Netbooks');
//        $category->setSlug('notebook');
//        $category->setCreatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
//        $category->setUpdatedAt(new \Datetime('now', new \DateTimeZone('America/Sao_Paulo')));
//
//        $product->setCategory($category);
//        $this->getDoctrine()->getManager()->flush();

        //$order = $this->getDoctrine()->getRepository(Order::class)->find(1);
        //dump($order->getUser()->getFirstName());

//        $order = new Order();
//        $order->setReference('CODIDO COMPRA TRÊS');
//        $order->setItems('ITEMS');
//        $order->setUser($user);
//
//        $order->setCreatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
//        $order->setUpdatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
//        $order->setUser($user);
//        //dump($order);
//
//        $this->getDoctrine()->getManager()->persist($order);
//        $this->getDoctrine()->getManager()->flush($order);
        //dump($address->getUser()->getLastName());

        /*$user = new User();
        $user->setFirstName('Harry');
        $user->setLastName('Will');
        $user->setEmail('willvix@outlook.com');
        $user->setPassword('10');
        $user->setCreatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
        $user->setUpdateAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));

        $manager->persist($user);
        $manager->flush();

        $address = new Address();
        $address->setAddress('Rua Holdecim');
        $address->setNumber(840);
        $address->setNeighborhood('Civit 2');
        $address->setCity('Serra');
        $address->setState('ES');
        $address->setZipcode('29168-066');
        $address->setUser($user);

        $manager->persist($address);
        $manager->flush();*/

        return $this->render('index.html.twig', compact('name','user'));
    }

    /**
     * @Route("/product/{slug}", name="product_single")
     */
    public function product($slug): Response
    {
        return $this->render('single.html.twig', compact('slug'));
    }
}
