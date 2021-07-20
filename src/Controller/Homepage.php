<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class Homepage extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function __invoke(): Response
    {
        return $this->redirectToRoute('homepage_admin_wopi');
    }
}
