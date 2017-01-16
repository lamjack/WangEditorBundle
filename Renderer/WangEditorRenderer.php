<?php
/**
 * WangEditorRenderer.php
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    jack <linjue@wilead.com>
 * @copyright 2007-2017/1/16 WIZ TECHNOLOGY
 * @link      https://wizmacau.com
 * @link      https://lamjack.github.io
 * @link      https://github.com/lamjack
 * @version
 */

namespace Wiz\WangEditorBundle\Renderer;

use Symfony\Component\DependencyInjection\ContainerInterface;

class WangEditorRenderer implements WangEditorRendererInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * WangEditorRenderer constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}